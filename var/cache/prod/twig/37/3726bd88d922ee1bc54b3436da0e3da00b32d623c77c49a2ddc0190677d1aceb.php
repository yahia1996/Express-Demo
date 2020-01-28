<?php

/* MorivenBundle:common:header.html.twig */
class __TwigTemplate_7c7e281583228dd473c524330b5892a4c19d4f9aa19a8d814d97184a38c12a8a extends Twig_Template
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
        echo "<div class=\"header-top-w3layouts\">
    <div class=\"container\">

        <header>
            <div class=\"top-head-w3-agile text-left\">
                <div class=\"row top-content-info-wthree\">
                    <div class=\"col-lg-7 top-content-right\">
                        <div class=\"row\">
                            <div class=\"col-md-6 callnumber text-left\">
                                ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 11
            echo "                                    <h6>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "</h6>
                                ";
        }
        // line 13
        echo "                            </div>
                            <div class=\"col-md-6 top-social-icons p-0\">
                                <ul class=\"social-icons d-flex justify-content-end\">
                                    <li class=\"mr-1\"><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                    <li class=\"mx-1\"><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                    <li class=\"mx-1\"><a href=\"#\"><span class=\"fab fa-google-plus-g\"></span></a></li>
                                    <li class=\"mx-1\"><a href=\"#\"><span class=\"fab fa-linkedin-in\"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class=\"clearfix\"></div>
            <nav class=\"navbar navbar-expand-lg navbar-light\">
                <div class=\"logo text-left\">
                    <h1>
                        <a class=\"navbar-brand\" href=\"/\">
                            Tunisia Express</a>
                    </h1>
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\">
                            </span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-lg-auto text-right\">
                        ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/users\">Users</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/ordre\">Import</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/verification\">Verification</a>
                            </li>
                        ";
        }
        // line 53
        echo "                        ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 54
            echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/ordre\">Colis</a>
                            </li>
                        ";
        }
        // line 58
        echo "                    </ul>

                    <div class=\"log-in\">
                        ";
        // line 61
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 62
            echo "                            <a class=\"btn text-uppercase\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Log out</a>
                        ";
        } else {
            // line 64
            echo "                            <a class=\"btn text-uppercase\" href=\"/login\" style=\"background: transparent;color: #ff4e00;\">Sign In</a>
                            <a class=\"btn text-uppercase\" href=\"/register\">Sign Up</a>
                        ";
        }
        // line 67
        echo "                    </div>
                </div>

            </nav>
        </header>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "MorivenBundle:common:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 67,  105 => 64,  99 => 62,  97 => 61,  92 => 58,  86 => 54,  83 => 53,  71 => 43,  69 => 42,  38 => 13,  32 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MorivenBundle:common:header.html.twig", "C:\\wamp64\\www\\Express-Demo\\Express-Demo\\src\\MorivenBundle/Resources/views/common/header.html.twig");
    }
}
