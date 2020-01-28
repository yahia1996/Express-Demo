<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_482ffec17182a4ee754593e34b2a3330a8892657275e022df87ffb1d50ab3c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_2b41a3249bc8c0507220dd088913fbe3e4f7307aea4b6d7d8a6758f9cd01df07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b41a3249bc8c0507220dd088913fbe3e4f7307aea4b6d7d8a6758f9cd01df07->enter($__internal_2b41a3249bc8c0507220dd088913fbe3e4f7307aea4b6d7d8a6758f9cd01df07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_579926bde7e9db3d95e06e0d6d1341c349c682cbd680394c0c0229043e912366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579926bde7e9db3d95e06e0d6d1341c349c682cbd680394c0c0229043e912366->enter($__internal_579926bde7e9db3d95e06e0d6d1341c349c682cbd680394c0c0229043e912366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b41a3249bc8c0507220dd088913fbe3e4f7307aea4b6d7d8a6758f9cd01df07->leave($__internal_2b41a3249bc8c0507220dd088913fbe3e4f7307aea4b6d7d8a6758f9cd01df07_prof);

        
        $__internal_579926bde7e9db3d95e06e0d6d1341c349c682cbd680394c0c0229043e912366->leave($__internal_579926bde7e9db3d95e06e0d6d1341c349c682cbd680394c0c0229043e912366_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ce685b9e8ca67f3faadd7e00960ba0fd015682727960815ef00dde96fa27c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ce685b9e8ca67f3faadd7e00960ba0fd015682727960815ef00dde96fa27c93->enter($__internal_0ce685b9e8ca67f3faadd7e00960ba0fd015682727960815ef00dde96fa27c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8cdb673bcf0065ab7044a9b38c00d0df25f39fe87be19443389730202d8182a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdb673bcf0065ab7044a9b38c00d0df25f39fe87be19443389730202d8182a8->enter($__internal_8cdb673bcf0065ab7044a9b38c00d0df25f39fe87be19443389730202d8182a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8cdb673bcf0065ab7044a9b38c00d0df25f39fe87be19443389730202d8182a8->leave($__internal_8cdb673bcf0065ab7044a9b38c00d0df25f39fe87be19443389730202d8182a8_prof);

        
        $__internal_0ce685b9e8ca67f3faadd7e00960ba0fd015682727960815ef00dde96fa27c93->leave($__internal_0ce685b9e8ca67f3faadd7e00960ba0fd015682727960815ef00dde96fa27c93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
