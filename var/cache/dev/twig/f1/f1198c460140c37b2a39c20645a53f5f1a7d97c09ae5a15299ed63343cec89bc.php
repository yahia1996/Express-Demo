<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_b89eb95df3916fe1659f4824b7faa5dcfed4b60c4d4db1b59c12985072a3c8d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb3763ac97f58992cdab02dddb36d2195dab0c657fa81b091b780078d71dd1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3763ac97f58992cdab02dddb36d2195dab0c657fa81b091b780078d71dd1ac->enter($__internal_fb3763ac97f58992cdab02dddb36d2195dab0c657fa81b091b780078d71dd1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_919ec32ee552c1dbf6bb1bc8010cdc0d198b0a4df41ad3301bc37ee76123dbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919ec32ee552c1dbf6bb1bc8010cdc0d198b0a4df41ad3301bc37ee76123dbef->enter($__internal_919ec32ee552c1dbf6bb1bc8010cdc0d198b0a4df41ad3301bc37ee76123dbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_fb3763ac97f58992cdab02dddb36d2195dab0c657fa81b091b780078d71dd1ac->leave($__internal_fb3763ac97f58992cdab02dddb36d2195dab0c657fa81b091b780078d71dd1ac_prof);

        
        $__internal_919ec32ee552c1dbf6bb1bc8010cdc0d198b0a4df41ad3301bc37ee76123dbef->leave($__internal_919ec32ee552c1dbf6bb1bc8010cdc0d198b0a4df41ad3301bc37ee76123dbef_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f6a71212de92bfd5223c31aec1415784f2c97f807e1d9566d37ecbe11937acce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a71212de92bfd5223c31aec1415784f2c97f807e1d9566d37ecbe11937acce->enter($__internal_f6a71212de92bfd5223c31aec1415784f2c97f807e1d9566d37ecbe11937acce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_192b30d68fa6136c59d85df564ec4656b22e508e693fc3dcb0306b73ee154891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192b30d68fa6136c59d85df564ec4656b22e508e693fc3dcb0306b73ee154891->enter($__internal_192b30d68fa6136c59d85df564ec4656b22e508e693fc3dcb0306b73ee154891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_192b30d68fa6136c59d85df564ec4656b22e508e693fc3dcb0306b73ee154891->leave($__internal_192b30d68fa6136c59d85df564ec4656b22e508e693fc3dcb0306b73ee154891_prof);

        
        $__internal_f6a71212de92bfd5223c31aec1415784f2c97f807e1d9566d37ecbe11937acce->leave($__internal_f6a71212de92bfd5223c31aec1415784f2c97f807e1d9566d37ecbe11937acce_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_32a0d50b519ff56f1191fca21972ac9c92af81398cf756c02e5dba0ab4414f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a0d50b519ff56f1191fca21972ac9c92af81398cf756c02e5dba0ab4414f26->enter($__internal_32a0d50b519ff56f1191fca21972ac9c92af81398cf756c02e5dba0ab4414f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cbb7be9e694b98587e2a05eee8ed68dfd3fef50bf50dbbf238952711d1dee53f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb7be9e694b98587e2a05eee8ed68dfd3fef50bf50dbbf238952711d1dee53f->enter($__internal_cbb7be9e694b98587e2a05eee8ed68dfd3fef50bf50dbbf238952711d1dee53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_cbb7be9e694b98587e2a05eee8ed68dfd3fef50bf50dbbf238952711d1dee53f->leave($__internal_cbb7be9e694b98587e2a05eee8ed68dfd3fef50bf50dbbf238952711d1dee53f_prof);

        
        $__internal_32a0d50b519ff56f1191fca21972ac9c92af81398cf756c02e5dba0ab4414f26->leave($__internal_32a0d50b519ff56f1191fca21972ac9c92af81398cf756c02e5dba0ab4414f26_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0bc4379867ba5093e844bb02093bb4b60fd963338f6877ff20cd8777acb70682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc4379867ba5093e844bb02093bb4b60fd963338f6877ff20cd8777acb70682->enter($__internal_0bc4379867ba5093e844bb02093bb4b60fd963338f6877ff20cd8777acb70682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d7dcb61c3f45585dd460f70dc650c492d34b87d8248b67ff30c609e5c15666aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dcb61c3f45585dd460f70dc650c492d34b87d8248b67ff30c609e5c15666aa->enter($__internal_d7dcb61c3f45585dd460f70dc650c492d34b87d8248b67ff30c609e5c15666aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_d7dcb61c3f45585dd460f70dc650c492d34b87d8248b67ff30c609e5c15666aa->leave($__internal_d7dcb61c3f45585dd460f70dc650c492d34b87d8248b67ff30c609e5c15666aa_prof);

        
        $__internal_0bc4379867ba5093e844bb02093bb4b60fd963338f6877ff20cd8777acb70682->leave($__internal_0bc4379867ba5093e844bb02093bb4b60fd963338f6877ff20cd8777acb70682_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_f3a36836160921bfbc773de1aa8c0f3440ad9b66ac913e4cc7f36ebf5361615b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a36836160921bfbc773de1aa8c0f3440ad9b66ac913e4cc7f36ebf5361615b->enter($__internal_f3a36836160921bfbc773de1aa8c0f3440ad9b66ac913e4cc7f36ebf5361615b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_a352eac4a15b37bf131e65661340cecf9d9dd8e0f563ca8d9471581aee4b5003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a352eac4a15b37bf131e65661340cecf9d9dd8e0f563ca8d9471581aee4b5003->enter($__internal_a352eac4a15b37bf131e65661340cecf9d9dd8e0f563ca8d9471581aee4b5003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_a352eac4a15b37bf131e65661340cecf9d9dd8e0f563ca8d9471581aee4b5003->leave($__internal_a352eac4a15b37bf131e65661340cecf9d9dd8e0f563ca8d9471581aee4b5003_prof);

        
        $__internal_f3a36836160921bfbc773de1aa8c0f3440ad9b66ac913e4cc7f36ebf5361615b->leave($__internal_f3a36836160921bfbc773de1aa8c0f3440ad9b66ac913e4cc7f36ebf5361615b_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5bea8508c15eb473fd18e49ed922545aa74c941e978c02230d30d78d02814d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bea8508c15eb473fd18e49ed922545aa74c941e978c02230d30d78d02814d17->enter($__internal_5bea8508c15eb473fd18e49ed922545aa74c941e978c02230d30d78d02814d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_425dea222257873e692a43d0245562e4bca7509d06a7c3a3d0987deb0d1242d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425dea222257873e692a43d0245562e4bca7509d06a7c3a3d0987deb0d1242d2->enter($__internal_425dea222257873e692a43d0245562e4bca7509d06a7c3a3d0987deb0d1242d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_425dea222257873e692a43d0245562e4bca7509d06a7c3a3d0987deb0d1242d2->leave($__internal_425dea222257873e692a43d0245562e4bca7509d06a7c3a3d0987deb0d1242d2_prof);

        
        $__internal_5bea8508c15eb473fd18e49ed922545aa74c941e978c02230d30d78d02814d17->leave($__internal_5bea8508c15eb473fd18e49ed922545aa74c941e978c02230d30d78d02814d17_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_cb8e043c429ed6e67e48e8b3adb63cda10eea2c762c77fb057f8ff08cb3a7414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8e043c429ed6e67e48e8b3adb63cda10eea2c762c77fb057f8ff08cb3a7414->enter($__internal_cb8e043c429ed6e67e48e8b3adb63cda10eea2c762c77fb057f8ff08cb3a7414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ad97160805c657fee05f4724e9e20b2260671453981613c2831c549f4aa075f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad97160805c657fee05f4724e9e20b2260671453981613c2831c549f4aa075f8->enter($__internal_ad97160805c657fee05f4724e9e20b2260671453981613c2831c549f4aa075f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_ad97160805c657fee05f4724e9e20b2260671453981613c2831c549f4aa075f8->leave($__internal_ad97160805c657fee05f4724e9e20b2260671453981613c2831c549f4aa075f8_prof);

        
        $__internal_cb8e043c429ed6e67e48e8b3adb63cda10eea2c762c77fb057f8ff08cb3a7414->leave($__internal_cb8e043c429ed6e67e48e8b3adb63cda10eea2c762c77fb057f8ff08cb3a7414_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_08eeb7d4026949f2d6b5e7e2fc9d8137ef72654928d59fef52826858c6c07d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08eeb7d4026949f2d6b5e7e2fc9d8137ef72654928d59fef52826858c6c07d88->enter($__internal_08eeb7d4026949f2d6b5e7e2fc9d8137ef72654928d59fef52826858c6c07d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_f951760dee32e0f8c3e4aaee1d4b89be9b8c33a370218af32c7eef2c01367c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f951760dee32e0f8c3e4aaee1d4b89be9b8c33a370218af32c7eef2c01367c5f->enter($__internal_f951760dee32e0f8c3e4aaee1d4b89be9b8c33a370218af32c7eef2c01367c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_f951760dee32e0f8c3e4aaee1d4b89be9b8c33a370218af32c7eef2c01367c5f->leave($__internal_f951760dee32e0f8c3e4aaee1d4b89be9b8c33a370218af32c7eef2c01367c5f_prof);

        
        $__internal_08eeb7d4026949f2d6b5e7e2fc9d8137ef72654928d59fef52826858c6c07d88->leave($__internal_08eeb7d4026949f2d6b5e7e2fc9d8137ef72654928d59fef52826858c6c07d88_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cbfccd6622afbb106e95622037d742c5e34b53eb4389b9952988eec3ff72b264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbfccd6622afbb106e95622037d742c5e34b53eb4389b9952988eec3ff72b264->enter($__internal_cbfccd6622afbb106e95622037d742c5e34b53eb4389b9952988eec3ff72b264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_bcef207522965db7ac9768396972be7870029d8e84e0ae9395f4fc7767f4c085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcef207522965db7ac9768396972be7870029d8e84e0ae9395f4fc7767f4c085->enter($__internal_bcef207522965db7ac9768396972be7870029d8e84e0ae9395f4fc7767f4c085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_bcef207522965db7ac9768396972be7870029d8e84e0ae9395f4fc7767f4c085->leave($__internal_bcef207522965db7ac9768396972be7870029d8e84e0ae9395f4fc7767f4c085_prof);

        
        $__internal_cbfccd6622afbb106e95622037d742c5e34b53eb4389b9952988eec3ff72b264->leave($__internal_cbfccd6622afbb106e95622037d742c5e34b53eb4389b9952988eec3ff72b264_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
