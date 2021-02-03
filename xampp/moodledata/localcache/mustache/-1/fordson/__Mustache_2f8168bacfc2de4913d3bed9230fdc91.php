<?php

class __Mustache_2f8168bacfc2de4913d3bed9230fdc91 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'hasmarkettiles' section
        $value = $context->find('hasmarkettiles');
        $buffer .= $this->section66a1af3f106bb6795838f39d176e65f1($context, $indent, $value);

        return $buffer;
    }

    private function section611889eb79d246b18ecb221a5f6c55f5(Mustache_Context $context, $indent, $value)
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

    private function sectionA02443890ab676b63448cda1a835ac3c(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->section611889eb79d246b18ecb221a5f6c55f5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66a1af3f106bb6795838f39d176e65f1(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->sectionA02443890ab676b63448cda1a835ac3c($context, $indent, $value);
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
