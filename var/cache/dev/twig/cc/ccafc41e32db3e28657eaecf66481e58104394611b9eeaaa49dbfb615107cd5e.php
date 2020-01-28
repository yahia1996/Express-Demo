<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_cce4d984f8f670d78ef5a057db2d508cb60491d8a48bce0074841fbe5add1a56 extends Twig_Template
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
        $__internal_7e5548339cc7a567847c0a5b750928fcf6429dfa527a4ad1dc9c727e1d0991de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5548339cc7a567847c0a5b750928fcf6429dfa527a4ad1dc9c727e1d0991de->enter($__internal_7e5548339cc7a567847c0a5b750928fcf6429dfa527a4ad1dc9c727e1d0991de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_313cc12837741278c77a799efdf7f161f3c21dca1e68e9e8a9280c7f31c12394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313cc12837741278c77a799efdf7f161f3c21dca1e68e9e8a9280c7f31c12394->enter($__internal_313cc12837741278c77a799efdf7f161f3c21dca1e68e9e8a9280c7f31c12394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
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
        right: 1050px;
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
        margin-top: 10px;
    }
    .login input[type=email] {
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


    .login input[type=submit] {
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
        
        $__internal_7e5548339cc7a567847c0a5b750928fcf6429dfa527a4ad1dc9c727e1d0991de->leave($__internal_7e5548339cc7a567847c0a5b750928fcf6429dfa527a4ad1dc9c727e1d0991de_prof);

        
        $__internal_313cc12837741278c77a799efdf7f161f3c21dca1e68e9e8a9280c7f31c12394->leave($__internal_313cc12837741278c77a799efdf7f161f3c21dca1e68e9e8a9280c7f31c12394_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_a82727d26e8656d290b55ec9a06e6f06bf8870aa7e9b13bade161d8682d84b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82727d26e8656d290b55ec9a06e6f06bf8870aa7e9b13bade161d8682d84b3a->enter($__internal_a82727d26e8656d290b55ec9a06e6f06bf8870aa7e9b13bade161d8682d84b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10f0d1c99c234b7b0e0189228b99d6394cd989fe9dbbcb100f804485bcaf220b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f0d1c99c234b7b0e0189228b99d6394cd989fe9dbbcb100f804485bcaf220b->enter($__internal_10f0d1c99c234b7b0e0189228b99d6394cd989fe9dbbcb100f804485bcaf220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sign in";
        
        $__internal_10f0d1c99c234b7b0e0189228b99d6394cd989fe9dbbcb100f804485bcaf220b->leave($__internal_10f0d1c99c234b7b0e0189228b99d6394cd989fe9dbbcb100f804485bcaf220b_prof);

        
        $__internal_a82727d26e8656d290b55ec9a06e6f06bf8870aa7e9b13bade161d8682d84b3a->leave($__internal_a82727d26e8656d290b55ec9a06e6f06bf8870aa7e9b13bade161d8682d84b3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87685ee989e6154f11aeda7bc12ee468d5beba0abdd162a7df5bbe502ce65162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87685ee989e6154f11aeda7bc12ee468d5beba0abdd162a7df5bbe502ce65162->enter($__internal_87685ee989e6154f11aeda7bc12ee468d5beba0abdd162a7df5bbe502ce65162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad065725061efe64f9596504018ea5cc77b763a8ccdf55f7213b837a03cfa4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad065725061efe64f9596504018ea5cc77b763a8ccdf55f7213b837a03cfa4d9->enter($__internal_ad065725061efe64f9596504018ea5cc77b763a8ccdf55f7213b837a03cfa4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"body\"></div>
    <div class=\"grad\"></div>
    <div class=\"header\">
        <div>Tunisia<span>Express</span></div>
    </div>
    <br>
    <div class=\"login\">
        <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"post\">
            <input type=\"email\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" placeholder=\"Email\">
            <input type=\"text\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" placeholder=\"Username\">
            <input type=\"password\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" placeholder=\"Password\">
            <input type=\"password\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" placeholder=\"Repeat Password\">
            <input type=\"submit\" value=\"Register\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "_token", array()), 'widget');
        echo "
        </form>
    </div>
";
        
        $__internal_ad065725061efe64f9596504018ea5cc77b763a8ccdf55f7213b837a03cfa4d9->leave($__internal_ad065725061efe64f9596504018ea5cc77b763a8ccdf55f7213b837a03cfa4d9_prof);

        
        $__internal_87685ee989e6154f11aeda7bc12ee468d5beba0abdd162a7df5bbe502ce65162->leave($__internal_87685ee989e6154f11aeda7bc12ee468d5beba0abdd162a7df5bbe502ce65162_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  261 => 17,  252 => 11,  243 => 4,  234 => 3,  216 => 1,  34 => 21,  32 => 3,  29 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Sign in{% endblock %}

{% block fos_user_content %}
    <div class=\"body\"></div>
    <div class=\"grad\"></div>
    <div class=\"header\">
        <div>Tunisia<span>Express</span></div>
    </div>
    <br>
    <div class=\"login\">
        <form action=\"{{ path('fos_user_registration_register') }}\" method=\"post\">
            <input type=\"email\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" placeholder=\"Email\">
            <input type=\"text\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" placeholder=\"Username\">
            <input type=\"password\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" placeholder=\"Password\">
            <input type=\"password\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" placeholder=\"Repeat Password\">
            <input type=\"submit\" value=\"Register\">
            {{ form_widget(form._token) }}
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
        right: 1050px;
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
        margin-top: 10px;
    }
    .login input[type=email] {
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


    .login input[type=submit] {
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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
