<?php

/* lucky/number.html.twig */
class __TwigTemplate_a9e649e5b23620146d91dfacf29a6ab0073c07996efacb6a3cf083807574bec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("css.html.twig", "lucky/number.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "css.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77bd45ca20246a51b6ae1a43a97b31732b3b8283538dc3d7402b0c90a89c028c = $this->env->getExtension("native_profiler");
        $__internal_77bd45ca20246a51b6ae1a43a97b31732b3b8283538dc3d7402b0c90a89c028c->enter($__internal_77bd45ca20246a51b6ae1a43a97b31732b3b8283538dc3d7402b0c90a89c028c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77bd45ca20246a51b6ae1a43a97b31732b3b8283538dc3d7402b0c90a89c028c->leave($__internal_77bd45ca20246a51b6ae1a43a97b31732b3b8283538dc3d7402b0c90a89c028c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f16af543561999e40b57146fb1c156346c73a12a7717e3c990277a72df2a15c = $this->env->getExtension("native_profiler");
        $__internal_8f16af543561999e40b57146fb1c156346c73a12a7717e3c990277a72df2a15c->enter($__internal_8f16af543561999e40b57146fb1c156346c73a12a7717e3c990277a72df2a15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_8f16af543561999e40b57146fb1c156346c73a12a7717e3c990277a72df2a15c->leave($__internal_8f16af543561999e40b57146fb1c156346c73a12a7717e3c990277a72df2a15c_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'css.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
