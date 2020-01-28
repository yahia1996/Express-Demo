<?php

/* MorivenBundle:common:footer.html.twig */
class __TwigTemplate_86f8a5e59e53fd75858e7fb658a0b90ad519f6272452588ada0a60775a090f51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer class=\"newsletter_right_w3agile bg-dark pymd-5 py-4\">
    <div class=\"container\">
        <div class=\"inner-sec-w3layouts py-md-5 py-3\">
            <div class=\"row footer-bottom-wthree mt-lg-5 mt-3\">
                <div class=\"col-lg-6 copyright\">
                    <h2><a class=\"navbar-brand\" href=\"/\">
                            Tunisie Express</a></h2>
                    <p class=\"copy-right mt-3\">© 2019 Tunisia Express. All Rights Reserved </p>
                </div>
                <div class=\"col-lg-6 social-icon footer\">
                    <ul class=\"links-nav d-flex justify-content-end\">
                        ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                            <li>
                                <a class=\"nav-link\" href=\"/users\">Users</a>
                            </li>
                            <li>
                                <a class=\"nav-link\" href=\"/ordre\">Import</a>
                            </li>
                            <li>
                                <a class=\"nav-link\" href=\"/verfication\">Verification</a>
                            </li>
                        ";
        }
        // line 23
        echo "                        ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 24
            echo "                            <li>
                                <a class=\"nav-link\" href=\"/ordre\">Colis</a>
                            </li>
                        ";
        }
        // line 28
        echo "                    </ul>
                    <ul class=\"social-icons d-flex justify-content-end mt-3\">
                        <li class=\"mr-1\"><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                        <li class=\"mx-1\"><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                        <li class=\"mx-1\"><a href=\"#\"><span class=\"fab fa-google-plus-g\"></span></a></li>
                        <li class=\"mx-1\"><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                    </ul>
                </div>
                <div class=\"clearfix\"></div>

            </div>

        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "MorivenBundle:common:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 28,  49 => 24,  46 => 23,  34 => 13,  32 => 12,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MorivenBundle:common:footer.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle/Resources/views/common/footer.html.twig");
    }
}
