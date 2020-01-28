<?php

/* @MorivenBundle/Resources/views/layout.html.twig */
class __TwigTemplate_b40440097fb7d0ed48efcb5feef943807424242b13bad93a13c441f4b1447f98 extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "requestUri", array()) != "")) {
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
    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
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
        return array (  175 => 15,  171 => 9,  168 => 8,  70 => 33,  68 => 32,  63 => 29,  58 => 20,  56 => 19,  52 => 17,  50 => 15,  45 => 12,  43 => 11,  40 => 10,  38 => 8,  31 => 6,  28 => 5,  26 => 4,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@MorivenBundle/Resources/views/layout.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle/Resources/views/layout.html.twig");
    }
}
