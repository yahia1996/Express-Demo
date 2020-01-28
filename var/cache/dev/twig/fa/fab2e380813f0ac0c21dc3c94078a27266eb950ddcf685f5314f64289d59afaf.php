<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b29d345d9cde752d226fff8a3b60da57a1994de51f2ccf2ee3e9e89ebc207903 extends Twig_Template
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
        $__internal_d925ce1a1aaff03b4cf1a52b282f98769f447db43bd9d28ed86e17effe85dbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d925ce1a1aaff03b4cf1a52b282f98769f447db43bd9d28ed86e17effe85dbe5->enter($__internal_d925ce1a1aaff03b4cf1a52b282f98769f447db43bd9d28ed86e17effe85dbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_68357bbcf391cafdb1e8911d28f61c94d924f8f6d64ce4f9118b846d1ca5b91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68357bbcf391cafdb1e8911d28f61c94d924f8f6d64ce4f9118b846d1ca5b91a->enter($__internal_68357bbcf391cafdb1e8911d28f61c94d924f8f6d64ce4f9118b846d1ca5b91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d925ce1a1aaff03b4cf1a52b282f98769f447db43bd9d28ed86e17effe85dbe5->leave($__internal_d925ce1a1aaff03b4cf1a52b282f98769f447db43bd9d28ed86e17effe85dbe5_prof);

        
        $__internal_68357bbcf391cafdb1e8911d28f61c94d924f8f6d64ce4f9118b846d1ca5b91a->leave($__internal_68357bbcf391cafdb1e8911d28f61c94d924f8f6d64ce4f9118b846d1ca5b91a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
