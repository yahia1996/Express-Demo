<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_10b81e34175ab52c398a97ae36a157d8052f72809644c85548548ec895af1563 extends Twig_Template
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
        $__internal_e7cf889e69069bab4f0dba3e77b52b2c5788977c38f0a2a74a264b54516246c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7cf889e69069bab4f0dba3e77b52b2c5788977c38f0a2a74a264b54516246c8->enter($__internal_e7cf889e69069bab4f0dba3e77b52b2c5788977c38f0a2a74a264b54516246c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ffb1122259fa351e5deb2ae8415ac41e3a058cfa1287a4408438077d0e5d8088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb1122259fa351e5deb2ae8415ac41e3a058cfa1287a4408438077d0e5d8088->enter($__internal_ffb1122259fa351e5deb2ae8415ac41e3a058cfa1287a4408438077d0e5d8088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e7cf889e69069bab4f0dba3e77b52b2c5788977c38f0a2a74a264b54516246c8->leave($__internal_e7cf889e69069bab4f0dba3e77b52b2c5788977c38f0a2a74a264b54516246c8_prof);

        
        $__internal_ffb1122259fa351e5deb2ae8415ac41e3a058cfa1287a4408438077d0e5d8088->leave($__internal_ffb1122259fa351e5deb2ae8415ac41e3a058cfa1287a4408438077d0e5d8088_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
