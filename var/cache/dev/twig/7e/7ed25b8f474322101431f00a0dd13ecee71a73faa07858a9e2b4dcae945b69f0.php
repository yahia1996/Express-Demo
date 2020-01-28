<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_490ff50bcce2e9d7d444bd15c0598b84b595f21e2e8b87179ca1e744c6c368ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ed3cfd9d448e03f0f0ab6b091030d410aac47dc15d4d801aa953d35ff508d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed3cfd9d448e03f0f0ab6b091030d410aac47dc15d4d801aa953d35ff508d14->enter($__internal_7ed3cfd9d448e03f0f0ab6b091030d410aac47dc15d4d801aa953d35ff508d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_10e010cb3a5ec015128d60c5056abe4900956fdfccd37fb070233b30c419f955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e010cb3a5ec015128d60c5056abe4900956fdfccd37fb070233b30c419f955->enter($__internal_10e010cb3a5ec015128d60c5056abe4900956fdfccd37fb070233b30c419f955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7ed3cfd9d448e03f0f0ab6b091030d410aac47dc15d4d801aa953d35ff508d14->leave($__internal_7ed3cfd9d448e03f0f0ab6b091030d410aac47dc15d4d801aa953d35ff508d14_prof);

        
        $__internal_10e010cb3a5ec015128d60c5056abe4900956fdfccd37fb070233b30c419f955->leave($__internal_10e010cb3a5ec015128d60c5056abe4900956fdfccd37fb070233b30c419f955_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_180f1426983c3c29b9eb7580c6302a33a7e1fa41faa80d9355ca27a5c08baacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180f1426983c3c29b9eb7580c6302a33a7e1fa41faa80d9355ca27a5c08baacf->enter($__internal_180f1426983c3c29b9eb7580c6302a33a7e1fa41faa80d9355ca27a5c08baacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0858e2cc0b073c4af216210f153d33be224c15d4a2c6396129186a01140372a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0858e2cc0b073c4af216210f153d33be224c15d4a2c6396129186a01140372a8->enter($__internal_0858e2cc0b073c4af216210f153d33be224c15d4a2c6396129186a01140372a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0858e2cc0b073c4af216210f153d33be224c15d4a2c6396129186a01140372a8->leave($__internal_0858e2cc0b073c4af216210f153d33be224c15d4a2c6396129186a01140372a8_prof);

        
        $__internal_180f1426983c3c29b9eb7580c6302a33a7e1fa41faa80d9355ca27a5c08baacf->leave($__internal_180f1426983c3c29b9eb7580c6302a33a7e1fa41faa80d9355ca27a5c08baacf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdff506d1cd9691653c12d34aff6d43e5546ae82a44e04a16840bf6ba1f4763a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdff506d1cd9691653c12d34aff6d43e5546ae82a44e04a16840bf6ba1f4763a->enter($__internal_bdff506d1cd9691653c12d34aff6d43e5546ae82a44e04a16840bf6ba1f4763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cec07ce081ec85a3beb73ab24a7f83a5de5e61b0075dd49b8bf5bb23cfd84a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec07ce081ec85a3beb73ab24a7f83a5de5e61b0075dd49b8bf5bb23cfd84a16->enter($__internal_cec07ce081ec85a3beb73ab24a7f83a5de5e61b0075dd49b8bf5bb23cfd84a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cec07ce081ec85a3beb73ab24a7f83a5de5e61b0075dd49b8bf5bb23cfd84a16->leave($__internal_cec07ce081ec85a3beb73ab24a7f83a5de5e61b0075dd49b8bf5bb23cfd84a16_prof);

        
        $__internal_bdff506d1cd9691653c12d34aff6d43e5546ae82a44e04a16840bf6ba1f4763a->leave($__internal_bdff506d1cd9691653c12d34aff6d43e5546ae82a44e04a16840bf6ba1f4763a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a485606e18f6e2594c91cca90fba708e218c8efe206528486386d1364c801021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a485606e18f6e2594c91cca90fba708e218c8efe206528486386d1364c801021->enter($__internal_a485606e18f6e2594c91cca90fba708e218c8efe206528486386d1364c801021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7077da93526cd800ae28186852d432bab4e994462bfc538a88dbf8346a09fee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7077da93526cd800ae28186852d432bab4e994462bfc538a88dbf8346a09fee9->enter($__internal_7077da93526cd800ae28186852d432bab4e994462bfc538a88dbf8346a09fee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7077da93526cd800ae28186852d432bab4e994462bfc538a88dbf8346a09fee9->leave($__internal_7077da93526cd800ae28186852d432bab4e994462bfc538a88dbf8346a09fee9_prof);

        
        $__internal_a485606e18f6e2594c91cca90fba708e218c8efe206528486386d1364c801021->leave($__internal_a485606e18f6e2594c91cca90fba708e218c8efe206528486386d1364c801021_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
