<?php

class __Mustache_2a76ecb8d2e40a5de82518d4dbcf2452 extends Mustache_Template
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
        $buffer .= $this->sectionCd1140f34210be87a08d7860a85fcb21($context, $indent, $value);

        return $buffer;
    }

    private function section61babd0ed0dd935be6166324a8f59cfe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href = {{{haslink}}} class = "socialicon blog" title = "{{{haslink}}}" alt="{{{haslink}}}" target="_blank">
                    <span class="fa-stack fa-1x">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-{{{linkicon}}} fa-inverse fa-stack-1x"></i>
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
                $buffer .= ' fa-inverse fa-stack-1x"></i>
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

    private function section928ddc8ef0751692bc3a925bc47a736e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#haslink}}
                    <a href = {{{haslink}}} class = "socialicon blog" title = "{{{haslink}}}" alt="{{{haslink}}}" target="_blank">
                    <span class="fa-stack fa-1x">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-{{{linkicon}}} fa-inverse fa-stack-1x"></i>
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
                $buffer .= $this->section61babd0ed0dd935be6166324a8f59cfe($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd1140f34210be87a08d7860a85fcb21(Mustache_Context $context, $indent, $value)
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
                    <i class="fa fa-{{{linkicon}}} fa-inverse fa-stack-1x"></i>
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
                $buffer .= $this->section928ddc8ef0751692bc3a925bc47a736e($context, $indent, $value);
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
