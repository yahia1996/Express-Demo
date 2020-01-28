<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_e77d6b3a978f86aaf847189326c9c93ec04405110a5a39999e6a2c576f71e329 extends Twig_Template
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
        $__internal_63e3422002379427109d91f100262fa7c6292106d8cc742ebca53018d84b66d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e3422002379427109d91f100262fa7c6292106d8cc742ebca53018d84b66d2->enter($__internal_63e3422002379427109d91f100262fa7c6292106d8cc742ebca53018d84b66d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_3dd41442d83972c8fc31c5ec148a4058251618b728109b059e736bd14789abcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd41442d83972c8fc31c5ec148a4058251618b728109b059e736bd14789abcd->enter($__internal_3dd41442d83972c8fc31c5ec148a4058251618b728109b059e736bd14789abcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_63e3422002379427109d91f100262fa7c6292106d8cc742ebca53018d84b66d2->leave($__internal_63e3422002379427109d91f100262fa7c6292106d8cc742ebca53018d84b66d2_prof);

        
        $__internal_3dd41442d83972c8fc31c5ec148a4058251618b728109b059e736bd14789abcd->leave($__internal_3dd41442d83972c8fc31c5ec148a4058251618b728109b059e736bd14789abcd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
