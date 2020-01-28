<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d10c953e9ee34da486fecc89062e68ef6ed48581427709b1f704a6ac70cf869d extends Twig_Template
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
        $__internal_4878a3a4239342209175157bfeca7176631d52cf4af172e716157e839ef302f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4878a3a4239342209175157bfeca7176631d52cf4af172e716157e839ef302f2->enter($__internal_4878a3a4239342209175157bfeca7176631d52cf4af172e716157e839ef302f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_14d8194e4f993366514b1cdfd7d30b6f7d6c09a1167d476dd39dbcb82eef15aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d8194e4f993366514b1cdfd7d30b6f7d6c09a1167d476dd39dbcb82eef15aa->enter($__internal_14d8194e4f993366514b1cdfd7d30b6f7d6c09a1167d476dd39dbcb82eef15aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

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
        
        $__internal_4878a3a4239342209175157bfeca7176631d52cf4af172e716157e839ef302f2->leave($__internal_4878a3a4239342209175157bfeca7176631d52cf4af172e716157e839ef302f2_prof);

        
        $__internal_14d8194e4f993366514b1cdfd7d30b6f7d6c09a1167d476dd39dbcb82eef15aa->leave($__internal_14d8194e4f993366514b1cdfd7d30b6f7d6c09a1167d476dd39dbcb82eef15aa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fbff79da6a99c3977c8a9802266e1b4277749cab6c5a9f914f59c90cc1d261e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbff79da6a99c3977c8a9802266e1b4277749cab6c5a9f914f59c90cc1d261e->enter($__internal_8fbff79da6a99c3977c8a9802266e1b4277749cab6c5a9f914f59c90cc1d261e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c37360b5d63fdb2139a74d4241cf10c64595c2c310169a0ce3de4e165a7dad9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37360b5d63fdb2139a74d4241cf10c64595c2c310169a0ce3de4e165a7dad9e->enter($__internal_c37360b5d63fdb2139a74d4241cf10c64595c2c310169a0ce3de4e165a7dad9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sign in";
        
        $__internal_c37360b5d63fdb2139a74d4241cf10c64595c2c310169a0ce3de4e165a7dad9e->leave($__internal_c37360b5d63fdb2139a74d4241cf10c64595c2c310169a0ce3de4e165a7dad9e_prof);

        
        $__internal_8fbff79da6a99c3977c8a9802266e1b4277749cab6c5a9f914f59c90cc1d261e->leave($__internal_8fbff79da6a99c3977c8a9802266e1b4277749cab6c5a9f914f59c90cc1d261e_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_beff289bb2bb97325024cecf71833610803f07642880be040223eb09afddb4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beff289bb2bb97325024cecf71833610803f07642880be040223eb09afddb4a7->enter($__internal_beff289bb2bb97325024cecf71833610803f07642880be040223eb09afddb4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6fdbeac60eda80411469fc0275f92980081c426d363e32ded2a8672db83b4380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdbeac60eda80411469fc0275f92980081c426d363e32ded2a8672db83b4380->enter($__internal_6fdbeac60eda80411469fc0275f92980081c426d363e32ded2a8672db83b4380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_6fdbeac60eda80411469fc0275f92980081c426d363e32ded2a8672db83b4380->leave($__internal_6fdbeac60eda80411469fc0275f92980081c426d363e32ded2a8672db83b4380_prof);

        
        $__internal_beff289bb2bb97325024cecf71833610803f07642880be040223eb09afddb4a7->leave($__internal_beff289bb2bb97325024cecf71833610803f07642880be040223eb09afddb4a7_prof);

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
