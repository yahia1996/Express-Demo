<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8611df57fce59f533e091e78e3a6e2164a6ed69f7419991f2439a4442f6a5098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8bee19aa5344ad92342c37fc2e13bfc2e6ba761682cee9cb4dbfcc518d9dad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bee19aa5344ad92342c37fc2e13bfc2e6ba761682cee9cb4dbfcc518d9dad4->enter($__internal_e8bee19aa5344ad92342c37fc2e13bfc2e6ba761682cee9cb4dbfcc518d9dad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_f01464223e40ade2ca1966ad402edc3a2556c8ac9a8211ad1a68b1cd6878242f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01464223e40ade2ca1966ad402edc3a2556c8ac9a8211ad1a68b1cd6878242f->enter($__internal_f01464223e40ade2ca1966ad402edc3a2556c8ac9a8211ad1a68b1cd6878242f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8bee19aa5344ad92342c37fc2e13bfc2e6ba761682cee9cb4dbfcc518d9dad4->leave($__internal_e8bee19aa5344ad92342c37fc2e13bfc2e6ba761682cee9cb4dbfcc518d9dad4_prof);

        
        $__internal_f01464223e40ade2ca1966ad402edc3a2556c8ac9a8211ad1a68b1cd6878242f->leave($__internal_f01464223e40ade2ca1966ad402edc3a2556c8ac9a8211ad1a68b1cd6878242f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc6642393ebcf23ea1ba88d6993ea2e4f3bec7c194a14d26fad54420a10b3526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6642393ebcf23ea1ba88d6993ea2e4f3bec7c194a14d26fad54420a10b3526->enter($__internal_fc6642393ebcf23ea1ba88d6993ea2e4f3bec7c194a14d26fad54420a10b3526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e48aee48475350654b73dc99111eefb16ab6372abc4f690be5a37089eec8096a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48aee48475350654b73dc99111eefb16ab6372abc4f690be5a37089eec8096a->enter($__internal_e48aee48475350654b73dc99111eefb16ab6372abc4f690be5a37089eec8096a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e48aee48475350654b73dc99111eefb16ab6372abc4f690be5a37089eec8096a->leave($__internal_e48aee48475350654b73dc99111eefb16ab6372abc4f690be5a37089eec8096a_prof);

        
        $__internal_fc6642393ebcf23ea1ba88d6993ea2e4f3bec7c194a14d26fad54420a10b3526->leave($__internal_fc6642393ebcf23ea1ba88d6993ea2e4f3bec7c194a14d26fad54420a10b3526_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
