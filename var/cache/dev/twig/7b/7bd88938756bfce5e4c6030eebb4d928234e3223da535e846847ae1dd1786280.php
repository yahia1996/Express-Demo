<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5e31471f51abd0c7c407278522090dd0e96bb5ca261538b453cd8f4fd465aa17 extends Twig_Template
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
        $__internal_2c8e1be03dd9e6acb3b3719527af879a80b95071c3ee6cd6650ddfc3f87a5f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8e1be03dd9e6acb3b3719527af879a80b95071c3ee6cd6650ddfc3f87a5f78->enter($__internal_2c8e1be03dd9e6acb3b3719527af879a80b95071c3ee6cd6650ddfc3f87a5f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_253b9a096f0ac9ac2e5eb1bdda9679a1bb645b4cce0583fbb0a155c69d9eb8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253b9a096f0ac9ac2e5eb1bdda9679a1bb645b4cce0583fbb0a155c69d9eb8e5->enter($__internal_253b9a096f0ac9ac2e5eb1bdda9679a1bb645b4cce0583fbb0a155c69d9eb8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2c8e1be03dd9e6acb3b3719527af879a80b95071c3ee6cd6650ddfc3f87a5f78->leave($__internal_2c8e1be03dd9e6acb3b3719527af879a80b95071c3ee6cd6650ddfc3f87a5f78_prof);

        
        $__internal_253b9a096f0ac9ac2e5eb1bdda9679a1bb645b4cce0583fbb0a155c69d9eb8e5->leave($__internal_253b9a096f0ac9ac2e5eb1bdda9679a1bb645b4cce0583fbb0a155c69d9eb8e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
