<?php

class __Mustache_a13b9f0e4961852ea3c35c48173e4095 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="true" tabindex="-1">
';
        $buffer .= $indent . '    <div id="nav-drawer-inner">
';
        $buffer .= $indent . '        <nav class="list-group">
';
        $buffer .= $indent . '            <ul class="list-unstyled components">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('navigationmenudrawer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'disablecustommenu' inverted section
        $value = $context->find('disablecustommenu');
        if (empty($value)) {
            
            $buffer .= $indent . '                <li>
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.custom_menu_drawer'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '                </li>
';
        }
        // 'toolsmenudrawer' section
        $value = $context->find('toolsmenudrawer');
        $buffer .= $this->section31b21c2cffc109e4140df1d1ddb78ae8($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </nav>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <nav class="list-group m-t-1">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.context_mobile_settings_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            <a class="list-group-item list-group-item-action " href="';
        $value = $this->resolveValue($context->find('searchurl'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        $buffer .= $indent . '                <div class="m-l-0">
';
        $buffer .= $indent . '                    <div class="media">
';
        $buffer .= $indent . '                        <span class="media-left">
';
        $buffer .= $indent . '                            <i class="icon fa fa-wrench fa-fw" aria-hidden="true"></i>
';
        $buffer .= $indent . '                        </span>
';
        $buffer .= $indent . '                        <span class="media-body ">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4c8289791cb9ba5cbe5e5fe9d3396a90($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </nav>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="main-navbar" class="d-none d-lg-block">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="navbar navbar-expand-md btco-hover-menu">
';
        $buffer .= $indent . '            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8185cf7f5ee774052d70b9f8c14117c6($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                <span class="navbar-toggler-icon"></span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="collapse navbar-collapse" id="navbarSupportedContent">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <nav aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB5f3fe981d4e1c31c23b73eb1e4a081a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <ul class="navbar-nav">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('navigationmenu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'disablecustommenu' inverted section
        $value = $context->find('disablecustommenu');
        if (empty($value)) {
            
            $buffer .= $indent . '                        ';
            $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
            $buffer .= $value;
            $buffer .= '
';
        }
        // 'toolsmenu' section
        $value = $context->find('toolsmenu');
        $buffer .= $this->section3340082886c84fa374a79eebd000ac13($context, $indent, $value);
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </nav>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <ul class="navbar-nav ml-auto">
';
        // 'showcog' section
        $value = $context->find('showcog');
        $buffer .= $this->section29f1648ccc775e605bff0f06349bc85e($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'pageheadingbutton' section
        $value = $context->find('pageheadingbutton');
        $buffer .= $this->section75f3bedca35fa8346bf0a60867f1212e($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'showhideblocks' section
        $value = $context->find('showhideblocks');
        $buffer .= $this->sectionD678da2b822d2045799be56ea3675b5d($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'enablezoom' section
        $value = $context->find('enablezoom');
        $buffer .= $this->sectionBd482fb8b55335c4c41a6b226784d612($context, $indent, $value);
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section31b21c2cffc109e4140df1d1ddb78ae8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                    {{{toolsmenudrawer}}}
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('toolsmenudrawer'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c8289791cb9ba5cbe5e5fe9d3396a90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'administrationsite';
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
                
                $buffer .= 'administrationsite';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8185cf7f5ee774052d70b9f8c14117c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'togglenavigation, theme_adaptable';
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
                
                $buffer .= 'togglenavigation, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5f3fe981d4e1c31c23b73eb1e4a081a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitelinkslabel, theme_adaptable';
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
                
                $buffer .= 'sitelinkslabel, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3340082886c84fa374a79eebd000ac13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{output.tools_menu}}}
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
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->findDot('output.tools_menu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2330f77d17b19a703fda1493fcc3e98e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="nav-item mr-2">
                        <div class="context-header-settings-menu">
                            {{{coursemenucontent}}}
                        </div>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="nav-item mr-2">
';
                $buffer .= $indent . '                        <div class="context-header-settings-menu">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('coursemenucontent'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5202116af50e111f38d8ef942fc6a77b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="nav-item mr-2">
                        <div id="region-main-settings-menu" class="region-main-settings-menu">
                            {{{othermenucontent}}}
                        </div>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="nav-item mr-2">
';
                $buffer .= $indent . '                        <div id="region-main-settings-menu" class="region-main-settings-menu">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('othermenucontent'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29f1648ccc775e605bff0f06349bc85e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#coursemenucontent}}
                    <li class="nav-item mr-2">
                        <div class="context-header-settings-menu">
                            {{{coursemenucontent}}}
                        </div>
                    </li>
                    {{/coursemenucontent}}

                    {{#othermenucontent}}
                    <li class="nav-item mr-2">
                        <div id="region-main-settings-menu" class="region-main-settings-menu">
                            {{{othermenucontent}}}
                        </div>
                    </li>
                    {{/othermenucontent}}
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
                
                // 'coursemenucontent' section
                $value = $context->find('coursemenucontent');
                $buffer .= $this->section2330f77d17b19a703fda1493fcc3e98e($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'othermenucontent' section
                $value = $context->find('othermenucontent');
                $buffer .= $this->section5202116af50e111f38d8ef942fc6a77b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75f3bedca35fa8346bf0a60867f1212e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="nav-item mx-0 my-auto">
                        <div id="edittingbutton">
                            {{{pageheadingbutton}}}
                        </div>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="nav-item mx-0 my-auto">
';
                $buffer .= $indent . '                        <div id="edittingbutton">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b03e949aea465d7ff4d39b7a8a9ab3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="showhideblocksdesc">{{showhideblockszoominicontitle}}</span>
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
                
                $buffer .= $indent . '                            <span class="showhideblocksdesc">';
                $value = $this->resolveValue($context->find('showhideblockszoominicontitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD678da2b822d2045799be56ea3675b5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="nav-item mr-1">
                        <div id="zoominicon" class="{{showhideblockszoomside}} nav-link" title="{{showhideblockszoominicontitle}}" data-hidetitle="{{showhideblockshidetitle}}" data-showtitle="{{showhideblocksshowtitle}}">
                            <i class="fa fa-lg fa-{{showhideblocksicontype}}" aria-hidden="true"></i>
                            {{#showhideblockstext}}
                            <span class="showhideblocksdesc">{{showhideblockszoominicontitle}}</span>
                            {{/showhideblockstext}}
                        </div>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="nav-item mr-1">
';
                $buffer .= $indent . '                        <div id="zoominicon" class="';
                $value = $this->resolveValue($context->find('showhideblockszoomside'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' nav-link" title="';
                $value = $this->resolveValue($context->find('showhideblockszoominicontitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-hidetitle="';
                $value = $this->resolveValue($context->find('showhideblockshidetitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-showtitle="';
                $value = $this->resolveValue($context->find('showhideblocksshowtitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <i class="fa fa-lg fa-';
                $value = $this->resolveValue($context->find('showhideblocksicontype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" aria-hidden="true"></i>
';
                // 'showhideblockstext' section
                $value = $context->find('showhideblockstext');
                $buffer .= $this->section4b03e949aea465d7ff4d39b7a8a9ab3b($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a7c186b96d8d71a5750a3e8739e29e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fullscreen, theme_adaptable';
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
                
                $buffer .= 'fullscreen, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD43857242ef4c68111b5c6046940e89c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="zoomdesc">{{#str}}fullscreen, theme_adaptable{{/str}}</span>
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
                
                $buffer .= $indent . '                            <span class="zoomdesc">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8a7c186b96d8d71a5750a3e8739e29e7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7427f43aec250eace0045e20a2622b11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'standardview, theme_adaptable';
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
                
                $buffer .= 'standardview, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1683c17cc32bb633bbb053dfbd83ca0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="zoomdesc">{{#str}}standardview, theme_adaptable{{/str}}</span>
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
                
                $buffer .= $indent . '                            <span class="zoomdesc">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7427f43aec250eace0045e20a2622b11($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd482fb8b55335c4c41a6b226784d612(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="nav-item mx-0 hbll">
                        <a class="nav-link moodlewidth" href="javascript:void(0);" title="{{#str}}fullscreen, theme_adaptable{{/str}}">
                            <i class="fa fa-expand fa-lg" aria-hidden="true"></i>
                            {{#enablezoomshowtext}}
                            <span class="zoomdesc">{{#str}}fullscreen, theme_adaptable{{/str}}</span>
                            {{/enablezoomshowtext}}
                        </a>
                    </li>
                    <li class="nav-item mx-0 sbll">
                        <a class="nav-link moodlewidth" href="javascript:void(0);" title="{{#str}}standardview, theme_adaptable{{/str}}">
                            <i class="fa fa-compress fa-lg" aria-hidden="true"></i>
                            {{#enablezoomshowtext}}
                            <span class="zoomdesc">{{#str}}standardview, theme_adaptable{{/str}}</span>
                            {{/enablezoomshowtext}}
                        </a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="nav-item mx-0 hbll">
';
                $buffer .= $indent . '                        <a class="nav-link moodlewidth" href="javascript:void(0);" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8a7c186b96d8d71a5750a3e8739e29e7($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <i class="fa fa-expand fa-lg" aria-hidden="true"></i>
';
                // 'enablezoomshowtext' section
                $value = $context->find('enablezoomshowtext');
                $buffer .= $this->sectionD43857242ef4c68111b5c6046940e89c($context, $indent, $value);
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $buffer .= $indent . '                    <li class="nav-item mx-0 sbll">
';
                $buffer .= $indent . '                        <a class="nav-link moodlewidth" href="javascript:void(0);" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7427f43aec250eace0045e20a2622b11($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <i class="fa fa-compress fa-lg" aria-hidden="true"></i>
';
                // 'enablezoomshowtext' section
                $value = $context->find('enablezoomshowtext');
                $buffer .= $this->section1683c17cc32bb633bbb053dfbd83ca0b($context, $indent, $value);
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
