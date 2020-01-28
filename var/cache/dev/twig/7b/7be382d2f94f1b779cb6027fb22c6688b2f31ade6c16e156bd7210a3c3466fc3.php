<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0ad2a74c9d5aab52ce699d5a5369484d0f4bc495b5634f4d2bd76c2b603268b7 extends Twig_Template
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
        $__internal_1ee744c318d5160b6cfdb8fd9436686733a66c1b6c36032864a9a1e9fc97979b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee744c318d5160b6cfdb8fd9436686733a66c1b6c36032864a9a1e9fc97979b->enter($__internal_1ee744c318d5160b6cfdb8fd9436686733a66c1b6c36032864a9a1e9fc97979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_398090549b07e53c3dec8fc37e252710e01a09ea66a063f04b2fb3dd9eede932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398090549b07e53c3dec8fc37e252710e01a09ea66a063f04b2fb3dd9eede932->enter($__internal_398090549b07e53c3dec8fc37e252710e01a09ea66a063f04b2fb3dd9eede932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1ee744c318d5160b6cfdb8fd9436686733a66c1b6c36032864a9a1e9fc97979b->leave($__internal_1ee744c318d5160b6cfdb8fd9436686733a66c1b6c36032864a9a1e9fc97979b_prof);

        
        $__internal_398090549b07e53c3dec8fc37e252710e01a09ea66a063f04b2fb3dd9eede932->leave($__internal_398090549b07e53c3dec8fc37e252710e01a09ea66a063f04b2fb3dd9eede932_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
