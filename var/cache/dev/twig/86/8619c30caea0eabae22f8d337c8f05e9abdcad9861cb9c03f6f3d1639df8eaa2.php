<?php

/* @moriven/public/js/move-top.js */
class __TwigTemplate_f4d6b95ada9106abdcf1a0253e9b292ee7c85a49bd204e8aca5e4a276e9eab37 extends Twig_Template
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
        $__internal_8cd2fcc8a05cdb89b1cf7cdc09339be7061bd04f1d722247983962e84bd467b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd2fcc8a05cdb89b1cf7cdc09339be7061bd04f1d722247983962e84bd467b4->enter($__internal_8cd2fcc8a05cdb89b1cf7cdc09339be7061bd04f1d722247983962e84bd467b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/public/js/move-top.js"));

        $__internal_a2621764f1b988bae69c088568711029a9786941f6a64f07ad108ab487d49abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2621764f1b988bae69c088568711029a9786941f6a64f07ad108ab487d49abb->enter($__internal_a2621764f1b988bae69c088568711029a9786941f6a64f07ad108ab487d49abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/public/js/move-top.js"));

        // line 1
        echo "/* UItoTop jQuery Plugin 1.2 | Matt Varone | http://www.mattvarone.com/web-design/uitotop-jquery-plugin */
(function(\$){\$.fn.UItoTop=function(options){var defaults={text:'To Top',min:200,inDelay:600,outDelay:400,containerID:'toTop',containerHoverID:'toTopHover',scrollSpeed:1000,easingType:'linear'},settings=\$.extend(defaults,options),containerIDhash='#'+settings.containerID,containerHoverIDHash='#'+settings.containerHoverID;\$('body').append('<a href=\"#\" id=\"'+settings.containerID+'\">'+settings.text+'</a>');\$(containerIDhash).hide().on('click.UItoTop',function(){\$('html, body').animate({scrollTop:0},settings.scrollSpeed,settings.easingType);\$('#'+settings.containerHoverID,this).stop().animate({'opacity':0},settings.inDelay,settings.easingType);return false;}).prepend('<span id=\"'+settings.containerHoverID+'\"></span>').hover(function(){\$(containerHoverIDHash,this).stop().animate({'opacity':1},600,'linear');},function(){\$(containerHoverIDHash,this).stop().animate({'opacity':0},700,'linear');});\$(window).scroll(function(){var sd=\$(window).scrollTop();if(typeof document.body.style.maxHeight===\"undefined\"){\$(containerIDhash).css({'position':'absolute','top':sd+\$(window).height()-50});}
if(sd>settings.min)
\$(containerIDhash).fadeIn(settings.inDelay);else
\$(containerIDhash).fadeOut(settings.Outdelay);});};})(jQuery);";
        
        $__internal_8cd2fcc8a05cdb89b1cf7cdc09339be7061bd04f1d722247983962e84bd467b4->leave($__internal_8cd2fcc8a05cdb89b1cf7cdc09339be7061bd04f1d722247983962e84bd467b4_prof);

        
        $__internal_a2621764f1b988bae69c088568711029a9786941f6a64f07ad108ab487d49abb->leave($__internal_a2621764f1b988bae69c088568711029a9786941f6a64f07ad108ab487d49abb_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/public/js/move-top.js";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* UItoTop jQuery Plugin 1.2 | Matt Varone | http://www.mattvarone.com/web-design/uitotop-jquery-plugin */
(function(\$){\$.fn.UItoTop=function(options){var defaults={text:'To Top',min:200,inDelay:600,outDelay:400,containerID:'toTop',containerHoverID:'toTopHover',scrollSpeed:1000,easingType:'linear'},settings=\$.extend(defaults,options),containerIDhash='#'+settings.containerID,containerHoverIDHash='#'+settings.containerHoverID;\$('body').append('<a href=\"#\" id=\"'+settings.containerID+'\">'+settings.text+'</a>');\$(containerIDhash).hide().on('click.UItoTop',function(){\$('html, body').animate({scrollTop:0},settings.scrollSpeed,settings.easingType);\$('#'+settings.containerHoverID,this).stop().animate({'opacity':0},settings.inDelay,settings.easingType);return false;}).prepend('<span id=\"'+settings.containerHoverID+'\"></span>').hover(function(){\$(containerHoverIDHash,this).stop().animate({'opacity':1},600,'linear');},function(){\$(containerHoverIDHash,this).stop().animate({'opacity':0},700,'linear');});\$(window).scroll(function(){var sd=\$(window).scrollTop();if(typeof document.body.style.maxHeight===\"undefined\"){\$(containerIDhash).css({'position':'absolute','top':sd+\$(window).height()-50});}
if(sd>settings.min)
\$(containerIDhash).fadeIn(settings.inDelay);else
\$(containerIDhash).fadeOut(settings.Outdelay);});};})(jQuery);", "@moriven/public/js/move-top.js", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/public/js/move-top.js");
    }
}
