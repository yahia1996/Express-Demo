<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_449595650229d6b39ecad4d72bbb3a921b0fd870f0d826a9ff7325c38ee0c4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a438dbb2378f4dcebf78867f8432e5bbf0644a9710d0052374acf41d25f1c2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a438dbb2378f4dcebf78867f8432e5bbf0644a9710d0052374acf41d25f1c2dc->enter($__internal_a438dbb2378f4dcebf78867f8432e5bbf0644a9710d0052374acf41d25f1c2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_ad0433fadaff51bf8d33587c3700f06abbbc38d57fb9e984a89d6ba0890809cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0433fadaff51bf8d33587c3700f06abbbc38d57fb9e984a89d6ba0890809cd->enter($__internal_ad0433fadaff51bf8d33587c3700f06abbbc38d57fb9e984a89d6ba0890809cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_a438dbb2378f4dcebf78867f8432e5bbf0644a9710d0052374acf41d25f1c2dc->leave($__internal_a438dbb2378f4dcebf78867f8432e5bbf0644a9710d0052374acf41d25f1c2dc_prof);

        
        $__internal_ad0433fadaff51bf8d33587c3700f06abbbc38d57fb9e984a89d6ba0890809cd->leave($__internal_ad0433fadaff51bf8d33587c3700f06abbbc38d57fb9e984a89d6ba0890809cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
