<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_826846be87b015708244b93316ad1a20b3a75079f3bb8310ab2b2f5ac9be3e90 extends Twig_Template
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
        $__internal_3c5bfc2780cc3e75aad60a21676c42bf16d9963accbf582993aa18c4de874dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5bfc2780cc3e75aad60a21676c42bf16d9963accbf582993aa18c4de874dbf->enter($__internal_3c5bfc2780cc3e75aad60a21676c42bf16d9963accbf582993aa18c4de874dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bac42e68e42488b01d7df0d081d85ff90878a147b3f695c51ecd30cacbbf5f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac42e68e42488b01d7df0d081d85ff90878a147b3f695c51ecd30cacbbf5f09->enter($__internal_bac42e68e42488b01d7df0d081d85ff90878a147b3f695c51ecd30cacbbf5f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3c5bfc2780cc3e75aad60a21676c42bf16d9963accbf582993aa18c4de874dbf->leave($__internal_3c5bfc2780cc3e75aad60a21676c42bf16d9963accbf582993aa18c4de874dbf_prof);

        
        $__internal_bac42e68e42488b01d7df0d081d85ff90878a147b3f695c51ecd30cacbbf5f09->leave($__internal_bac42e68e42488b01d7df0d081d85ff90878a147b3f695c51ecd30cacbbf5f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
