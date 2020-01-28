<?php

/* @moriven/public/js/easing.js */
class __TwigTemplate_d152bb297830961aeecc03e84da0799200437b9dd623e9d9a2d60bad5ea03c97 extends Twig_Template
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
        $__internal_274b6d9aaf522f51be69a6197ca742d046ec7ec2061d893c0e7c0c1c4cbe9e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274b6d9aaf522f51be69a6197ca742d046ec7ec2061d893c0e7c0c1c4cbe9e3c->enter($__internal_274b6d9aaf522f51be69a6197ca742d046ec7ec2061d893c0e7c0c1c4cbe9e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/public/js/easing.js"));

        $__internal_a789fc1c6dea7cedcb4144a0fea1af7e7b134421bb4a1bb99f86ef31c957f361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a789fc1c6dea7cedcb4144a0fea1af7e7b134421bb4a1bb99f86ef31c957f361->enter($__internal_a789fc1c6dea7cedcb4144a0fea1af7e7b134421bb4a1bb99f86ef31c957f361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/public/js/easing.js"));

        // line 1
        echo "/*
 * jQuery EasIng v1.1.2 - http://gsgd.co.uk/sandbox/jquery.easIng.php
 *
 * Uses the built In easIng capabilities added In jQuery 1.1
 * to offer multiple easIng options
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */

// t: current time, b: begInnIng value, c: change In value, d: duration

jQuery.extend( jQuery.easing,
{
\teaseInQuad: function (x, t, b, c, d) {
\t\treturn c*(t/=d)*t + b;
\t},
\teaseOutQuad: function (x, t, b, c, d) {
\t\treturn -c *(t/=d)*(t-2) + b;
\t},
\teaseInOutQuad: function (x, t, b, c, d) {
\t\tif ((t/=d/2) < 1) return c/2*t*t + b;
\t\treturn -c/2 * ((--t)*(t-2) - 1) + b;
\t},
\teaseInCubic: function (x, t, b, c, d) {
\t\treturn c*(t/=d)*t*t + b;
\t},
\teaseOutCubic: function (x, t, b, c, d) {
\t\treturn c*((t=t/d-1)*t*t + 1) + b;
\t},
\teaseInOutCubic: function (x, t, b, c, d) {
\t\tif ((t/=d/2) < 1) return c/2*t*t*t + b;
\t\treturn c/2*((t-=2)*t*t + 2) + b;
\t},
\teaseInQuart: function (x, t, b, c, d) {
\t\treturn c*(t/=d)*t*t*t + b;
\t},
\teaseOutQuart: function (x, t, b, c, d) {
\t\treturn -c * ((t=t/d-1)*t*t*t - 1) + b;
\t},
\teaseInOutQuart: function (x, t, b, c, d) {
\t\tif ((t/=d/2) < 1) return c/2*t*t*t*t + b;
\t\treturn -c/2 * ((t-=2)*t*t*t - 2) + b;
\t},
\teaseInQuint: function (x, t, b, c, d) {
\t\treturn c*(t/=d)*t*t*t*t + b;
\t},
\teaseOutQuint: function (x, t, b, c, d) {
\t\treturn c*((t=t/d-1)*t*t*t*t + 1) + b;
\t},
\teaseInOutQuint: function (x, t, b, c, d) {
\t\tif ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
\t\treturn c/2*((t-=2)*t*t*t*t + 2) + b;
\t},
\teaseInSine: function (x, t, b, c, d) {
\t\treturn -c * Math.cos(t/d * (Math.PI/2)) + c + b;
\t},
\teaseOutSine: function (x, t, b, c, d) {
\t\treturn c * Math.sin(t/d * (Math.PI/2)) + b;
\t},
\teaseInOutSine: function (x, t, b, c, d) {
\t\treturn -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
\t},
\teaseInExpo: function (x, t, b, c, d) {
\t\treturn (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
\t},
\teaseOutExpo: function (x, t, b, c, d) {
\t\treturn (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
\t},
\teaseInOutExpo: function (x, t, b, c, d) {
\t\tif (t==0) return b;
\t\tif (t==d) return b+c;
\t\tif ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
\t\treturn c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
\t},
\teaseInCirc: function (x, t, b, c, d) {
\t\treturn -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
\t},
\teaseOutCirc: function (x, t, b, c, d) {
\t\treturn c * Math.sqrt(1 - (t=t/d-1)*t) + b;
\t},
\teaseInOutCirc: function (x, t, b, c, d) {
\t\tif ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
\t\treturn c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
\t},
\teaseInElastic: function (x, t, b, c, d) {
\t\tvar s=1.70158;var p=0;var a=c;
\t\tif (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
\t\tif (a < Math.abs(c)) { a=c; var s=p/4; }
\t\telse var s = p/(2*Math.PI) * Math.asin (c/a);
\t\treturn -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
\t},
\teaseOutElastic: function (x, t, b, c, d) {
\t\tvar s=1.70158;var p=0;var a=c;
\t\tif (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
\t\tif (a < Math.abs(c)) { a=c; var s=p/4; }
\t\telse var s = p/(2*Math.PI) * Math.asin (c/a);
\t\treturn a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
\t},
\teaseInOutElastic: function (x, t, b, c, d) {
\t\tvar s=1.70158;var p=0;var a=c;
\t\tif (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
\t\tif (a < Math.abs(c)) { a=c; var s=p/4; }
\t\telse var s = p/(2*Math.PI) * Math.asin (c/a);
\t\tif (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
\t\treturn a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
\t},
\teaseInBack: function (x, t, b, c, d, s) {
\t\tif (s == undefined) s = 1.70158;
\t\treturn c*(t/=d)*t*((s+1)*t - s) + b;
\t},
\teaseOutBack: function (x, t, b, c, d, s) {
\t\tif (s == undefined) s = 1.70158;
\t\treturn c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
\t},
\teaseInOutBack: function (x, t, b, c, d, s) {
\t\tif (s == undefined) s = 1.70158; 
\t\tif ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
\t\treturn c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
\t},
\teaseInBounce: function (x, t, b, c, d) {
\t\treturn c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
\t},
\teaseOutBounce: function (x, t, b, c, d) {
\t\tif ((t/=d) < (1/2.75)) {
\t\t\treturn c*(7.5625*t*t) + b;
\t\t} else if (t < (2/2.75)) {
\t\t\treturn c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
\t\t} else if (t < (2.5/2.75)) {
\t\t\treturn c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
\t\t} else {
\t\t\treturn c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
\t\t}
\t},
\teaseInOutBounce: function (x, t, b, c, d) {
\t\tif (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
\t\treturn jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
\t}
});

";
        
        $__internal_274b6d9aaf522f51be69a6197ca742d046ec7ec2061d893c0e7c0c1c4cbe9e3c->leave($__internal_274b6d9aaf522f51be69a6197ca742d046ec7ec2061d893c0e7c0c1c4cbe9e3c_prof);

        
        $__internal_a789fc1c6dea7cedcb4144a0fea1af7e7b134421bb4a1bb99f86ef31c957f361->leave($__internal_a789fc1c6dea7cedcb4144a0fea1af7e7b134421bb4a1bb99f86ef31c957f361_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/public/js/easing.js";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 * jQuery EasIng v1.1.2 - http://gsgd.co.uk/sandbox/jquery.easIng.php
 *
 * Uses the built In easIng capabilities added In jQuery 1.1
 * to offer multiple easIng options
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */

// t: current time, b: begInnIng value, c: change In value, d: duration

jQuery.extend( jQuery.easing,
{
\teaseInQuad: function (x, t, b, c, d) {
\t\treturn c*(t/=d)*t + b;
\t},
\teaseOutQuad: function (x, t, b, c, d) {
\t\treturn -c *(t/=d)*(t-2) + b;
\t},
\teaseInOutQuad: function (x, t, b, c, d) {
\t\tif ((t/=d/2) < 1) return c/2*t*t + b;
\t\treturn -c/2 * ((--t)*(t-2) - 1) + b;
\t},
\teaseInCubic: function (x, t, b, c, d) {
\t\treturn c*(t/=d)*t*t + b;
\t},
\teaseOutCubic: function (x, t, b, c, d) {
\t\treturn c*((t=t/d-1)*t*t + 1) + b;
\t},
\teaseInOutCubic: function (x, t, b, c, d) {
\t\tif ((t/=d/2) < 1) return c/2*t*t*t + b;
\t\treturn c/2*((t-=2)*t*t + 2) + b;
\t},
\teaseInQuart: function (x, t, b, c, d) {
\t\treturn c*(t/=d)*t*t*t + b;
\t},
\teaseOutQuart: function (x, t, b, c, d) {
\t\treturn -c * ((t=t/d-1)*t*t*t - 1) + b;
\t},
\teaseInOutQuart: function (x, t, b, c, d) {
\t\tif ((t/=d/2) < 1) return c/2*t*t*t*t + b;
\t\treturn -c/2 * ((t-=2)*t*t*t - 2) + b;
\t},
\teaseInQuint: function (x, t, b, c, d) {
\t\treturn c*(t/=d)*t*t*t*t + b;
\t},
\teaseOutQuint: function (x, t, b, c, d) {
\t\treturn c*((t=t/d-1)*t*t*t*t + 1) + b;
\t},
\teaseInOutQuint: function (x, t, b, c, d) {
\t\tif ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
\t\treturn c/2*((t-=2)*t*t*t*t + 2) + b;
\t},
\teaseInSine: function (x, t, b, c, d) {
\t\treturn -c * Math.cos(t/d * (Math.PI/2)) + c + b;
\t},
\teaseOutSine: function (x, t, b, c, d) {
\t\treturn c * Math.sin(t/d * (Math.PI/2)) + b;
\t},
\teaseInOutSine: function (x, t, b, c, d) {
\t\treturn -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
\t},
\teaseInExpo: function (x, t, b, c, d) {
\t\treturn (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
\t},
\teaseOutExpo: function (x, t, b, c, d) {
\t\treturn (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
\t},
\teaseInOutExpo: function (x, t, b, c, d) {
\t\tif (t==0) return b;
\t\tif (t==d) return b+c;
\t\tif ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
\t\treturn c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
\t},
\teaseInCirc: function (x, t, b, c, d) {
\t\treturn -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
\t},
\teaseOutCirc: function (x, t, b, c, d) {
\t\treturn c * Math.sqrt(1 - (t=t/d-1)*t) + b;
\t},
\teaseInOutCirc: function (x, t, b, c, d) {
\t\tif ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
\t\treturn c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
\t},
\teaseInElastic: function (x, t, b, c, d) {
\t\tvar s=1.70158;var p=0;var a=c;
\t\tif (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
\t\tif (a < Math.abs(c)) { a=c; var s=p/4; }
\t\telse var s = p/(2*Math.PI) * Math.asin (c/a);
\t\treturn -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
\t},
\teaseOutElastic: function (x, t, b, c, d) {
\t\tvar s=1.70158;var p=0;var a=c;
\t\tif (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
\t\tif (a < Math.abs(c)) { a=c; var s=p/4; }
\t\telse var s = p/(2*Math.PI) * Math.asin (c/a);
\t\treturn a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
\t},
\teaseInOutElastic: function (x, t, b, c, d) {
\t\tvar s=1.70158;var p=0;var a=c;
\t\tif (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
\t\tif (a < Math.abs(c)) { a=c; var s=p/4; }
\t\telse var s = p/(2*Math.PI) * Math.asin (c/a);
\t\tif (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
\t\treturn a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
\t},
\teaseInBack: function (x, t, b, c, d, s) {
\t\tif (s == undefined) s = 1.70158;
\t\treturn c*(t/=d)*t*((s+1)*t - s) + b;
\t},
\teaseOutBack: function (x, t, b, c, d, s) {
\t\tif (s == undefined) s = 1.70158;
\t\treturn c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
\t},
\teaseInOutBack: function (x, t, b, c, d, s) {
\t\tif (s == undefined) s = 1.70158; 
\t\tif ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
\t\treturn c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
\t},
\teaseInBounce: function (x, t, b, c, d) {
\t\treturn c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
\t},
\teaseOutBounce: function (x, t, b, c, d) {
\t\tif ((t/=d) < (1/2.75)) {
\t\t\treturn c*(7.5625*t*t) + b;
\t\t} else if (t < (2/2.75)) {
\t\t\treturn c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
\t\t} else if (t < (2.5/2.75)) {
\t\t\treturn c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
\t\t} else {
\t\t\treturn c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
\t\t}
\t},
\teaseInOutBounce: function (x, t, b, c, d) {
\t\tif (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
\t\treturn jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
\t}
});

", "@moriven/public/js/easing.js", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/public/js/easing.js");
    }
}
