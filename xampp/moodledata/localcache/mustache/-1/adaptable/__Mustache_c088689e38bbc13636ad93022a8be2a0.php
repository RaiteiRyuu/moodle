<?php

class __Mustache_c088689e38bbc13636ad93022a8be2a0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="adaptable-page-header-wrapper"';
        $value = $this->resolveValue($context->find('headerbg'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <div id="above-header">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            <nav class="navbar navbar-expand btco-hover-menu">
';
        // 'shownavbar' section
        $value = $context->find('shownavbar');
        $buffer .= $this->section62e22fcafd2fe7578b1d6410f0561056($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="collapse navbar-collapse">
';
        // 'menuslinkright' inverted section
        $value = $context->find('menuslinkright');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="my-auto m-1">';
            $value = $this->resolveValue($context->findDot('output.get_top_menus'), $context);
            $buffer .= $value;
            $buffer .= '</div>
';
        }
        $buffer .= $indent . '                    <ul class="navbar-nav ml-auto my-auto">
';
        $buffer .= $indent . '                        <li class="pull-left">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        </li>
';
        $buffer .= $indent . '
';
        // 'menuslinkright' section
        $value = $context->find('menuslinkright');
        $buffer .= $this->section2fd6cca1683ff175258d3684c1be494c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        <li class="nav-item mx-md-1 my-auto';
        $value = $this->resolveValue($context->find('responsivesearchicon'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                            <a class="nav-link" href="';
        $value = $this->resolveValue($context->find('coursesearch'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                                <i class="icon fa fa-search fa-fw " title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD8b0e6604f428af44e6a3b0d70e118c7($context, $indent, $value);
        $buffer .= '" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD8b0e6604f428af44e6a3b0d70e118c7($context, $indent, $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '                            </a>
';
        $buffer .= $indent . '                        </li>
';
        $buffer .= $indent . '
';
        // 'nonavbar' inverted section
        $value = $context->find('nonavbar');
        if (empty($value)) {
            
            $buffer .= $indent . '                        <li class="my-auto mx-md-1">';
            $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
            $buffer .= $value;
            $buffer .= '</li>
';
        }
        $buffer .= $indent . '
';
        // 'langmenu' section
        $value = $context->find('langmenu');
        $buffer .= $this->section2ac8d03f6a20488d4bcb069e968ef9d2($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        <li class="nav-item">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('loginoruser'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        </li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </nav>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page-header" class="container ';
        $value = $this->resolveValue($context->find('responsiveheader'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="row">
';
        // 'pageheaderoriginal' section
        $value = $context->find('pageheaderoriginal');
        $buffer .= $this->section248b328b61ca2bc2fc891b8f5957567d($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'pageheaderoriginal' inverted section
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="col-lg-8">
';
            // 'sitetitle' section
            $value = $context->find('sitetitle');
            $buffer .= $this->section78878f033c86dab461d85ff1a919b764($context, $indent, $value);
            // 'nonavbar' inverted section
            $value = $context->find('nonavbar');
            if (empty($value)) {
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('socialorsearch'), $context);
                $buffer .= $value;
                $buffer .= '
';
            }
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="col-lg-4 p-0 my-auto">
';
            // 'sitelogo' section
            $value = $context->find('sitelogo');
            $buffer .= $this->sectionDc9d2b6defb5e81ae382d3a340ac784b($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
        }
        $buffer .= $indent . '        </div>
';
        // 'pageheaderoriginal' inverted section
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="row">
';
            $buffer .= $indent . '            <div class="col-12 p-0 my-auto">
';
            $buffer .= $indent . '                <div id="course-header">
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.course_header'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        // 'shownavbar' section
        $value = $context->find('shownavbar');
        $buffer .= $this->sectionB675da818ee4edce7af79237d7c91157($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</header>
';

        return $buffer;
    }

    private function section3d134df36358a2641268d6e4fa0990da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel';
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
                
                $buffer .= 'sidepanel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62e22fcafd2fe7578b1d6410f0561056(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="adaptable-page-header-nav-drawer" data-region="drawer-toggle" class="d-lg-none mr-3">
                    <button id="drawer" aria-expanded="false" aria-controls="nav-drawer" type="button" class="nav-link float-sm-left mr-1" data-side="left">
                        <i class="fa fa-bars fa-fw" aria-hidden="true"></i>
                        <span class="sr-only">{{#str}}sidepanel{{/str}}</span>
                    </button>
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
                
                $buffer .= $indent . '                <div id="adaptable-page-header-nav-drawer" data-region="drawer-toggle" class="d-lg-none mr-3">
';
                $buffer .= $indent . '                    <button id="drawer" aria-expanded="false" aria-controls="nav-drawer" type="button" class="nav-link float-sm-left mr-1" data-side="left">
';
                $buffer .= $indent . '                        <i class="fa fa-bars fa-fw" aria-hidden="true"></i>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3d134df36358a2641268d6e4fa0990da($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </button>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fd6cca1683ff175258d3684c1be494c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="my-auto m-1">{{{output.get_top_menus}}}</li>
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
                
                $buffer .= $indent . '                        <li class="my-auto m-1">';
                $value = $this->resolveValue($context->findDot('output.get_top_menus'), $context);
                $buffer .= $value;
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8b0e6604f428af44e6a3b0d70e118c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search, theme_adaptable';
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
                
                $buffer .= 'search, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ac8d03f6a20488d4bcb069e968ef9d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item dropdown ml-2 my-auto">{{{output.lang_menu}}}</li>
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
                
                $buffer .= $indent . '                        <li class="nav-item dropdown ml-2 my-auto">';
                $value = $this->resolveValue($context->findDot('output.lang_menu'), $context);
                $buffer .= $value;
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc9d2b6defb5e81ae382d3a340ac784b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex justify-content-end bd-highlight">
                    {{{sitelogo}}}
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
                
                $buffer .= $indent . '                <div class="d-flex justify-content-end bd-highlight">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('sitelogo'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa7f65fd93a553af97a6bba874af228b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex justify-content-end bd-highlight">
                    {{{sitetitle}}}
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
                
                $buffer .= $indent . '                <div class="d-flex justify-content-end bd-highlight">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('sitetitle'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section248b328b61ca2bc2fc891b8f5957567d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-lg-4 p-0 my-auto">
                {{#sitelogo}}
                <div class="d-flex justify-content-end bd-highlight">
                    {{{sitelogo}}}
                </div>
                {{/sitelogo}}
                <div id="course-header">
                    {{{output.course_header}}}
                </div>
            </div>
            <div class="col-lg-8">
                {{#sitetitle}}
                <div class="d-flex justify-content-end bd-highlight">
                    {{{sitetitle}}}
                </div>
                {{/sitetitle}}
                {{! Remove Search Box or Social icons when no navbar. }}
                {{^nonavbar}}
                    {{{socialorsearch}}}
                {{/nonavbar}}
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
                
                $buffer .= $indent . '            <div class="col-lg-4 p-0 my-auto">
';
                // 'sitelogo' section
                $value = $context->find('sitelogo');
                $buffer .= $this->sectionDc9d2b6defb5e81ae382d3a340ac784b($context, $indent, $value);
                $buffer .= $indent . '                <div id="course-header">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.course_header'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="col-lg-8">
';
                // 'sitetitle' section
                $value = $context->find('sitetitle');
                $buffer .= $this->sectionFa7f65fd93a553af97a6bba874af228b($context, $indent, $value);
                // 'nonavbar' inverted section
                $value = $context->find('nonavbar');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('socialorsearch'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78878f033c86dab461d85ff1a919b764(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex justify-content-start bd-highlight">
                    {{{sitetitle}}}
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
                
                $buffer .= $indent . '                <div class="d-flex justify-content-start bd-highlight">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('sitetitle'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB675da818ee4edce7af79237d7c91157(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_adaptable/headernavbar}}
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
                
                if ($partial = $this->mustache->loadPartial('theme_adaptable/headernavbar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
