<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_07e94617d04d6293ab233050d3fbb49c1564f51121c47e0f0bcef13d0f50897b extends Twig_Template
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
        $__internal_465f87efce661b3bae9021a0301847354c27ed7d548df63eba349ed1980f66a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465f87efce661b3bae9021a0301847354c27ed7d548df63eba349ed1980f66a2->enter($__internal_465f87efce661b3bae9021a0301847354c27ed7d548df63eba349ed1980f66a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_07f0dc617f9ddb9856025965d0fbf7eeadfffd21e9506f32cce23430f9734f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f0dc617f9ddb9856025965d0fbf7eeadfffd21e9506f32cce23430f9734f7d->enter($__internal_07f0dc617f9ddb9856025965d0fbf7eeadfffd21e9506f32cce23430f9734f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_465f87efce661b3bae9021a0301847354c27ed7d548df63eba349ed1980f66a2->leave($__internal_465f87efce661b3bae9021a0301847354c27ed7d548df63eba349ed1980f66a2_prof);

        
        $__internal_07f0dc617f9ddb9856025965d0fbf7eeadfffd21e9506f32cce23430f9734f7d->leave($__internal_07f0dc617f9ddb9856025965d0fbf7eeadfffd21e9506f32cce23430f9734f7d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new_content.html.twig");
    }
}
