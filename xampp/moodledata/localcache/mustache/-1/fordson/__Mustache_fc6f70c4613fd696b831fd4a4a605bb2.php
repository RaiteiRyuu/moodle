<?php

class __Mustache_fc6f70c4613fd696b831fd4a4a605bb2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'showincourseonly' section
        $value = $context->find('showincourseonly');
        $buffer .= $this->sectionE270baf5092c636a2a6e687d270473f2($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasadminlink' section
        $value = $context->find('hasadminlink');
        $buffer .= $this->section36092b08cb6cfb26c0d83fd58e232f22($context, $indent, $value);

        return $buffer;
    }

    private function section4b233542db71766ef69c3f0626b4bc11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="teacherdash nav-item nav-link">
            <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="{{{togglebutton}}}" data-toggle="modal" href="#teacherdashslider" class="btn btn-secondary fhs-tooltip">  <i class="fa fa-cogs" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '    <div class="teacherdash nav-item nav-link">
';
                $buffer .= $indent . '            <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="';
                $value = $this->resolveValue($context->find('togglebutton'), $context);
                $buffer .= $value;
                $buffer .= '" data-toggle="modal" href="#teacherdashslider" class="btn btn-secondary fhs-tooltip">  <i class="fa fa-cogs" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c551e0fd2a401588a4baa2f91814869(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="enrollcodes nav-item nav-link">
                    <a href="{{{url}}}" data-tooltip="tooltip" data-placement= "bottom" title="{{{title}}}" class="btn btn-secondary fhs-tooltip"><i class="fa fa-key" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '                <div class="enrollcodes nav-item nav-link">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" data-tooltip="tooltip" data-placement= "bottom" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '" class="btn btn-secondary fhs-tooltip"><i class="fa fa-key" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e878b318c42b91b963e870c231405b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#haseasyenrollment}}
                <div class="enrollcodes nav-item nav-link">
                    <a href="{{{url}}}" data-tooltip="tooltip" data-placement= "bottom" title="{{{title}}}" class="btn btn-secondary fhs-tooltip"><i class="fa fa-key" aria-hidden="true"></i></a>
                </div>
            {{/haseasyenrollment}}
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
                
                // 'haseasyenrollment' section
                $value = $context->find('haseasyenrollment');
                $buffer .= $this->section7c551e0fd2a401588a4baa2f91814869($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb9f0706cc0773c7abee2eae4e718435(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#dashmenu}}
            {{#haseasyenrollment}}
                <div class="enrollcodes nav-item nav-link">
                    <a href="{{{url}}}" data-tooltip="tooltip" data-placement= "bottom" title="{{{title}}}" class="btn btn-secondary fhs-tooltip"><i class="fa fa-key" aria-hidden="true"></i></a>
                </div>
            {{/haseasyenrollment}}
        {{/dashmenu}}
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
                
                // 'dashmenu' section
                $value = $context->find('dashmenu');
                $buffer .= $this->section2e878b318c42b91b963e870c231405b7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdfac321c6644978e329883ba15fbc38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="studentdash nav-item nav-link">
        <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="{{{togglebuttonstudent}}}" data-toggle="modal" href="#studentdashslider" class="btn btn-secondary fhs-tooltip"><i class="fa fa-cogs" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '    <div class="studentdash nav-item nav-link">
';
                $buffer .= $indent . '        <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="';
                $value = $this->resolveValue($context->find('togglebuttonstudent'), $context);
                $buffer .= $value;
                $buffer .= '" data-toggle="modal" href="#studentdashslider" class="btn btn-secondary fhs-tooltip"><i class="fa fa-cogs" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE270baf5092c636a2a6e687d270473f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#hasteacherdash}}
    <div class="teacherdash nav-item nav-link">
            <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="{{{togglebutton}}}" data-toggle="modal" href="#teacherdashslider" class="btn btn-secondary fhs-tooltip">  <i class="fa fa-cogs" aria-hidden="true"></i></a>
    </div>
    {{/hasteacherdash}}

    {{#haspermission}}
        {{#dashmenu}}
            {{#haseasyenrollment}}
                <div class="enrollcodes nav-item nav-link">
                    <a href="{{{url}}}" data-tooltip="tooltip" data-placement= "bottom" title="{{{title}}}" class="btn btn-secondary fhs-tooltip"><i class="fa fa-key" aria-hidden="true"></i></a>
                </div>
            {{/haseasyenrollment}}
        {{/dashmenu}}
    {{/haspermission}}

    {{#hasstudentdash}}
    <div class="studentdash nav-item nav-link">
        <a role="button" data-tooltip="tooltip" data-placement= "bottom" title="{{{togglebuttonstudent}}}" data-toggle="modal" href="#studentdashslider" class="btn btn-secondary fhs-tooltip"><i class="fa fa-cogs" aria-hidden="true"></i></a>
    </div>
    {{/hasstudentdash}}
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
                
                // 'hasteacherdash' section
                $value = $context->find('hasteacherdash');
                $buffer .= $this->section4b233542db71766ef69c3f0626b4bc11($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'haspermission' section
                $value = $context->find('haspermission');
                $buffer .= $this->sectionFb9f0706cc0773c7abee2eae4e718435($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasstudentdash' section
                $value = $context->find('hasstudentdash');
                $buffer .= $this->sectionAdfac321c6644978e329883ba15fbc38($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36092b08cb6cfb26c0d83fd58e232f22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="siteadminlink nav-item nav-link">
        <a href="{{{siteadminurl}}}" data-tooltip="tooltip" data-placement= "bottom" title="{{{siteadmintitle}}}" class="btn btn-secondary fhs-tooltip"><i class="fa fa-sitemap" aria-hidden="true"></i></a>
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
                
                $buffer .= $indent . '    <div class="siteadminlink nav-item nav-link">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('siteadminurl'), $context);
                $buffer .= $value;
                $buffer .= '" data-tooltip="tooltip" data-placement= "bottom" title="';
                $value = $this->resolveValue($context->find('siteadmintitle'), $context);
                $buffer .= $value;
                $buffer .= '" class="btn btn-secondary fhs-tooltip"><i class="fa fa-sitemap" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
