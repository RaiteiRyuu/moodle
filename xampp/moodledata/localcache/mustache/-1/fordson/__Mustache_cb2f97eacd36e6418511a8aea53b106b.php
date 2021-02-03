<?php

class __Mustache_cb2f97eacd36e6418511a8aea53b106b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'showincourseonly' section
        $value = $context->find('showincourseonly');
        $buffer .= $this->section59dfcaa62b775959d08d799e3b1fe583($context, $indent, $value);

        return $buffer;
    }

    private function section2c9db2494aadb249afe4664a9613427a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="editcogbutton">{{{editcog}}}</div>
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
                
                $buffer .= $indent . '            <div class="editcogbutton">';
                $value = $this->resolveValue($context->find('editcog'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8651dc80cbb02ad99dfe1c5b3db23fe3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" class="list-group-item">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8404d48ed2c2feebb0e1a4cb71e8c8f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#hasqbanklinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasqbanklinks}}
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
                
                // 'hasqbanklinks' section
                $value = $context->find('hasqbanklinks');
                $buffer .= $this->section8651dc80cbb02ad99dfe1c5b3db23fe3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f76bf9874da6ed5e13c3816a619e498(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="dashtitle">
                        <h3><i class="fa fa-question-circle dashicon"></i>{{{qbanktitle}}}</h3>
                        <p>{{{qbankdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasqbanklinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasqbanklinks}}
                        {{/dashlinks}}
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
                
                $buffer .= $indent . '                    <div class="dashtitle">
';
                $buffer .= $indent . '                        <h3><i class="fa fa-question-circle dashicon"></i>';
                $value = $this->resolveValue($context->find('qbanktitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('qbankdesc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="list-group">
';
                // 'dashlinks' section
                $value = $context->find('dashlinks');
                $buffer .= $this->section8404d48ed2c2feebb0e1a4cb71e8c8f7($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ddde990b101c7a33687adef9bbc596e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#hasbadgelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasbadgelinks}}
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
                
                // 'hasbadgelinks' section
                $value = $context->find('hasbadgelinks');
                $buffer .= $this->section8651dc80cbb02ad99dfe1c5b3db23fe3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cb01e4f76c2ad23d33ee5fb97fa0002(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="dashtitle">
                        <h3><i class="fa fa-trophy dashicon"></i>{{{badgestitle}}}</h3>
                        <p>{{{badgesdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasbadgelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasbadgelinks}}
                        {{/dashlinks}}
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
                
                $buffer .= $indent . '                    <div class="dashtitle">
';
                $buffer .= $indent . '                        <h3><i class="fa fa-trophy dashicon"></i>';
                $value = $this->resolveValue($context->find('badgestitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('badgesdesc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="list-group">
';
                // 'dashlinks' section
                $value = $context->find('dashlinks');
                $buffer .= $this->section9ddde990b101c7a33687adef9bbc596e($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7bc0eca4759217a399b460bc123f2140(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#hascoursemanagelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hascoursemanagelinks}}
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
                
                // 'hascoursemanagelinks' section
                $value = $context->find('hascoursemanagelinks');
                $buffer .= $this->section8651dc80cbb02ad99dfe1c5b3db23fe3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCde4d890da0111c8eb5b964e0d0ae128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col-md-3 coursemanagelinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-cogs dashicon"></i>{{{coursemanagetitle}}}</h3>
                        <p>{{{coursemanagedesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hascoursemanagelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hascoursemanagelinks}}
                        {{/dashlinks}}
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
                
                $buffer .= $indent . '                <div class="col-md-3 coursemanagelinks">
';
                $buffer .= $indent . '                    <div class="dashtitle">
';
                $buffer .= $indent . '                        <h3><i class="fa fa-cogs dashicon"></i>';
                $value = $this->resolveValue($context->find('coursemanagetitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('coursemanagedesc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="list-group">
';
                // 'dashlinks' section
                $value = $context->find('dashlinks');
                $buffer .= $this->section7bc0eca4759217a399b460bc123f2140($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44e672f2c18eb821434c32c6b1734b2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
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
                $buffer .= $this->section8651dc80cbb02ad99dfe1c5b3db23fe3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0871cb93162c4d4b81ac9afe2e945a0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#dashlinks}}
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
                        {{/dashlinks}}
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
                
                // 'dashlinks' section
                $value = $context->find('dashlinks');
                $buffer .= $this->section44e672f2c18eb821434c32c6b1734b2e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4d5ed76c761fa003910777d261fe769(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#hasuserlinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasuserlinks}}
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
                
                // 'hasuserlinks' section
                $value = $context->find('hasuserlinks');
                $buffer .= $this->section8651dc80cbb02ad99dfe1c5b3db23fe3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d2838bdfa4a7bfcf87cbb5fbb12f6ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col-md-3 userlinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-users dashicon"></i>{{{userlinkstitle}}}</h3>
                        <p>{{{userlinksdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#haspermission}}
                        {{#dashlinks}}
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
                        {{/dashlinks}}
                        {{/haspermission}}
                        {{#dashlinks}}
                        {{#hasuserlinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasuserlinks}}
                        {{/dashlinks}}
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
                
                $buffer .= $indent . '                <div class="col-md-3 userlinks">
';
                $buffer .= $indent . '                    <div class="dashtitle">
';
                $buffer .= $indent . '                        <h3><i class="fa fa-users dashicon"></i>';
                $value = $this->resolveValue($context->find('userlinkstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('userlinksdesc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="list-group">
';
                // 'haspermission' section
                $value = $context->find('haspermission');
                $buffer .= $this->section0871cb93162c4d4b81ac9afe2e945a0d($context, $indent, $value);
                // 'dashlinks' section
                $value = $context->find('dashlinks');
                $buffer .= $this->sectionD4d5ed76c761fa003910777d261fe769($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50c95c1842614f6e799ca6434224175a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

<div class="modal fade" id="teacherdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
    <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
        </button>

        <div class="teacherdashboard">
        <div class="container-fluid">
        {{#haseditcog}}
            <div class="editcogbutton">{{{editcog}}}</div>
        {{/haseditcog}}
                <div class="coursemanagementmessage">{{{coursemanagementmessage}}}</div>

                <div class="row">
                <div class="col-md-3 activities">
                    <div class="dashtitle">
                        <h3 class="card-title"><i class="fa fa-check-square-o dashicon"></i>{{{activitylinkstitle}}}</h3>
                        <p>{{{activitylinkstitle_desc}}}</p>
                    </div>
                    <div class="list-group">
                    {{{courseactivities}}}
                    </div>
                </div>

                <div class="col-md-3 questionlinks">
                    {{#hasquestionpermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-question-circle dashicon"></i>{{{qbanktitle}}}</h3>
                        <p>{{{qbankdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasqbanklinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasqbanklinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasquestionpermission}}
                    {{#hasbadgepermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-trophy dashicon"></i>{{{badgestitle}}}</h3>
                        <p>{{{badgesdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasbadgelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasbadgelinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasbadgepermission}}
                </div>

                {{#hascoursepermission}}
                <div class="col-md-3 coursemanagelinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-cogs dashicon"></i>{{{coursemanagetitle}}}</h3>
                        <p>{{{coursemanagedesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hascoursemanagelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hascoursemanagelinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hascoursepermission}}

                {{#hasuserpermission}}
                <div class="col-md-3 userlinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-users dashicon"></i>{{{userlinkstitle}}}</h3>
                        <p>{{{userlinksdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#haspermission}}
                        {{#dashlinks}}
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
                        {{/dashlinks}}
                        {{/haspermission}}
                        {{#dashlinks}}
                        {{#hasuserlinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasuserlinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hasuserpermission}}
            </div>

        </div>
        </div>

    </div>
    </div>

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
                $buffer .= $indent . '<div class="modal fade" id="teacherdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
';
                $buffer .= $indent . '  <div class="modal-dialog" role="document">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="modal-content">
';
                $buffer .= $indent . '    <div class="modal-body">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
';
                $buffer .= $indent . '              <span aria-hidden="true">&times;</span>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="teacherdashboard">
';
                $buffer .= $indent . '        <div class="container-fluid">
';
                // 'haseditcog' section
                $value = $context->find('haseditcog');
                $buffer .= $this->section2c9db2494aadb249afe4664a9613427a($context, $indent, $value);
                $buffer .= $indent . '                <div class="coursemanagementmessage">';
                $value = $this->resolveValue($context->find('coursemanagementmessage'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="row">
';
                $buffer .= $indent . '                <div class="col-md-3 activities">
';
                $buffer .= $indent . '                    <div class="dashtitle">
';
                $buffer .= $indent . '                        <h3 class="card-title"><i class="fa fa-check-square-o dashicon"></i>';
                $value = $this->resolveValue($context->find('activitylinkstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('activitylinkstitle_desc'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="list-group">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('courseactivities'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="col-md-3 questionlinks">
';
                // 'hasquestionpermission' section
                $value = $context->find('hasquestionpermission');
                $buffer .= $this->section1f76bf9874da6ed5e13c3816a619e498($context, $indent, $value);
                // 'hasbadgepermission' section
                $value = $context->find('hasbadgepermission');
                $buffer .= $this->section3cb01e4f76c2ad23d33ee5fb97fa0002($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                // 'hascoursepermission' section
                $value = $context->find('hascoursepermission');
                $buffer .= $this->sectionCde4d890da0111c8eb5b964e0d0ae128($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasuserpermission' section
                $value = $context->find('hasuserpermission');
                $buffer .= $this->section8d2838bdfa4a7bfcf87cbb5fbb12f6ba($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b69758ef31650b45334211c55da96cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#teacherdash}}

<div class="modal fade" id="teacherdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
    <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
        </button>

        <div class="teacherdashboard">
        <div class="container-fluid">
        {{#haseditcog}}
            <div class="editcogbutton">{{{editcog}}}</div>
        {{/haseditcog}}
                <div class="coursemanagementmessage">{{{coursemanagementmessage}}}</div>

                <div class="row">
                <div class="col-md-3 activities">
                    <div class="dashtitle">
                        <h3 class="card-title"><i class="fa fa-check-square-o dashicon"></i>{{{activitylinkstitle}}}</h3>
                        <p>{{{activitylinkstitle_desc}}}</p>
                    </div>
                    <div class="list-group">
                    {{{courseactivities}}}
                    </div>
                </div>

                <div class="col-md-3 questionlinks">
                    {{#hasquestionpermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-question-circle dashicon"></i>{{{qbanktitle}}}</h3>
                        <p>{{{qbankdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasqbanklinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasqbanklinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasquestionpermission}}
                    {{#hasbadgepermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-trophy dashicon"></i>{{{badgestitle}}}</h3>
                        <p>{{{badgesdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasbadgelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasbadgelinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasbadgepermission}}
                </div>

                {{#hascoursepermission}}
                <div class="col-md-3 coursemanagelinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-cogs dashicon"></i>{{{coursemanagetitle}}}</h3>
                        <p>{{{coursemanagedesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hascoursemanagelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hascoursemanagelinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hascoursepermission}}

                {{#hasuserpermission}}
                <div class="col-md-3 userlinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-users dashicon"></i>{{{userlinkstitle}}}</h3>
                        <p>{{{userlinksdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#haspermission}}
                        {{#dashlinks}}
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
                        {{/dashlinks}}
                        {{/haspermission}}
                        {{#dashlinks}}
                        {{#hasuserlinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasuserlinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hasuserpermission}}
            </div>

        </div>
        </div>

    </div>
    </div>

</div>
</div>

{{/teacherdash}}
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
                
                // 'teacherdash' section
                $value = $context->find('teacherdash');
                $buffer .= $this->section50c95c1842614f6e799ca6434224175a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc439bf59dad3e3f52128f3c67a4e2e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-md-8">
                        <div class="studentdashboardtextbox">{{{studentdashboardtextbox}}}</div>
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
                
                $buffer .= $indent . '                    <div class="col-md-8">
';
                $buffer .= $indent . '                        <div class="studentdashboardtextbox">';
                $value = $this->resolveValue($context->find('studentdashboardtextbox'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section434fe36d4e20ac89ed8e23e85f43ca97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-md-2 studentgradebook">
                        <p>{{{mygradestext}}}</p><a href="{{{gradeslinkstudent}}}" alt="{{{mygradestext}}}"><i class="fa fa-5x fa-bar-chart"></i></a>
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
                
                $buffer .= $indent . '                    <div class="col-md-2 studentgradebook">
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('mygradestext'), $context);
                $buffer .= $value;
                $buffer .= '</p><a href="';
                $value = $this->resolveValue($context->find('gradeslinkstudent'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('mygradestext'), $context);
                $buffer .= $value;
                $buffer .= '"><i class="fa fa-5x fa-bar-chart"></i></a>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4905592d2591a5e2998bcdce591ea903(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-md-2 studentadministration">
                        <p>{{{studentcoursemanage}}}</p><a href="{{{studentcourseadminlink}}}" alt="{{{studentcoursemanage}}}"><i class="fa fa-5x fa-cog"></i></a>
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
                
                $buffer .= '
';
                $buffer .= $indent . '                    <div class="col-md-2 studentadministration">
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('studentcoursemanage'), $context);
                $buffer .= $value;
                $buffer .= '</p><a href="';
                $value = $this->resolveValue($context->find('studentcourseadminlink'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('studentcoursemanage'), $context);
                $buffer .= $value;
                $buffer .= '"><i class="fa fa-5x fa-cog"></i></a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15049bb88e5a41b938fa560cbf08021(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{#studentcourseadminlink}}
                    <div class="col-md-2 studentadministration">
                        <p>{{{studentcoursemanage}}}</p><a href="{{{studentcourseadminlink}}}" alt="{{{studentcoursemanage}}}"><i class="fa fa-5x fa-cog"></i></a>
                    </div>
                    {{/studentcourseadminlink}} ';
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
                
                $buffer .= ' ';
                // 'studentcourseadminlink' section
                $value = $context->find('studentcourseadminlink');
                $buffer .= $this->section4905592d2591a5e2998bcdce591ea903($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35cce28e4cca2422246a04ccf5dc06b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{{content}}}
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
                
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59d3af82d609db212f972e55cdfec7c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="card-block">
                                {{#courseinfo}}
                                    {{{content}}}
                                {{/courseinfo}}
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
                
                $buffer .= $indent . '                        <div class="dashtitle">
';
                $buffer .= $indent . '                            <h3><i class="fa fa-';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '">&nbsp</i>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                            <div class="card-block">
';
                // 'courseinfo' section
                $value = $context->find('courseinfo');
                $buffer .= $this->section35cce28e4cca2422246a04ccf5dc06b6($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa8367a26124e5c338d9e8a38bdcbffc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'email, moodle';
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
                
                $buffer .= 'email, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2402b32a6c2dfe65fc05dd1c70528f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>';
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
                
                $buffer .= '<a href="mailto:';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= $value;
                $buffer .= '"><i class="fa fa-envelope-o">&nbsp</i>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAa8367a26124e5c338d9e8a38bdcbffc($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section721c00a4ef4104d4efadffb447c413f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sendmessage, message';
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
                
                $buffer .= 'sendmessage, message';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75f0ee63c42ca498cc9a2eaa532b829e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('messaging'), $context);
                $buffer .= $value;
                $buffer .= '"><i class="fa fa-comment">&nbsp</i>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section721c00a4ef4104d4efadffb447c413f4($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b28ad480da98aef78588c0f1c72cc4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="list-group-item">
                                    <div class="staffmember">
                                        {{{picture}}}
                                        <div class="staffinfo">
                                            <h4>{{{name}}}</h4>
                                            <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                        </div>
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
                
                $buffer .= $indent . '                                <div class="list-group-item">
';
                $buffer .= $indent . '                                    <div class="staffmember">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('picture'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                        <div class="staffinfo">
';
                $buffer .= $indent . '                                            <h4>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                            <p>';
                // 'hasemail' section
                $value = $context->find('hasemail');
                $buffer .= $this->section9e2402b32a6c2dfe65fc05dd1c70528f($context, $indent, $value);
                $buffer .= ' <br /> ';
                // 'hasmessaging' section
                $value = $context->find('hasmessaging');
                $buffer .= $this->section75f0ee63c42ca498cc9a2eaa532b829e($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60e2106eb20f42140b2d005b342fc3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="list-group-item">
                            <div class="staffmember">
                                {{{picture}}}
                                <div class="staffinfo">
                                    <h4>{{{name}}}</h4>
                                    <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                </div>
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
                
                $buffer .= $indent . '                            <div class="list-group-item">
';
                $buffer .= $indent . '                            <div class="staffmember">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('picture'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                <div class="staffinfo">
';
                $buffer .= $indent . '                                    <h4>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                    <p>';
                // 'hasemail' section
                $value = $context->find('hasemail');
                $buffer .= $this->section9e2402b32a6c2dfe65fc05dd1c70528f($context, $indent, $value);
                $buffer .= ' <br /> ';
                // 'hasmessaging' section
                $value = $context->find('hasmessaging');
                $buffer .= $this->section75f0ee63c42ca498cc9a2eaa532b829e($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe3f3a4e23c40348bd0c163b6d868949(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="list-group">
                                {{#courseteachers}}
                                <div class="list-group-item">
                                    <div class="staffmember">
                                        {{{picture}}}
                                        <div class="staffinfo">
                                            <h4>{{{name}}}</h4>
                                            <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                        </div>
                                    </div>
                                </div>
                                {{/courseteachers}}
                            </div>
                            <div class="list-group">
                            {{#courseother}}
                            <div class="list-group-item">
                            <div class="staffmember">
                                {{{picture}}}
                                <div class="staffinfo">
                                    <h4>{{{name}}}</h4>
                                    <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                </div>
                            </div>
                            </div>
                        {{/courseother}}
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
                
                $buffer .= $indent . '                        <div class="dashtitle">
';
                $buffer .= $indent . '                            <h3><i class="fa fa-';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '">&nbsp</i>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                            <div class="list-group">
';
                // 'courseteachers' section
                $value = $context->find('courseteachers');
                $buffer .= $this->section5b28ad480da98aef78588c0f1c72cc4d($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="list-group">
';
                // 'courseother' section
                $value = $context->find('courseother');
                $buffer .= $this->section60e2106eb20f42140b2d005b342fc3e3($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF56cffc57ffd185111a9e4ffdca565df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'myprogresstext, theme_fordson';
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
                
                $buffer .= 'myprogresstext, theme_fordson';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4827eda840fe072cf79fb52805c5f70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col-md-12 studentprogress">
                    {{#str}}myprogresstext, theme_fordson{{/str}} 
                    {{{progress}}}
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
                
                $buffer .= $indent . '                <div class="col-md-12 studentprogress">
';
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF56cffc57ffd185111a9e4ffdca565df($context, $indent, $value);
                $buffer .= ' 
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('progress'), $context);
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

    private function section34aa1dc0e4db6910df68a087947ce621(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="modal fade" id="studentdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
<div class="modal-dialog" role="document">

    <div class="modal-content">
    <div class="modal-body">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        <div class="studentdashboard">
        <div class="container-fluid">
        {{#haseditcog}}
            <div class="editcogbutton">{{{editcog}}}</div>
        {{/haseditcog}}
            <div class="row">
                    {{#studentdashboardtextbox}}
                    <div class="col-md-8">
                        <div class="studentdashboardtextbox">{{{studentdashboardtextbox}}}</div>
                    </div>
                    {{/studentdashboardtextbox}}

                    {{#hasgradebookshow}}
                    <div class="col-md-2 studentgradebook">
                        <p>{{{mygradestext}}}</p><a href="{{{gradeslinkstudent}}}" alt="{{{mygradestext}}}"><i class="fa fa-5x fa-bar-chart"></i></a>
                    </div>
                    {{/hasgradebookshow}}

                    {{#hascourseadminshow}} {{#studentcourseadminlink}}
                    <div class="col-md-2 studentadministration">
                        <p>{{{studentcoursemanage}}}</p><a href="{{{studentcourseadminlink}}}" alt="{{{studentcoursemanage}}}"><i class="fa fa-5x fa-cog"></i></a>
                    </div>
                    {{/studentcourseadminlink}} {{/hascourseadminshow}}
                </div>

            <div class="row">
                    <div class="col-md-4 coursesummary">
                    {{#hascourseinfogroup}}
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="card-block">
                                {{#courseinfo}}
                                    {{{content}}}
                                {{/courseinfo}}
                            </div>
                    {{/hascourseinfogroup}}
                    </div>

                    <div class="col-md-5 coursestafflisting">
                    {{#hascoursestaffgroup}}
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="list-group">
                                {{#courseteachers}}
                                <div class="list-group-item">
                                    <div class="staffmember">
                                        {{{picture}}}
                                        <div class="staffinfo">
                                            <h4>{{{name}}}</h4>
                                            <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                        </div>
                                    </div>
                                </div>
                                {{/courseteachers}}
                            </div>
                            <div class="list-group">
                            {{#courseother}}
                            <div class="list-group-item">
                            <div class="staffmember">
                                {{{picture}}}
                                <div class="staffinfo">
                                    <h4>{{{name}}}</h4>
                                    <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                </div>
                            </div>
                            </div>
                        {{/courseother}}
                        </div>
                    {{/hascoursestaffgroup}}
                    </div>

                    <div class="col-md-3 activitylinks">
                        <div class="dashtitle">
                            <h3><i class="fa fa-check-square-o dashicon"></i>{{{activitylinkstitle}}}</h3>     
                        </div>
                        <div class="list-group">
                            {{{courseactivities}}}
                        </div>
                    </div>
                </div>
                {{#hascompletionshow}}
                <div class="col-md-12 studentprogress">
                    {{#str}}myprogresstext, theme_fordson{{/str}} 
                    {{{progress}}}
                </div>
                {{/hascompletionshow}}
        </div>
        </div>

    </div>
    </div>

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
                
                $buffer .= $indent . '<div class="modal fade" id="studentdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
';
                $buffer .= $indent . '<div class="modal-dialog" role="document">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="modal-content">
';
                $buffer .= $indent . '    <div class="modal-body">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
';
                $buffer .= $indent . '                <span aria-hidden="true">&times;</span>
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="studentdashboard">
';
                $buffer .= $indent . '        <div class="container-fluid">
';
                // 'haseditcog' section
                $value = $context->find('haseditcog');
                $buffer .= $this->section2c9db2494aadb249afe4664a9613427a($context, $indent, $value);
                $buffer .= $indent . '            <div class="row">
';
                // 'studentdashboardtextbox' section
                $value = $context->find('studentdashboardtextbox');
                $buffer .= $this->sectionCc439bf59dad3e3f52128f3c67a4e2e6($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasgradebookshow' section
                $value = $context->find('hasgradebookshow');
                $buffer .= $this->section434fe36d4e20ac89ed8e23e85f43ca97($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    ';
                // 'hascourseadminshow' section
                $value = $context->find('hascourseadminshow');
                $buffer .= $this->sectionB15049bb88e5a41b938fa560cbf08021($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="row">
';
                $buffer .= $indent . '                    <div class="col-md-4 coursesummary">
';
                // 'hascourseinfogroup' section
                $value = $context->find('hascourseinfogroup');
                $buffer .= $this->section59d3af82d609db212f972e55cdfec7c3($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="col-md-5 coursestafflisting">
';
                // 'hascoursestaffgroup' section
                $value = $context->find('hascoursestaffgroup');
                $buffer .= $this->sectionDe3f3a4e23c40348bd0c163b6d868949($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="col-md-3 activitylinks">
';
                $buffer .= $indent . '                        <div class="dashtitle">
';
                $buffer .= $indent . '                            <h3><i class="fa fa-check-square-o dashicon"></i>';
                $value = $this->resolveValue($context->find('activitylinkstitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>     
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="list-group">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('courseactivities'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                // 'hascompletionshow' section
                $value = $context->find('hascompletionshow');
                $buffer .= $this->sectionD4827eda840fe072cf79fb52805c5f70($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59dfcaa62b775959d08d799e3b1fe583(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#hasteacherdash}}
{{#teacherdash}}

<div class="modal fade" id="teacherdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
    <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
        </button>

        <div class="teacherdashboard">
        <div class="container-fluid">
        {{#haseditcog}}
            <div class="editcogbutton">{{{editcog}}}</div>
        {{/haseditcog}}
                <div class="coursemanagementmessage">{{{coursemanagementmessage}}}</div>

                <div class="row">
                <div class="col-md-3 activities">
                    <div class="dashtitle">
                        <h3 class="card-title"><i class="fa fa-check-square-o dashicon"></i>{{{activitylinkstitle}}}</h3>
                        <p>{{{activitylinkstitle_desc}}}</p>
                    </div>
                    <div class="list-group">
                    {{{courseactivities}}}
                    </div>
                </div>

                <div class="col-md-3 questionlinks">
                    {{#hasquestionpermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-question-circle dashicon"></i>{{{qbanktitle}}}</h3>
                        <p>{{{qbankdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasqbanklinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasqbanklinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasquestionpermission}}
                    {{#hasbadgepermission}}
                    <div class="dashtitle">
                        <h3><i class="fa fa-trophy dashicon"></i>{{{badgestitle}}}</h3>
                        <p>{{{badgesdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hasbadgelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasbadgelinks}}
                        {{/dashlinks}}
                    </div>
                    {{/hasbadgepermission}}
                </div>

                {{#hascoursepermission}}
                <div class="col-md-3 coursemanagelinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-cogs dashicon"></i>{{{coursemanagetitle}}}</h3>
                        <p>{{{coursemanagedesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#dashlinks}}
                        {{#hascoursemanagelinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hascoursemanagelinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hascoursepermission}}

                {{#hasuserpermission}}
                <div class="col-md-3 userlinks">
                    <div class="dashtitle">
                        <h3><i class="fa fa-users dashicon"></i>{{{userlinkstitle}}}</h3>
                        <p>{{{userlinksdesc}}}</p>
                    </div>
                    <div class="list-group">
                        {{#haspermission}}
                        {{#dashlinks}}
                        {{#haseasyenrollment}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/haseasyenrollment}}
                        {{/dashlinks}}
                        {{/haspermission}}
                        {{#dashlinks}}
                        {{#hasuserlinks}}
                            <a href="{{{url}}}" class="list-group-item">{{{title}}}</a>
                        {{/hasuserlinks}}
                        {{/dashlinks}}
                    </div>
                </div>
                {{/hasuserpermission}}
            </div>

        </div>
        </div>

    </div>
    </div>

</div>
</div>

{{/teacherdash}}
{{/hasteacherdash}}


{{#hasstudentdash}}
<div class="modal fade" id="studentdashslider" tabindex="-1" role="dialog" aria-labelledby="teacherdashslider" aria-hidden="true">
<div class="modal-dialog" role="document">

    <div class="modal-content">
    <div class="modal-body">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        <div class="studentdashboard">
        <div class="container-fluid">
        {{#haseditcog}}
            <div class="editcogbutton">{{{editcog}}}</div>
        {{/haseditcog}}
            <div class="row">
                    {{#studentdashboardtextbox}}
                    <div class="col-md-8">
                        <div class="studentdashboardtextbox">{{{studentdashboardtextbox}}}</div>
                    </div>
                    {{/studentdashboardtextbox}}

                    {{#hasgradebookshow}}
                    <div class="col-md-2 studentgradebook">
                        <p>{{{mygradestext}}}</p><a href="{{{gradeslinkstudent}}}" alt="{{{mygradestext}}}"><i class="fa fa-5x fa-bar-chart"></i></a>
                    </div>
                    {{/hasgradebookshow}}

                    {{#hascourseadminshow}} {{#studentcourseadminlink}}
                    <div class="col-md-2 studentadministration">
                        <p>{{{studentcoursemanage}}}</p><a href="{{{studentcourseadminlink}}}" alt="{{{studentcoursemanage}}}"><i class="fa fa-5x fa-cog"></i></a>
                    </div>
                    {{/studentcourseadminlink}} {{/hascourseadminshow}}
                </div>

            <div class="row">
                    <div class="col-md-4 coursesummary">
                    {{#hascourseinfogroup}}
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="card-block">
                                {{#courseinfo}}
                                    {{{content}}}
                                {{/courseinfo}}
                            </div>
                    {{/hascourseinfogroup}}
                    </div>

                    <div class="col-md-5 coursestafflisting">
                    {{#hascoursestaffgroup}}
                        <div class="dashtitle">
                            <h3><i class="fa fa-{{{icon}}}">&nbsp</i>{{{title}}}</h3>
                        </div>
                            <div class="list-group">
                                {{#courseteachers}}
                                <div class="list-group-item">
                                    <div class="staffmember">
                                        {{{picture}}}
                                        <div class="staffinfo">
                                            <h4>{{{name}}}</h4>
                                            <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                        </div>
                                    </div>
                                </div>
                                {{/courseteachers}}
                            </div>
                            <div class="list-group">
                            {{#courseother}}
                            <div class="list-group-item">
                            <div class="staffmember">
                                {{{picture}}}
                                <div class="staffinfo">
                                    <h4>{{{name}}}</h4>
                                    <p>{{#hasemail}}<a href="mailto:{{{email}}}"><i class="fa fa-envelope-o">&nbsp</i>{{#str}}email, moodle{{/str}}</a>{{/hasemail}} <br /> {{#hasmessaging}}<a href="{{{messaging}}}"><i class="fa fa-comment">&nbsp</i>{{#str}}sendmessage, message{{/str}}</a>{{/hasmessaging}}</p>
                                </div>
                            </div>
                            </div>
                        {{/courseother}}
                        </div>
                    {{/hascoursestaffgroup}}
                    </div>

                    <div class="col-md-3 activitylinks">
                        <div class="dashtitle">
                            <h3><i class="fa fa-check-square-o dashicon"></i>{{{activitylinkstitle}}}</h3>     
                        </div>
                        <div class="list-group">
                            {{{courseactivities}}}
                        </div>
                    </div>
                </div>
                {{#hascompletionshow}}
                <div class="col-md-12 studentprogress">
                    {{#str}}myprogresstext, theme_fordson{{/str}} 
                    {{{progress}}}
                </div>
                {{/hascompletionshow}}
        </div>
        </div>

    </div>
    </div>

</div>
</div>

{{/hasstudentdash}}
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
                
                // 'hasteacherdash' section
                $value = $context->find('hasteacherdash');
                $buffer .= $this->section4b69758ef31650b45334211c55da96cf($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                // 'hasstudentdash' section
                $value = $context->find('hasstudentdash');
                $buffer .= $this->section34aa1dc0e4db6910df68a087947ce621($context, $indent, $value);
                $buffer .= $indent . '<div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
