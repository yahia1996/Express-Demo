<?php

/* @moriven/public/js/minimal-slider.js */
class __TwigTemplate_6cbc5c59eab3175d4abb4d7c81836a047ba2c0757f02d31cf77b626ada1b1417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5a17b1e3c813ae76c69ce4cf20486f7d7541c68103caeb8d92a3043fd1844b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a17b1e3c813ae76c69ce4cf20486f7d7541c68103caeb8d92a3043fd1844b8->enter($__internal_b5a17b1e3c813ae76c69ce4cf20486f7d7541c68103caeb8d92a3043fd1844b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/public/js/minimal-slider.js"));

        $__internal_df0ef9703e93021ce693abbf8ea83bf05330fc47bd9095bf57a4b24ce82c57db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0ef9703e93021ce693abbf8ea83bf05330fc47bd9095bf57a4b24ce82c57db->enter($__internal_df0ef9703e93021ce693abbf8ea83bf05330fc47bd9095bf57a4b24ce82c57db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/public/js/minimal-slider.js"));

        // line 1
        echo "\$(document).ready(function(){
  if (\$('.slide-window')) {

    var slideNum = \$('.slide').length - 1
    var maxSlideNum = \$('.slide').length - 1
    var slideWidth = \$('.slide-window').outerWidth()
    var slideSetWidth = slideWidth * slideNum
    var controlSlideBtnLeft = '.slide-control-left'
    var controlSlideBtnRight = '.slide-control-right'
    var controlSlideBtnList = '.slide-control-btn ul li a'

    addSlideCtlBtn()

    var slideCurrent = 0
    var slideActiveBtn = 0
    var rotationInterval = setInterval(function(){
      slideCurrent++
      if (slideCurrent > maxSlideNum) {
        slideCurrent = 0
      }
      activation()
      sliding()
    }, 10000)

    \$(controlSlideBtnLeft).on('click', function(){
      resetInterval()
      slideCurrent--
      if (slideCurrent < 0) {
        slideCurrent = maxSlideNum
      }
      activation()
      rotateArrow('left')
      sliding()
    })
    \$(controlSlideBtnRight).on('click', function(){
      resetInterval()
      slideCurrent++
      if (slideCurrent > maxSlideNum) {
        slideCurrent = 0
      }
      activation()
      rotateArrow('right')
      sliding()
    })
    \$(controlSlideBtnList).on('click', function(){
      resetInterval()
      slideCurrent = \$(controlSlideBtnList).index(this)
      activation()
      sliding()
    })

    function addSlideCtlBtn() {
      var slideCtlBtn = '<div class=\"slide-control-btn\"><ul>'
      for (var i = 0; i <= maxSlideNum; i++) {
        if (i==0) {
          slideCtlBtn += '<li><a class=\"active\"></a></li>'
        }
        else {
          slideCtlBtn += '<li><a class=\"\"></a></li>'
        }
      }
      slideCtlBtn += '</ul></div>'
      \$('.slide-controller').append(slideCtlBtn)
    }
    function resetInterval() {
      clearInterval(rotationInterval)
      rotationInterval = setInterval(function(){
        slideCurrent++
        if (slideCurrent > maxSlideNum) {
          slideCurrent = 0
        }
        activation()
        sliding()
      }, 10000)
    }
    function activation() {
      slideActiveBtn = slideCurrent + 1
      \$( controlSlideBtnList + '.active' ).removeClass()
      \$('.slide-control-btn ul li:nth-child(' + slideActiveBtn + ') a').addClass('active')
    }
    function rotateArrow(direction) {
      var slideCtlLine1 = '.slide-control-' + direction + ' .slide-control-line:nth-child(1)'
      var slideCtlLine2 = '.slide-control-' + direction + ' .slide-control-line:nth-child(2)'
      \$(slideCtlLine1).removeClass('rotate-' + direction + '-top')
      \$(slideCtlLine2).removeClass('rotate-' + direction + '-down')
      \$(slideCtlLine1).outerWidth()
      \$(slideCtlLine2).outerWidth()
      \$(slideCtlLine1).addClass('rotate-' + direction + '-top')
      \$(slideCtlLine2).addClass('rotate-' + direction + '-down')
    }
    function sliding() {
      \$('.slide-wrapper').css('left', slideCurrent * -slideWidth)
    }
  }
})
";
        
        $__internal_b5a17b1e3c813ae76c69ce4cf20486f7d7541c68103caeb8d92a3043fd1844b8->leave($__internal_b5a17b1e3c813ae76c69ce4cf20486f7d7541c68103caeb8d92a3043fd1844b8_prof);

        
        $__internal_df0ef9703e93021ce693abbf8ea83bf05330fc47bd9095bf57a4b24ce82c57db->leave($__internal_df0ef9703e93021ce693abbf8ea83bf05330fc47bd9095bf57a4b24ce82c57db_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/public/js/minimal-slider.js";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\$(document).ready(function(){
  if (\$('.slide-window')) {

    var slideNum = \$('.slide').length - 1
    var maxSlideNum = \$('.slide').length - 1
    var slideWidth = \$('.slide-window').outerWidth()
    var slideSetWidth = slideWidth * slideNum
    var controlSlideBtnLeft = '.slide-control-left'
    var controlSlideBtnRight = '.slide-control-right'
    var controlSlideBtnList = '.slide-control-btn ul li a'

    addSlideCtlBtn()

    var slideCurrent = 0
    var slideActiveBtn = 0
    var rotationInterval = setInterval(function(){
      slideCurrent++
      if (slideCurrent > maxSlideNum) {
        slideCurrent = 0
      }
      activation()
      sliding()
    }, 10000)

    \$(controlSlideBtnLeft).on('click', function(){
      resetInterval()
      slideCurrent--
      if (slideCurrent < 0) {
        slideCurrent = maxSlideNum
      }
      activation()
      rotateArrow('left')
      sliding()
    })
    \$(controlSlideBtnRight).on('click', function(){
      resetInterval()
      slideCurrent++
      if (slideCurrent > maxSlideNum) {
        slideCurrent = 0
      }
      activation()
      rotateArrow('right')
      sliding()
    })
    \$(controlSlideBtnList).on('click', function(){
      resetInterval()
      slideCurrent = \$(controlSlideBtnList).index(this)
      activation()
      sliding()
    })

    function addSlideCtlBtn() {
      var slideCtlBtn = '<div class=\"slide-control-btn\"><ul>'
      for (var i = 0; i <= maxSlideNum; i++) {
        if (i==0) {
          slideCtlBtn += '<li><a class=\"active\"></a></li>'
        }
        else {
          slideCtlBtn += '<li><a class=\"\"></a></li>'
        }
      }
      slideCtlBtn += '</ul></div>'
      \$('.slide-controller').append(slideCtlBtn)
    }
    function resetInterval() {
      clearInterval(rotationInterval)
      rotationInterval = setInterval(function(){
        slideCurrent++
        if (slideCurrent > maxSlideNum) {
          slideCurrent = 0
        }
        activation()
        sliding()
      }, 10000)
    }
    function activation() {
      slideActiveBtn = slideCurrent + 1
      \$( controlSlideBtnList + '.active' ).removeClass()
      \$('.slide-control-btn ul li:nth-child(' + slideActiveBtn + ') a').addClass('active')
    }
    function rotateArrow(direction) {
      var slideCtlLine1 = '.slide-control-' + direction + ' .slide-control-line:nth-child(1)'
      var slideCtlLine2 = '.slide-control-' + direction + ' .slide-control-line:nth-child(2)'
      \$(slideCtlLine1).removeClass('rotate-' + direction + '-top')
      \$(slideCtlLine2).removeClass('rotate-' + direction + '-down')
      \$(slideCtlLine1).outerWidth()
      \$(slideCtlLine2).outerWidth()
      \$(slideCtlLine1).addClass('rotate-' + direction + '-top')
      \$(slideCtlLine2).addClass('rotate-' + direction + '-down')
    }
    function sliding() {
      \$('.slide-wrapper').css('left', slideCurrent * -slideWidth)
    }
  }
})
", "@moriven/public/js/minimal-slider.js", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/public/js/minimal-slider.js");
    }
}
