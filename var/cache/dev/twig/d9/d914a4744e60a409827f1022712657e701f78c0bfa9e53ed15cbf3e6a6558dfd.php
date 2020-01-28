<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_0037bc074a374b38f15854b8a5092d8964e17a933751b7d45b41ab3e481a9bdc extends Twig_Template
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
        $__internal_1e6002edfe1f391e200cef1bc8e299f272f727f6d364bfa95ef7887d5596e554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6002edfe1f391e200cef1bc8e299f272f727f6d364bfa95ef7887d5596e554->enter($__internal_1e6002edfe1f391e200cef1bc8e299f272f727f6d364bfa95ef7887d5596e554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_666d730482d938d004e2e7714694fa123642c8801625122e1872f73331015665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666d730482d938d004e2e7714694fa123642c8801625122e1872f73331015665->enter($__internal_666d730482d938d004e2e7714694fa123642c8801625122e1872f73331015665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1e6002edfe1f391e200cef1bc8e299f272f727f6d364bfa95ef7887d5596e554->leave($__internal_1e6002edfe1f391e200cef1bc8e299f272f727f6d364bfa95ef7887d5596e554_prof);

        
        $__internal_666d730482d938d004e2e7714694fa123642c8801625122e1872f73331015665->leave($__internal_666d730482d938d004e2e7714694fa123642c8801625122e1872f73331015665_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
