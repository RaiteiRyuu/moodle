<?php

class __Mustache_9b1a50eced4b678448adcc258e8c5d16 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="fpwonderbox">
';
        $buffer .= $indent . '    <div class="container-fluid">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '    <div class="col-md-12">
';
        $buffer .= $indent . '
';
        // 'hasfpiconnav' section
        $value = $context->find('hasfpiconnav');
        $buffer .= $this->section1b0df30a9dab7e851fafc5dddba585e7($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'alertbox' section
        $value = $context->find('alertbox');
        $buffer .= $this->section4cc666f0f1a0c0f3fa47ebeb3702c823($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasfptextbox' section
        $value = $context->find('hasfptextbox');
        $buffer .= $this->sectionEdd69777b6d043dee8005dd0d8b4dd36($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'hasfptextboxlogout' section
        $value = $context->find('hasfptextboxlogout');
        $buffer .= $this->sectionF7eda54448a10241abf9f4cd5f0b75d2($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasmarkettiles' section
        $value = $context->find('hasmarkettiles');
        $buffer .= $this->section7cb59f46dd39aff39591d0af74f5307e($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section6df7c908a0db51773f4b12fb23c1cf8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="btn btn-secondary">
                                <a role="button" href = {{{link}}} title = "{{{linktext}}}" alt="{{{linktext}}}" target="{{linktarget}}">
                                    <div class="navicon" align="center">
                                        <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                                    </div>
                                    {{{linktext}}}
                                </a>
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
                
                $buffer .= $indent . '                            <div class="btn btn-secondary">
';
                $buffer .= $indent . '                                <a role="button" href = ';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= ' title = "';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '" target="';
                $value = $this->resolveValue($context->find('linktarget'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    <div class="navicon" align="center">
';
                $buffer .= $indent . '                                        <i class="fa fa-3x fa-';
                $value = $this->resolveValue($context->find('linkicon'), $context);
                $buffer .= $value;
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56c2734388e3ecd6b5875e04d905c064(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#hasicon}}
                            <div class="btn btn-secondary">
                                <a role="button" href = {{{link}}} title = "{{{linktext}}}" alt="{{{linktext}}}" target="{{linktarget}}">
                                    <div class="navicon" align="center">
                                        <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                                    </div>
                                    {{{linktext}}}
                                </a>
                            </div>
                            {{/hasicon}}
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
                
                // 'hasicon' section
                $value = $context->find('hasicon');
                $buffer .= $this->section6df7c908a0db51773f4b12fb23c1cf8a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4972c2dde768b700c1c14817f7e248c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="btn btn-secondary">
                                    <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider" title = "{{{linktext}}}" alt="{{{linktext}}}"> 
                                        <div class="navicon" align="center">
                                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                                        </div>
                                        {{{linktext}}}
                                    </a>
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
                
                $buffer .= $indent . '                                <div class="btn btn-secondary">
';
                $buffer .= $indent . '                                    <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider" title = "';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '"> 
';
                $buffer .= $indent . '                                        <div class="navicon" align="center">
';
                $buffer .= $indent . '                                            <i class="fa fa-3x fa-';
                $value = $this->resolveValue($context->find('linkicon'), $context);
                $buffer .= $value;
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92833337d440aa86867293e391ef37ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#hasicon}}
                                <div class="btn btn-secondary">
                                    <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider" title = "{{{linktext}}}" alt="{{{linktext}}}"> 
                                        <div class="navicon" align="center">
                                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                                        </div>
                                        {{{linktext}}}
                                    </a>
                                </div>
                            {{/hasicon}}
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
                
                // 'hasicon' section
                $value = $context->find('hasicon');
                $buffer .= $this->sectionC4972c2dde768b700c1c14817f7e248c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section79f0bf3a1525a83cd3c1ba40bfec004c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="btn btn-secondary createacourse">
                                    <a role="button" href = {{{link}}} title = "{{{linktext}}}" alt= "{{{linktext}}}">
                                        <div class="navicon" align="center">
                                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                                        </div>
                                        {{{linktext}}}
                                    </a>
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
                
                $buffer .= $indent . '                                <div class="btn btn-secondary createacourse">
';
                $buffer .= $indent . '                                    <a role="button" href = ';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= ' title = "';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '" alt= "';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="navicon" align="center">
';
                $buffer .= $indent . '                                            <i class="fa fa-3x fa-';
                $value = $this->resolveValue($context->find('linkicon'), $context);
                $buffer .= $value;
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBed520256b3987fbd6d0fbae71b76c60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#hasicon}}
                                <div class="btn btn-secondary createacourse">
                                    <a role="button" href = {{{link}}} title = "{{{linktext}}}" alt= "{{{linktext}}}">
                                        <div class="navicon" align="center">
                                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                                        </div>
                                        {{{linktext}}}
                                    </a>
                                </div>
                            {{/hasicon}}
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
                
                // 'hasicon' section
                $value = $context->find('hasicon');
                $buffer .= $this->section79f0bf3a1525a83cd3c1ba40bfec004c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC397e3599b5faeee7061157337238795(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="collapse" id="fpslider">
                        {{{slidetextbox}}}
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
                
                $buffer .= $indent . '                    <div class="collapse" id="fpslider">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('slidetextbox'), $context);
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

    private function section1b0df30a9dab7e851fafc5dddba585e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

                <div class="fpstartwrap">
                <div class="fpstart">
                    <div class="iconset">

                        {{#fpiconnav}}
                            {{#hasicon}}
                            <div class="btn btn-secondary">
                                <a role="button" href = {{{link}}} title = "{{{linktext}}}" alt="{{{linktext}}}" target="{{linktarget}}">
                                    <div class="navicon" align="center">
                                        <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                                    </div>
                                    {{{linktext}}}
                                </a>
                            </div>
                            {{/hasicon}}
                        {{/fpiconnav}}

                        {{#fpslideicon}}
                            {{#hasicon}}
                                <div class="btn btn-secondary">
                                    <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider" title = "{{{linktext}}}" alt="{{{linktext}}}"> 
                                        <div class="navicon" align="center">
                                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                                        </div>
                                        {{{linktext}}}
                                    </a>
                                </div>
                            {{/hasicon}}
                        {{/fpslideicon}}

                        {{#fpcreateicon}}
                            {{#hasicon}}
                                <div class="btn btn-secondary createacourse">
                                    <a role="button" href = {{{link}}} title = "{{{linktext}}}" alt= "{{{linktext}}}">
                                        <div class="navicon" align="center">
                                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                                        </div>
                                        {{{linktext}}}
                                    </a>
                                </div>
                            {{/hasicon}}
                        {{/fpcreateicon}}
                        
                    </div>
                </div>
                </div>

                {{#hasslidetextbox}}
                    <div class="collapse" id="fpslider">
                        {{{slidetextbox}}}
                    </div>
                {{/hasslidetextbox}}
                <div style="clear:both;"></div>

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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="fpstartwrap">
';
                $buffer .= $indent . '                <div class="fpstart">
';
                $buffer .= $indent . '                    <div class="iconset">
';
                $buffer .= $indent . '
';
                // 'fpiconnav' section
                $value = $context->find('fpiconnav');
                $buffer .= $this->section56c2734388e3ecd6b5875e04d905c064($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'fpslideicon' section
                $value = $context->find('fpslideicon');
                $buffer .= $this->section92833337d440aa86867293e391ef37ba($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'fpcreateicon' section
                $value = $context->find('fpcreateicon');
                $buffer .= $this->sectionBed520256b3987fbd6d0fbae71b76c60($context, $indent, $value);
                $buffer .= $indent . '                        
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                // 'hasslidetextbox' section
                $value = $context->find('hasslidetextbox');
                $buffer .= $this->sectionC397e3599b5faeee7061157337238795($context, $indent, $value);
                $buffer .= $indent . '                <div style="clear:both;"></div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4cc666f0f1a0c0f3fa47ebeb3702c823(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="alertbox">
                <div class="alertmessage">
                {{{alertbox}}}
                </div>
            </div>
            <div style="clear:both;"></div>
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
                
                $buffer .= $indent . '            <div class="alertbox">
';
                $buffer .= $indent . '                <div class="alertmessage">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('alertbox'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEdd69777b6d043dee8005dd0d8b4dd36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="fptextbox">
                    {{{fptextbox}}}
                </div>
        <div style="clear:both;"></div>
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
                
                $buffer .= $indent . '                <div class="fptextbox">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('fptextbox'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '        <div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83fa1a0eb95df91595c360c402d2588c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fpsignup, theme_fordson';
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
                
                $buffer .= 'fpsignup, theme_fordson';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
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
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
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
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section159228ff13fd3dd4aab94df20b4ae8c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                  {{#str}}usernameemail{{/str}}
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
                
                $buffer .= $indent . '                                  ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
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
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
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
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6aa95a7e496f5307b40bee7262bd9321(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotten';
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
                
                $buffer .= 'forgotten';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7011f9eedafcdb8d9dc662b124b2ed1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newaccount';
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
                
                $buffer .= 'newaccount';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc94749fecf6dfeeed12c3a8bd05f1ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a class="btn btn-register btn-primary" href="{{{ config.wwwroot }}}/login/signup.php?">{{#str}}newaccount{{/str}}</a>
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
                
                $buffer .= $indent . '                            <a class="btn btn-register btn-primary" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/login/signup.php?">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7011f9eedafcdb8d9dc662b124b2ed1e($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19dbd66dfd9821cb711b8c37a3618046(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-md-4 signinform">
            <div class="fpsignup">
            <h3>{{#str}}fpsignup, theme_fordson{{/str}}</h3>
                        <form class="m-t-1" action="{{{ config.wwwroot }}}/login/index.php" method="POST" role="form">
                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                            <label for="username">
                              {{^canloginbyemail}}
                                  {{#str}}username{{/str}}
                              {{/canloginbyemail}}
                              {{#canloginbyemail}}
                                  {{#str}}usernameemail{{/str}}
                              {{/canloginbyemail}}
                            </label>
                            <div class="input-group">
                              <div class="input-group-addon"></div>
                              <input type="text" class="form-control" id="username" name="username" placeholder="{{#str}}username{{/str}}" required />
                            </div>

                            <label for="password">{{#str}}password{{/str}}</label>
                            <div class="input-group">
                              <div class="input-group-addon"></div>
                              <input type="password" class="form-control" id="password" name="password" placeholder="{{#str}}password{{/str}}" required />
                            </div>

                            <div class="sign-up-btn">
                                <button type="submit" class="btn btn-primary">{{#str}}login{{/str}}</button>
                            </div>
                        </form>

                        <p><a href="{{{ config.wwwroot }}}/login/forgot_password.php">{{#str}}forgotten{{/str}}</a></p>

                        {{#cansignup}}
                            <a class="btn btn-register btn-primary" href="{{{ config.wwwroot }}}/login/signup.php?">{{#str}}newaccount{{/str}}</a>
                        {{/cansignup}}
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
                
                $buffer .= $indent . '            <div class="col-md-4 signinform">
';
                $buffer .= $indent . '            <div class="fpsignup">
';
                $buffer .= $indent . '            <h3>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section83fa1a0eb95df91595c360c402d2588c($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <form class="m-t-1" action="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/login/index.php" method="POST" role="form">
';
                $buffer .= $indent . '                        <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <label for="username">
';
                // 'canloginbyemail' inverted section
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                  ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                    $buffer .= '
';
                }
                // 'canloginbyemail' section
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section159228ff13fd3dd4aab94df20b4ae8c8($context, $indent, $value);
                $buffer .= $indent . '                            </label>
';
                $buffer .= $indent . '                            <div class="input-group">
';
                $buffer .= $indent . '                              <div class="input-group-addon"></div>
';
                $buffer .= $indent . '                              <input type="text" class="form-control" id="username" name="username" placeholder="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                $buffer .= '" required />
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            <label for="password">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                            <div class="input-group">
';
                $buffer .= $indent . '                              <div class="input-group-addon"></div>
';
                $buffer .= $indent . '                              <input type="password" class="form-control" id="password" name="password" placeholder="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $buffer .= '" required />
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            <div class="sign-up-btn">
';
                $buffer .= $indent . '                                <button type="submit" class="btn btn-primary">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </form>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        <p><a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/login/forgot_password.php">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6aa95a7e496f5307b40bee7262bd9321($context, $indent, $value);
                $buffer .= '</a></p>
';
                $buffer .= $indent . '
';
                // 'cansignup' section
                $value = $context->find('cansignup');
                $buffer .= $this->sectionEc94749fecf6dfeeed12c3a8bd05f1ec($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7eda54448a10241abf9f4cd5f0b75d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
    {{#hasshowloginform}}
            <div class="col-md-4 signinform">
            <div class="fpsignup">
            <h3>{{#str}}fpsignup, theme_fordson{{/str}}</h3>
                        <form class="m-t-1" action="{{{ config.wwwroot }}}/login/index.php" method="POST" role="form">
                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                            <label for="username">
                              {{^canloginbyemail}}
                                  {{#str}}username{{/str}}
                              {{/canloginbyemail}}
                              {{#canloginbyemail}}
                                  {{#str}}usernameemail{{/str}}
                              {{/canloginbyemail}}
                            </label>
                            <div class="input-group">
                              <div class="input-group-addon"></div>
                              <input type="text" class="form-control" id="username" name="username" placeholder="{{#str}}username{{/str}}" required />
                            </div>

                            <label for="password">{{#str}}password{{/str}}</label>
                            <div class="input-group">
                              <div class="input-group-addon"></div>
                              <input type="password" class="form-control" id="password" name="password" placeholder="{{#str}}password{{/str}}" required />
                            </div>

                            <div class="sign-up-btn">
                                <button type="submit" class="btn btn-primary">{{#str}}login{{/str}}</button>
                            </div>
                        </form>

                        <p><a href="{{{ config.wwwroot }}}/login/forgot_password.php">{{#str}}forgotten{{/str}}</a></p>

                        {{#cansignup}}
                            <a class="btn btn-register btn-primary" href="{{{ config.wwwroot }}}/login/signup.php?">{{#str}}newaccount{{/str}}</a>
                        {{/cansignup}}
            </div>
            </div>
            {{/hasshowloginform}}

                <div class="fptextbox">
                    {{{fptextboxlogout}}}
                </div>

    </div>
    </div>
    </div>
    <div style="clear:both;"></div>
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
                
                $buffer .= $indent . '<div class="container-fluid">
';
                $buffer .= $indent . '    <div class="row">
';
                $buffer .= $indent . '    <div class="col-md-12">
';
                // 'hasshowloginform' section
                $value = $context->find('hasshowloginform');
                $buffer .= $this->section19dbd66dfd9821cb711b8c37a3618046($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="fptextbox">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('fptextboxlogout'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9f266841fdf8e4dcfd1926f5d729009(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

        <div class="col-md-4">
        <div class="market-tile"> 
            <h3 class="card-title">{{{title}}}</h3>
            <div class="marketcontent {{{tileimage}}}">
            <p>{{{content}}}<p>
            </div>
            {{{button}}} 
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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="col-md-4">
';
                $buffer .= $indent . '        <div class="market-tile"> 
';
                $buffer .= $indent . '            <h3 class="card-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '            <div class="marketcontent ';
                $value = $this->resolveValue($context->find('tileimage'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '<p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('button'), $context);
                $buffer .= $value;
                $buffer .= ' 
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d9f3acf5bb49e1ed2415531360d7865(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#hastile}}

        <div class="col-md-4">
        <div class="market-tile"> 
            <h3 class="card-title">{{{title}}}</h3>
            <div class="marketcontent {{{tileimage}}}">
            <p>{{{content}}}<p>
            </div>
            {{{button}}} 
        </div>
        </div>

        {{/hastile}}
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
                
                // 'hastile' section
                $value = $context->find('hastile');
                $buffer .= $this->sectionA9f266841fdf8e4dcfd1926f5d729009($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7cb59f46dd39aff39591d0af74f5307e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="markettiles">
    <div class="container-fluid">
    <div class="row">

        {{#markettiles}}
        {{#hastile}}

        <div class="col-md-4">
        <div class="market-tile"> 
            <h3 class="card-title">{{{title}}}</h3>
            <div class="marketcontent {{{tileimage}}}">
            <p>{{{content}}}<p>
            </div>
            {{{button}}} 
        </div>
        </div>

        {{/hastile}}
        {{/markettiles}}

    </div>
    </div>
</div>
<div style="clear:both;"></div>
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
                
                $buffer .= $indent . '<div class="markettiles">
';
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '    <div class="row">
';
                $buffer .= $indent . '
';
                // 'markettiles' section
                $value = $context->find('markettiles');
                $buffer .= $this->section9d9f3acf5bb49e1ed2415531360d7865($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '<div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
