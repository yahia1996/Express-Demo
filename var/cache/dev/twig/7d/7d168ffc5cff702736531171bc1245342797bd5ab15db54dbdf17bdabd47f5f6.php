<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f658a4749dba885c7b8915b36e89f0999ecb223068029b467707d0a9e78db9e2 extends Twig_Template
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
        $__internal_fa38a2d758298828a0054ce00a85477b6c3ef715ebfd59e93f2e89f28f6f01d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa38a2d758298828a0054ce00a85477b6c3ef715ebfd59e93f2e89f28f6f01d3->enter($__internal_fa38a2d758298828a0054ce00a85477b6c3ef715ebfd59e93f2e89f28f6f01d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8fd7364012c7dedca3edecc80d5c21d6e02b94d323e1c49c0214f49f0db860af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd7364012c7dedca3edecc80d5c21d6e02b94d323e1c49c0214f49f0db860af->enter($__internal_8fd7364012c7dedca3edecc80d5c21d6e02b94d323e1c49c0214f49f0db860af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fa38a2d758298828a0054ce00a85477b6c3ef715ebfd59e93f2e89f28f6f01d3->leave($__internal_fa38a2d758298828a0054ce00a85477b6c3ef715ebfd59e93f2e89f28f6f01d3_prof);

        
        $__internal_8fd7364012c7dedca3edecc80d5c21d6e02b94d323e1c49c0214f49f0db860af->leave($__internal_8fd7364012c7dedca3edecc80d5c21d6e02b94d323e1c49c0214f49f0db860af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
