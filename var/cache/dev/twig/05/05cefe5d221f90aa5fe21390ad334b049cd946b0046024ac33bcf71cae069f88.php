<?php

/* MorivenBundle:common:footer.html.twig */
class __TwigTemplate_8ea81c18a1ff8c454c9293fc6b4b32ea596128988e9e77178b84e9748f56abdd extends Twig_Template
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
        $__internal_fd9cdb92d893d17c4aa5f913ed29d93aac53093fac825df6adeca800a2ff1c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9cdb92d893d17c4aa5f913ed29d93aac53093fac825df6adeca800a2ff1c1b->enter($__internal_fd9cdb92d893d17c4aa5f913ed29d93aac53093fac825df6adeca800a2ff1c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:common:footer.html.twig"));

        $__internal_4defadecb43d8e458ee8410b7bf1074c1d442ec7270487e99eed8114bab0358e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4defadecb43d8e458ee8410b7bf1074c1d442ec7270487e99eed8114bab0358e->enter($__internal_4defadecb43d8e458ee8410b7bf1074c1d442ec7270487e99eed8114bab0358e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MorivenBundle:common:footer.html.twig"));

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
        
        $__internal_fd9cdb92d893d17c4aa5f913ed29d93aac53093fac825df6adeca800a2ff1c1b->leave($__internal_fd9cdb92d893d17c4aa5f913ed29d93aac53093fac825df6adeca800a2ff1c1b_prof);

        
        $__internal_4defadecb43d8e458ee8410b7bf1074c1d442ec7270487e99eed8114bab0358e->leave($__internal_4defadecb43d8e458ee8410b7bf1074c1d442ec7270487e99eed8114bab0358e_prof);

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
        return array (  61 => 28,  55 => 24,  52 => 23,  40 => 13,  38 => 12,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"newsletter_right_w3agile bg-dark pymd-5 py-4\">
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
                        {% if is_granted('ROLE_ADMIN') %}
                            <li>
                                <a class=\"nav-link\" href=\"/users\">Users</a>
                            </li>
                            <li>
                                <a class=\"nav-link\" href=\"/ordre\">Import</a>
                            </li>
                            <li>
                                <a class=\"nav-link\" href=\"/verfication\">Verification</a>
                            </li>
                        {% endif %}
                        {% if is_granted('ROLE_USER') and not is_granted('ROLE_ADMIN') %}
                            <li>
                                <a class=\"nav-link\" href=\"/ordre\">Colis</a>
                            </li>
                        {% endif %}
                    </ul>
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
</footer>", "MorivenBundle:common:footer.html.twig", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/views/common/footer.html.twig");
    }
}
