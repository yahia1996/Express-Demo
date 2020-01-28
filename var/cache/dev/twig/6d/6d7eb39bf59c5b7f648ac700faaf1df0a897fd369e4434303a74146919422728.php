<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f8409f4c0a9dc9c31a1edc633cdfe8062cea4162c5a2bbb6e10e0edce4e49d0f extends Twig_Template
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
        $__internal_e1ff8bc8a5a230968a4c184034964c4179c176d3861498c58f31184b61470ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ff8bc8a5a230968a4c184034964c4179c176d3861498c58f31184b61470ba1->enter($__internal_e1ff8bc8a5a230968a4c184034964c4179c176d3861498c58f31184b61470ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_58aacc006f8ddb0d79e4ba7907bade8c76d4ef7244d53bd66e2a133be8fb8086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58aacc006f8ddb0d79e4ba7907bade8c76d4ef7244d53bd66e2a133be8fb8086->enter($__internal_58aacc006f8ddb0d79e4ba7907bade8c76d4ef7244d53bd66e2a133be8fb8086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e1ff8bc8a5a230968a4c184034964c4179c176d3861498c58f31184b61470ba1->leave($__internal_e1ff8bc8a5a230968a4c184034964c4179c176d3861498c58f31184b61470ba1_prof);

        
        $__internal_58aacc006f8ddb0d79e4ba7907bade8c76d4ef7244d53bd66e2a133be8fb8086->leave($__internal_58aacc006f8ddb0d79e4ba7907bade8c76d4ef7244d53bd66e2a133be8fb8086_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
