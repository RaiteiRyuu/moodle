<?php

class __Mustache_928974e32291312acdac0d63cb2a6dbd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'hasfpslideshow' section
        $value = $context->find('hasfpslideshow');
        $buffer .= $this->sectionF7bdbe845d93f3a3757439566389487b($context, $indent, $value);

        return $buffer;
    }

    private function sectionF3590b091c75f39cdd586400a3622613(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li data-target="#fordsoncarousel" data-slide-to="0" class="active"></li>';
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
                
                $buffer .= '<li data-target="#fordsoncarousel" data-slide-to="0" class="active"></li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ea2628ed3ed44ef4065d7a319c80d19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li data-target="#fordsoncarousel" data-slide-to="1"></li>';
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
                
                $buffer .= '<li data-target="#fordsoncarousel" data-slide-to="1"></li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBebb778f6c14cb5b287ef5fed6fd469f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li data-target="#fordsoncarousel" data-slide-to="2"></li>';
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
                
                $buffer .= '<li data-target="#fordsoncarousel" data-slide-to="2"></li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDcaa0090fb41a3d4f810d6fd7902387d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="carousel-caption d-none d-sm-block">
        <h3>{{{slidetitle}}}</h3>
        <p>{{{slidecontent}}}</p>
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
                
                $buffer .= $indent . '      <div class="carousel-caption d-none d-sm-block">
';
                $buffer .= $indent . '        <h3>';
                $value = $this->resolveValue($context->find('slidetitle'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('slidecontent'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dcae1877a5d6f1372998f04344910c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{#slide1}}
      <div class="carousel-caption d-none d-sm-block">
        <h3>{{{slidetitle}}}</h3>
        <p>{{{slidecontent}}}</p>
      </div>
      {{/slide1}}
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
                
                // 'slide1' section
                $value = $context->find('slide1');
                $buffer .= $this->sectionDcaa0090fb41a3d4f810d6fd7902387d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa86d52183ee8b05cedce83a37624c27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="carousel-item active">
      <div class="slide1image"></div>
      {{#showtext1}}
      {{#slide1}}
      <div class="carousel-caption d-none d-sm-block">
        <h3>{{{slidetitle}}}</h3>
        <p>{{{slidecontent}}}</p>
      </div>
      {{/slide1}}
      {{/showtext1}}
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
                
                $buffer .= $indent . '    <div class="carousel-item active">
';
                $buffer .= $indent . '      <div class="slide1image"></div>
';
                // 'showtext1' section
                $value = $context->find('showtext1');
                $buffer .= $this->section9dcae1877a5d6f1372998f04344910c6($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2bc94ca97e5f9c6718df0a0d00afe9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{#slide2}}
      <div class="carousel-caption d-none d-sm-block">
        <h3>{{{slidetitle}}}</h3>
        <p>{{{slidecontent}}}</p>
      </div>
      {{/slide2}}
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
                
                // 'slide2' section
                $value = $context->find('slide2');
                $buffer .= $this->sectionDcaa0090fb41a3d4f810d6fd7902387d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd0edb81fbdb3d449c2460c56c2da838(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="carousel-item">
      <div class="slide2image"></div>
      {{#showtext2}}
      {{#slide2}}
      <div class="carousel-caption d-none d-sm-block">
        <h3>{{{slidetitle}}}</h3>
        <p>{{{slidecontent}}}</p>
      </div>
      {{/slide2}}
      {{/showtext2}}
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
                
                $buffer .= $indent . '    <div class="carousel-item">
';
                $buffer .= $indent . '      <div class="slide2image"></div>
';
                // 'showtext2' section
                $value = $context->find('showtext2');
                $buffer .= $this->sectionA2bc94ca97e5f9c6718df0a0d00afe9f($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9de0dd924aa12c70ff9fba53fe23722(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{#slide3}}
      <div class="carousel-caption d-none d-sm-block">
        <h3>{{{slidetitle}}}</h3>
        <p>{{{slidecontent}}}</p>
      </div>
      {{/slide3}}
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
                
                // 'slide3' section
                $value = $context->find('slide3');
                $buffer .= $this->sectionDcaa0090fb41a3d4f810d6fd7902387d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2905d7857141cfc0f9f59e058c13251(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="carousel-item">
      <div class="slide3image"></div>
      {{#showtext3}}
      {{#slide3}}
      <div class="carousel-caption d-none d-sm-block">
        <h3>{{{slidetitle}}}</h3>
        <p>{{{slidecontent}}}</p>
      </div>
      {{/slide3}}
      {{/showtext3}}
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
                
                $buffer .= $indent . '    <div class="carousel-item">
';
                $buffer .= $indent . '      <div class="slide3image"></div>
';
                // 'showtext3' section
                $value = $context->find('showtext3');
                $buffer .= $this->sectionF9de0dd924aa12c70ff9fba53fe23722($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7bdbe845d93f3a3757439566389487b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

<div id="fordsoncarousel" class="carousel slide carousel-fade d-none d-sm-block" data-ride="carousel">

  <ol class="carousel-indicators">
    {{#hasslide1}}<li data-target="#fordsoncarousel" data-slide-to="0" class="active"></li>{{/hasslide1}}
    {{#hasslide2}}<li data-target="#fordsoncarousel" data-slide-to="1"></li>{{/hasslide2}}
    {{#hasslide3}}<li data-target="#fordsoncarousel" data-slide-to="2"></li>{{/hasslide3}}
  </ol>

<div class="carousel-inner" role="listbox">

    {{#hasslide1}}
    <div class="carousel-item active">
      <div class="slide1image"></div>
      {{#showtext1}}
      {{#slide1}}
      <div class="carousel-caption d-none d-sm-block">
        <h3>{{{slidetitle}}}</h3>
        <p>{{{slidecontent}}}</p>
      </div>
      {{/slide1}}
      {{/showtext1}}
    </div>
    {{/hasslide1}}
    
    {{#hasslide2}}
    <div class="carousel-item">
      <div class="slide2image"></div>
      {{#showtext2}}
      {{#slide2}}
      <div class="carousel-caption d-none d-sm-block">
        <h3>{{{slidetitle}}}</h3>
        <p>{{{slidecontent}}}</p>
      </div>
      {{/slide2}}
      {{/showtext2}}
    </div>
    {{/hasslide2}}

    {{#hasslide3}}
    <div class="carousel-item">
      <div class="slide3image"></div>
      {{#showtext3}}
      {{#slide3}}
      <div class="carousel-caption d-none d-sm-block">
        <h3>{{{slidetitle}}}</h3>
        <p>{{{slidecontent}}}</p>
      </div>
      {{/slide3}}
      {{/showtext3}}
    </div>
    {{/hasslide3}}

</div>
    <a class="left carousel-control" href="#fordsoncarousel" role="button" data-slide="prev">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#fordsoncarousel" role="button" data-slide="next">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
      <span class="sr-only">Next</span>
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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div id="fordsoncarousel" class="carousel slide carousel-fade d-none d-sm-block" data-ride="carousel">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <ol class="carousel-indicators">
';
                $buffer .= $indent . '    ';
                // 'hasslide1' section
                $value = $context->find('hasslide1');
                $buffer .= $this->sectionF3590b091c75f39cdd586400a3622613($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                // 'hasslide2' section
                $value = $context->find('hasslide2');
                $buffer .= $this->section8ea2628ed3ed44ef4065d7a319c80d19($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    ';
                // 'hasslide3' section
                $value = $context->find('hasslide3');
                $buffer .= $this->sectionBebb778f6c14cb5b287ef5fed6fd469f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '  </ol>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="carousel-inner" role="listbox">
';
                $buffer .= $indent . '
';
                // 'hasslide1' section
                $value = $context->find('hasslide1');
                $buffer .= $this->sectionDa86d52183ee8b05cedce83a37624c27($context, $indent, $value);
                $buffer .= $indent . '    
';
                // 'hasslide2' section
                $value = $context->find('hasslide2');
                $buffer .= $this->sectionFd0edb81fbdb3d449c2460c56c2da838($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasslide3' section
                $value = $context->find('hasslide3');
                $buffer .= $this->sectionC2905d7857141cfc0f9f59e058c13251($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '    <a class="left carousel-control" href="#fordsoncarousel" role="button" data-slide="prev">
';
                $buffer .= $indent . '      <i class="fa fa-chevron-left" aria-hidden="true"></i>
';
                $buffer .= $indent . '      <span class="sr-only">Previous</span>
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    <a class="right carousel-control" href="#fordsoncarousel" role="button" data-slide="next">
';
                $buffer .= $indent . '      <i class="fa fa-chevron-right" aria-hidden="true"></i>
';
                $buffer .= $indent . '      <span class="sr-only">Next</span>
';
                $buffer .= $indent . '    </a>
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

}
