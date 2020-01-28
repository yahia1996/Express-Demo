<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_9477a996a71a4d40e341d4b9d777240202ea237ebafb8e266b06b3873db86d00 extends Twig_Template
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
        $__internal_be0556833665a2887438487ec2774e721fd0ed3492d7bb86c4161601447767d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0556833665a2887438487ec2774e721fd0ed3492d7bb86c4161601447767d2->enter($__internal_be0556833665a2887438487ec2774e721fd0ed3492d7bb86c4161601447767d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_0da2d67bce4c6d783320067557a324c0a97cc71d89c3dce035e2fc7dbc2f3d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da2d67bce4c6d783320067557a324c0a97cc71d89c3dce035e2fc7dbc2f3d5b->enter($__internal_0da2d67bce4c6d783320067557a324c0a97cc71d89c3dce035e2fc7dbc2f3d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

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
        
        $__internal_be0556833665a2887438487ec2774e721fd0ed3492d7bb86c4161601447767d2->leave($__internal_be0556833665a2887438487ec2774e721fd0ed3492d7bb86c4161601447767d2_prof);

        
        $__internal_0da2d67bce4c6d783320067557a324c0a97cc71d89c3dce035e2fc7dbc2f3d5b->leave($__internal_0da2d67bce4c6d783320067557a324c0a97cc71d89c3dce035e2fc7dbc2f3d5b_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_618ab9d98377bc7d362311eb6b98dffa62e7236ad22497271d92bf0c1b441b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618ab9d98377bc7d362311eb6b98dffa62e7236ad22497271d92bf0c1b441b82->enter($__internal_618ab9d98377bc7d362311eb6b98dffa62e7236ad22497271d92bf0c1b441b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d14e43ddaa4e3ef8a7eae163e67b0d46142e599da612454194302574bd9ecc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14e43ddaa4e3ef8a7eae163e67b0d46142e599da612454194302574bd9ecc88->enter($__internal_d14e43ddaa4e3ef8a7eae163e67b0d46142e599da612454194302574bd9ecc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sign in";
        
        $__internal_d14e43ddaa4e3ef8a7eae163e67b0d46142e599da612454194302574bd9ecc88->leave($__internal_d14e43ddaa4e3ef8a7eae163e67b0d46142e599da612454194302574bd9ecc88_prof);

        
        $__internal_618ab9d98377bc7d362311eb6b98dffa62e7236ad22497271d92bf0c1b441b82->leave($__internal_618ab9d98377bc7d362311eb6b98dffa62e7236ad22497271d92bf0c1b441b82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a887e81c088028bd26d0aaeea13aa18c9624daa5b6c8cfe85d0ccf1c70dcf7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a887e81c088028bd26d0aaeea13aa18c9624daa5b6c8cfe85d0ccf1c70dcf7c->enter($__internal_4a887e81c088028bd26d0aaeea13aa18c9624daa5b6c8cfe85d0ccf1c70dcf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4156150c35d797cad5218c41f866aafc178d5341a0d2ea7e2e2270f2c2f81cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4156150c35d797cad5218c41f866aafc178d5341a0d2ea7e2e2270f2c2f81cd4->enter($__internal_4156150c35d797cad5218c41f866aafc178d5341a0d2ea7e2e2270f2c2f81cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_4156150c35d797cad5218c41f866aafc178d5341a0d2ea7e2e2270f2c2f81cd4->leave($__internal_4156150c35d797cad5218c41f866aafc178d5341a0d2ea7e2e2270f2c2f81cd4_prof);

        
        $__internal_4a887e81c088028bd26d0aaeea13aa18c9624daa5b6c8cfe85d0ccf1c70dcf7c->leave($__internal_4a887e81c088028bd26d0aaeea13aa18c9624daa5b6c8cfe85d0ccf1c70dcf7c_prof);

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
