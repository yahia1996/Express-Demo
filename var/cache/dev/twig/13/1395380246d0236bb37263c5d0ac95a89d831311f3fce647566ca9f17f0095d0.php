<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7ffaab278f5f043d44e75bf688741e12b096590d23067a81497d362d3666309c extends Twig_Template
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
        $__internal_3eec03752b221dc870daf9944b60905e775ad6083a2ea7fcf85e263f86873a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eec03752b221dc870daf9944b60905e775ad6083a2ea7fcf85e263f86873a5f->enter($__internal_3eec03752b221dc870daf9944b60905e775ad6083a2ea7fcf85e263f86873a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_13900af07a08ce46fbf58518cfc9026eb9820f7f93094a9a6d1bad644c1af9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13900af07a08ce46fbf58518cfc9026eb9820f7f93094a9a6d1bad644c1af9f9->enter($__internal_13900af07a08ce46fbf58518cfc9026eb9820f7f93094a9a6d1bad644c1af9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3eec03752b221dc870daf9944b60905e775ad6083a2ea7fcf85e263f86873a5f->leave($__internal_3eec03752b221dc870daf9944b60905e775ad6083a2ea7fcf85e263f86873a5f_prof);

        
        $__internal_13900af07a08ce46fbf58518cfc9026eb9820f7f93094a9a6d1bad644c1af9f9->leave($__internal_13900af07a08ce46fbf58518cfc9026eb9820f7f93094a9a6d1bad644c1af9f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
