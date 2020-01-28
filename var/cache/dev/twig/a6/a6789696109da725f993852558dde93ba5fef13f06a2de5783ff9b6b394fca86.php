<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0ccce4e0611a854e178788a5c398bd3ae804742ee491e30b3936f81e91a03b67 extends Twig_Template
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
        $__internal_7c42a38ea7bc2d2ba85be38775f16e5e6ec71f5ca7173c6bca973ec566c319f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c42a38ea7bc2d2ba85be38775f16e5e6ec71f5ca7173c6bca973ec566c319f7->enter($__internal_7c42a38ea7bc2d2ba85be38775f16e5e6ec71f5ca7173c6bca973ec566c319f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2368b9f7c130cb717cd1241746ba47af2f8467fb47bc4b07bdfd00a1505e4d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2368b9f7c130cb717cd1241746ba47af2f8467fb47bc4b07bdfd00a1505e4d55->enter($__internal_2368b9f7c130cb717cd1241746ba47af2f8467fb47bc4b07bdfd00a1505e4d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7c42a38ea7bc2d2ba85be38775f16e5e6ec71f5ca7173c6bca973ec566c319f7->leave($__internal_7c42a38ea7bc2d2ba85be38775f16e5e6ec71f5ca7173c6bca973ec566c319f7_prof);

        
        $__internal_2368b9f7c130cb717cd1241746ba47af2f8467fb47bc4b07bdfd00a1505e4d55->leave($__internal_2368b9f7c130cb717cd1241746ba47af2f8467fb47bc4b07bdfd00a1505e4d55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
