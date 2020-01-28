<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_036e9e11349e378d44971891af2db1332feca390f0203e0760027229a6918625 extends Twig_Template
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
        $__internal_1c0a68c8c6d414c01ce7160d24267d112331e7de3cd720aa86d2e76796bf6882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0a68c8c6d414c01ce7160d24267d112331e7de3cd720aa86d2e76796bf6882->enter($__internal_1c0a68c8c6d414c01ce7160d24267d112331e7de3cd720aa86d2e76796bf6882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c633217b3e66bc170a41f65728068bc4ac309df1b28550d561b2c08c7a7ec4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c633217b3e66bc170a41f65728068bc4ac309df1b28550d561b2c08c7a7ec4f1->enter($__internal_c633217b3e66bc170a41f65728068bc4ac309df1b28550d561b2c08c7a7ec4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1c0a68c8c6d414c01ce7160d24267d112331e7de3cd720aa86d2e76796bf6882->leave($__internal_1c0a68c8c6d414c01ce7160d24267d112331e7de3cd720aa86d2e76796bf6882_prof);

        
        $__internal_c633217b3e66bc170a41f65728068bc4ac309df1b28550d561b2c08c7a7ec4f1->leave($__internal_c633217b3e66bc170a41f65728068bc4ac309df1b28550d561b2c08c7a7ec4f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
