<?php

class __Mustache_2c8f75f5a7e0b0bb3733064bd3baed55 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'hassocialnetworks' section
        $value = $context->find('hassocialnetworks');
        $buffer .= $this->sectionD8544bd6f86cd7f6a91442a525339d69($context, $indent, $value);

        return $buffer;
    }

    private function sectionCbcbd5db968e33fd5e700866ba659c03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href = {{{haslink}}} class = "socialicon blog" title = "{{{haslink}}}" alt="{{{haslink}}}" target="_blank">
                    <span class="fa-stack fa-1x">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-{{{linkicon}}} fa-inverse fa-stack-1x" style="color:black"></i>
                    </span>
                    <span class="sr-only">{{{haslink}}}</span>
                    </a>
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
                
                $buffer .= $indent . '                    <a href = ';
                $value = $this->resolveValue($context->find('haslink'), $context);
                $buffer .= $value;
                $buffer .= ' class = "socialicon blog" title = "';
                $value = $this->resolveValue($context->find('haslink'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('haslink'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                    <span class="fa-stack fa-1x">
';
                $buffer .= $indent . '                    <i class="fa fa-square fa-stack-2x"></i>
';
                $buffer .= $indent . '                    <i class="fa fa-';
                $value = $this->resolveValue($context->find('linkicon'), $context);
                $buffer .= $value;
                $buffer .= ' fa-inverse fa-stack-1x" style="color:black"></i>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    <span class="sr-only">';
                $value = $this->resolveValue($context->find('haslink'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84e7795743d192a3b4e5867ecd41a08e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#haslink}}
                    <a href = {{{haslink}}} class = "socialicon blog" title = "{{{haslink}}}" alt="{{{haslink}}}" target="_blank">
                    <span class="fa-stack fa-1x">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-{{{linkicon}}} fa-inverse fa-stack-1x" style="color:black"></i>
                    </span>
                    <span class="sr-only">{{{haslink}}}</span>
                    </a>
                {{/haslink}}
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
                
                // 'haslink' section
                $value = $context->find('haslink');
                $buffer .= $this->sectionCbcbd5db968e33fd5e700866ba659c03($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8544bd6f86cd7f6a91442a525339d69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="socials_wrapper">
        <ul class="socials">
            {{#socialicons}}
                {{#haslink}}
                    <a href = {{{haslink}}} class = "socialicon blog" title = "{{{haslink}}}" alt="{{{haslink}}}" target="_blank">
                    <span class="fa-stack fa-1x">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-{{{linkicon}}} fa-inverse fa-stack-1x" style="color:black"></i>
                    </span>
                    <span class="sr-only">{{{haslink}}}</span>
                    </a>
                {{/haslink}}
            {{/socialicons}}
        </ul>
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
                
                $buffer .= $indent . '    <div class="socials_wrapper">
';
                $buffer .= $indent . '        <ul class="socials">
';
                // 'socialicons' section
                $value = $context->find('socialicons');
                $buffer .= $this->section84e7795743d192a3b4e5867ecd41a08e($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
