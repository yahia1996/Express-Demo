<?php

/* MorivenBundle:Security:login.html.twig */
class __TwigTemplate_72806450bc8eaab04ee483304b725b015dbdce431c4e974f9068a3d85f390297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b616e4675ebdabce8aa3e4549c1a24359c1421039f8d1e6a06b61e49acb545ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b616e4675ebdabce8aa3e4549c1a24359c1421039f8d1e6a06b61e49acb545ac->enter($__internal_b616e4675ebdabce8aa3e4549c1a24359c1421039f8d1e6a06b61e49acb545ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:Security:login.html.twig"));

        $__internal_055b103a9d6d83da719f66026b461871c0fcf7513d94c8691ca6cf71cef85440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055b103a9d6d83da719f66026b461871c0fcf7513d94c8691ca6cf71cef85440->enter($__internal_055b103a9d6d83da719f66026b461871c0fcf7513d94c8691ca6cf71cef85440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:Security:login.html.twig"));

        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 22
        echo "<style>
    @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

    body {
        margin: 0;
        padding: 0;
        background: #fff;

        color: #fff;
        font-family: Arial;
        font-size: 12px;
    }

    .body {
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);
        background-size: cover;
        -webkit-filter: blur(5px);
        z-index: 0;
    }

    .grad {
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, 0.65))); /* Chrome,Safari4+ */
        z-index: 1;
        opacity: 0.7;
    }

    .header {
        position: absolute;
        top: calc(50% - 35px);
        left: calc(50% - 255px);
        z-index: 2;
    }

    .header div {
        position: fixed;
        right: 1000px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 35px;
        font-weight: 200;
    }

    .header div span {
        color: #5379fa !important;
    }

    .login {
        position: absolute;
        top: calc(50% - 75px);
        left: calc(50% - 50px);
        height: 150px;
        width: 350px;
        padding: 10px;
        z-index: 2;
    }

    .login input[type=text] {
        width: 250px;
        height: 30px;
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
    }

    .login input[type=password] {
        width: 250px;
        height: 30px;
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
        margin-top: 10px;
    }

    .login button {
        width: 260px;
        height: 35px;
        background: #fff;
        border: 1px solid #fff;
        cursor: pointer;
        border-radius: 2px;
        color: #a18d6c;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 6px;
        margin-top: 10px;
    }

    .login input[type=button]:hover {
        opacity: 0.8;
    }

    .login input[type=button]:active {
        opacity: 0.6;
    }

    .login input[type=text]:focus {
        outline: none;
        border: 1px solid rgba(255, 255, 255, 0.9);
    }

    .login input[type=password]:focus {
        outline: none;
        border: 1px solid rgba(255, 255, 255, 0.9);
    }

    .login input[type=button]:focus {
        outline: none;
    }

    ::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    ::-moz-input-placeholder {
        color: rgba(255, 255, 255, 0.6);
    }
</style>
";
        
        $__internal_b616e4675ebdabce8aa3e4549c1a24359c1421039f8d1e6a06b61e49acb545ac->leave($__internal_b616e4675ebdabce8aa3e4549c1a24359c1421039f8d1e6a06b61e49acb545ac_prof);

        
        $__internal_055b103a9d6d83da719f66026b461871c0fcf7513d94c8691ca6cf71cef85440->leave($__internal_055b103a9d6d83da719f66026b461871c0fcf7513d94c8691ca6cf71cef85440_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_97c0057de195aacbea2aef951196eeaffcf4e709fdd365bd66b2943961f1b5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c0057de195aacbea2aef951196eeaffcf4e709fdd365bd66b2943961f1b5ba->enter($__internal_97c0057de195aacbea2aef951196eeaffcf4e709fdd365bd66b2943961f1b5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6dea33e536483175171443173dfef933ad9da91979579cdda775a41137c6e255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dea33e536483175171443173dfef933ad9da91979579cdda775a41137c6e255->enter($__internal_6dea33e536483175171443173dfef933ad9da91979579cdda775a41137c6e255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sign in";
        
        $__internal_6dea33e536483175171443173dfef933ad9da91979579cdda775a41137c6e255->leave($__internal_6dea33e536483175171443173dfef933ad9da91979579cdda775a41137c6e255_prof);

        
        $__internal_97c0057de195aacbea2aef951196eeaffcf4e709fdd365bd66b2943961f1b5ba->leave($__internal_97c0057de195aacbea2aef951196eeaffcf4e709fdd365bd66b2943961f1b5ba_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d3642081e10f346546db3a9e4570a00118e8747e444a94579d78691fcc61328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3642081e10f346546db3a9e4570a00118e8747e444a94579d78691fcc61328->enter($__internal_2d3642081e10f346546db3a9e4570a00118e8747e444a94579d78691fcc61328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd1499c673a93ef2bdc08dd955112dcac5100d3cbb7adfd545a042f8f202f981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1499c673a93ef2bdc08dd955112dcac5100d3cbb7adfd545a042f8f202f981->enter($__internal_bd1499c673a93ef2bdc08dd955112dcac5100d3cbb7adfd545a042f8f202f981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    <div class=\"body\"></div>
    <div class=\"grad\"></div>
    <div class=\"header\">
        <div>Tunisia<span>Express</span></div>
    </div>
    <br>
    <div class=\"login\">
        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 13
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 13, $this->getSourceContext()); })())) {
            // line 14
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo "\"/>
            ";
        }
        // line 16
        echo "            <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Username\" required=\"required\">
            <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required=\"required\">
            <button type=\"submit\" name=\"_submit\" class=\"btn btn-primary px-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
";
        
        $__internal_bd1499c673a93ef2bdc08dd955112dcac5100d3cbb7adfd545a042f8f202f981->leave($__internal_bd1499c673a93ef2bdc08dd955112dcac5100d3cbb7adfd545a042f8f202f981_prof);

        
        $__internal_2d3642081e10f346546db3a9e4570a00118e8747e444a94579d78691fcc61328->leave($__internal_2d3642081e10f346546db3a9e4570a00118e8747e444a94579d78691fcc61328_prof);

    }

    public function getTemplateName()
    {
        return "MorivenBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  239 => 18,  235 => 16,  229 => 14,  227 => 13,  223 => 12,  214 => 5,  205 => 4,  187 => 2,  34 => 22,  32 => 4,  29 => 3,  27 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block title %}Sign in{% endblock %}

{% block fos_user_content %}
    <div class=\"body\"></div>
    <div class=\"grad\"></div>
    <div class=\"header\">
        <div>Tunisia<span>Express</span></div>
    </div>
    <br>
    <div class=\"login\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
            {% endif %}
            <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Username\" required=\"required\">
            <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required=\"required\">
            <button type=\"submit\" name=\"_submit\" class=\"btn btn-primary px-2\">{{ 'Login'|trans }}</button>
        </form>
    </div>
{% endblock %}
<style>
    @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

    body {
        margin: 0;
        padding: 0;
        background: #fff;

        color: #fff;
        font-family: Arial;
        font-size: 12px;
    }

    .body {
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);
        background-size: cover;
        -webkit-filter: blur(5px);
        z-index: 0;
    }

    .grad {
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, 0.65))); /* Chrome,Safari4+ */
        z-index: 1;
        opacity: 0.7;
    }

    .header {
        position: absolute;
        top: calc(50% - 35px);
        left: calc(50% - 255px);
        z-index: 2;
    }

    .header div {
        position: fixed;
        right: 1000px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 35px;
        font-weight: 200;
    }

    .header div span {
        color: #5379fa !important;
    }

    .login {
        position: absolute;
        top: calc(50% - 75px);
        left: calc(50% - 50px);
        height: 150px;
        width: 350px;
        padding: 10px;
        z-index: 2;
    }

    .login input[type=text] {
        width: 250px;
        height: 30px;
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
    }

    .login input[type=password] {
        width: 250px;
        height: 30px;
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
        margin-top: 10px;
    }

    .login button {
        width: 260px;
        height: 35px;
        background: #fff;
        border: 1px solid #fff;
        cursor: pointer;
        border-radius: 2px;
        color: #a18d6c;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 6px;
        margin-top: 10px;
    }

    .login input[type=button]:hover {
        opacity: 0.8;
    }

    .login input[type=button]:active {
        opacity: 0.6;
    }

    .login input[type=text]:focus {
        outline: none;
        border: 1px solid rgba(255, 255, 255, 0.9);
    }

    .login input[type=password]:focus {
        outline: none;
        border: 1px solid rgba(255, 255, 255, 0.9);
    }

    .login input[type=button]:focus {
        outline: none;
    }

    ::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    ::-moz-input-placeholder {
        color: rgba(255, 255, 255, 0.6);
    }
</style>
", "MorivenBundle:Security:login.html.twig", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/views/Security/login.html.twig");
    }
}
