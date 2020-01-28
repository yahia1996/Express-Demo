<?php

/* @moriven/views/verification.html.twig */
class __TwigTemplate_598071d017d097f562234a5793c7269534ed5fabbd05834502dea05c896391ac extends Twig_Template
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
        $__internal_e60adbf799309f619db2747ffae162e22252f52280bf68899416f2d4a15822be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60adbf799309f619db2747ffae162e22252f52280bf68899416f2d4a15822be->enter($__internal_e60adbf799309f619db2747ffae162e22252f52280bf68899416f2d4a15822be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/verification.html.twig"));

        $__internal_d50a1f6ff93652def18997e485a4528897f1c9339354a7091cb851a847ad48ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50a1f6ff93652def18997e485a4528897f1c9339354a7091cb851a847ad48ca->enter($__internal_d50a1f6ff93652def18997e485a4528897f1c9339354a7091cb851a847ad48ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/verification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e60adbf799309f619db2747ffae162e22252f52280bf68899416f2d4a15822be->leave($__internal_e60adbf799309f619db2747ffae162e22252f52280bf68899416f2d4a15822be_prof);

        
        $__internal_d50a1f6ff93652def18997e485a4528897f1c9339354a7091cb851a847ad48ca->leave($__internal_d50a1f6ff93652def18997e485a4528897f1c9339354a7091cb851a847ad48ca_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_90f8a1a499ebc3e3fa33d17f4d2d99d288f8367e562935a73051c2beba055de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f8a1a499ebc3e3fa33d17f4d2d99d288f8367e562935a73051c2beba055de8->enter($__internal_90f8a1a499ebc3e3fa33d17f4d2d99d288f8367e562935a73051c2beba055de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9d9af5379c0ad652a1cca5020ff6cbae0443bcb878ba0225d00457069daf9185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9af5379c0ad652a1cca5020ff6cbae0443bcb878ba0225d00457069daf9185->enter($__internal_9d9af5379c0ad652a1cca5020ff6cbae0443bcb878ba0225d00457069daf9185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9d9af5379c0ad652a1cca5020ff6cbae0443bcb878ba0225d00457069daf9185->leave($__internal_9d9af5379c0ad652a1cca5020ff6cbae0443bcb878ba0225d00457069daf9185_prof);

        
        $__internal_90f8a1a499ebc3e3fa33d17f4d2d99d288f8367e562935a73051c2beba055de8->leave($__internal_90f8a1a499ebc3e3fa33d17f4d2d99d288f8367e562935a73051c2beba055de8_prof);

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
