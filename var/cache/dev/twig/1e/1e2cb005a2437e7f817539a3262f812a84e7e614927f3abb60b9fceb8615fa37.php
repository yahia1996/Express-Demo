<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_eade06dd15740f8ddf4d990eb6a1913d70a6be3472a3010735ef86a68e488507 extends Twig_Template
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
        $__internal_f8e547d50e3019de0662b17cbbaac9edc7ad7d884b79283ba2268ea064b047fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e547d50e3019de0662b17cbbaac9edc7ad7d884b79283ba2268ea064b047fe->enter($__internal_f8e547d50e3019de0662b17cbbaac9edc7ad7d884b79283ba2268ea064b047fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_89ea2865226d2dbb6fbf84e3d1aab13ba7f11cee8af07b0ecf42850856071683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ea2865226d2dbb6fbf84e3d1aab13ba7f11cee8af07b0ecf42850856071683->enter($__internal_89ea2865226d2dbb6fbf84e3d1aab13ba7f11cee8af07b0ecf42850856071683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f8e547d50e3019de0662b17cbbaac9edc7ad7d884b79283ba2268ea064b047fe->leave($__internal_f8e547d50e3019de0662b17cbbaac9edc7ad7d884b79283ba2268ea064b047fe_prof);

        
        $__internal_89ea2865226d2dbb6fbf84e3d1aab13ba7f11cee8af07b0ecf42850856071683->leave($__internal_89ea2865226d2dbb6fbf84e3d1aab13ba7f11cee8af07b0ecf42850856071683_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
