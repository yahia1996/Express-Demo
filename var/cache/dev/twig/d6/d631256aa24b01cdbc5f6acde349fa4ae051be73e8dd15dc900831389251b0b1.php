<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_48b92afb087c7aee4ce86edf0352f42722350bf35440b4f38443e069550c1acc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2e200ef08cbe5657dd4faabe68b841dd6331e9f5703eebf345021de9d0fa9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e200ef08cbe5657dd4faabe68b841dd6331e9f5703eebf345021de9d0fa9ce->enter($__internal_f2e200ef08cbe5657dd4faabe68b841dd6331e9f5703eebf345021de9d0fa9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_ad14f93fd15a6e0d33e2d42ae74fd820677db52078b003348c42a8e5dce029b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad14f93fd15a6e0d33e2d42ae74fd820677db52078b003348c42a8e5dce029b2->enter($__internal_ad14f93fd15a6e0d33e2d42ae74fd820677db52078b003348c42a8e5dce029b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f2e200ef08cbe5657dd4faabe68b841dd6331e9f5703eebf345021de9d0fa9ce->leave($__internal_f2e200ef08cbe5657dd4faabe68b841dd6331e9f5703eebf345021de9d0fa9ce_prof);

        
        $__internal_ad14f93fd15a6e0d33e2d42ae74fd820677db52078b003348c42a8e5dce029b2->leave($__internal_ad14f93fd15a6e0d33e2d42ae74fd820677db52078b003348c42a8e5dce029b2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b06fa53cab11d0dbb724f6a7f755a5f693416f3c1f6082e0f96bb4c501bdb31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06fa53cab11d0dbb724f6a7f755a5f693416f3c1f6082e0f96bb4c501bdb31b->enter($__internal_b06fa53cab11d0dbb724f6a7f755a5f693416f3c1f6082e0f96bb4c501bdb31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e5922476f4c7b5c8423334a50731bfb0022ae9df49eac9a650d4c51ebc835d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5922476f4c7b5c8423334a50731bfb0022ae9df49eac9a650d4c51ebc835d38->enter($__internal_e5922476f4c7b5c8423334a50731bfb0022ae9df49eac9a650d4c51ebc835d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_e5922476f4c7b5c8423334a50731bfb0022ae9df49eac9a650d4c51ebc835d38->leave($__internal_e5922476f4c7b5c8423334a50731bfb0022ae9df49eac9a650d4c51ebc835d38_prof);

        
        $__internal_b06fa53cab11d0dbb724f6a7f755a5f693416f3c1f6082e0f96bb4c501bdb31b->leave($__internal_b06fa53cab11d0dbb724f6a7f755a5f693416f3c1f6082e0f96bb4c501bdb31b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_923c479e67d667fdb0b22ace026114ed56b152eb51ad81bcd72c5db399f5b024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923c479e67d667fdb0b22ace026114ed56b152eb51ad81bcd72c5db399f5b024->enter($__internal_923c479e67d667fdb0b22ace026114ed56b152eb51ad81bcd72c5db399f5b024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8237bf974194034319ccc8332a03ad40cf2b6290c16e008a34f3bcdf6eec1181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8237bf974194034319ccc8332a03ad40cf2b6290c16e008a34f3bcdf6eec1181->enter($__internal_8237bf974194034319ccc8332a03ad40cf2b6290c16e008a34f3bcdf6eec1181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_8237bf974194034319ccc8332a03ad40cf2b6290c16e008a34f3bcdf6eec1181->leave($__internal_8237bf974194034319ccc8332a03ad40cf2b6290c16e008a34f3bcdf6eec1181_prof);

        
        $__internal_923c479e67d667fdb0b22ace026114ed56b152eb51ad81bcd72c5db399f5b024->leave($__internal_923c479e67d667fdb0b22ace026114ed56b152eb51ad81bcd72c5db399f5b024_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_469802796231082e4563feb654122a908b212968d1008597e0d86dcd9c9f10ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469802796231082e4563feb654122a908b212968d1008597e0d86dcd9c9f10ac->enter($__internal_469802796231082e4563feb654122a908b212968d1008597e0d86dcd9c9f10ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_1ab79e4f30eca701d6ab5be3b75d7c1cf3211d6b17df4a24731e88499b2ccbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab79e4f30eca701d6ab5be3b75d7c1cf3211d6b17df4a24731e88499b2ccbb5->enter($__internal_1ab79e4f30eca701d6ab5be3b75d7c1cf3211d6b17df4a24731e88499b2ccbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1ab79e4f30eca701d6ab5be3b75d7c1cf3211d6b17df4a24731e88499b2ccbb5->leave($__internal_1ab79e4f30eca701d6ab5be3b75d7c1cf3211d6b17df4a24731e88499b2ccbb5_prof);

        
        $__internal_469802796231082e4563feb654122a908b212968d1008597e0d86dcd9c9f10ac->leave($__internal_469802796231082e4563feb654122a908b212968d1008597e0d86dcd9c9f10ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
