<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_d4af09585888a6226edb701248f791d85bffd85fa7e1e0c8f0f8a397c2636f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_cbac4c435e07cdeb360bc99b115d080c168579c351d597282cae7869794111ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbac4c435e07cdeb360bc99b115d080c168579c351d597282cae7869794111ed->enter($__internal_cbac4c435e07cdeb360bc99b115d080c168579c351d597282cae7869794111ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_34eed2c2a1791e61984da6704131dcc0d6b066a3daa501b0426e062465a5c001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34eed2c2a1791e61984da6704131dcc0d6b066a3daa501b0426e062465a5c001->enter($__internal_34eed2c2a1791e61984da6704131dcc0d6b066a3daa501b0426e062465a5c001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbac4c435e07cdeb360bc99b115d080c168579c351d597282cae7869794111ed->leave($__internal_cbac4c435e07cdeb360bc99b115d080c168579c351d597282cae7869794111ed_prof);

        
        $__internal_34eed2c2a1791e61984da6704131dcc0d6b066a3daa501b0426e062465a5c001->leave($__internal_34eed2c2a1791e61984da6704131dcc0d6b066a3daa501b0426e062465a5c001_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a7c7afe58fcc5a28f84f67d6c3dc61c2b0b4a1f3410cbc66dca46867e5e0712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7c7afe58fcc5a28f84f67d6c3dc61c2b0b4a1f3410cbc66dca46867e5e0712->enter($__internal_6a7c7afe58fcc5a28f84f67d6c3dc61c2b0b4a1f3410cbc66dca46867e5e0712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a405f1a0b9e7cdb59512949029583513309605db2581d8c6c47b23b61fc8b724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a405f1a0b9e7cdb59512949029583513309605db2581d8c6c47b23b61fc8b724->enter($__internal_a405f1a0b9e7cdb59512949029583513309605db2581d8c6c47b23b61fc8b724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a405f1a0b9e7cdb59512949029583513309605db2581d8c6c47b23b61fc8b724->leave($__internal_a405f1a0b9e7cdb59512949029583513309605db2581d8c6c47b23b61fc8b724_prof);

        
        $__internal_6a7c7afe58fcc5a28f84f67d6c3dc61c2b0b4a1f3410cbc66dca46867e5e0712->leave($__internal_6a7c7afe58fcc5a28f84f67d6c3dc61c2b0b4a1f3410cbc66dca46867e5e0712_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
