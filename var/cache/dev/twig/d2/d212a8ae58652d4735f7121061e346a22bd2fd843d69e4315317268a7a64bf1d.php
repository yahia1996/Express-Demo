<?php

/* MorivenBundle:Registration:register.html.twig */
class __TwigTemplate_4e3be327f29117cfbd89965d0f746a1e3270a69f423c669fee122c70afbd9883 extends Twig_Template
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
        $__internal_12a728d6668ea53b59ae59bf3f40476f1834ded87ba387417242dcd20b588e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a728d6668ea53b59ae59bf3f40476f1834ded87ba387417242dcd20b588e6f->enter($__internal_12a728d6668ea53b59ae59bf3f40476f1834ded87ba387417242dcd20b588e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:Registration:register.html.twig"));

        $__internal_b0c679939dc67ecd947f82b6c2f6bf898c0ccb3d7ee5049b7179febc8b386931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c679939dc67ecd947f82b6c2f6bf898c0ccb3d7ee5049b7179febc8b386931->enter($__internal_b0c679939dc67ecd947f82b6c2f6bf898c0ccb3d7ee5049b7179febc8b386931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:Registration:register.html.twig"));

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
        
        $__internal_12a728d6668ea53b59ae59bf3f40476f1834ded87ba387417242dcd20b588e6f->leave($__internal_12a728d6668ea53b59ae59bf3f40476f1834ded87ba387417242dcd20b588e6f_prof);

        
        $__internal_b0c679939dc67ecd947f82b6c2f6bf898c0ccb3d7ee5049b7179febc8b386931->leave($__internal_b0c679939dc67ecd947f82b6c2f6bf898c0ccb3d7ee5049b7179febc8b386931_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b8c962cf03a06d5a9c8e8ea52507768b93a9968f69ea58d2ce1edb196f4a53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8c962cf03a06d5a9c8e8ea52507768b93a9968f69ea58d2ce1edb196f4a53b->enter($__internal_6b8c962cf03a06d5a9c8e8ea52507768b93a9968f69ea58d2ce1edb196f4a53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_246305cbbd6de696072fa073cbcb730f964628850bafea4cfe54b2fbae066264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246305cbbd6de696072fa073cbcb730f964628850bafea4cfe54b2fbae066264->enter($__internal_246305cbbd6de696072fa073cbcb730f964628850bafea4cfe54b2fbae066264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sign in";
        
        $__internal_246305cbbd6de696072fa073cbcb730f964628850bafea4cfe54b2fbae066264->leave($__internal_246305cbbd6de696072fa073cbcb730f964628850bafea4cfe54b2fbae066264_prof);

        
        $__internal_6b8c962cf03a06d5a9c8e8ea52507768b93a9968f69ea58d2ce1edb196f4a53b->leave($__internal_6b8c962cf03a06d5a9c8e8ea52507768b93a9968f69ea58d2ce1edb196f4a53b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4bbbea5309437f1bb6fbe18b3307da50596a732404b1601c12218477a5c6aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bbbea5309437f1bb6fbe18b3307da50596a732404b1601c12218477a5c6aef->enter($__internal_b4bbbea5309437f1bb6fbe18b3307da50596a732404b1601c12218477a5c6aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2e88dc60ddcc580ed65ebdef5da82fc9485fbd6bf67119f70b7f6bdc53376c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e88dc60ddcc580ed65ebdef5da82fc9485fbd6bf67119f70b7f6bdc53376c93->enter($__internal_2e88dc60ddcc580ed65ebdef5da82fc9485fbd6bf67119f70b7f6bdc53376c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2e88dc60ddcc580ed65ebdef5da82fc9485fbd6bf67119f70b7f6bdc53376c93->leave($__internal_2e88dc60ddcc580ed65ebdef5da82fc9485fbd6bf67119f70b7f6bdc53376c93_prof);

        
        $__internal_b4bbbea5309437f1bb6fbe18b3307da50596a732404b1601c12218477a5c6aef->leave($__internal_b4bbbea5309437f1bb6fbe18b3307da50596a732404b1601c12218477a5c6aef_prof);

    }

    public function getTemplateName()
    {
        return "MorivenBundle:Registration:register.html.twig";
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
", "MorivenBundle:Registration:register.html.twig", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/views/Registration/register.html.twig");
    }
}
