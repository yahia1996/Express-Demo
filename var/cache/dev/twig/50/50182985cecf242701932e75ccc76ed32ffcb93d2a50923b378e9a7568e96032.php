<?php

/* @moriven/views/ordre_edit.html.twig */
class __TwigTemplate_8241e973cde2134138666b29bc95eeab3d83f3ce8b6d5cb0f1a2110261a17953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MorivenBundle/Resources/views/layout.html.twig", "@moriven/views/ordre_edit.html.twig", 1);
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
        $__internal_b55d1c20240079c1c030a827d3153d7c7864e019fd41fcf014626648456f5de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55d1c20240079c1c030a827d3153d7c7864e019fd41fcf014626648456f5de2->enter($__internal_b55d1c20240079c1c030a827d3153d7c7864e019fd41fcf014626648456f5de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/ordre_edit.html.twig"));

        $__internal_8c0b8801fb5ff659e6fbc33877aa936413f6ce8d2560d6eda594ab434f533c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0b8801fb5ff659e6fbc33877aa936413f6ce8d2560d6eda594ab434f533c8a->enter($__internal_8c0b8801fb5ff659e6fbc33877aa936413f6ce8d2560d6eda594ab434f533c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/ordre_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b55d1c20240079c1c030a827d3153d7c7864e019fd41fcf014626648456f5de2->leave($__internal_b55d1c20240079c1c030a827d3153d7c7864e019fd41fcf014626648456f5de2_prof);

        
        $__internal_8c0b8801fb5ff659e6fbc33877aa936413f6ce8d2560d6eda594ab434f533c8a->leave($__internal_8c0b8801fb5ff659e6fbc33877aa936413f6ce8d2560d6eda594ab434f533c8a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1716feb0c666d50320acd8eb22ad70ead8c24ae540ec123575399539ea904787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1716feb0c666d50320acd8eb22ad70ead8c24ae540ec123575399539ea904787->enter($__internal_1716feb0c666d50320acd8eb22ad70ead8c24ae540ec123575399539ea904787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7160f6288827f8ff5d03d2c5b107c7eb1294dc88839e1c2f8faf2e819bb5826f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7160f6288827f8ff5d03d2c5b107c7eb1294dc88839e1c2f8faf2e819bb5826f->enter($__internal_7160f6288827f8ff5d03d2c5b107c7eb1294dc88839e1c2f8faf2e819bb5826f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"row mg-top-30\">
        <div class=\"container\">
            <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moriven_ordre_edit", array("orderId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), 0, array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"mg-bt-50\" novalidate>
                <div class=\"form-group\">
                    <label for=\"Id\">Id</label>
                    <input class=\"form-control\" type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->getSourceContext()); })()), 0, array()), "id", array()), "html", null, true);
        echo "\" name=\"orderId\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->getSourceContext()); })()), 0, array()), "id", array()), "html", null, true);
        echo "\" readonly>
                </div>
                <div class=\"form-group\">
                    <label for=\"N_Bor\">N_Bor</label>
                    <input type=\"text\" class=\"form-control\" id=\"N_Bor\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()), 0, array()), "nbor", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()), 0, array()), "nbor", array()), "html", null, true);
        echo "\" name=\"nbor\">
                </div>
                <div class=\"form-group\" style=\"margin-bottom: 1rem;\">
                    <label for=\"Exp\">Exp</label>
                    <input type=\"text\" class=\"form-control\" id=\"Exp\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->getSourceContext()); })()), 0, array()), "exp", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->getSourceContext()); })()), 0, array()), "exp", array()), "html", null, true);
        echo "\" name=\"exp\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Destinataire\">Destinataire</label>
                    <input type=\"text\" class=\"form-control\" id=\"Destinataire\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 21, $this->getSourceContext()); })()), 0, array()), "destinataire", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 21, $this->getSourceContext()); })()), 0, array()), "destinataire", array()), "html", null, true);
        echo "\" name=\"destinataire\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Ville\">Ville</label>
                    <input type=\"text\" class=\"form-control\" id=\"Ville\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 25, $this->getSourceContext()); })()), 0, array()), "ville", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 25, $this->getSourceContext()); })()), 0, array()), "ville", array()), "html", null, true);
        echo "\" name=\"ville\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Lieu\">Lieu</label>
                    <input type=\"text\" class=\"form-control\" id=\"Lieu\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 29, $this->getSourceContext()); })()), 0, array()), "lieu", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 29, $this->getSourceContext()); })()), 0, array()), "lieu", array()), "html", null, true);
        echo "\" name=\"lieu\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Nature\">Nature</label>
                    <input type=\"text\" class=\"form-control\" id=\"Nature\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 33, $this->getSourceContext()); })()), 0, array()), "nature", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 33, $this->getSourceContext()); })()), 0, array()), "nature", array()), "html", null, true);
        echo "\" name=\"nature\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Nbr\">Nbr</label>
                    <input type=\"text\" class=\"form-control\" id=\"Nbr\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 37, $this->getSourceContext()); })()), 0, array()), "nbr", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 37, $this->getSourceContext()); })()), 0, array()), "nbr", array()), "html", null, true);
        echo "\" name=\"nbr\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Tel\">Tel</label>
                    <input type=\"text\" class=\"form-control\" id=\"Tel\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 41, $this->getSourceContext()); })()), 0, array()), "tel", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 41, $this->getSourceContext()); })()), 0, array()), "tel", array()), "html", null, true);
        echo "\" name=\"tel\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Montant\">Montant</label>
                    <input type=\"text\" class=\"form-control\" id=\"Montant\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 45, $this->getSourceContext()); })()), 0, array()), "montant", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 45, $this->getSourceContext()); })()), 0, array()), "montant", array()), "html", null, true);
        echo "\" name=\"montant\">
                </div>
                <div class=\"form-group\">
                    <label for=\"espece\">Espéce</label>
                    <input type=\"text\" class=\"form-control\" id=\"espece\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 49, $this->getSourceContext()); })()), 0, array()), "espece", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 49, $this->getSourceContext()); })()), 0, array()), "espece", array()), "html", null, true);
        echo "\" name=\"espece\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Tentative\">Tentative</label>
                    <input type=\"text\" class=\"form-control\" id=\"Tentative\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 53, $this->getSourceContext()); })()), 0, array()), "tentative", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 53, $this->getSourceContext()); })()), 0, array()), "tentative", array()), "html", null, true);
        echo "\" name=\"tentative\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Motif\">Motif</label>
                    <input type=\"text\" class=\"form-control\" id=\"Motif\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 57, $this->getSourceContext()); })()), 0, array()), "motif", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 57, $this->getSourceContext()); })()), 0, array()), "motif", array()), "html", null, true);
        echo "\" name=\"motif\">
                </div>
                <div class=\"form-group\">
                    <label for=\"status\">Status</label>
                    <select id=\"status\" name=\"status\" onchange=\"updateStatus()\" class=\"form-control\">
                        <option value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 62, $this->getSourceContext()); })()), 0, array()), "status", array()), "html", null, true);
        echo "\">--Current status is ";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 62, $this->getSourceContext()); })()), 0, array()), "status", array()) != "")) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 62, $this->getSourceContext()); })()), 0, array()), "status", array())) : ("N/A")), "html", null, true);
        echo "--</option>
                        <option value=\"ok\">OK</option>
                        <option value=\"rdv\">RDV</option>
                        <option value=\"inj\">Injoignable</option>
                    </select>
                </div>
                <div id=\"next_date\" class=\"form-group no-display\">
                    <label for=\"next\">Next Date</label>
                    <input id=\"next\" class=\"form-control\" type=\"text\" name=\"next_date\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 70, $this->getSourceContext()); })()), 0, array()), "next_date", array()), "html", null, true);
        echo "\" placeholder=\"dd/mm/yyyy\">
                </div>
                <div id=\"description\" class=\"form-group no-display\">
                    <label for=\"desc\">Description</label>
                    <input id=\"desc\" class=\"form-control\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 74, $this->getSourceContext()); })()), 0, array()), "description", array()), "html", null, true);
        echo "\" type=\"text\" name=\"description\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
            </form>
        </div>
    </div>

    <script>
        function updateStatus() {
            d = document.getElementById(\"status\").value;

            if (d === 'rdv') {
                document.getElementById(\"desc\").setAttribute('required', \"true\");
                document.getElementById(\"next_date\").classList.remove('no-display');
                document.getElementById(\"description\").classList.add('no-display');
            } else if (d === 'inj') {
                document.getElementById(\"next\").setAttribute('required', \"true\");
                document.getElementById(\"next_date\").classList.add('no-display');
                document.getElementById(\"description\").classList.remove('no-display');
            } else {
                document.getElementById(\"next_date\").classList.add('no-display');
                document.getElementById(\"description\").classList.add('no-display');
            }
        }
    </script>
";
        
        $__internal_7160f6288827f8ff5d03d2c5b107c7eb1294dc88839e1c2f8faf2e819bb5826f->leave($__internal_7160f6288827f8ff5d03d2c5b107c7eb1294dc88839e1c2f8faf2e819bb5826f_prof);

        
        $__internal_1716feb0c666d50320acd8eb22ad70ead8c24ae540ec123575399539ea904787->leave($__internal_1716feb0c666d50320acd8eb22ad70ead8c24ae540ec123575399539ea904787_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/views/ordre_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 74,  190 => 70,  177 => 62,  167 => 57,  158 => 53,  149 => 49,  140 => 45,  131 => 41,  122 => 37,  113 => 33,  104 => 29,  95 => 25,  86 => 21,  77 => 17,  68 => 13,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@MorivenBundle/Resources/views/layout.html.twig' %}

{% block content %}
    <div class=\"row mg-top-30\">
        <div class=\"container\">
            <form action=\"{{ path('moriven_ordre_edit', {'orderId' : order.0.id }) }}\" method=\"post\" class=\"mg-bt-50\" novalidate>
                <div class=\"form-group\">
                    <label for=\"Id\">Id</label>
                    <input class=\"form-control\" type=\"text\" value=\"{{ order.0.id }}\" name=\"orderId\" placeholder=\"{{ order.0.id }}\" readonly>
                </div>
                <div class=\"form-group\">
                    <label for=\"N_Bor\">N_Bor</label>
                    <input type=\"text\" class=\"form-control\" id=\"N_Bor\" value=\"{{ order.0.nbor }}\" placeholder=\"{{ order.0.nbor }}\" name=\"nbor\">
                </div>
                <div class=\"form-group\" style=\"margin-bottom: 1rem;\">
                    <label for=\"Exp\">Exp</label>
                    <input type=\"text\" class=\"form-control\" id=\"Exp\" value=\"{{ order.0.exp }}\" placeholder=\"{{ order.0.exp }}\" name=\"exp\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Destinataire\">Destinataire</label>
                    <input type=\"text\" class=\"form-control\" id=\"Destinataire\" value=\"{{ order.0.destinataire }}\" placeholder=\"{{ order.0.destinataire }}\" name=\"destinataire\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Ville\">Ville</label>
                    <input type=\"text\" class=\"form-control\" id=\"Ville\" value=\"{{ order.0.ville }}\" placeholder=\"{{ order.0.ville }}\" name=\"ville\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Lieu\">Lieu</label>
                    <input type=\"text\" class=\"form-control\" id=\"Lieu\" value=\"{{ order.0.lieu }}\" placeholder=\"{{ order.0.lieu }}\" name=\"lieu\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Nature\">Nature</label>
                    <input type=\"text\" class=\"form-control\" id=\"Nature\" value=\"{{ order.0.nature }}\" placeholder=\"{{ order.0.nature }}\" name=\"nature\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Nbr\">Nbr</label>
                    <input type=\"text\" class=\"form-control\" id=\"Nbr\" value=\"{{ order.0.nbr }}\" placeholder=\"{{ order.0.nbr }}\" name=\"nbr\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Tel\">Tel</label>
                    <input type=\"text\" class=\"form-control\" id=\"Tel\" value=\"{{ order.0.tel }}\" placeholder=\"{{ order.0.tel }}\" name=\"tel\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Montant\">Montant</label>
                    <input type=\"text\" class=\"form-control\" id=\"Montant\" value=\"{{ order.0.montant }}\" placeholder=\"{{ order.0.montant }}\" name=\"montant\">
                </div>
                <div class=\"form-group\">
                    <label for=\"espece\">Espéce</label>
                    <input type=\"text\" class=\"form-control\" id=\"espece\" value=\"{{ order.0.espece }}\" placeholder=\"{{ order.0.espece }}\" name=\"espece\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Tentative\">Tentative</label>
                    <input type=\"text\" class=\"form-control\" id=\"Tentative\" value=\"{{ order.0.tentative }}\" placeholder=\"{{ order.0.tentative }}\" name=\"tentative\">
                </div>
                <div class=\"form-group\">
                    <label for=\"Motif\">Motif</label>
                    <input type=\"text\" class=\"form-control\" id=\"Motif\" value=\"{{ order.0.motif }}\" placeholder=\"{{ order.0.motif }}\" name=\"motif\">
                </div>
                <div class=\"form-group\">
                    <label for=\"status\">Status</label>
                    <select id=\"status\" name=\"status\" onchange=\"updateStatus()\" class=\"form-control\">
                        <option value=\"{{ order.0.status }}\">--Current status is {{ order.0.status != '' ? order.0.status : 'N/A' }}--</option>
                        <option value=\"ok\">OK</option>
                        <option value=\"rdv\">RDV</option>
                        <option value=\"inj\">Injoignable</option>
                    </select>
                </div>
                <div id=\"next_date\" class=\"form-group no-display\">
                    <label for=\"next\">Next Date</label>
                    <input id=\"next\" class=\"form-control\" type=\"text\" name=\"next_date\" value=\"{{ order.0.next_date }}\" placeholder=\"dd/mm/yyyy\">
                </div>
                <div id=\"description\" class=\"form-group no-display\">
                    <label for=\"desc\">Description</label>
                    <input id=\"desc\" class=\"form-control\" value=\"{{ order.0.description }}\" type=\"text\" name=\"description\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
            </form>
        </div>
    </div>

    <script>
        function updateStatus() {
            d = document.getElementById(\"status\").value;

            if (d === 'rdv') {
                document.getElementById(\"desc\").setAttribute('required', \"true\");
                document.getElementById(\"next_date\").classList.remove('no-display');
                document.getElementById(\"description\").classList.add('no-display');
            } else if (d === 'inj') {
                document.getElementById(\"next\").setAttribute('required', \"true\");
                document.getElementById(\"next_date\").classList.add('no-display');
                document.getElementById(\"description\").classList.remove('no-display');
            } else {
                document.getElementById(\"next_date\").classList.add('no-display');
                document.getElementById(\"description\").classList.add('no-display');
            }
        }
    </script>
{% endblock %}

", "@moriven/views/ordre_edit.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\ordre_edit.html.twig");
    }
}
