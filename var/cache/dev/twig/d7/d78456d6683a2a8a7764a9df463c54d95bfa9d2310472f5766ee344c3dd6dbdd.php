<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ff3189e16bc9f99c9490ad0fdc842a87fa89ed12b94be16e6ae5b9de324224c0 extends Twig_Template
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
        $__internal_504ff8ed6834548472e007e144b36632881f58996790f30bf017ecdd0012b9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504ff8ed6834548472e007e144b36632881f58996790f30bf017ecdd0012b9cf->enter($__internal_504ff8ed6834548472e007e144b36632881f58996790f30bf017ecdd0012b9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e2a776aa7a4717892827f70bd14a48dde520841c391005b4cc51571f79fe0e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a776aa7a4717892827f70bd14a48dde520841c391005b4cc51571f79fe0e1b->enter($__internal_e2a776aa7a4717892827f70bd14a48dde520841c391005b4cc51571f79fe0e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_504ff8ed6834548472e007e144b36632881f58996790f30bf017ecdd0012b9cf->leave($__internal_504ff8ed6834548472e007e144b36632881f58996790f30bf017ecdd0012b9cf_prof);

        
        $__internal_e2a776aa7a4717892827f70bd14a48dde520841c391005b4cc51571f79fe0e1b->leave($__internal_e2a776aa7a4717892827f70bd14a48dde520841c391005b4cc51571f79fe0e1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
