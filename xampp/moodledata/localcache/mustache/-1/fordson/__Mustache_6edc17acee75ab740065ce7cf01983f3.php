<?php

class __Mustache_6edc17acee75ab740065ce7cf01983f3 extends Mustache_Template
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
        $buffer .= $indent . '    <div id="page" class="container-fluid mt-0 ';
        // 'hascustomlogin' section
        $value = $context->find('hascustomlogin');
        $buffer .= $this->section460b1781e107dd90eb0de10033b92a81($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div id="page-content" class="row">
';
        $buffer .= $indent . '                <section id="region-main" class="col-12">
';
        // 'hasslideshowpages' section
        $value = $context->find('hasslideshowpages');
        $buffer .= $this->sectionB683c5e097f057b0fc58a90642647438($context, $indent, $value);
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'hasslideshowpages' section
        $value = $context->find('hasslideshowpages');
        $buffer .= $this->section72bf62d8fd700c1f1fc339f9bcbca568($context, $indent, $value);
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                </section>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        // 'hascustomlogin' section
        $value = $context->find('hascustomlogin');
        $buffer .= $this->sectionC42a24800e93c15bf4bd8318c7c6a99f($context, $indent, $value);
        if ($partial = $this->mustache->loadPartial('theme_fordson/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section4842d23ffe6a2ff4740beb2f31cf4606($context, $indent, $value);

        return $buffer;
    }

    private function section460b1781e107dd90eb0de10033b92a81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'customloginimage';
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
                
                $buffer .= 'customloginimage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB683c5e097f057b0fc58a90642647438(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="loginslideshow">
                            {{{ output.fp_slideshow }}}
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
                
                $buffer .= $indent . '                        <div class="loginslideshow">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->findDot('output.fp_slideshow'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72bf62d8fd700c1f1fc339f9bcbca568(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="customloginspacer"></div>
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
                
                $buffer .= $indent . '                        <div class="customloginspacer"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC42a24800e93c15bf4bd8318c7c6a99f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="fordsonlogin" class="fordsonlogin">
        <div class="container col-12">
        {{{ output.customlogin }}}
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
                
                $buffer .= $indent . '    <div id="fordsonlogin" class="fordsonlogin">
';
                $buffer .= $indent . '        <div class="container col-12">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->findDot('output.customlogin'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4842d23ffe6a2ff4740beb2f31cf4606(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/loader\']);
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
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
