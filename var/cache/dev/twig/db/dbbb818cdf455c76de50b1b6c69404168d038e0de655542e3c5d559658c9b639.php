<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_20efdd9a0f08c6ef915cdc56709f6f97da5128cb06db46e8e15521b6ea7b78ba extends Twig_Template
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
        $__internal_b47b13eeb1d6203fc654475a48733fa43ec16fa6fe9954de2b03a944422eb477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47b13eeb1d6203fc654475a48733fa43ec16fa6fe9954de2b03a944422eb477->enter($__internal_b47b13eeb1d6203fc654475a48733fa43ec16fa6fe9954de2b03a944422eb477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_36733e937ceb1d5594150fdec29cd271988a7853468abbb7311add0b1bd07067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36733e937ceb1d5594150fdec29cd271988a7853468abbb7311add0b1bd07067->enter($__internal_36733e937ceb1d5594150fdec29cd271988a7853468abbb7311add0b1bd07067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

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
        
        $__internal_b47b13eeb1d6203fc654475a48733fa43ec16fa6fe9954de2b03a944422eb477->leave($__internal_b47b13eeb1d6203fc654475a48733fa43ec16fa6fe9954de2b03a944422eb477_prof);

        
        $__internal_36733e937ceb1d5594150fdec29cd271988a7853468abbb7311add0b1bd07067->leave($__internal_36733e937ceb1d5594150fdec29cd271988a7853468abbb7311add0b1bd07067_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f9c4457f07b158fe9ab290f00d742260e619ac064e068d0436f6d2ae94d1c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9c4457f07b158fe9ab290f00d742260e619ac064e068d0436f6d2ae94d1c74->enter($__internal_6f9c4457f07b158fe9ab290f00d742260e619ac064e068d0436f6d2ae94d1c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4d0852316530763fbd071b731eb1c30951a4a9afba2c8b8293bf983d46fd8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d0852316530763fbd071b731eb1c30951a4a9afba2c8b8293bf983d46fd8c7->enter($__internal_e4d0852316530763fbd071b731eb1c30951a4a9afba2c8b8293bf983d46fd8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sign in";
        
        $__internal_e4d0852316530763fbd071b731eb1c30951a4a9afba2c8b8293bf983d46fd8c7->leave($__internal_e4d0852316530763fbd071b731eb1c30951a4a9afba2c8b8293bf983d46fd8c7_prof);

        
        $__internal_6f9c4457f07b158fe9ab290f00d742260e619ac064e068d0436f6d2ae94d1c74->leave($__internal_6f9c4457f07b158fe9ab290f00d742260e619ac064e068d0436f6d2ae94d1c74_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf853ecf61b9abd05097926c195353cdb61d3f125ada74a88331fe72dd7eea66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf853ecf61b9abd05097926c195353cdb61d3f125ada74a88331fe72dd7eea66->enter($__internal_bf853ecf61b9abd05097926c195353cdb61d3f125ada74a88331fe72dd7eea66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3c33acf491a54b1a0fceba62a46f67dc7e55f8e222ce7210f3145c0b65fc046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c33acf491a54b1a0fceba62a46f67dc7e55f8e222ce7210f3145c0b65fc046->enter($__internal_b3c33acf491a54b1a0fceba62a46f67dc7e55f8e222ce7210f3145c0b65fc046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b3c33acf491a54b1a0fceba62a46f67dc7e55f8e222ce7210f3145c0b65fc046->leave($__internal_b3c33acf491a54b1a0fceba62a46f67dc7e55f8e222ce7210f3145c0b65fc046_prof);

        
        $__internal_bf853ecf61b9abd05097926c195353cdb61d3f125ada74a88331fe72dd7eea66->leave($__internal_bf853ecf61b9abd05097926c195353cdb61d3f125ada74a88331fe72dd7eea66_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
