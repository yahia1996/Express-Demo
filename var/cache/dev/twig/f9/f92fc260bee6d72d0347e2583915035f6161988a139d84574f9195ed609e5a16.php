<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_374e8661f7beaf029155131b6d7d787d13ebce78701379505d70946362cd0e27 extends Twig_Template
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
        $__internal_950916818d03af0c044f1698da412fc70d5f0f2a79f5b1af5ee858bf8b2127d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950916818d03af0c044f1698da412fc70d5f0f2a79f5b1af5ee858bf8b2127d9->enter($__internal_950916818d03af0c044f1698da412fc70d5f0f2a79f5b1af5ee858bf8b2127d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_929727290344d4492b6256c6689060da5870f30ddb226e444b935daf1d2e84b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929727290344d4492b6256c6689060da5870f30ddb226e444b935daf1d2e84b4->enter($__internal_929727290344d4492b6256c6689060da5870f30ddb226e444b935daf1d2e84b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_950916818d03af0c044f1698da412fc70d5f0f2a79f5b1af5ee858bf8b2127d9->leave($__internal_950916818d03af0c044f1698da412fc70d5f0f2a79f5b1af5ee858bf8b2127d9_prof);

        
        $__internal_929727290344d4492b6256c6689060da5870f30ddb226e444b935daf1d2e84b4->leave($__internal_929727290344d4492b6256c6689060da5870f30ddb226e444b935daf1d2e84b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
