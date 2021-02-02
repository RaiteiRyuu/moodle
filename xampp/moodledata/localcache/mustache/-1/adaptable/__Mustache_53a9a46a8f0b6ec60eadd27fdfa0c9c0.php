<?php

class __Mustache_53a9a46a8f0b6ec60eadd27fdfa0c9c0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="searchbox ';
        $value = $this->resolveValue($context->find('pagelayout'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' d-none d-lg-block">
';
        $buffer .= $indent . '    <form action="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        $buffer .= $indent . '        <label class="hidden" for="search-1" style="display: none;">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section09e5525825d6e7bca48b65ab2122beb8($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        <div class="search-box grey-box bg-white clear-fix">
';
        $buffer .= $indent . '            <input placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section09e5525825d6e7bca48b65ab2122beb8($context, $indent, $value);
        $buffer .= '" accesskey="6" class="search_tour bg-white no-border left search-box__input ui-autocomplete-input" type="text" name="search" id="search-1" autocomplete="off">
';
        $buffer .= $indent . '            <button title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section09e5525825d6e7bca48b65ab2122beb8($context, $indent, $value);
        $buffer .= '" type="submit" class="no-border bg-white pas search-box__button">
';
        $buffer .= $indent . '                <abbr class="fa fa-search" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section09e5525825d6e7bca48b65ab2122beb8($context, $indent, $value);
        $buffer .= '"></abbr>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section09e5525825d6e7bca48b65ab2122beb8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchcourses, theme_adaptable';
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
                
                $buffer .= 'searchcourses, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
