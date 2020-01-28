<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_48c1b162a21ec41e3f1699006ae8dc386ddcd3cfce3a26153d74f149076bc3ee extends Twig_Template
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
        $__internal_ed3a9306de1dab987c4413b708532d36c51374b21cb21bf1ad6bb11cb7a9f3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3a9306de1dab987c4413b708532d36c51374b21cb21bf1ad6bb11cb7a9f3d5->enter($__internal_ed3a9306de1dab987c4413b708532d36c51374b21cb21bf1ad6bb11cb7a9f3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_918320f58fa2dee60645bb2e24aaa70e5890df6408d928373b5e27668daa761d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918320f58fa2dee60645bb2e24aaa70e5890df6408d928373b5e27668daa761d->enter($__internal_918320f58fa2dee60645bb2e24aaa70e5890df6408d928373b5e27668daa761d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ed3a9306de1dab987c4413b708532d36c51374b21cb21bf1ad6bb11cb7a9f3d5->leave($__internal_ed3a9306de1dab987c4413b708532d36c51374b21cb21bf1ad6bb11cb7a9f3d5_prof);

        
        $__internal_918320f58fa2dee60645bb2e24aaa70e5890df6408d928373b5e27668daa761d->leave($__internal_918320f58fa2dee60645bb2e24aaa70e5890df6408d928373b5e27668daa761d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
