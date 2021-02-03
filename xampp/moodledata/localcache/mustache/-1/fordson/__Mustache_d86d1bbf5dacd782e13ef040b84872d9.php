<?php

class __Mustache_d86d1bbf5dacd782e13ef040b84872d9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_fordson/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        // 'output.headerbkglocation' section
        $value = $context->findDot('output.headerbkglocation');
        $buffer .= $this->section598c9f2ddf87a5760f913313777a8d0d($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" class="container-fluid">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="learningcontent">
';
        $buffer .= $indent . '
';
        // 'headerlogo' section
        $value = $context->find('headerlogo');
        $buffer .= $this->section92c62ebc5c423c51c69d375b73a4e24a($context, $indent, $value);
        $buffer .= $indent . '        
';
        // 'hasslideshowpages' section
        $value = $context->find('hasslideshowpages');
        $buffer .= $this->sectionAfe6b36b16cd8c77f925c772e4edc751($context, $indent, $value);
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="page-content" class="row">
';
        $buffer .= $indent . '            <div id="region-main-box" class="col-12">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionB220fb3cc6b3efb2cb9338f2fb10be46($context, $indent, $value);
        $buffer .= $indent . '                <section id="region-main" ';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->section1070627cc6d04a30fbc9aa223e9e57ed($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section3f5eadf46ffa1d9da1969bc3368b08fb($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('enrolform'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.fp_wonderbox'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'hasfpblockregion' section
        $value = $context->find('hasfpblockregion');
        $buffer .= $this->section1385ebd8529afd8fed2df527efb3054a($context, $indent, $value);
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.fp_marketingtiles'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </section>
';
        $buffer .= $indent . '
';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionAa651a79018e6c32a0672081ccd2c03e($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        // 'hasfhsdrawer' section
        $value = $context->find('hasfhsdrawer');
        $buffer .= $this->sectionAe9782b8aecb4d55db4e836cf4bc85ad($context, $indent, $value);
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_fordson/footer')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a href="#" id="back-to-top" class="btn btn-primary btn-lg" role="button" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section184bc37d85e651664e68b9a5a3978004($context, $indent, $value);
        $buffer .= '"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section8b08ad935b4582810ed81431660c749d($context, $indent, $value);

        return $buffer;
    }

    private function section598c9f2ddf87a5760f913313777a8d0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{ output.headerimage }}}
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->findDot('output.headerimage'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92c62ebc5c423c51c69d375b73a4e24a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="headerlogo">
                <img src="{{{ headerlogo }}}" class="img-fluid" alt="Responsive image">
            </div>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="headerlogo">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('headerlogo'), $context);
                $buffer .= $value;
                $buffer .= '" class="img-fluid" alt="Responsive image">
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfe6b36b16cd8c77f925c772e4edc751(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{ output.fp_slideshow }}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.fp_slideshow'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a61617714de6823659d1d9d61b54fd7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks mb-3';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-blocks mb-3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB220fb3cc6b3efb2cb9338f2fb10be46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="region-main-settings-menu" class="hidden-print {{#hasblocks}}has-blocks mb-3{{/hasblocks}}">
                    <div> {{{ output.region_main_settings_menu }}} </div>
                </div>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div id="region-main-settings-menu" class="hidden-print ';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section0a61617714de6823659d1d9d61b54fd7($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= ' </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1070627cc6d04a30fbc9aa223e9e57ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="has-blocks"';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="has-blocks"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f5eadf46ffa1d9da1969bc3368b08fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="region_main_settings_menu_proxy"></div>
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1385ebd8529afd8fed2df527efb3054a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="fp-blocks">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4">
                                                    <section data-region="blocks-fpa" class="hidden-print">
                                                        {{{ fpablocks }}}
                                                    </section>
                                            </div>
                                            <div class="col-md-4">
                                                    <section data-region="blocks-fpb" class="hidden-print">
                                                        {{{ fpbblocks }}}
                                                    </section>
                                            </div>
                                            <div class="col-md-4">
                                                    <section data-region="blocks-fpc" class="hidden-print">
                                                        {{{ fpcblocks }}}
                                                    </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="fp-blocks">
';
                $buffer .= $indent . '                                    <div class="container-fluid">
';
                $buffer .= $indent . '                                        <div class="row">
';
                $buffer .= $indent . '                                            <div class="col-md-4">
';
                $buffer .= $indent . '                                                    <section data-region="blocks-fpa" class="hidden-print">
';
                $buffer .= $indent . '                                                        ';
                $value = $this->resolveValue($context->find('fpablocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                                    </section>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-4">
';
                $buffer .= $indent . '                                                    <section data-region="blocks-fpb" class="hidden-print">
';
                $buffer .= $indent . '                                                        ';
                $value = $this->resolveValue($context->find('fpbblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                                    </section>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-md-4">
';
                $buffer .= $indent . '                                                    <section data-region="blocks-fpc" class="hidden-print">
';
                $buffer .= $indent . '                                                        ';
                $value = $this->resolveValue($context->find('fpcblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                                    </section>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa651a79018e6c32a0672081ccd2c03e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <section data-region="blocks-column" class="hidden-print">
                        {{{ sidepreblocks }}}
                    </section>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <section data-region="blocks-column" class="hidden-print">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe9782b8aecb4d55db4e836cf4bc85ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> theme_boost/nav-drawer }}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_boost/nav-drawer')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section184bc37d85e651664e68b9a5a3978004(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'backtotop, theme_fordson';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'backtotop, theme_fordson';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b08ad935b4582810ed81431660c749d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/loader\']);
require([\'jquery\',\'theme_boost/bootstrap/tooltip\'], function($){$(\'[data-tooltip="tooltip"]\').tooltip()});
require([\'theme_boost/drawer\'], function(mod) {
    mod.init();
});
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/loader\']);
';
                $buffer .= $indent . 'require([\'jquery\',\'theme_boost/bootstrap/tooltip\'], function($){$(\'[data-tooltip="tooltip"]\').tooltip()});
';
                $buffer .= $indent . 'require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '    mod.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
