<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef4c0195d9e1474aaf9662cdbb2e9d7eed8dfffb502771e612718bb4b74e9b3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1d631a1b6462a611fc88afebdd612cb0bcc871bf8d7ce5fd258087f6c7f2f68 = $this->env->getExtension("native_profiler");
        $__internal_c1d631a1b6462a611fc88afebdd612cb0bcc871bf8d7ce5fd258087f6c7f2f68->enter($__internal_c1d631a1b6462a611fc88afebdd612cb0bcc871bf8d7ce5fd258087f6c7f2f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1d631a1b6462a611fc88afebdd612cb0bcc871bf8d7ce5fd258087f6c7f2f68->leave($__internal_c1d631a1b6462a611fc88afebdd612cb0bcc871bf8d7ce5fd258087f6c7f2f68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b46d80d72f8bd0c8b1dcd5e2c45864a6fcf8ec90e798c3c316846e52ef259e7 = $this->env->getExtension("native_profiler");
        $__internal_1b46d80d72f8bd0c8b1dcd5e2c45864a6fcf8ec90e798c3c316846e52ef259e7->enter($__internal_1b46d80d72f8bd0c8b1dcd5e2c45864a6fcf8ec90e798c3c316846e52ef259e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b46d80d72f8bd0c8b1dcd5e2c45864a6fcf8ec90e798c3c316846e52ef259e7->leave($__internal_1b46d80d72f8bd0c8b1dcd5e2c45864a6fcf8ec90e798c3c316846e52ef259e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dcc554558adad0ccfe5dbcf8cd89fd104145bc67c8781495b09f20e36058bc0 = $this->env->getExtension("native_profiler");
        $__internal_2dcc554558adad0ccfe5dbcf8cd89fd104145bc67c8781495b09f20e36058bc0->enter($__internal_2dcc554558adad0ccfe5dbcf8cd89fd104145bc67c8781495b09f20e36058bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2dcc554558adad0ccfe5dbcf8cd89fd104145bc67c8781495b09f20e36058bc0->leave($__internal_2dcc554558adad0ccfe5dbcf8cd89fd104145bc67c8781495b09f20e36058bc0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40cd24d97e7e6cb1f43fab5465f650717d1d6f4333b28596b890e425b37e76f3 = $this->env->getExtension("native_profiler");
        $__internal_40cd24d97e7e6cb1f43fab5465f650717d1d6f4333b28596b890e425b37e76f3->enter($__internal_40cd24d97e7e6cb1f43fab5465f650717d1d6f4333b28596b890e425b37e76f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_40cd24d97e7e6cb1f43fab5465f650717d1d6f4333b28596b890e425b37e76f3->leave($__internal_40cd24d97e7e6cb1f43fab5465f650717d1d6f4333b28596b890e425b37e76f3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
