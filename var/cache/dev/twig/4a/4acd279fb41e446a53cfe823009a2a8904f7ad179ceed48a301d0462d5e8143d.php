<?php

/* @MorivenBundle/Resources/views/layout.html.twig */
class __TwigTemplate_32af6d7fbd91b36ac25af5cd5f8e77c39cbbebd9611bb7fa3385c35a4988e6fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf7603063c18cff6edb520adf734247c8856d87cba288a00f2c01e6138105019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7603063c18cff6edb520adf734247c8856d87cba288a00f2c01e6138105019->enter($__internal_bf7603063c18cff6edb520adf734247c8856d87cba288a00f2c01e6138105019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MorivenBundle/Resources/views/layout.html.twig"));

        $__internal_846efe19f0ab1fe3ec6982e0f7639bafb2442d4e5529a3791c5ab45e4f3f26d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846efe19f0ab1fe3ec6982e0f7639bafb2442d4e5529a3791c5ab45e4f3f26d6->enter($__internal_846efe19f0ab1fe3ec6982e0f7639bafb2442d4e5529a3791c5ab45e4f3f26d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MorivenBundle/Resources/views/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

";
        // line 4
        $this->loadTemplate("MorivenBundle:common:head.html.twig", "@MorivenBundle/Resources/views/layout.html.twig", 4)->display($context);
        // line 5
        echo "<body>
<div class=\"mian-content ";
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "request", array()), "requestUri", array()) != "")) {
            echo " inner-page";
        }
        echo "\">
    <!-- main image slider container -->
    ";
        // line 8
        $this->displayBlock('slider', $context, $blocks);
        // line 10
        echo "    <!-- main image slider container -->
    ";
        // line 11
        $this->loadTemplate("MorivenBundle:common:header.html.twig", "@MorivenBundle/Resources/views/layout.html.twig", 11)->display($context);
        // line 12
        echo "</div>
<!-- end of main image slider container -->

";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
<!--/footer-->
";
        // line 19
        $this->loadTemplate("MorivenBundle:common:footer.html.twig", "@MorivenBundle/Resources/views/layout.html.twig", 19)->display($context);
        // line 20
        echo "<!--//footer-->

<!--model-forms-->
";
        // line 29
        echo "
<!--//model-form-->
<!-- js -->
";
        // line 32
        $this->loadTemplate("MorivenBundle:common:footer_js.html.twig", "@MorivenBundle/Resources/views/layout.html.twig", 32)->display($context);
        // line 33
        echo "
<script>
    \$(document).ready(function() {
        \$('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                900: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>
<!-- //carousel -->
<script>
    \$(document).ready(function() {
        \$(\".dropdown\").hover(
            function() {
                \$('.dropdown-menu', this).stop(true, true).slideDown(\"fast\");
                \$(this).toggleClass('open');
            },
            function() {
                \$('.dropdown-menu', this).stop(true, true).slideUp(\"fast\");
                \$(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<!-- password-script -->
<script>
    window.onload = function() {
        document.getElementById(\"password1\").onchange = validatePassword;
        document.getElementById(\"password2\").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById(\"password2\").value;
        var pass1 = document.getElementById(\"password1\").value;
        if (pass1 != pass2)
            document.getElementById(\"password2\").setCustomValidity(\"Passwords Don't Match\");
        else
            document.getElementById(\"password2\").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<script>
    jQuery(document).ready(function(\$) {
        \$(\".scroll\").click(function(event) {
            event.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    \$(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        \$().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->
</body>
</html>";
        
        $__internal_bf7603063c18cff6edb520adf734247c8856d87cba288a00f2c01e6138105019->leave($__internal_bf7603063c18cff6edb520adf734247c8856d87cba288a00f2c01e6138105019_prof);

        
        $__internal_846efe19f0ab1fe3ec6982e0f7639bafb2442d4e5529a3791c5ab45e4f3f26d6->leave($__internal_846efe19f0ab1fe3ec6982e0f7639bafb2442d4e5529a3791c5ab45e4f3f26d6_prof);

    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        $__internal_41301dafea49818d0b5dd6dde56887736238969e5a0500f04c112560d271995c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41301dafea49818d0b5dd6dde56887736238969e5a0500f04c112560d271995c->enter($__internal_41301dafea49818d0b5dd6dde56887736238969e5a0500f04c112560d271995c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_d62ae558f0fc54ea8983cce556a2fc5818034d4ab3ced741ca44df6ddb1a1f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62ae558f0fc54ea8983cce556a2fc5818034d4ab3ced741ca44df6ddb1a1f8d->enter($__internal_d62ae558f0fc54ea8983cce556a2fc5818034d4ab3ced741ca44df6ddb1a1f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 9
        echo "    ";
        
        $__internal_d62ae558f0fc54ea8983cce556a2fc5818034d4ab3ced741ca44df6ddb1a1f8d->leave($__internal_d62ae558f0fc54ea8983cce556a2fc5818034d4ab3ced741ca44df6ddb1a1f8d_prof);

        
        $__internal_41301dafea49818d0b5dd6dde56887736238969e5a0500f04c112560d271995c->leave($__internal_41301dafea49818d0b5dd6dde56887736238969e5a0500f04c112560d271995c_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_0bba71ac9f78c0717a5642a93d84f6c89190a5feaf926a0201c3ee4c49939a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bba71ac9f78c0717a5642a93d84f6c89190a5feaf926a0201c3ee4c49939a57->enter($__internal_0bba71ac9f78c0717a5642a93d84f6c89190a5feaf926a0201c3ee4c49939a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d51038ff11d6b3020c021a019273cd2eadc1a9ea010901dc06c8a1449317fd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51038ff11d6b3020c021a019273cd2eadc1a9ea010901dc06c8a1449317fd06->enter($__internal_d51038ff11d6b3020c021a019273cd2eadc1a9ea010901dc06c8a1449317fd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d51038ff11d6b3020c021a019273cd2eadc1a9ea010901dc06c8a1449317fd06->leave($__internal_d51038ff11d6b3020c021a019273cd2eadc1a9ea010901dc06c8a1449317fd06_prof);

        
        $__internal_0bba71ac9f78c0717a5642a93d84f6c89190a5feaf926a0201c3ee4c49939a57->leave($__internal_0bba71ac9f78c0717a5642a93d84f6c89190a5feaf926a0201c3ee4c49939a57_prof);

    }

    public function getTemplateName()
    {
        return "@MorivenBundle/Resources/views/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 15,  189 => 9,  180 => 8,  76 => 33,  74 => 32,  69 => 29,  64 => 20,  62 => 19,  58 => 17,  56 => 15,  51 => 12,  49 => 11,  46 => 10,  44 => 8,  37 => 6,  34 => 5,  32 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"zxx\">

{% include 'MorivenBundle:common:head.html.twig' %}
<body>
<div class=\"mian-content {% if app.request.requestUri != '' %} inner-page{% endif %}\">
    <!-- main image slider container -->
    {% block slider %}
    {% endblock %}
    <!-- main image slider container -->
    {% include 'MorivenBundle:common:header.html.twig' %}
</div>
<!-- end of main image slider container -->

{% block content %}
{% endblock %}

<!--/footer-->
{% include 'MorivenBundle:common:footer.html.twig' %}
<!--//footer-->

<!--model-forms-->
{#<!--/Login-->#}
{#{% include 'MorivenBundle:Security:login.html.twig' %}#}
{#<!--//Login-->#}
{#<!--/Register-->#}
{#{% include 'MorivenBundle:Registration:register.html.twig' %}#}
{#<!--//Register-->#}

<!--//model-form-->
<!-- js -->
{% include 'MorivenBundle:common:footer_js.html.twig' %}

<script>
    \$(document).ready(function() {
        \$('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                900: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>
<!-- //carousel -->
<script>
    \$(document).ready(function() {
        \$(\".dropdown\").hover(
            function() {
                \$('.dropdown-menu', this).stop(true, true).slideDown(\"fast\");
                \$(this).toggleClass('open');
            },
            function() {
                \$('.dropdown-menu', this).stop(true, true).slideUp(\"fast\");
                \$(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<!-- password-script -->
<script>
    window.onload = function() {
        document.getElementById(\"password1\").onchange = validatePassword;
        document.getElementById(\"password2\").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById(\"password2\").value;
        var pass1 = document.getElementById(\"password1\").value;
        if (pass1 != pass2)
            document.getElementById(\"password2\").setCustomValidity(\"Passwords Don't Match\");
        else
            document.getElementById(\"password2\").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<script>
    jQuery(document).ready(function(\$) {
        \$(\".scroll\").click(function(event) {
            event.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    \$(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        \$().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->
</body>
</html>", "@MorivenBundle/Resources/views/layout.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle/Resources/views/layout.html.twig");
    }
}
