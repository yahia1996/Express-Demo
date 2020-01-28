<?php

/* @moriven/views/users_edit.html.twig */
class __TwigTemplate_571fb3c778f3e17be4eddc088772b6ec87afa461343b9ed5c8b68744223c0ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MorivenBundle/Resources/views/layout.html.twig", "@moriven/views/users_edit.html.twig", 1);
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
        $__internal_5510b7a407739a44bc51a4f2d3bb2ff5902548a46e61efb9d5bf9ffbcb5f18f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5510b7a407739a44bc51a4f2d3bb2ff5902548a46e61efb9d5bf9ffbcb5f18f5->enter($__internal_5510b7a407739a44bc51a4f2d3bb2ff5902548a46e61efb9d5bf9ffbcb5f18f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/users_edit.html.twig"));

        $__internal_1b433ed47b6c0ab46b8190852b1c335ae78d8d3f43080f0afcf69ef66c767412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b433ed47b6c0ab46b8190852b1c335ae78d8d3f43080f0afcf69ef66c767412->enter($__internal_1b433ed47b6c0ab46b8190852b1c335ae78d8d3f43080f0afcf69ef66c767412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/views/users_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5510b7a407739a44bc51a4f2d3bb2ff5902548a46e61efb9d5bf9ffbcb5f18f5->leave($__internal_5510b7a407739a44bc51a4f2d3bb2ff5902548a46e61efb9d5bf9ffbcb5f18f5_prof);

        
        $__internal_1b433ed47b6c0ab46b8190852b1c335ae78d8d3f43080f0afcf69ef66c767412->leave($__internal_1b433ed47b6c0ab46b8190852b1c335ae78d8d3f43080f0afcf69ef66c767412_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_12a65175e25d3b7aa11320e5da1b77c66987753db5fb98264ab8071daa3b4001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a65175e25d3b7aa11320e5da1b77c66987753db5fb98264ab8071daa3b4001->enter($__internal_12a65175e25d3b7aa11320e5da1b77c66987753db5fb98264ab8071daa3b4001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e2f90d6f6aaa71c1ced60af67129d08c429866203dd817940eedd5a518312cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f90d6f6aaa71c1ced60af67129d08c429866203dd817940eedd5a518312cae->enter($__internal_e2f90d6f6aaa71c1ced60af67129d08c429866203dd817940eedd5a518312cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_edit", array("userId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), 0, array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"mg-bt-50\">
        <div class=\"table-responsive text-nowrap\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Ville</th>
                    <th>Lieu</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope=\"row\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->getSourceContext()); })()), 0, array()), "id", array()), "html", null, true);
        echo "</th>
                    <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->getSourceContext()); })()), 0, array()), "username", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->getSourceContext()); })()), 0, array()), "email", array()), "html", null, true);
        echo "</td>
                    <td>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new Twig_Error_Runtime('Variable "places" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 23
            echo "                            <input type=\"checkbox\" name=\"ville_";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["key"]), "html", null, true);
            echo " <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </td>
                    <td>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new Twig_Error_Runtime('Variable "places" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 28
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 29
                echo "                                <input type=\"checkbox\" name=\"lieu_";
                echo twig_escape_filter($this->env, $context["data"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["data"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["data"]), "html", null, true);
                echo " <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Save</button>
    </form>
";
        
        $__internal_e2f90d6f6aaa71c1ced60af67129d08c429866203dd817940eedd5a518312cae->leave($__internal_e2f90d6f6aaa71c1ced60af67129d08c429866203dd817940eedd5a518312cae_prof);

        
        $__internal_12a65175e25d3b7aa11320e5da1b77c66987753db5fb98264ab8071daa3b4001->leave($__internal_12a65175e25d3b7aa11320e5da1b77c66987753db5fb98264ab8071daa3b4001_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/views/users_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  123 => 31,  110 => 29,  105 => 28,  101 => 27,  97 => 25,  84 => 23,  80 => 22,  75 => 20,  71 => 19,  67 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@MorivenBundle/Resources/views/layout.html.twig' %}

{% block content %}
    <form action=\"{{ path('users_edit', {'userId' : user.0.id }) }}\" method=\"post\" class=\"mg-bt-50\">
        <div class=\"table-responsive text-nowrap\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Ville</th>
                    <th>Lieu</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope=\"row\">{{ user.0.id }}</th>
                    <td>{{ user.0.username }}</td>
                    <td>{{ user.0.email }}</td>
                    <td>
                        {% for key,value in places %}
                            <input type=\"checkbox\" name=\"ville_{{ key }}\" value=\"{{ key }}\"> {{ key|capitalize }} <br>
                        {% endfor %}
                    </td>
                    <td>
                        {% for key,value in places %}
                            {% for data in value %}
                                <input type=\"checkbox\" name=\"lieu_{{ data }}\" value=\"{{ data }}\"> {{ data|capitalize }} <br>
                            {% endfor %}
                        {% endfor %}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Save</button>
    </form>
{% endblock %}", "@moriven/views/users_edit.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\users_edit.html.twig");
    }
}
