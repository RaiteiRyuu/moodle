<?php

class __Mustache_bfaf5ea3a5b5910a34bba4b2e2daf9e2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<header id="page-header" class="row">
';
        $buffer .= $indent . '    <div class="col-12 pt-3 pb-3">
';
        $buffer .= $indent . '        <div class="card ';
        // 'contextheader' inverted section
        $value = $context->find('contextheader');
        if (empty($value)) {
            
            $buffer .= 'border-0';
        }
        $buffer .= '">
';
        // 'boostimage' section
        $value = $context->find('boostimage');
        $buffer .= $this->section2524e3a4c73aed10b6501f59c631c7dd($context, $indent, $value);
        $buffer .= $indent . '            <div class="card-body ';
        // 'contextheader' inverted section
        $value = $context->find('contextheader');
        if (empty($value)) {
            
            $buffer .= 'p-2';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                <div class="d-flex">
';
        // 'contextheader' section
        $value = $context->find('contextheader');
        $buffer .= $this->section446f2f0f1f6278552603e169707d2bfb($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'settingsmenu' section
        $value = $context->find('settingsmenu');
        $buffer .= $this->sectionE263ae1886b9f45bd4f372744ad770aa($context, $indent, $value);
        $buffer .= $indent . '                    <div class="header-actions-container flex-shrink-0" data-region="header-actions-container">
';
        // 'headeractions' section
        $value = $context->find('headeractions');
        $buffer .= $this->sectionCec7bcf79e6713d1a41f853acbec07f6($context, $indent, $value);
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="d-flex flex-wrap">
';
        // 'hasnavbar' section
        $value = $context->find('hasnavbar');
        $buffer .= $this->section3cf925dc793f08410de325fe96872767($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="ml-auto d-flex">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div id="course-header">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('courseheader'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        // 'jitsi' section
        $value = $context->find('jitsi');
        $buffer .= $this->section0de9e26bf311b529e0288dba8a705fd3($context, $indent, $value);
        $buffer .= $indent . '</header>';

        return $buffer;
    }

    private function section2524e3a4c73aed10b6501f59c631c7dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{ headerimage }}}
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
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('headerimage'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section446f2f0f1f6278552603e169707d2bfb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="mr-auto">
                        {{{contextheader}}}
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
                
                $buffer .= $indent . '                    <div class="mr-auto">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE263ae1886b9f45bd4f372744ad770aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="context-header-settings-menu">
                        {{{settingsmenu}}}
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
                
                $buffer .= $indent . '                    <div class="context-header-settings-menu">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCec7bcf79e6713d1a41f853acbec07f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="header-action ml-2">{{{.}}}</div>
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
                
                $buffer .= $indent . '                            <div class="header-action ml-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cf925dc793f08410de325fe96872767(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="page-navbar">
                        {{{navbar}}}
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
                
                $buffer .= $indent . '                    <div id="page-navbar">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0de9e26bf311b529e0288dba8a705fd3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{ jitsi }}}
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
                $value = $this->resolveValue($context->find('jitsi'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
