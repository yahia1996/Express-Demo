<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_f95662457f493dd7c7e8781c53aff4517fc9352d6e5248d270f929bc7343fe62 extends Twig_Template
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
        $__internal_6737e3c0d91094c4a3e11a4959e7115ff19fd99cea3af285dfbb4a39da137feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6737e3c0d91094c4a3e11a4959e7115ff19fd99cea3af285dfbb4a39da137feb->enter($__internal_6737e3c0d91094c4a3e11a4959e7115ff19fd99cea3af285dfbb4a39da137feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_4d137335727cf73f9ebc95ba0f943d7214b3bad81a11180d689910a0573ae484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d137335727cf73f9ebc95ba0f943d7214b3bad81a11180d689910a0573ae484->enter($__internal_4d137335727cf73f9ebc95ba0f943d7214b3bad81a11180d689910a0573ae484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_6737e3c0d91094c4a3e11a4959e7115ff19fd99cea3af285dfbb4a39da137feb->leave($__internal_6737e3c0d91094c4a3e11a4959e7115ff19fd99cea3af285dfbb4a39da137feb_prof);

        
        $__internal_4d137335727cf73f9ebc95ba0f943d7214b3bad81a11180d689910a0573ae484->leave($__internal_4d137335727cf73f9ebc95ba0f943d7214b3bad81a11180d689910a0573ae484_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
