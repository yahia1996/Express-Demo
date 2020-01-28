<?php

/* ::base.html.twig */
class __TwigTemplate_d1cc6814588d76c375fb957a09588a9685df0c45e4c2d84ea08dda1b4ab09116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3ac2cf7fd925b210401942ed8b29682ed362b1cd77a2a14c7fa5955e4ba7ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ac2cf7fd925b210401942ed8b29682ed362b1cd77a2a14c7fa5955e4ba7ecc->enter($__internal_b3ac2cf7fd925b210401942ed8b29682ed362b1cd77a2a14c7fa5955e4ba7ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a56d019a4daa234c8667dfdc0a49ebc8e4d8155a456189b7e97744e66e162a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56d019a4daa234c8667dfdc0a49ebc8e4d8155a456189b7e97744e66e162a7a->enter($__internal_a56d019a4daa234c8667dfdc0a49ebc8e4d8155a456189b7e97744e66e162a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b3ac2cf7fd925b210401942ed8b29682ed362b1cd77a2a14c7fa5955e4ba7ecc->leave($__internal_b3ac2cf7fd925b210401942ed8b29682ed362b1cd77a2a14c7fa5955e4ba7ecc_prof);

        
        $__internal_a56d019a4daa234c8667dfdc0a49ebc8e4d8155a456189b7e97744e66e162a7a->leave($__internal_a56d019a4daa234c8667dfdc0a49ebc8e4d8155a456189b7e97744e66e162a7a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df4aa72707a8f051f5e8b0e918d0a81a3fb654f41648115c4d2ba4e6fb10f021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4aa72707a8f051f5e8b0e918d0a81a3fb654f41648115c4d2ba4e6fb10f021->enter($__internal_df4aa72707a8f051f5e8b0e918d0a81a3fb654f41648115c4d2ba4e6fb10f021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7c488b5b408c28ac60977e455a056ef7af63616c63305b2a08f9977106ff1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c488b5b408c28ac60977e455a056ef7af63616c63305b2a08f9977106ff1c2->enter($__internal_c7c488b5b408c28ac60977e455a056ef7af63616c63305b2a08f9977106ff1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c7c488b5b408c28ac60977e455a056ef7af63616c63305b2a08f9977106ff1c2->leave($__internal_c7c488b5b408c28ac60977e455a056ef7af63616c63305b2a08f9977106ff1c2_prof);

        
        $__internal_df4aa72707a8f051f5e8b0e918d0a81a3fb654f41648115c4d2ba4e6fb10f021->leave($__internal_df4aa72707a8f051f5e8b0e918d0a81a3fb654f41648115c4d2ba4e6fb10f021_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7c1dede1dd452a031d6b2624a4d15c000dee9480e69e6a3ffb7e2410d653fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c1dede1dd452a031d6b2624a4d15c000dee9480e69e6a3ffb7e2410d653fc1->enter($__internal_c7c1dede1dd452a031d6b2624a4d15c000dee9480e69e6a3ffb7e2410d653fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a7d4795365b52625807ee23924745987058dcba66ef05b18e63d088a0e62fed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d4795365b52625807ee23924745987058dcba66ef05b18e63d088a0e62fed7->enter($__internal_a7d4795365b52625807ee23924745987058dcba66ef05b18e63d088a0e62fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a7d4795365b52625807ee23924745987058dcba66ef05b18e63d088a0e62fed7->leave($__internal_a7d4795365b52625807ee23924745987058dcba66ef05b18e63d088a0e62fed7_prof);

        
        $__internal_c7c1dede1dd452a031d6b2624a4d15c000dee9480e69e6a3ffb7e2410d653fc1->leave($__internal_c7c1dede1dd452a031d6b2624a4d15c000dee9480e69e6a3ffb7e2410d653fc1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b79bd0346addc2e8b1f9e3024fd07e1d1485a1ea91e48df108348bf8d41b09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b79bd0346addc2e8b1f9e3024fd07e1d1485a1ea91e48df108348bf8d41b09c->enter($__internal_5b79bd0346addc2e8b1f9e3024fd07e1d1485a1ea91e48df108348bf8d41b09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_070ebb0a29cc17544cc5c98bf3b4a49021136544a1383b94b0d2fda5d0457b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070ebb0a29cc17544cc5c98bf3b4a49021136544a1383b94b0d2fda5d0457b52->enter($__internal_070ebb0a29cc17544cc5c98bf3b4a49021136544a1383b94b0d2fda5d0457b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_070ebb0a29cc17544cc5c98bf3b4a49021136544a1383b94b0d2fda5d0457b52->leave($__internal_070ebb0a29cc17544cc5c98bf3b4a49021136544a1383b94b0d2fda5d0457b52_prof);

        
        $__internal_5b79bd0346addc2e8b1f9e3024fd07e1d1485a1ea91e48df108348bf8d41b09c->leave($__internal_5b79bd0346addc2e8b1f9e3024fd07e1d1485a1ea91e48df108348bf8d41b09c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_871754076577402d66ede2fb7283cef374a07318d46a8ab2f9da0951968d0209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871754076577402d66ede2fb7283cef374a07318d46a8ab2f9da0951968d0209->enter($__internal_871754076577402d66ede2fb7283cef374a07318d46a8ab2f9da0951968d0209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_035abb4b0dacfc0f62e9abc79a48e3a4c2651f2ea1027eaf5a6bf16ae278e7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035abb4b0dacfc0f62e9abc79a48e3a4c2651f2ea1027eaf5a6bf16ae278e7f4->enter($__internal_035abb4b0dacfc0f62e9abc79a48e3a4c2651f2ea1027eaf5a6bf16ae278e7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_035abb4b0dacfc0f62e9abc79a48e3a4c2651f2ea1027eaf5a6bf16ae278e7f4->leave($__internal_035abb4b0dacfc0f62e9abc79a48e3a4c2651f2ea1027eaf5a6bf16ae278e7f4_prof);

        
        $__internal_871754076577402d66ede2fb7283cef374a07318d46a8ab2f9da0951968d0209->leave($__internal_871754076577402d66ede2fb7283cef374a07318d46a8ab2f9da0951968d0209_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/hakim/Sites/tunisie-express/app/Resources/views/base.html.twig");
    }
}
