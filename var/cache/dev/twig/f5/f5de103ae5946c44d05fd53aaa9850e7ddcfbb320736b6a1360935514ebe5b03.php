<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c96b00aeed2fab1443f5fd4cd1f83f51fe36aecd1ebf06b1e720cf1daff9e5f3 extends Twig_Template
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
        $__internal_70da627678f10de1aaae2ba768a05b4a02dd10a9fe597b50a2181b90f33da71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70da627678f10de1aaae2ba768a05b4a02dd10a9fe597b50a2181b90f33da71c->enter($__internal_70da627678f10de1aaae2ba768a05b4a02dd10a9fe597b50a2181b90f33da71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5e36bc00c39557fa501e775e4cd1dc82de091a83c57cd35964b67a9a39642c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e36bc00c39557fa501e775e4cd1dc82de091a83c57cd35964b67a9a39642c21->enter($__internal_5e36bc00c39557fa501e775e4cd1dc82de091a83c57cd35964b67a9a39642c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_70da627678f10de1aaae2ba768a05b4a02dd10a9fe597b50a2181b90f33da71c->leave($__internal_70da627678f10de1aaae2ba768a05b4a02dd10a9fe597b50a2181b90f33da71c_prof);

        
        $__internal_5e36bc00c39557fa501e775e4cd1dc82de091a83c57cd35964b67a9a39642c21->leave($__internal_5e36bc00c39557fa501e775e4cd1dc82de091a83c57cd35964b67a9a39642c21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
