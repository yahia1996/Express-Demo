<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_89f695845f31d383a70b1c06ce4470c350ff439309012cdc28a252b156349933 extends Twig_Template
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
        $__internal_9390a4543425338f371e477270aee0066395bbadea1702b2df6490e10336c42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9390a4543425338f371e477270aee0066395bbadea1702b2df6490e10336c42b->enter($__internal_9390a4543425338f371e477270aee0066395bbadea1702b2df6490e10336c42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f0fdb7a6fb9b2b7dfd67adef489d0c91c464f8e297c02535abbe624d594dae17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fdb7a6fb9b2b7dfd67adef489d0c91c464f8e297c02535abbe624d594dae17->enter($__internal_f0fdb7a6fb9b2b7dfd67adef489d0c91c464f8e297c02535abbe624d594dae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9390a4543425338f371e477270aee0066395bbadea1702b2df6490e10336c42b->leave($__internal_9390a4543425338f371e477270aee0066395bbadea1702b2df6490e10336c42b_prof);

        
        $__internal_f0fdb7a6fb9b2b7dfd67adef489d0c91c464f8e297c02535abbe624d594dae17->leave($__internal_f0fdb7a6fb9b2b7dfd67adef489d0c91c464f8e297c02535abbe624d594dae17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
