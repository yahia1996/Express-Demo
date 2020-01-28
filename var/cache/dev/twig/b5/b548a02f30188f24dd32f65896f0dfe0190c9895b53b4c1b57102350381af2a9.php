<?php

/* @moriven/views/users.html.twig */
class __TwigTemplate_f5140c3ad14878ec63eaf05f657aa99b064d5b6f0ac03257e8ad9691f514ac9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MorivenBundle/Resources/views/layout.html.twig", "@moriven/views/users.html.twig", 1);
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
        $__internal_b1abdedbcdc1918eb3ee6ad09497403646d705f5fe46428042fe512ee4c34b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1abdedbcdc1918eb3ee6ad09497403646d705f5fe46428042fe512ee4c34b56->enter($__internal_b1abdedbcdc1918eb3ee6ad09497403646d705f5fe46428042fe512ee4c34b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/users.html.twig"));

        $__internal_55745083ea8e228d1b38311f73c2633f19c3fc20865da7f78b75f33d95e38ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55745083ea8e228d1b38311f73c2633f19c3fc20865da7f78b75f33d95e38ff6->enter($__internal_55745083ea8e228d1b38311f73c2633f19c3fc20865da7f78b75f33d95e38ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1abdedbcdc1918eb3ee6ad09497403646d705f5fe46428042fe512ee4c34b56->leave($__internal_b1abdedbcdc1918eb3ee6ad09497403646d705f5fe46428042fe512ee4c34b56_prof);

        
        $__internal_55745083ea8e228d1b38311f73c2633f19c3fc20865da7f78b75f33d95e38ff6->leave($__internal_55745083ea8e228d1b38311f73c2633f19c3fc20865da7f78b75f33d95e38ff6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d4b1e2559a3680a83ae991e8773ed692d7348a8ed86628ab49d22db7c7fdb6df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b1e2559a3680a83ae991e8773ed692d7348a8ed86628ab49d22db7c7fdb6df->enter($__internal_d4b1e2559a3680a83ae991e8773ed692d7348a8ed86628ab49d22db7c7fdb6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8240f37bef827721c17e1db79280d8c1a51a31be7f15bf0c99e013e50a9d0dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8240f37bef827721c17e1db79280d8c1a51a31be7f15bf0c99e013e50a9d0dd4->enter($__internal_8240f37bef827721c17e1db79280d8c1a51a31be7f15bf0c99e013e50a9d0dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"table-responsive text-nowrap mg-bt-50\">
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Lieu</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "                <tr>
                    <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 23
            if (twig_in_filter(";", twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "ville", array()))) {
                // line 24
                echo "                            ";
                $context["villes"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "ville", array()), ";");
                // line 25
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 25, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
                    // line 26
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["ville"]), "html", null, true);
                    echo " <br>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                        ";
            } else {
                // line 29
                echo "                            ";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "ville", array()) != "")) ? (twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "ville", array()))) : ("N/A")), "html", null, true);
                echo "
                        ";
            }
            // line 31
            echo "                    </td>
                    <td>
                        ";
            // line 33
            if (twig_in_filter(";", twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lieu", array()))) {
                // line 34
                echo "                            ";
                $context["lieus"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lieu", array()), ";");
                // line 35
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lieus"]) || array_key_exists("lieus", $context) ? $context["lieus"] : (function () { throw new Twig_Error_Runtime('Variable "lieus" does not exist.', 35, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                    // line 36
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["lieu"]), "html", null, true);
                    echo " <br>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                        ";
            } else {
                // line 39
                echo "                            ";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lieu", array()) != "")) ? (twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lieu", array()))) : ("N/A")), "html", null, true);
                echo "
                        ";
            }
            // line 41
            echo "                    </td>
                    <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_edit", array("userId" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_8240f37bef827721c17e1db79280d8c1a51a31be7f15bf0c99e013e50a9d0dd4->leave($__internal_8240f37bef827721c17e1db79280d8c1a51a31be7f15bf0c99e013e50a9d0dd4_prof);

        
        $__internal_d4b1e2559a3680a83ae991e8773ed692d7348a8ed86628ab49d22db7c7fdb6df->leave($__internal_d4b1e2559a3680a83ae991e8773ed692d7348a8ed86628ab49d22db7c7fdb6df_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/views/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  147 => 42,  144 => 41,  138 => 39,  135 => 38,  126 => 36,  121 => 35,  118 => 34,  116 => 33,  112 => 31,  106 => 29,  103 => 28,  94 => 26,  89 => 25,  86 => 24,  84 => 23,  79 => 21,  75 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Username</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Lieu</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr>
                    <th scope=\"row\">{{ user.id }}</th>
                    <td>{{ user.username }}</td>
                    <td>{{ user.email }}</td>
                    <td>
                        {% if ';' in user.ville %}
                            {% set villes = user.ville|split(';') %}
                            {% for ville in villes %}
                                {{ ville|capitalize }} <br>
                            {% endfor %}
                        {% else %}
                            {{ user.ville != '' ? user.ville|capitalize : 'N/A' }}
                        {% endif %}
                    </td>
                    <td>
                        {% if ';' in user.lieu %}
                            {% set lieus = user.lieu|split(';') %}
                            {% for lieu in lieus %}
                                {{ lieu|capitalize }} <br>
                            {% endfor %}
                        {% else %}
                            {{ user.lieu != '' ? user.lieu|capitalize : 'N/A' }}
                        {% endif %}
                    </td>
                    <td><a href=\"{{ path('users_edit', {'userId' : user.id }) }}\" class=\"btn btn-primary\">Edit</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "@moriven/views/users.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\users.html.twig");
    }
}
