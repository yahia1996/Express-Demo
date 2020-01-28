<?php

/* @moriven/views/ordre.html.twig */
class __TwigTemplate_cfa5b31d9f035dcb90af79c005a253275bee10ff73ec574db2b6b61ce97d34ce extends Twig_Template
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
        $__internal_97b5cd0c1d9a6a64967923b77df4c707d88134bf931647c0a6129155afc7d700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b5cd0c1d9a6a64967923b77df4c707d88134bf931647c0a6129155afc7d700->enter($__internal_97b5cd0c1d9a6a64967923b77df4c707d88134bf931647c0a6129155afc7d700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/ordre.html.twig"));

        $__internal_a8c9d343216c846561306b40e2b993af6cf78b2ad9861676c89e05c5cebf6e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c9d343216c846561306b40e2b993af6cf78b2ad9861676c89e05c5cebf6e72->enter($__internal_a8c9d343216c846561306b40e2b993af6cf78b2ad9861676c89e05c5cebf6e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/ordre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97b5cd0c1d9a6a64967923b77df4c707d88134bf931647c0a6129155afc7d700->leave($__internal_97b5cd0c1d9a6a64967923b77df4c707d88134bf931647c0a6129155afc7d700_prof);

        
        $__internal_a8c9d343216c846561306b40e2b993af6cf78b2ad9861676c89e05c5cebf6e72->leave($__internal_a8c9d343216c846561306b40e2b993af6cf78b2ad9861676c89e05c5cebf6e72_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f2af76fa3604b497bbbbd22d6b3e9594c04a2515c7a4b87dc5e3118772233cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f2af76fa3604b497bbbbd22d6b3e9594c04a2515c7a4b87dc5e3118772233cf->enter($__internal_8f2af76fa3604b497bbbbd22d6b3e9594c04a2515c7a4b87dc5e3118772233cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e23de28914f6141ce631df598b486b37a4a924da7a8bb117be03db40110433ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23de28914f6141ce631df598b486b37a4a924da7a8bb117be03db40110433ab->enter($__internal_e23de28914f6141ce631df598b486b37a4a924da7a8bb117be03db40110433ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e23de28914f6141ce631df598b486b37a4a924da7a8bb117be03db40110433ab->leave($__internal_e23de28914f6141ce631df598b486b37a4a924da7a8bb117be03db40110433ab_prof);

        
        $__internal_8f2af76fa3604b497bbbbd22d6b3e9594c04a2515c7a4b87dc5e3118772233cf->leave($__internal_8f2af76fa3604b497bbbbd22d6b3e9594c04a2515c7a4b87dc5e3118772233cf_prof);

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
", "@moriven/views/ordre.html.twig", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/views/ordre.html.twig");
    }
}
