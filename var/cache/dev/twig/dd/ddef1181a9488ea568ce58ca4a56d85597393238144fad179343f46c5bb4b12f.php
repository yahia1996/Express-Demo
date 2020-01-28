<?php

/* @moriven/views/ordre.html.twig */
class __TwigTemplate_afb16d462525fb5c83bedc45a48bdb8085e49209dbebb0c41d4587b521e52ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MorivenBundle/Resources/views/layout.html.twig", "@moriven/views/ordre.html.twig", 1);
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
        $__internal_9d4b69c4b8afbcfbde9611e3a0a4720393b063ba6ae12813cdc3e10b5cd09247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4b69c4b8afbcfbde9611e3a0a4720393b063ba6ae12813cdc3e10b5cd09247->enter($__internal_9d4b69c4b8afbcfbde9611e3a0a4720393b063ba6ae12813cdc3e10b5cd09247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/ordre.html.twig"));

        $__internal_09f6e7c63913de9c643a2d7e6a2b72c5325805675a70207e78fc9bc17d6fcb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f6e7c63913de9c643a2d7e6a2b72c5325805675a70207e78fc9bc17d6fcb85->enter($__internal_09f6e7c63913de9c643a2d7e6a2b72c5325805675a70207e78fc9bc17d6fcb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/ordre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d4b69c4b8afbcfbde9611e3a0a4720393b063ba6ae12813cdc3e10b5cd09247->leave($__internal_9d4b69c4b8afbcfbde9611e3a0a4720393b063ba6ae12813cdc3e10b5cd09247_prof);

        
        $__internal_09f6e7c63913de9c643a2d7e6a2b72c5325805675a70207e78fc9bc17d6fcb85->leave($__internal_09f6e7c63913de9c643a2d7e6a2b72c5325805675a70207e78fc9bc17d6fcb85_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_be8411600e907ed2fa4e279e92d8496501e8dd2669ef99cfda52d73949e4ceb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8411600e907ed2fa4e279e92d8496501e8dd2669ef99cfda52d73949e4ceb1->enter($__internal_be8411600e907ed2fa4e279e92d8496501e8dd2669ef99cfda52d73949e4ceb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5ff15d1e6d238892ab14db45975834ccb3eb5de0f9fdaa40f897b011501452b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff15d1e6d238892ab14db45975834ccb3eb5de0f9fdaa40f897b011501452b3->enter($__internal_5ff15d1e6d238892ab14db45975834ccb3eb5de0f9fdaa40f897b011501452b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "        <h2 class=\"mg-top-30\">Import Excel File into Database</h2>

        <div class=\"outer-container mg-bt-50 mg-top-30\">
            <form action=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moriven_ordre_import");
            echo "\" method=\"POST\" name=\"frmExcelImport\" id=\"frmExcelImport\"
                  enctype=\"multipart/form-data\">
                <div>
                    <label>Choose Excel File</label>
                    <input type=\"file\" name=\"file\" id=\"file\" accept=\".xls,.xlsx\" required>
                    <button type=\"submit\" id=\"submit\" name=\"import\" class=\"btn-submit\">Import</button>
                </div>
            </form>
        </div>

        ";
            // line 18
            if ((array_key_exists("success", $context) && (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new Twig_Error_Runtime('Variable "success" does not exist.', 18, $this->getSourceContext()); })()))) {
                // line 19
                echo "            <div class=\"alert alert-success\" role=\"alert\">
                File imported successfully !
            </div>
        ";
            }
            // line 23
            echo "    ";
        }
        // line 24
        echo "
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
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 48
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "nbor", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "exp", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "destinataire", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "ville", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "lieu", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "nature", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "nbr", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "tel", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "montant", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "espece", array()) != "")) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "espece", array())) : ("N/A")), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "tentative", array()) != "")) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "tentative", array())) : ("N/A")), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "motif", array()) != "")) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "motif", array())) : ("N/A")), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "status", array()) != "")) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "status", array())) : ("N/A")), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moriven_ordre_edit", array("orderId" => twig_get_attribute($this->env, $this->getSourceContext(), $context["order"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </tbody>
            </table>
        </div>
";
        
        $__internal_5ff15d1e6d238892ab14db45975834ccb3eb5de0f9fdaa40f897b011501452b3->leave($__internal_5ff15d1e6d238892ab14db45975834ccb3eb5de0f9fdaa40f897b011501452b3_prof);

        
        $__internal_be8411600e907ed2fa4e279e92d8496501e8dd2669ef99cfda52d73949e4ceb1->leave($__internal_be8411600e907ed2fa4e279e92d8496501e8dd2669ef99cfda52d73949e4ceb1_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/views/ordre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  169 => 63,  165 => 62,  161 => 61,  157 => 60,  153 => 59,  149 => 58,  145 => 57,  141 => 56,  137 => 55,  133 => 54,  129 => 53,  125 => 52,  121 => 51,  117 => 50,  113 => 49,  110 => 48,  106 => 47,  81 => 24,  78 => 23,  72 => 19,  70 => 18,  57 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@MorivenBundle/Resources/views/layout.html.twig' %}

{% block content %}
    {% if is_granted('ROLE_ADMIN') %}
        <h2 class=\"mg-top-30\">Import Excel File into Database</h2>

        <div class=\"outer-container mg-bt-50 mg-top-30\">
            <form action=\"{{ path('moriven_ordre_import') }}\" method=\"POST\" name=\"frmExcelImport\" id=\"frmExcelImport\"
                  enctype=\"multipart/form-data\">
                <div>
                    <label>Choose Excel File</label>
                    <input type=\"file\" name=\"file\" id=\"file\" accept=\".xls,.xlsx\" required>
                    <button type=\"submit\" id=\"submit\" name=\"import\" class=\"btn-submit\">Import</button>
                </div>
            </form>
        </div>

        {% if success is defined and success %}
            <div class=\"alert alert-success\" role=\"alert\">
                File imported successfully !
            </div>
        {% endif %}
    {% endif %}

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
                {% for order in orders %}
                    <tr>
                        <th scope=\"row\">{{ order.id }}</th>
                        <td>{{ order.nbor }}</td>
                        <td>{{ order.exp }}</td>
                        <td>{{ order.destinataire}}</td>
                        <td>{{ order.ville }}</td>
                        <td>{{ order.lieu }}</td>
                        <td>{{ order.nature }}</td>
                        <td>{{ order.nbr }}</td>
                        <td>{{ order.tel }}</td>
                        <td>{{ order.montant }}</td>
                        <td>{{ order.espece != '' ? order.espece : 'N/A' }}</td>
                        <td>{{ order.tentative != '' ? order.tentative : 'N/A' }}</td>
                        <td>{{ order.motif != '' ? order.motif : 'N/A' }}</td>
                        <td>{{ order.status != '' ? order.status : 'N/A' }}</td>
                        <td><a href=\"{{ path('moriven_ordre_edit', {'orderId' : order.id }) }}\" class=\"btn btn-primary\">Edit</a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
{% endblock %}
", "@moriven/views/ordre.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\ordre.html.twig");
    }
}
