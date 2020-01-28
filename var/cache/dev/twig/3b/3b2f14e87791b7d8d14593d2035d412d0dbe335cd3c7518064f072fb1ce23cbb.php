<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_fe806c34e176d7f3206b210516d13768eee5cfd40d882cddb4f1888e7e0cb6de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f8b369aad791d65a62f6bf09ae936f2277f55731dd64917faf73e69a138a191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8b369aad791d65a62f6bf09ae936f2277f55731dd64917faf73e69a138a191->enter($__internal_0f8b369aad791d65a62f6bf09ae936f2277f55731dd64917faf73e69a138a191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_0b3efed5e6dbb1b9d91b34b42b6f18c3f7bb14899b5883a01f650aa9cc925145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3efed5e6dbb1b9d91b34b42b6f18c3f7bb14899b5883a01f650aa9cc925145->enter($__internal_0b3efed5e6dbb1b9d91b34b42b6f18c3f7bb14899b5883a01f650aa9cc925145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f8b369aad791d65a62f6bf09ae936f2277f55731dd64917faf73e69a138a191->leave($__internal_0f8b369aad791d65a62f6bf09ae936f2277f55731dd64917faf73e69a138a191_prof);

        
        $__internal_0b3efed5e6dbb1b9d91b34b42b6f18c3f7bb14899b5883a01f650aa9cc925145->leave($__internal_0b3efed5e6dbb1b9d91b34b42b6f18c3f7bb14899b5883a01f650aa9cc925145_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b470f4fc7186e47792a6d13281ad727aad75396eafba1f06d441547d0c67555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b470f4fc7186e47792a6d13281ad727aad75396eafba1f06d441547d0c67555->enter($__internal_3b470f4fc7186e47792a6d13281ad727aad75396eafba1f06d441547d0c67555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4720dd6cf6fe06a79befcc7e4bc880e6bcaa9181bb0f7637a1ff00f61d85433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4720dd6cf6fe06a79befcc7e4bc880e6bcaa9181bb0f7637a1ff00f61d85433->enter($__internal_b4720dd6cf6fe06a79befcc7e4bc880e6bcaa9181bb0f7637a1ff00f61d85433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b4720dd6cf6fe06a79befcc7e4bc880e6bcaa9181bb0f7637a1ff00f61d85433->leave($__internal_b4720dd6cf6fe06a79befcc7e4bc880e6bcaa9181bb0f7637a1ff00f61d85433_prof);

        
        $__internal_3b470f4fc7186e47792a6d13281ad727aad75396eafba1f06d441547d0c67555->leave($__internal_3b470f4fc7186e47792a6d13281ad727aad75396eafba1f06d441547d0c67555_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
