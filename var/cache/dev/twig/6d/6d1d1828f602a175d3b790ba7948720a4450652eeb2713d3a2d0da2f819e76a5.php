<?php

/* @MorivenBundle/Resources/views/layout.html.twig */
class __TwigTemplate_c68483597edd4307638038bccc512fd0075ec3ac3bfa808cd6791a66c6ba5f56 extends Twig_Template
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
        $__internal_a0df5f90c6a493c779dc0f2d9dd519bb941bab5dbd31c28838d865cb4d3ff7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0df5f90c6a493c779dc0f2d9dd519bb941bab5dbd31c28838d865cb4d3ff7e5->enter($__internal_a0df5f90c6a493c779dc0f2d9dd519bb941bab5dbd31c28838d865cb4d3ff7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MorivenBundle/Resources/views/layout.html.twig"));

        $__internal_42f618532dde05948822d5b7378ec284180e743c3db005d75de9f7378720d319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f618532dde05948822d5b7378ec284180e743c3db005d75de9f7378720d319->enter($__internal_42f618532dde05948822d5b7378ec284180e743c3db005d75de9f7378720d319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MorivenBundle/Resources/views/layout.html.twig"));

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
        
        $__internal_a0df5f90c6a493c779dc0f2d9dd519bb941bab5dbd31c28838d865cb4d3ff7e5->leave($__internal_a0df5f90c6a493c779dc0f2d9dd519bb941bab5dbd31c28838d865cb4d3ff7e5_prof);

        
        $__internal_42f618532dde05948822d5b7378ec284180e743c3db005d75de9f7378720d319->leave($__internal_42f618532dde05948822d5b7378ec284180e743c3db005d75de9f7378720d319_prof);

    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        $__internal_d455a3a3edc5fcd884eecb57d43a3075a9e1f50ea180098be50e89efca1735c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d455a3a3edc5fcd884eecb57d43a3075a9e1f50ea180098be50e89efca1735c4->enter($__internal_d455a3a3edc5fcd884eecb57d43a3075a9e1f50ea180098be50e89efca1735c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_d9c845266d8d118c59bb6c77baa0a644c13215e3e118f96e8d2630355b5440d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c845266d8d118c59bb6c77baa0a644c13215e3e118f96e8d2630355b5440d7->enter($__internal_d9c845266d8d118c59bb6c77baa0a644c13215e3e118f96e8d2630355b5440d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 9
        echo "    ";
        
        $__internal_d9c845266d8d118c59bb6c77baa0a644c13215e3e118f96e8d2630355b5440d7->leave($__internal_d9c845266d8d118c59bb6c77baa0a644c13215e3e118f96e8d2630355b5440d7_prof);

        
        $__internal_d455a3a3edc5fcd884eecb57d43a3075a9e1f50ea180098be50e89efca1735c4->leave($__internal_d455a3a3edc5fcd884eecb57d43a3075a9e1f50ea180098be50e89efca1735c4_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_2568a6684566b66c7127f15cd24e79f248f46632eaa86bb33c2d234a525f93bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2568a6684566b66c7127f15cd24e79f248f46632eaa86bb33c2d234a525f93bd->enter($__internal_2568a6684566b66c7127f15cd24e79f248f46632eaa86bb33c2d234a525f93bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d009d0ff77ee437fbeefb5caa7c30b22111872f15bee7f3f2176d809c34b8e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d009d0ff77ee437fbeefb5caa7c30b22111872f15bee7f3f2176d809c34b8e99->enter($__internal_d009d0ff77ee437fbeefb5caa7c30b22111872f15bee7f3f2176d809c34b8e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d009d0ff77ee437fbeefb5caa7c30b22111872f15bee7f3f2176d809c34b8e99->leave($__internal_d009d0ff77ee437fbeefb5caa7c30b22111872f15bee7f3f2176d809c34b8e99_prof);

        
        $__internal_2568a6684566b66c7127f15cd24e79f248f46632eaa86bb33c2d234a525f93bd->leave($__internal_2568a6684566b66c7127f15cd24e79f248f46632eaa86bb33c2d234a525f93bd_prof);

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
</html>", "@MorivenBundle/Resources/views/layout.html.twig", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/views/layout.html.twig");
    }
}
