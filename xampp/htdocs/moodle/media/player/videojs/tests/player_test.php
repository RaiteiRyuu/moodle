<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Test classes for handling embedded media.
 *
 * @package media_videojs
 * @copyright 2016 Marina Glancy
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Test script for media embedding.
 *
 * @package media_videojs
 * @copyright 2016 Marina Glancy
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class media_videojs_player_testcase extends advanced_testcase {

    /**
     * Pre-test setup. Preserves $CFG.
     */
    public function setUp(): void {
        parent::setUp();

        // Reset $CFG and $SERVER.
        $this->resetAfterTest();

        // Consistent initial setup: all players disabled.
        \core\plugininfo\media::set_enabled_plugins('videojs');

        // Pretend to be using Firefox browser (must support ogg for tests to work).
        core_useragent::instance(true, 'Mozilla/5.0 (X11; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0 ');
    }

    /**
     * Test that plugin is returned as enabled media plugin.
     */
    public function test_is_installed() {
        $sortorder = \core\plugininfo\media::get_enabled_plugins();
        $this->assertEquals(['videojs' => 'videojs'], $sortorder);
    }

    /**
     * Test method get_supported_extensions()
     */
    public function test_supported_extensions() {
        $supportedextensions = array_merge(file_get_typegroup('extension', 'html_video'),
            file_get_typegroup('extension', 'html_audio'), file_get_typegroup('extension', 'media_source'));

        set_config('useflash', 0, 'media_videojs');

        // Make sure that the list of extensions from the setting is filtered to HTML5 natively supported extensions.
        $player = new media_videojs_plugin();
        $this->assertTrue(in_array('.mp3', $player->get_supported_extensions()));
        $this->assertEmpty(array_diff($player->get_supported_extensions(), $supportedextensions));

        // Try to set the audioextensions to something non-native (.ra) and make sure it is not returned as supported.
        set_config('audioextensions', '.mp3,.wav,.ra', 'media_videojs');
        $player = new media_videojs_plugin();
        $this->assertNotEmpty($player->get_supported_extensions());
        $this->assertTrue(in_array('.mp3', $player->get_supported_extensions()));
        $this->assertFalse(in_array('.ra', $player->get_supported_extensions()));
        $this->assertEmpty(array_diff($player->get_supported_extensions(), $supportedextensions));

        // Try to use flash extensions and make sure they are not returned as supported.
        set_config('videoextensions', '.flv,.f4v', 'media_videojs');
        $player = new media_videojs_plugin();
        $this->assertFalse(in_array('.flv', $player->get_supported_extensions()));
        $this->assertFalse(in_array('.f4v', $player->get_supported_extensions()));

        // Enable flash and test if flash extenstions are supported.
        set_config('useflash', 1, 'media_videojs');
        set_config('videoextensions', '.flv,.f4v', 'media_videojs');
        $player = new media_videojs_plugin();
        $this->assertTrue(in_array('.flv', $player->get_supported_extensions()));
        $this->assertTrue(in_array('.f4v', $player->get_supported_extensions()));
    }

    /**
     * Test embedding without media filter (for example for displaying file resorce).
     */
    public function test_embed_url() {
        global $CFG;

        $url = new moodle_url('http://example.org/1.webm');

        $manager = core_media_manager::instance();
        $embedoptions = array(
            core_media_manager::OPTION_TRUSTED => true,
            core_media_manager::OPTION_BLOCK => true,
        );

        $this->assertTrue($manager->can_embed_url($url, $embedoptions));
        $content = $manager->embed_url($url, 'Test & file', 0, 0, $embedoptions);

        $this->assertRegExp('~mediaplugin_videojs~', $content);
        $this->assertRegExp('~</video>~', $content);
        $this->assertRegExp('~title="Test &amp; file"~', $content);
        $this->assertRegExp('~style="max-width:' . $CFG->media_default_width . 'px;~', $content);

        // Repeat sending the specific size to the manager.
        $content = $manager->embed_url($url, 'New file', 123, 50, $embedoptions);
        $this->assertRegExp('~style="max-width:123px;~', $content);

        // Repeat without sending the size and with unchecked setting to limit the video size.
        set_config('limitsize', false, 'media_videojs');

        $manager = core_media_manager::instance();
        $content = $manager->embed_url($url, 'Test & file', 0, 0, $embedoptions);
        $this->assertNotRegExp('~style="max-width:~', $content);
    }

    /**
     * Test that mediaplugin filter replaces a link to the supported file with media tag.
     *
     * filter_mediaplugin is enabled by default.
     */
    public function test_embed_link() {
        global $CFG;
        $url = new moodle_url('http://example.org/some_filename.mp4');
        $text = html_writer::link($url, 'Watch this one');
        $content = format_text($text, FORMAT_HTML);

        $this->assertRegExp('~mediaplugin_videojs~', $content);
        $this->assertRegExp('~</video>~', $content);
        $this->assertRegExp('~title="Watch this one"~', $content);
        $this->assertNotRegExp('~<track\b~i', $content);
        $this->assertRegExp('~style="max-width:' . $CFG->media_default_width . 'px;~', $content);
    }

    /**
     * Test that only supported URLs are listed as sources but all URLs are present in links fallbacks.
     */
    public function test_fallback() {

        $urls = [
            new moodle_url('http://example.org/1.rv'), // Not supported.
            new moodle_url('http://example.org/2.webm'), // Supported.
            new moodle_url('http://example.org/3.ogv'), // Supported.
        ];

        $manager = core_media_manager::instance();
        $content = $manager->embed_alternatives($urls, '', 0, 0, []);

        $this->assertRegExp('~mediaplugin_videojs~', $content);
        $this->assertRegExp('~</video>~', $content);
        // Title is taken from the name of the first supported file.
        $this->assertRegExp('~title="2"~', $content);
        // Only supported files are in <source>'s.
        $this->assertNotRegExp('~<source src="http://example.org/1.rv"~', $content);
        $this->assertRegExp('~<source src="http://example.org/2.webm"~', $content);
        $this->assertRegExp('~<source src="http://example.org/3.ogv"~', $content);
        // Links to all files are included.
        $this->assertRegExp('~<a class="mediafallbacklink" href="http://example.org/1.rv">1.rv</a>~', $content);
        $this->assertRegExp('~<a class="mediafallbacklink" href="http://example.org/2.webm">2.webm</a>~', $content);
        $this->assertRegExp('~<a class="mediafallbacklink" href="http://example.org/3.ogv">3.ogv</a>~', $content);
    }

    /**
     * Assert other players do not apply after videojs was applied.
     */
    public function test_prevent_other_players() {
        \core\plugininfo\media::set_enabled_plugins('videojs,html5video');
        $url = new moodle_url('http://example.org/some_filename.webm');
        $text = html_writer::link($url, 'Apply one player only');
        $content = format_text($text, FORMAT_HTML);

        $this->assertRegExp('~mediaplugin_videojs~', $content);
        $this->assertEquals(1, substr_count($content, '</video>'));
        $this->assertNotRegExp('~mediaplugin_html5video~', $content);
        $this->assertRegExp('~<a class="mediafallbacklink" href="http://example.org/some_filename.webm">Apply one player only</a>~', $content);
    }

    /**
     * Test that mediaplugin filter adds player code on top of <video> tags.
     *
     * filter_mediaplugin is enabled by default.
     */
    public function test_embed_media() {
        global $CFG;
        $url = new moodle_url('http://example.org/some_filename.mp4');
        $trackurl = new moodle_url('http://example.org/some_filename.vtt');
        $text = '<video controls="true"><source src="'.$url.'"/><source src="somethinginvalid"/>' .
            '<track src="'.$trackurl.'">Unsupported text</video>';
        $content = format_text($text, FORMAT_HTML);

        $this->assertRegExp('~mediaplugin_videojs~', $content);
        $this->assertRegExp('~</video>~', $content);
        $this->assertRegExp('~title="some_filename.mp4"~', $content);
        $this->assertRegExp('~style="max-width:' . $CFG->media_default_width . 'px;~', $content);
        // Unsupported text and tracks are preserved.
        $this->assertRegExp('~Unsupported text~', $content);
        $this->assertRegExp('~<track\b~i', $content);
        // Invalid sources are removed.
        $this->assertNotRegExp('~somethinginvalid~i', $content);

        // Video with dimensions and source specified as src attribute without <source> tag.
        $text = '<video controls="true" width="123" height="35" src="'.$url.'">Unsupported text</video>';
        $content = format_text($text, FORMAT_HTML);
        $this->assertRegExp('~mediaplugin_videojs~', $content);
        $this->assertRegExp('~</video>~', $content);
        $this->assertRegExp('~<source\b~', $content);
        $this->assertRegExp('~style="max-width:123px;~', $content);
        $this->assertNotRegExp('~width="~', $content);
        $this->assertNotRegExp('~height="~', $content);

        // Audio tag.
        $url = new moodle_url('http://example.org/some_filename.mp3');
        $trackurl = new moodle_url('http://example.org/some_filename.vtt');
        $text = '<audio controls="true"><source src="'.$url.'"/><source src="somethinginvalid"/>' .
            '<track src="'.$trackurl.'">Unsupported text</audio>';
        $content = format_text($text, FORMAT_HTML);

        $this->assertRegExp('~mediaplugin_videojs~', $content);
        $this->assertNotRegExp('~</video>~', $content);
        $this->assertRegExp('~</audio>~', $content);
        $this->assertRegExp('~title="some_filename.mp3"~', $content);
        $this->assertRegExp('~style="max-width:' . $CFG->media_default_width . 'px;~', $content);
        // Unsupported text and tracks are preserved.
        $this->assertRegExp('~Unsupported text~', $content);
        $this->assertRegExp('~<track\b~i', $content);
        // Invalid sources are removed.
        $this->assertNotRegExp('~somethinginvalid~i', $content);
    }

    /**
     * Helper function for testing youtube videos embedding.
     *
     * @param string $t output of core_media_manager::embed_url.
     */
    protected function youtube_plugin_engaged($t) {
        $this->assertStringContainsString('mediaplugin_videojs', $t);
        $this->assertStringContainsString('data-setup-lazy="{&quot;techOrder&quot;: [&quot;youtube&quot;]', $t);
    }

    /**
     * Test that VideoJS can embed youtube videos.
     */
    public function test_youtube() {
        set_config('youtube', 1, 'media_videojs');
        set_config('useflash', 0, 'media_videojs');

        $manager = core_media_manager::instance();

        // Format: youtube.
        $url = new moodle_url('http://www.youtube.com/watch?v=vyrwMmsufJc');
        $t = $manager->embed_url($url);
        $this->youtube_plugin_engaged($t);
        $url = new moodle_url('http://www.youtube.com/v/vyrwMmsufJc');
        $t = $manager->embed_url($url);
        $this->youtube_plugin_engaged($t);

        // Format: youtube video within playlist - this will be played by video.js but without tracks selection.
        $url = new moodle_url('https://www.youtube.com/watch?v=dv2f_xfmbD8&index=4&list=PLxcO_MFWQBDcyn9xpbmx601YSDlDcTcr0');
        $t = $manager->embed_url($url);
        $this->youtube_plugin_engaged($t);
        $this->assertStringContainsString('list=PLxcO_MFWQBDcyn9xpbmx601YSDlDcTcr0', $t);

        // Format: youtube playlist - not supported.
        $url = new moodle_url('http://www.youtube.com/view_play_list?p=PL6E18E2927047B662');
        $t = $manager->embed_url($url);
        $this->assertStringNotContainsString('mediaplugin_videojs', $t);
        $url = new moodle_url('http://www.youtube.com/playlist?list=PL6E18E2927047B662');
        $t = $manager->embed_url($url);
        $this->assertStringNotContainsString('mediaplugin_videojs', $t);
        $url = new moodle_url('http://www.youtube.com/p/PL6E18E2927047B662');
        $t = $manager->embed_url($url);
        $this->assertStringNotContainsString('mediaplugin_videojs', $t);
    }

    /**
     * Data provider for {@see test_youtube_start_time}
     *
     * @return array
     */
    public function youtube_start_time_provider(): array {
        return [
            ['https://www.youtube.com/watch?v=JNJMF1l3udM&t=1h11s', 3611],
            ['https://www.youtube.com/watch?v=dv2f_xfmbD8&index=4&list=PLxcO_MFWQBDcyn9xpbmx601YSDlDcTcr0&t=1m5s', 65],
            ['https://www.youtube.com/watch?v=JNJMF1l3udM&t=1h10m30s', 4230],
            ['https://www.youtube.com/watch?v=JNJMF1l3udM&t=3m', 180],
            ['https://www.youtube.com/watch?v=JNJMF1l3udM&t=43s', 43],
            ['https://www.youtube.com/watch?v=JNJMF1l3udM&t=1234', 1234],
            ['https://www.youtube.com/watch?v=JNJMF1l3udM&t=invalid', 0],
        ];
    }

    /**
     * Test Youtube video embedding with URL's containing start time interval
     *
     * @param string $url
     * @param int $expectedstart
     *
     * @dataProvider youtube_start_time_provider
     */
    public function test_youtube_start_time(string $url, int $expectedstart) {
        set_config('youtube', 1, 'media_videojs');
        set_config('useflash', 0, 'media_videojs');

        $embedcode = core_media_manager::instance()->embed_url(new moodle_url($url));

        $this->youtube_plugin_engaged($embedcode);
        $this->assertStringContainsString("&quot;youtube&quot;: {&quot;start&quot;: &quot;{$expectedstart}&quot;}", $embedcode);
    }

    /**
     * Helper function for testing flash videos embedding.
     *
     * @param string $t output of core_media_manager::embed_url.
     */
    protected function flash_plugin_engaged($t) {
        $this->assertStringContainsString('mediaplugin_videojs', $t);
        $this->assertStringContainsString('data-setup-lazy="{&quot;techOrder&quot;: [&quot;flash&quot;, &quot;html5&quot;]', $t);
    }

    /**
     * Test that VideoJS can embed flash videos.
     */
    public function test_flash() {
        $manager = core_media_manager::instance();

        // Flash enabled.
        set_config('useflash', 1, 'media_videojs');
        $url = new moodle_url('http://example.org/some_filename.flv');
        $t = $manager->embed_url($url);
        $this->flash_plugin_engaged($t);
        $this->assertRegExp('~</video>~', $t);
        $this->assertRegExp('~<source src="http://example.org/some_filename.flv"~', $t);
        $this->assertRegExp('~<a class="mediafallbacklink" href="http://example.org/some_filename.flv">some_filename.flv</a>~', $t);

        // Flash disabled.
        set_config('useflash', 0, 'media_videojs');
        $url = new moodle_url('http://example.org/some_filename.flv');
        $t = $manager->embed_url($url);
        $this->assertStringNotContainsString('mediaplugin_videojs', $t);
        $this->assertRegExp('~<a class="mediafallbacklink" href="http://example.org/some_filename.flv">some_filename.flv</a>~', $t);
    }

    /**
     * Test that VideoJS can embed RTMP streams.
     */
    public function test_rtmp() {
        $manager = core_media_manager::instance();

        // RTMP disabled, flash disabled.
        set_config('useflash', 0, 'media_videojs');
        set_config('rtmp', 0, 'media_videojs');
        $url = new moodle_url('rtmp://example.com/fms&mp4:path/to/file.mp4');
        $t = $manager->embed_url($url);
        $this->assertStringNotContainsString('mediaplugin_videojs', $t);
        $this->assertRegExp('~<a class="mediafallbacklink" href="rtmp://example.com/fms&mp4:path/to/file.mp4">file.mp4</a>~', $t);

        // RTMP enabled, flash disabled.
        set_config('useflash', 0, 'media_videojs');
        set_config('rtmp', 1, 'media_videojs');
        $url = new moodle_url('rtmp://example.com/fms&mp4:path/to/file.mp4');
        $t = $manager->embed_url($url);
        $this->assertStringNotContainsString('mediaplugin_videojs', $t);
        $this->assertRegExp('~<a class="mediafallbacklink" href="rtmp://example.com/fms&mp4:path/to/file.mp4">file.mp4</a>~', $t);

        // RTMP enabled, flash enabled, rtmp/mp4 type expected.
        set_config('useflash', 1, 'media_videojs');
        set_config('rtmp', 1, 'media_videojs');
        $url = new moodle_url('rtmp://example.com/fms&mp4:path/to/file.mp4');
        $t = $manager->embed_url($url);
        $this->flash_plugin_engaged($t);
        $this->assertRegExp('~</video>~', $t);
        $this->assertRegExp('~<source src="rtmp://example.com/fms&mp4:path/to/file.mp4" type="rtmp/mp4"~', $t);
        $this->assertRegExp('~<a class="mediafallbacklink" href="rtmp://example.com/fms&mp4:path/to/file.mp4">file.mp4</a>~', $t);

        // RTMP enabled, flash enabled, rtmp/flv type expected.
        set_config('useflash', 1, 'media_videojs');
        set_config('rtmp', 1, 'media_videojs');
        $url = new moodle_url('rtmp://example.com/fms&flv:path/to/file.flv');
        $t = $manager->embed_url($url);
        $this->flash_plugin_engaged($t);
        $this->assertRegExp('~</video>~', $t);
        $this->assertRegExp('~<source src="rtmp://example.com/fms&flv:path/to/file.flv" type="rtmp/flv"~', $t);
        $this->assertRegExp('~<a class="mediafallbacklink" href="rtmp://example.com/fms&flv:path/to/file.flv">file.flv</a>~', $t);
    }
}
