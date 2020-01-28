<?php

/* @MorivenBundle/Resources/views/layout.html.twig */
class __TwigTemplate_99ee68eaaf2e9bf3d727ee5ee93429a638aecf8cc8db1ed78e6b707a1a181584 extends Twig_Template
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
        $__internal_f1a60b7a43d4847ab03079cae285355590180a2e217c5e2517e4e9d739300335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a60b7a43d4847ab03079cae285355590180a2e217c5e2517e4e9d739300335->enter($__internal_f1a60b7a43d4847ab03079cae285355590180a2e217c5e2517e4e9d739300335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MorivenBundle/Resources/views/layout.html.twig"));

        $__internal_3e9c17bf476792467de93c29922bd67e3452be87f0ce4bf133f8d20915158c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9c17bf476792467de93c29922bd67e3452be87f0ce4bf133f8d20915158c8c->enter($__internal_3e9c17bf476792467de93c29922bd67e3452be87f0ce4bf133f8d20915158c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MorivenBundle/Resources/views/layout.html.twig"));

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
        
        $__internal_f1a60b7a43d4847ab03079cae285355590180a2e217c5e2517e4e9d739300335->leave($__internal_f1a60b7a43d4847ab03079cae285355590180a2e217c5e2517e4e9d739300335_prof);

        
        $__internal_3e9c17bf476792467de93c29922bd67e3452be87f0ce4bf133f8d20915158c8c->leave($__internal_3e9c17bf476792467de93c29922bd67e3452be87f0ce4bf133f8d20915158c8c_prof);

    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        $__internal_1b434e472d3d8890b45ab5d916942500bef698808a077001e124ca05e3c58ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b434e472d3d8890b45ab5d916942500bef698808a077001e124ca05e3c58ea7->enter($__internal_1b434e472d3d8890b45ab5d916942500bef698808a077001e124ca05e3c58ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_a0db84edbc60ab0c22c9ca7e0fbb56cfbb00d854c9b1e6c158efa538c0aa9373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0db84edbc60ab0c22c9ca7e0fbb56cfbb00d854c9b1e6c158efa538c0aa9373->enter($__internal_a0db84edbc60ab0c22c9ca7e0fbb56cfbb00d854c9b1e6c158efa538c0aa9373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 9
        echo "    ";
        
        $__internal_a0db84edbc60ab0c22c9ca7e0fbb56cfbb00d854c9b1e6c158efa538c0aa9373->leave($__internal_a0db84edbc60ab0c22c9ca7e0fbb56cfbb00d854c9b1e6c158efa538c0aa9373_prof);

        
        $__internal_1b434e472d3d8890b45ab5d916942500bef698808a077001e124ca05e3c58ea7->leave($__internal_1b434e472d3d8890b45ab5d916942500bef698808a077001e124ca05e3c58ea7_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2595425c2001dd08349fb9d087ec9fc2cc3fc2ad4ad62ef757f34aab5cbca34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2595425c2001dd08349fb9d087ec9fc2cc3fc2ad4ad62ef757f34aab5cbca34->enter($__internal_b2595425c2001dd08349fb9d087ec9fc2cc3fc2ad4ad62ef757f34aab5cbca34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8f8c67753488eeb7f7278d92f0d0bedccd657b103d3c0d1c50c88d124cfe1640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8c67753488eeb7f7278d92f0d0bedccd657b103d3c0d1c50c88d124cfe1640->enter($__internal_8f8c67753488eeb7f7278d92f0d0bedccd657b103d3c0d1c50c88d124cfe1640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8f8c67753488eeb7f7278d92f0d0bedccd657b103d3c0d1c50c88d124cfe1640->leave($__internal_8f8c67753488eeb7f7278d92f0d0bedccd657b103d3c0d1c50c88d124cfe1640_prof);

        
        $__internal_b2595425c2001dd08349fb9d087ec9fc2cc3fc2ad4ad62ef757f34aab5cbca34->leave($__internal_b2595425c2001dd08349fb9d087ec9fc2cc3fc2ad4ad62ef757f34aab5cbca34_prof);

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
