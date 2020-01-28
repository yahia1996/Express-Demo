<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_78d34da58e40a370b926f16bb2d0f86797b4e31c359c78edf4ce7c7d022701d4 extends Twig_Template
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
        $__internal_bb5fd77cab192c781c4684d37c62cb68f7590eb2c83f0fc3343611f1d03f4017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5fd77cab192c781c4684d37c62cb68f7590eb2c83f0fc3343611f1d03f4017->enter($__internal_bb5fd77cab192c781c4684d37c62cb68f7590eb2c83f0fc3343611f1d03f4017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9ed502b04163a3a6a20684cdeb594b16c5a6481fafb4f8e8be992c1736f0a120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed502b04163a3a6a20684cdeb594b16c5a6481fafb4f8e8be992c1736f0a120->enter($__internal_9ed502b04163a3a6a20684cdeb594b16c5a6481fafb4f8e8be992c1736f0a120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_bb5fd77cab192c781c4684d37c62cb68f7590eb2c83f0fc3343611f1d03f4017->leave($__internal_bb5fd77cab192c781c4684d37c62cb68f7590eb2c83f0fc3343611f1d03f4017_prof);

        
        $__internal_9ed502b04163a3a6a20684cdeb594b16c5a6481fafb4f8e8be992c1736f0a120->leave($__internal_9ed502b04163a3a6a20684cdeb594b16c5a6481fafb4f8e8be992c1736f0a120_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
