<?php

/* @moriven/public/js/pretty-script.js */
class __TwigTemplate_d5cc7298f7fbf88c9ee92bc651724dfc159c1f1ada9c1425fd08a49478f84162 extends Twig_Template
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
        $__internal_2a208056dc15e25d6d8ccf0e3cdb6cde825b666fa4a6aa016a55378f88373bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a208056dc15e25d6d8ccf0e3cdb6cde825b666fa4a6aa016a55378f88373bb3->enter($__internal_2a208056dc15e25d6d8ccf0e3cdb6cde825b666fa4a6aa016a55378f88373bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/public/js/pretty-script.js"));

        $__internal_9c2c3bf01667070bf86885aad839302f916e72e89a4f00d3bacc0796fba62188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2c3bf01667070bf86885aad839302f916e72e89a4f00d3bacc0796fba62188->enter($__internal_9c2c3bf01667070bf86885aad839302f916e72e89a4f00d3bacc0796fba62188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/public/js/pretty-script.js"));

        // line 1
        echo "jQuery.noConflict();
jQuery(document).ready(function(\$){
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
function lightboxPhoto() {
\t
\tjQuery(\"a[data-gal^='prettyPhoto']\").prettyPhoto({
\t\t\tanimationSpeed:'fast',
\t\t\tslideshow:5000,
\t\t\ttheme:'light_rounded',
\t\t\tshow_title:false,
\t\t\toverlay_gallery: false
\t\t});
\t
\t}
\t
\t\tif(jQuery().prettyPhoto) {
\t
\t\tlightboxPhoto(); 
\t\t\t
\t}
\t
\t
if (jQuery().quicksand) {

 \t// Clone applications to get a second collection
\tvar \$data = \$(\".portfolio-area\").clone();
\t
\t//NOTE: Only filter on the main portfolio page, not on the subcategory pages
\t\$('.portfolio-categ li').click(function(e) {
\t\t\$(\".filter li\").removeClass(\"active\");\t
\t\t// Use the last category class as the category to filter by. This means that multiple categories are not supported (yet)
\t\tvar filterClass=\$(this).attr('class').split(' ').slice(-1)[0];
\t\t
\t\tif (filterClass == 'all') {
\t\t\tvar \$filteredData = \$data.find('.portfolio-item2');
\t\t} else {
\t\t\tvar \$filteredData = \$data.find('.portfolio-item2[data-type=' + filterClass + ']');
\t\t}
\t\t\$(\".portfolio-area\").quicksand(\$filteredData, {
\t\t\tduration: 600,
\t\t\tadjustHeight: 'auto'
\t\t}, function () {

\t\t\t\tlightboxPhoto();
\t\t\t\t\t\t});\t\t
\t\t\$(this).addClass(\"active\"); \t\t\t
\t\treturn false;
\t});
\t
}//if quicksand

});";
        
        $__internal_2a208056dc15e25d6d8ccf0e3cdb6cde825b666fa4a6aa016a55378f88373bb3->leave($__internal_2a208056dc15e25d6d8ccf0e3cdb6cde825b666fa4a6aa016a55378f88373bb3_prof);

        
        $__internal_9c2c3bf01667070bf86885aad839302f916e72e89a4f00d3bacc0796fba62188->leave($__internal_9c2c3bf01667070bf86885aad839302f916e72e89a4f00d3bacc0796fba62188_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/public/js/pretty-script.js";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("jQuery.noConflict();
jQuery(document).ready(function(\$){
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
function lightboxPhoto() {
\t
\tjQuery(\"a[data-gal^='prettyPhoto']\").prettyPhoto({
\t\t\tanimationSpeed:'fast',
\t\t\tslideshow:5000,
\t\t\ttheme:'light_rounded',
\t\t\tshow_title:false,
\t\t\toverlay_gallery: false
\t\t});
\t
\t}
\t
\t\tif(jQuery().prettyPhoto) {
\t
\t\tlightboxPhoto(); 
\t\t\t
\t}
\t
\t
if (jQuery().quicksand) {

 \t// Clone applications to get a second collection
\tvar \$data = \$(\".portfolio-area\").clone();
\t
\t//NOTE: Only filter on the main portfolio page, not on the subcategory pages
\t\$('.portfolio-categ li').click(function(e) {
\t\t\$(\".filter li\").removeClass(\"active\");\t
\t\t// Use the last category class as the category to filter by. This means that multiple categories are not supported (yet)
\t\tvar filterClass=\$(this).attr('class').split(' ').slice(-1)[0];
\t\t
\t\tif (filterClass == 'all') {
\t\t\tvar \$filteredData = \$data.find('.portfolio-item2');
\t\t} else {
\t\t\tvar \$filteredData = \$data.find('.portfolio-item2[data-type=' + filterClass + ']');
\t\t}
\t\t\$(\".portfolio-area\").quicksand(\$filteredData, {
\t\t\tduration: 600,
\t\t\tadjustHeight: 'auto'
\t\t}, function () {

\t\t\t\tlightboxPhoto();
\t\t\t\t\t\t});\t\t
\t\t\$(this).addClass(\"active\"); \t\t\t
\t\treturn false;
\t});
\t
}//if quicksand

});", "@moriven/public/js/pretty-script.js", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/public/js/pretty-script.js");
    }
}
