<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ce609c268d3c1982023520fd6a250832ab89f17a4c6a445ab3ceac631e6e0bda extends Twig_Template
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
        $__internal_c44e36f08df7a7d7bceefb0ac580bade2fa6d3429e28d96aa8958f06fe40bda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44e36f08df7a7d7bceefb0ac580bade2fa6d3429e28d96aa8958f06fe40bda0->enter($__internal_c44e36f08df7a7d7bceefb0ac580bade2fa6d3429e28d96aa8958f06fe40bda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_1be94c433c8e687042f9ef3ad91341e3ee65ff7ef5d78f806109cc578afa6851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be94c433c8e687042f9ef3ad91341e3ee65ff7ef5d78f806109cc578afa6851->enter($__internal_1be94c433c8e687042f9ef3ad91341e3ee65ff7ef5d78f806109cc578afa6851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c44e36f08df7a7d7bceefb0ac580bade2fa6d3429e28d96aa8958f06fe40bda0->leave($__internal_c44e36f08df7a7d7bceefb0ac580bade2fa6d3429e28d96aa8958f06fe40bda0_prof);

        
        $__internal_1be94c433c8e687042f9ef3ad91341e3ee65ff7ef5d78f806109cc578afa6851->leave($__internal_1be94c433c8e687042f9ef3ad91341e3ee65ff7ef5d78f806109cc578afa6851_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
