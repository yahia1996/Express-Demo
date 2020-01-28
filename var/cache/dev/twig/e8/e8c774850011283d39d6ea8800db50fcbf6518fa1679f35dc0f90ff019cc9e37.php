<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_eecb275d8edb5d0cfa550a57029a1cb38abe70b237842ebeaa2f6e924724e70c extends Twig_Template
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
        $__internal_50909008658aa04a795b2ee836db3b421803e141e85757fc651fd650be607a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50909008658aa04a795b2ee836db3b421803e141e85757fc651fd650be607a96->enter($__internal_50909008658aa04a795b2ee836db3b421803e141e85757fc651fd650be607a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2c305acb7b162a9efd59deb957d0e6004ccc2d7d34646d89290b6f17983e2f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c305acb7b162a9efd59deb957d0e6004ccc2d7d34646d89290b6f17983e2f6e->enter($__internal_2c305acb7b162a9efd59deb957d0e6004ccc2d7d34646d89290b6f17983e2f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_50909008658aa04a795b2ee836db3b421803e141e85757fc651fd650be607a96->leave($__internal_50909008658aa04a795b2ee836db3b421803e141e85757fc651fd650be607a96_prof);

        
        $__internal_2c305acb7b162a9efd59deb957d0e6004ccc2d7d34646d89290b6f17983e2f6e->leave($__internal_2c305acb7b162a9efd59deb957d0e6004ccc2d7d34646d89290b6f17983e2f6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
