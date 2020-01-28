<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d03854a9958c9c0ba1e891b05a5c16e69a153ce2e0c3785aea6b41cfa08318ea extends Twig_Template
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
        $__internal_a187dc722e4ba20adce49ae65d503514f7ae77238f4a08ff7b21f2ee0452d09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a187dc722e4ba20adce49ae65d503514f7ae77238f4a08ff7b21f2ee0452d09d->enter($__internal_a187dc722e4ba20adce49ae65d503514f7ae77238f4a08ff7b21f2ee0452d09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_fb07fa116c5ba2a17e30b760f8bd23af15f253421dcb839a1e79dd406e33fe52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb07fa116c5ba2a17e30b760f8bd23af15f253421dcb839a1e79dd406e33fe52->enter($__internal_fb07fa116c5ba2a17e30b760f8bd23af15f253421dcb839a1e79dd406e33fe52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a187dc722e4ba20adce49ae65d503514f7ae77238f4a08ff7b21f2ee0452d09d->leave($__internal_a187dc722e4ba20adce49ae65d503514f7ae77238f4a08ff7b21f2ee0452d09d_prof);

        
        $__internal_fb07fa116c5ba2a17e30b760f8bd23af15f253421dcb839a1e79dd406e33fe52->leave($__internal_fb07fa116c5ba2a17e30b760f8bd23af15f253421dcb839a1e79dd406e33fe52_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eebe1c03d4d5a95a7ec1c83a327f85a42c5fbf58b526e9695028133241f624bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eebe1c03d4d5a95a7ec1c83a327f85a42c5fbf58b526e9695028133241f624bb->enter($__internal_eebe1c03d4d5a95a7ec1c83a327f85a42c5fbf58b526e9695028133241f624bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8d3ee3b72855bf486693119fcdc3bea69eae493a76929d8e68de86c666da8cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3ee3b72855bf486693119fcdc3bea69eae493a76929d8e68de86c666da8cf7->enter($__internal_8d3ee3b72855bf486693119fcdc3bea69eae493a76929d8e68de86c666da8cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_8d3ee3b72855bf486693119fcdc3bea69eae493a76929d8e68de86c666da8cf7->leave($__internal_8d3ee3b72855bf486693119fcdc3bea69eae493a76929d8e68de86c666da8cf7_prof);

        
        $__internal_eebe1c03d4d5a95a7ec1c83a327f85a42c5fbf58b526e9695028133241f624bb->leave($__internal_eebe1c03d4d5a95a7ec1c83a327f85a42c5fbf58b526e9695028133241f624bb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b2a82504908a77ca206ea6511803f6603bf1366919a53724df99369b0f5b2022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a82504908a77ca206ea6511803f6603bf1366919a53724df99369b0f5b2022->enter($__internal_b2a82504908a77ca206ea6511803f6603bf1366919a53724df99369b0f5b2022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0654855f99fa94a06dc6de3d253e6e919a6d6a902966ed2febe6c4b2a821cca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0654855f99fa94a06dc6de3d253e6e919a6d6a902966ed2febe6c4b2a821cca0->enter($__internal_0654855f99fa94a06dc6de3d253e6e919a6d6a902966ed2febe6c4b2a821cca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_0654855f99fa94a06dc6de3d253e6e919a6d6a902966ed2febe6c4b2a821cca0->leave($__internal_0654855f99fa94a06dc6de3d253e6e919a6d6a902966ed2febe6c4b2a821cca0_prof);

        
        $__internal_b2a82504908a77ca206ea6511803f6603bf1366919a53724df99369b0f5b2022->leave($__internal_b2a82504908a77ca206ea6511803f6603bf1366919a53724df99369b0f5b2022_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0b93a6540f968f1e3121ca096e9b15e41a9b5340a00e5fc3bf0635900ebb0870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b93a6540f968f1e3121ca096e9b15e41a9b5340a00e5fc3bf0635900ebb0870->enter($__internal_0b93a6540f968f1e3121ca096e9b15e41a9b5340a00e5fc3bf0635900ebb0870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0993e2b396cb5a55e50c53c267ed182c9c94cc7d2a006c6f7988fe1c9e71af63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0993e2b396cb5a55e50c53c267ed182c9c94cc7d2a006c6f7988fe1c9e71af63->enter($__internal_0993e2b396cb5a55e50c53c267ed182c9c94cc7d2a006c6f7988fe1c9e71af63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0993e2b396cb5a55e50c53c267ed182c9c94cc7d2a006c6f7988fe1c9e71af63->leave($__internal_0993e2b396cb5a55e50c53c267ed182c9c94cc7d2a006c6f7988fe1c9e71af63_prof);

        
        $__internal_0b93a6540f968f1e3121ca096e9b15e41a9b5340a00e5fc3bf0635900ebb0870->leave($__internal_0b93a6540f968f1e3121ca096e9b15e41a9b5340a00e5fc3bf0635900ebb0870_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
