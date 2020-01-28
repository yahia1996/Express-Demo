<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_42427693805c63ba7551d3ed47fb392a123030274523435efeede33666274cfa extends Twig_Template
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
        $__internal_1318074d28bffe9ffb8471fd6728fe89a1786a9aec7f9f206c0eabcabca79d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1318074d28bffe9ffb8471fd6728fe89a1786a9aec7f9f206c0eabcabca79d58->enter($__internal_1318074d28bffe9ffb8471fd6728fe89a1786a9aec7f9f206c0eabcabca79d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d3fab1107efbd0c1638687f69e0dc629082409780e7a3474ec2dff232da14684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fab1107efbd0c1638687f69e0dc629082409780e7a3474ec2dff232da14684->enter($__internal_d3fab1107efbd0c1638687f69e0dc629082409780e7a3474ec2dff232da14684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1318074d28bffe9ffb8471fd6728fe89a1786a9aec7f9f206c0eabcabca79d58->leave($__internal_1318074d28bffe9ffb8471fd6728fe89a1786a9aec7f9f206c0eabcabca79d58_prof);

        
        $__internal_d3fab1107efbd0c1638687f69e0dc629082409780e7a3474ec2dff232da14684->leave($__internal_d3fab1107efbd0c1638687f69e0dc629082409780e7a3474ec2dff232da14684_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
