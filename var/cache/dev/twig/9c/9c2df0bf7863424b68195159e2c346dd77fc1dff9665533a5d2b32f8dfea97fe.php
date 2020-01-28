<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_b5f645af7aa2a7d0a4c105ef7ed5f473381a4ea7548e8f3d614cd39c706bec7e extends Twig_Template
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
        $__internal_19d42b728678650a81b93a29067853addb29b4cf1b398823ae2df45999391a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d42b728678650a81b93a29067853addb29b4cf1b398823ae2df45999391a55->enter($__internal_19d42b728678650a81b93a29067853addb29b4cf1b398823ae2df45999391a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_3460d9a2b88e67de92e485e73f6625cab99843d51d3a2594bdb9ac2b36f1ef33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3460d9a2b88e67de92e485e73f6625cab99843d51d3a2594bdb9ac2b36f1ef33->enter($__internal_3460d9a2b88e67de92e485e73f6625cab99843d51d3a2594bdb9ac2b36f1ef33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_19d42b728678650a81b93a29067853addb29b4cf1b398823ae2df45999391a55->leave($__internal_19d42b728678650a81b93a29067853addb29b4cf1b398823ae2df45999391a55_prof);

        
        $__internal_3460d9a2b88e67de92e485e73f6625cab99843d51d3a2594bdb9ac2b36f1ef33->leave($__internal_3460d9a2b88e67de92e485e73f6625cab99843d51d3a2594bdb9ac2b36f1ef33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
