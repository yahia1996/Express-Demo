<?php

/* @moriven/views/verification.html.twig */
class __TwigTemplate_432c81ba8c11533c058933e69186b01dd4adab55ebe21bd78094326cd5001b1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MorivenBundle/Resources/views/layout.html.twig", "@moriven/views/verification.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MorivenBundle/Resources/views/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e902716d433b785b34beedc2daec695433dd11919d5c6177cff48119a3af41e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e902716d433b785b34beedc2daec695433dd11919d5c6177cff48119a3af41e7->enter($__internal_e902716d433b785b34beedc2daec695433dd11919d5c6177cff48119a3af41e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/verification.html.twig"));

        $__internal_2095820be602d817ca70c602b46115be346bc153b77454a1013a056dd81f503b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2095820be602d817ca70c602b46115be346bc153b77454a1013a056dd81f503b->enter($__internal_2095820be602d817ca70c602b46115be346bc153b77454a1013a056dd81f503b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/verification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e902716d433b785b34beedc2daec695433dd11919d5c6177cff48119a3af41e7->leave($__internal_e902716d433b785b34beedc2daec695433dd11919d5c6177cff48119a3af41e7_prof);

        
        $__internal_2095820be602d817ca70c602b46115be346bc153b77454a1013a056dd81f503b->leave($__internal_2095820be602d817ca70c602b46115be346bc153b77454a1013a056dd81f503b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f33bda7b1c51239ab7f79a1192f16d99cd41d04df66b6fd0a11d326f1059c8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33bda7b1c51239ab7f79a1192f16d99cd41d04df66b6fd0a11d326f1059c8ab->enter($__internal_f33bda7b1c51239ab7f79a1192f16d99cd41d04df66b6fd0a11d326f1059c8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_79b5d0a3ca59a6c28382459477a74577ca9cf2165091c3f30e32195e6c26ef6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b5d0a3ca59a6c28382459477a74577ca9cf2165091c3f30e32195e6c26ef6e->enter($__internal_79b5d0a3ca59a6c28382459477a74577ca9cf2165091c3f30e32195e6c26ef6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"table-responsive text-nowrap mg-bt-50\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Id</th>
                <th>N_Bor</th>
                <th>Exp</th>
                <th>Destinataire</th>
                <th>Ville</th>
                <th>Lieu</th>
                <th>Nature</th>
                <th>Nbr</th>
                <th>Tel</th>
                <th>Montant</th>
                <th>Espece</th>
                <th>Tentative</th>
                <th>Motif</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verifications"]) || array_key_exists("verifications", $context) ? $context["verifications"] : (function () { throw new Twig_Error_Runtime('Variable "verifications" does not exist.', 26, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["verification"]) {
            // line 27
            echo "                <tr>
                    <th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "nbor", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "exp", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "destinataire", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "ville", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "lieu", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "nature", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "nbr", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "tel", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "montant", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "espece", array()) != "")) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "espece", array())) : ("N/A")), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "tentative", array()) != "")) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "tentative", array())) : ("N/A")), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "motif", array()) != "")) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "motif", array())) : ("N/A")), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "status", array()) != "")) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "status", array())) : ("N/A")), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verification_post", array("verificationId" => twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Verify</a>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verification_delete", array("verificationId" => twig_get_attribute($this->env, $this->getSourceContext(), $context["verification"], "id", array()))), "html", null, true);
            echo "\"
                           class=\"btn btn-danger\">Cancel</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['verification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_79b5d0a3ca59a6c28382459477a74577ca9cf2165091c3f30e32195e6c26ef6e->leave($__internal_79b5d0a3ca59a6c28382459477a74577ca9cf2165091c3f30e32195e6c26ef6e_prof);

        
        $__internal_f33bda7b1c51239ab7f79a1192f16d99cd41d04df66b6fd0a11d326f1059c8ab->leave($__internal_f33bda7b1c51239ab7f79a1192f16d99cd41d04df66b6fd0a11d326f1059c8ab_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/views/verification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 49,  141 => 44,  137 => 43,  132 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  77 => 27,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@MorivenBundle/Resources/views/layout.html.twig' %}

{% block content %}
    <div class=\"table-responsive text-nowrap mg-bt-50\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Id</th>
                <th>N_Bor</th>
                <th>Exp</th>
                <th>Destinataire</th>
                <th>Ville</th>
                <th>Lieu</th>
                <th>Nature</th>
                <th>Nbr</th>
                <th>Tel</th>
                <th>Montant</th>
                <th>Espece</th>
                <th>Tentative</th>
                <th>Motif</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for verification in verifications %}
                <tr>
                    <th scope=\"row\">{{ verification.id }}</th>
                    <td>{{ verification.nbor }}</td>
                    <td>{{ verification.exp }}</td>
                    <td>{{ verification.destinataire }}</td>
                    <td>{{ verification.ville }}</td>
                    <td>{{ verification.lieu }}</td>
                    <td>{{ verification.nature }}</td>
                    <td>{{ verification.nbr }}</td>
                    <td>{{ verification.tel }}</td>
                    <td>{{ verification.montant }}</td>
                    <td>{{ verification.espece != '' ? verification.espece : 'N/A' }}</td>
                    <td>{{ verification.tentative != '' ? verification.tentative : 'N/A' }}</td>
                    <td>{{ verification.motif != '' ? verification.motif : 'N/A' }}</td>
                    <td>{{ verification.status != '' ? verification.status : 'N/A' }}</td>
                    <td>
                        <a href=\"{{ path('verification_post', {'verificationId' : verification.id }) }}\" class=\"btn btn-primary\">Verify</a>
                        <a href=\"{{ path('verification_delete', {'verificationId' : verification.id }) }}\"
                           class=\"btn btn-danger\">Cancel</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "@moriven/views/verification.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\verification.html.twig");
    }
}
