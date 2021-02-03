<?php

class __Mustache_e403ff55b8fbbd38b1ac6cda4426988d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<footer id="page-footer" class="py-3 bg-dark text-light">
';
        // 'footerblock' section
        $value = $context->find('footerblock');
        $buffer .= $this->sectionB2cc6d5bc6098af66ca4171d4e9c32c3($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '  </footer>
';
        $buffer .= $indent . '<!--E.O.Footer-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer>
';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '</footer>
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section118dc35aa27e33b5ed6706019f637f46($context, $indent, $value);

        return $buffer;
    }

    private function section43694ffa4b037f99c637ea69a3baf707(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-logo">
                <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
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
                
                $buffer .= $indent . '            <div class="footer-logo">
';
                $buffer .= $indent . '                <a href="#"><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="100" height="100" alt="Academi"></a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB13bef09a8b3c45951448abd998e59d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#logourl}}
            <div class="footer-logo">
                <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
            </div>
            {{/logourl}}
            
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
                
                // 'logourl' section
                $value = $context->find('logourl');
                $buffer .= $this->section43694ffa4b037f99c637ea69a3baf707($context, $indent, $value);
                $buffer .= $indent . '            
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7180da2b960b5c693a45d7384f7231e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h2>{{s_info}}</h2>
             <ul>
                {{{infolink}}}
             </ul>
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
                
                $buffer .= $indent . '            <h2>';
                $value = $this->resolveValue($context->find('s_info'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '             <ul>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('infolink'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '             </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2dc230eaa5f231a2c48da121e346b77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{address}}';
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
                
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE68ffa616fca590216d7472825900c9e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}<br>
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
                
                $buffer .= $indent . '              <i class="fa fa-phone-square"></i> ';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f1c42b1aca4b037451b78bfd7c48d50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a><br>
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
                
                $buffer .= $indent . '              <i class="fa fa-envelope"></i> ';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' : <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a><br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87d5f2e0f3db0fa6b567b984dbda275e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
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
                
                $buffer .= $indent . '                <li class="smedia-01"><a href="';
                $value = $this->resolveValue($context->find('fburl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><i class="fa fa-facebook-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d29f683d320dcc98171a87a3587bfba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
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
                
                $buffer .= $indent . '               <li class="smedia-02"><a href="';
                $value = $this->resolveValue($context->find('pinurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><i class="fa fa-pinterest-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9efe35cef4cd5ae7921abe6c2952f2bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
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
                
                $buffer .= $indent . '                <li class="smedia-03"><a href="';
                $value = $this->resolveValue($context->find('twurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><i class="fa fa-twitter-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfa559aee6cdb627dc0bcabe8cf79090(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
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
                
                $buffer .= $indent . '                <li class="smedia-04"><a href="';
                $value = $this->resolveValue($context->find('gpurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><i class="fa fa-google-plus-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f49e5ab41ddd77d5a7c105ed8dc643f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="social-media">
            <h6>{{s_followus}}</h6>
            <ul>
             {{# fburl}}
                <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
            {{/ fburl}}
            {{# pinurl}}
               <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
            {{/ pinurl}}
            {{# twurl}}
                <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
            {{/ twurl}}
            {{# gpurl}}
                <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
            {{/ gpurl}}
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
                
                $buffer .= $indent . '          <div class="social-media">
';
                $buffer .= $indent . '            <h6>';
                $value = $this->resolveValue($context->find('s_followus'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '            <ul>
';
                // 'fburl' section
                $value = $context->find('fburl');
                $buffer .= $this->section87d5f2e0f3db0fa6b567b984dbda275e($context, $indent, $value);
                // 'pinurl' section
                $value = $context->find('pinurl');
                $buffer .= $this->section7d29f683d320dcc98171a87a3587bfba($context, $indent, $value);
                // 'twurl' section
                $value = $context->find('twurl');
                $buffer .= $this->section9efe35cef4cd5ae7921abe6c2952f2bb($context, $indent, $value);
                // 'gpurl' section
                $value = $context->find('gpurl');
                $buffer .= $this->sectionBfa559aee6cdb627dc0bcabe8cf79090($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6584ad491193158f0f3520dcf3390784(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-md-4">
          <div class="contact-info">
            <h2 class="nopadding">{{s_contact_us}}</h2>

             <p>{{# address}}{{address}}{{/ address}}<br>
            {{# phoneno}}
              <i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}<br>
            {{/ phoneno}}
            {{# emailid}}
              <i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a><br>
            {{/ emailid}}
            </p>

          </div>
         {{# url}}
          <div class="social-media">
            <h6>{{s_followus}}</h6>
            <ul>
             {{# fburl}}
                <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
            {{/ fburl}}
            {{# pinurl}}
               <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
            {{/ pinurl}}
            {{# twurl}}
                <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
            {{/ twurl}}
            {{# gpurl}}
                <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
            {{/ gpurl}}
            </ul>
          </div>
        {{/ url}}
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
                
                $buffer .= $indent . '        <div class="col-md-4">
';
                $buffer .= $indent . '          <div class="contact-info">
';
                $buffer .= $indent . '            <h2 class="nopadding">';
                $value = $this->resolveValue($context->find('s_contact_us'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '             <p>';
                // 'address' section
                $value = $context->find('address');
                $buffer .= $this->sectionB2dc230eaa5f231a2c48da121e346b77($context, $indent, $value);
                $buffer .= '<br>
';
                // 'phoneno' section
                $value = $context->find('phoneno');
                $buffer .= $this->sectionE68ffa616fca590216d7472825900c9e($context, $indent, $value);
                // 'emailid' section
                $value = $context->find('emailid');
                $buffer .= $this->section4f1c42b1aca4b037451b78bfd7c48d50($context, $indent, $value);
                $buffer .= $indent . '            </p>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '          </div>
';
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->section1f49e5ab41ddd77d5a7c105ed8dc643f($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a6267bdcac4e6562f3c093c239a23d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="footer-bootom">
        <p>{{{copyright_footer}}}</p>
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
                
                $buffer .= $indent . '    <div class="footer-bootom">
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('copyright_footer'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section288d27b4b19600bd293108e99f257c24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul class="list-unstyled pt-3">
                {{> theme_boost/custom_menu_footer }}
            </ul>
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
                
                $buffer .= $indent . '            <ul class="list-unstyled pt-3">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2cc6d5bc6098af66ca4171d4e9c32c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="footer">
    <div class="footer-main">
    <div class="container">
    <div id="course-footer">{{{ output.course_footer }}}</div>
        <div class="row">

        <div class="col-md-5">
            <div class="infoarea">
            {{#footlogo}}
            {{#logourl}}
            <div class="footer-logo">
                <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
            </div>
            {{/logourl}}
            
            {{/footlogo}}
                {{{footnote}}}
          </div>
        </div>

        <div class="col-md-3">
            <div class="foot-links">
            {{# infolink}}
            <h2>{{s_info}}</h2>
             <ul>
                {{{infolink}}}
             </ul>
             {{/ infolink}}

            <ul style="display:none;">
              <li><a href="<?php echo new moodle_url(\'/\'); ?>"><?php echo get_string(\'home\',\'theme_academi\');?></a></li>
              <li><a href="https://moodle.org/forums/" target="_blank"><?php echo get_string(\'moodle_community\',\'theme_academi\');?>Moodle community</a></li>
              <li><a href="https://docs.moodle.org" target="_blank"><?php echo get_string(\'moodle_docs\',\'theme_academi\');?>Moodle Docs</a></li>
              <li><a href="https://moodle.org/course/" target="_blank"><?php echo get_string(\'moodle_support\',\'theme_academi\');?>Moodle support</a></li>
            </ul>
          </div>
        </div>
        {{#block3}}
        <div class="col-md-4">
          <div class="contact-info">
            <h2 class="nopadding">{{s_contact_us}}</h2>

             <p>{{# address}}{{address}}{{/ address}}<br>
            {{# phoneno}}
              <i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}<br>
            {{/ phoneno}}
            {{# emailid}}
              <i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a><br>
            {{/ emailid}}
            </p>

          </div>
         {{# url}}
          <div class="social-media">
            <h6>{{s_followus}}</h6>
            <ul>
             {{# fburl}}
                <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
            {{/ fburl}}
            {{# pinurl}}
               <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
            {{/ pinurl}}
            {{# twurl}}
                <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
            {{/ twurl}}
            {{# gpurl}}
                <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
            {{/ gpurl}}
            </ul>
          </div>
        {{/ url}}
        </div>
        {{/block3}}
      </div>
    </div>
  </div>

    {{# copyright_footer}}
    <div class="footer-bootom">
        <p>{{{copyright_footer}}}</p>
    </div>
    {{/ copyright_footer}}

    <!-- <nav class="nav navbar-nav d-md-none">
        {{# output.custom_menu_flat }}
            <ul class="list-unstyled pt-3">
                {{> theme_boost/custom_menu_footer }}
            </ul>
        {{/ output.custom_menu_flat }}
    </nav> -->
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
                
                $buffer .= $indent . '<div id="footer">
';
                $buffer .= $indent . '    <div class="footer-main">
';
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '    <div id="course-footer">';
                $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="row">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="col-md-5">
';
                $buffer .= $indent . '            <div class="infoarea">
';
                // 'footlogo' section
                $value = $context->find('footlogo');
                $buffer .= $this->sectionB13bef09a8b3c45951448abd998e59d7($context, $indent, $value);
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="col-md-3">
';
                $buffer .= $indent . '            <div class="foot-links">
';
                // 'infolink' section
                $value = $context->find('infolink');
                $buffer .= $this->section7180da2b960b5c693a45d7384f7231e7($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <ul style="display:none;">
';
                $buffer .= $indent . '              <li><a href="<?php echo new moodle_url(\'/\'); ?>"><?php echo get_string(\'home\',\'theme_academi\');?></a></li>
';
                $buffer .= $indent . '              <li><a href="https://moodle.org/forums/" target="_blank"><?php echo get_string(\'moodle_community\',\'theme_academi\');?>Moodle community</a></li>
';
                $buffer .= $indent . '              <li><a href="https://docs.moodle.org" target="_blank"><?php echo get_string(\'moodle_docs\',\'theme_academi\');?>Moodle Docs</a></li>
';
                $buffer .= $indent . '              <li><a href="https://moodle.org/course/" target="_blank"><?php echo get_string(\'moodle_support\',\'theme_academi\');?>Moodle support</a></li>
';
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                // 'block3' section
                $value = $context->find('block3');
                $buffer .= $this->section6584ad491193158f0f3520dcf3390784($context, $indent, $value);
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '
';
                // 'copyright_footer' section
                $value = $context->find('copyright_footer');
                $buffer .= $this->section8a6267bdcac4e6562f3c093c239a23d5($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <!-- <nav class="nav navbar-nav d-md-none">
';
                // 'output.custom_menu_flat' section
                $value = $context->findDot('output.custom_menu_flat');
                $buffer .= $this->section288d27b4b19600bd293108e99f257c24($context, $indent, $value);
                $buffer .= $indent . '    </nav> -->
';
                $buffer .= $indent . '  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section118dc35aa27e33b5ed6706019f637f46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/loader\']);
require([\'theme_boost/drawer\'], function(mod) {
    mod.init();
});
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
                
                $buffer .= $indent . 'require([\'theme_boost/loader\']);
';
                $buffer .= $indent . 'require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '    mod.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
