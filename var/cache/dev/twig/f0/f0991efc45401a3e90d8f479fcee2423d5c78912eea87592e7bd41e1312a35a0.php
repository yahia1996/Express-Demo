<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_efee0228ce2a16a81c194144851d90b36726a5ca07988ad37245dbff0f593dc9 extends Twig_Template
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
        $__internal_10edae7a06055be6870ef96058a37a7b3d090da30537a0a4829f69d982561dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10edae7a06055be6870ef96058a37a7b3d090da30537a0a4829f69d982561dbb->enter($__internal_10edae7a06055be6870ef96058a37a7b3d090da30537a0a4829f69d982561dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f3545122e602748338f771fdb117a066839705b2d88bc5eeecfc0487d9a0b60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3545122e602748338f771fdb117a066839705b2d88bc5eeecfc0487d9a0b60d->enter($__internal_f3545122e602748338f771fdb117a066839705b2d88bc5eeecfc0487d9a0b60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_10edae7a06055be6870ef96058a37a7b3d090da30537a0a4829f69d982561dbb->leave($__internal_10edae7a06055be6870ef96058a37a7b3d090da30537a0a4829f69d982561dbb_prof);

        
        $__internal_f3545122e602748338f771fdb117a066839705b2d88bc5eeecfc0487d9a0b60d->leave($__internal_f3545122e602748338f771fdb117a066839705b2d88bc5eeecfc0487d9a0b60d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
