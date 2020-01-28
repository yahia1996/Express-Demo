<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_44c930dc4203322ce8baa748608dc622af13c0c959479fa93fb7056882fea50e extends Twig_Template
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
        $__internal_7a2ed19887c3fedb152e6d69da2c9f28a8f52863479933e24754c2f4b65a12eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2ed19887c3fedb152e6d69da2c9f28a8f52863479933e24754c2f4b65a12eb->enter($__internal_7a2ed19887c3fedb152e6d69da2c9f28a8f52863479933e24754c2f4b65a12eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_92f2cf3252942b5003c52bd56b1b6068acf9f0a8260909a751743c505b5b7c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f2cf3252942b5003c52bd56b1b6068acf9f0a8260909a751743c505b5b7c30->enter($__internal_92f2cf3252942b5003c52bd56b1b6068acf9f0a8260909a751743c505b5b7c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7a2ed19887c3fedb152e6d69da2c9f28a8f52863479933e24754c2f4b65a12eb->leave($__internal_7a2ed19887c3fedb152e6d69da2c9f28a8f52863479933e24754c2f4b65a12eb_prof);

        
        $__internal_92f2cf3252942b5003c52bd56b1b6068acf9f0a8260909a751743c505b5b7c30->leave($__internal_92f2cf3252942b5003c52bd56b1b6068acf9f0a8260909a751743c505b5b7c30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
