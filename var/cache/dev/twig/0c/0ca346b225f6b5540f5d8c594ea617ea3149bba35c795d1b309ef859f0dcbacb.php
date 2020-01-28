<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_4f4c08f96cfd6d071ce6eea0c830097b0d61c89a868ac4ee5a7610ac142f687c extends Twig_Template
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
        $__internal_77028dad5c8f207446c67b1f0aeb4689b83034eb316bc00b4bc3502b39e81a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77028dad5c8f207446c67b1f0aeb4689b83034eb316bc00b4bc3502b39e81a9f->enter($__internal_77028dad5c8f207446c67b1f0aeb4689b83034eb316bc00b4bc3502b39e81a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_6ba64a36295ebfd4b9be148883fbb90f4190214dce919166e7bd16b7f33652a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba64a36295ebfd4b9be148883fbb90f4190214dce919166e7bd16b7f33652a2->enter($__internal_6ba64a36295ebfd4b9be148883fbb90f4190214dce919166e7bd16b7f33652a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_77028dad5c8f207446c67b1f0aeb4689b83034eb316bc00b4bc3502b39e81a9f->leave($__internal_77028dad5c8f207446c67b1f0aeb4689b83034eb316bc00b4bc3502b39e81a9f_prof);

        
        $__internal_6ba64a36295ebfd4b9be148883fbb90f4190214dce919166e7bd16b7f33652a2->leave($__internal_6ba64a36295ebfd4b9be148883fbb90f4190214dce919166e7bd16b7f33652a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
