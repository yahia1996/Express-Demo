<?php

/* form_table_layout.html.twig */
class __TwigTemplate_50b352fcf5ce8ab2c5b03f552ed4734272708bc0a383e47608daa04af30f43c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_020a93aa547359397eea34700a1936a595081d19348e1bdfc3d53e78e613d71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020a93aa547359397eea34700a1936a595081d19348e1bdfc3d53e78e613d71e->enter($__internal_020a93aa547359397eea34700a1936a595081d19348e1bdfc3d53e78e613d71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_c94aaa1791f72fa8fd7a182a4e87e8034c1442df11a9405b9f07cd2349058961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94aaa1791f72fa8fd7a182a4e87e8034c1442df11a9405b9f07cd2349058961->enter($__internal_c94aaa1791f72fa8fd7a182a4e87e8034c1442df11a9405b9f07cd2349058961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_020a93aa547359397eea34700a1936a595081d19348e1bdfc3d53e78e613d71e->leave($__internal_020a93aa547359397eea34700a1936a595081d19348e1bdfc3d53e78e613d71e_prof);

        
        $__internal_c94aaa1791f72fa8fd7a182a4e87e8034c1442df11a9405b9f07cd2349058961->leave($__internal_c94aaa1791f72fa8fd7a182a4e87e8034c1442df11a9405b9f07cd2349058961_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ef8abf2d25d87b533b93e92e56ebbb2e0af8275a3bc519fd1379f263f380fe6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8abf2d25d87b533b93e92e56ebbb2e0af8275a3bc519fd1379f263f380fe6b->enter($__internal_ef8abf2d25d87b533b93e92e56ebbb2e0af8275a3bc519fd1379f263f380fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_32ae02c15843bb29ca5944d11ddc481c9960d17b8d0f935ac06496eb37d9d60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ae02c15843bb29ca5944d11ddc481c9960d17b8d0f935ac06496eb37d9d60f->enter($__internal_32ae02c15843bb29ca5944d11ddc481c9960d17b8d0f935ac06496eb37d9d60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_32ae02c15843bb29ca5944d11ddc481c9960d17b8d0f935ac06496eb37d9d60f->leave($__internal_32ae02c15843bb29ca5944d11ddc481c9960d17b8d0f935ac06496eb37d9d60f_prof);

        
        $__internal_ef8abf2d25d87b533b93e92e56ebbb2e0af8275a3bc519fd1379f263f380fe6b->leave($__internal_ef8abf2d25d87b533b93e92e56ebbb2e0af8275a3bc519fd1379f263f380fe6b_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_720926f022001a0232493b46a07f821ee2ada8d65698bbe6c3b3bdbb22673f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720926f022001a0232493b46a07f821ee2ada8d65698bbe6c3b3bdbb22673f58->enter($__internal_720926f022001a0232493b46a07f821ee2ada8d65698bbe6c3b3bdbb22673f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0ee82c3fd4a77d3a929a02a5a18a7a39e15eb3a0a34a7f92972946cd8005cab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee82c3fd4a77d3a929a02a5a18a7a39e15eb3a0a34a7f92972946cd8005cab6->enter($__internal_0ee82c3fd4a77d3a929a02a5a18a7a39e15eb3a0a34a7f92972946cd8005cab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_0ee82c3fd4a77d3a929a02a5a18a7a39e15eb3a0a34a7f92972946cd8005cab6->leave($__internal_0ee82c3fd4a77d3a929a02a5a18a7a39e15eb3a0a34a7f92972946cd8005cab6_prof);

        
        $__internal_720926f022001a0232493b46a07f821ee2ada8d65698bbe6c3b3bdbb22673f58->leave($__internal_720926f022001a0232493b46a07f821ee2ada8d65698bbe6c3b3bdbb22673f58_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_0ec6f8d3a0ea914600babd89239a91f9f395aa4afec3eee6a806c17ef960653e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec6f8d3a0ea914600babd89239a91f9f395aa4afec3eee6a806c17ef960653e->enter($__internal_0ec6f8d3a0ea914600babd89239a91f9f395aa4afec3eee6a806c17ef960653e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_8a86dfbbd32ff9ec4f330f3c050f0b61d486f58ed10f66346f6254f44100a477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a86dfbbd32ff9ec4f330f3c050f0b61d486f58ed10f66346f6254f44100a477->enter($__internal_8a86dfbbd32ff9ec4f330f3c050f0b61d486f58ed10f66346f6254f44100a477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_8a86dfbbd32ff9ec4f330f3c050f0b61d486f58ed10f66346f6254f44100a477->leave($__internal_8a86dfbbd32ff9ec4f330f3c050f0b61d486f58ed10f66346f6254f44100a477_prof);

        
        $__internal_0ec6f8d3a0ea914600babd89239a91f9f395aa4afec3eee6a806c17ef960653e->leave($__internal_0ec6f8d3a0ea914600babd89239a91f9f395aa4afec3eee6a806c17ef960653e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_0b6cd1a8f49ceeb324464d2b94d974c89087b1b9c95014da87d499537b8e98a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6cd1a8f49ceeb324464d2b94d974c89087b1b9c95014da87d499537b8e98a2->enter($__internal_0b6cd1a8f49ceeb324464d2b94d974c89087b1b9c95014da87d499537b8e98a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_233572a3035a3d43ce22a42855870c20a3e871a4af957b99cafe00c106010860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233572a3035a3d43ce22a42855870c20a3e871a4af957b99cafe00c106010860->enter($__internal_233572a3035a3d43ce22a42855870c20a3e871a4af957b99cafe00c106010860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_233572a3035a3d43ce22a42855870c20a3e871a4af957b99cafe00c106010860->leave($__internal_233572a3035a3d43ce22a42855870c20a3e871a4af957b99cafe00c106010860_prof);

        
        $__internal_0b6cd1a8f49ceeb324464d2b94d974c89087b1b9c95014da87d499537b8e98a2->leave($__internal_0b6cd1a8f49ceeb324464d2b94d974c89087b1b9c95014da87d499537b8e98a2_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Users/hakim/Sites/tunisie-express/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
