<?php

/* MorivenBundle:common:header.html.twig */
class __TwigTemplate_93918b884df7ba1ccf2882598cf281818ccf1afdafab1ea5a4b9993516d1a4b6 extends Twig_Template
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
        $__internal_1a928471e923a8ef9a578f21c70661c53fe422c50de87fd6cad9eb4eeee28872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a928471e923a8ef9a578f21c70661c53fe422c50de87fd6cad9eb4eeee28872->enter($__internal_1a928471e923a8ef9a578f21c70661c53fe422c50de87fd6cad9eb4eeee28872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:common:header.html.twig"));

        $__internal_fc837103e7a3cd60dbe547965aad15c5c8677781cc0c04988f768d14c6ea8bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc837103e7a3cd60dbe547965aad15c5c8677781cc0c04988f768d14c6ea8bb8->enter($__internal_fc837103e7a3cd60dbe547965aad15c5c8677781cc0c04988f768d14c6ea8bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:common:header.html.twig"));

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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
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
        
        $__internal_1a928471e923a8ef9a578f21c70661c53fe422c50de87fd6cad9eb4eeee28872->leave($__internal_1a928471e923a8ef9a578f21c70661c53fe422c50de87fd6cad9eb4eeee28872_prof);

        
        $__internal_fc837103e7a3cd60dbe547965aad15c5c8677781cc0c04988f768d14c6ea8bb8->leave($__internal_fc837103e7a3cd60dbe547965aad15c5c8677781cc0c04988f768d14c6ea8bb8_prof);

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
        return array (  116 => 67,  111 => 64,  105 => 62,  103 => 61,  98 => 58,  92 => 54,  89 => 53,  77 => 43,  75 => 42,  44 => 13,  38 => 11,  36 => 10,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header-top-w3layouts\">
    <div class=\"container\">

        <header>
            <div class=\"top-head-w3-agile text-left\">
                <div class=\"row top-content-info-wthree\">
                    <div class=\"col-lg-7 top-content-right\">
                        <div class=\"row\">
                            <div class=\"col-md-6 callnumber text-left\">
                                {% if app.user.username is defined  %}
                                    <h6>{{ app.user.username }}</h6>
                                {% endif %}
                            </div>
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
                        {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/users\">Users</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/ordre\">Import</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/verification\">Verification</a>
                            </li>
                        {% endif %}
                        {% if is_granted('ROLE_USER') and not is_granted('ROLE_ADMIN') %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/ordre\">Colis</a>
                            </li>
                        {% endif %}
                    </ul>

                    <div class=\"log-in\">
                        {% if app.user.username is defined %}
                            <a class=\"btn text-uppercase\" href=\"{{ path('fos_user_security_logout') }}\">Log out</a>
                        {% else %}
                            <a class=\"btn text-uppercase\" href=\"/login\" style=\"background: transparent;color: #ff4e00;\">Sign In</a>
                            <a class=\"btn text-uppercase\" href=\"/register\">Sign Up</a>
                        {% endif %}
                    </div>
                </div>

            </nav>
        </header>
    </div>
</div>", "MorivenBundle:common:header.html.twig", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/views/common/header.html.twig");
    }
}
