<?php

/* base.html.twig */
class __TwigTemplate_53d7d59bfd88806f9c99b660b5797d2ab9aeb742b1abb19c6bdfab6fe7983841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef6aaf0dba5519dd72e26768ecfc1b8cc5b2076fb3cecb3deb02c5314772a02b = $this->env->getExtension("native_profiler");
        $__internal_ef6aaf0dba5519dd72e26768ecfc1b8cc5b2076fb3cecb3deb02c5314772a02b->enter($__internal_ef6aaf0dba5519dd72e26768ecfc1b8cc5b2076fb3cecb3deb02c5314772a02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo "favicon.ico";
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ef6aaf0dba5519dd72e26768ecfc1b8cc5b2076fb3cecb3deb02c5314772a02b->leave($__internal_ef6aaf0dba5519dd72e26768ecfc1b8cc5b2076fb3cecb3deb02c5314772a02b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_500bdfabf7c1287ef88b99df6afa8d99694d82a866eba68c0eb73fd32b1653be = $this->env->getExtension("native_profiler");
        $__internal_500bdfabf7c1287ef88b99df6afa8d99694d82a866eba68c0eb73fd32b1653be->enter($__internal_500bdfabf7c1287ef88b99df6afa8d99694d82a866eba68c0eb73fd32b1653be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_500bdfabf7c1287ef88b99df6afa8d99694d82a866eba68c0eb73fd32b1653be->leave($__internal_500bdfabf7c1287ef88b99df6afa8d99694d82a866eba68c0eb73fd32b1653be_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0442079e4399e1fb4cdbe480f7ead8d8ab5787fb91d3baa8a586ca06e593cbf2 = $this->env->getExtension("native_profiler");
        $__internal_0442079e4399e1fb4cdbe480f7ead8d8ab5787fb91d3baa8a586ca06e593cbf2->enter($__internal_0442079e4399e1fb4cdbe480f7ead8d8ab5787fb91d3baa8a586ca06e593cbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0442079e4399e1fb4cdbe480f7ead8d8ab5787fb91d3baa8a586ca06e593cbf2->leave($__internal_0442079e4399e1fb4cdbe480f7ead8d8ab5787fb91d3baa8a586ca06e593cbf2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8b184b709ed39196e4e13693c3b2bdcd290c7c36b3ef00fd24ab3caebadf17b = $this->env->getExtension("native_profiler");
        $__internal_e8b184b709ed39196e4e13693c3b2bdcd290c7c36b3ef00fd24ab3caebadf17b->enter($__internal_e8b184b709ed39196e4e13693c3b2bdcd290c7c36b3ef00fd24ab3caebadf17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8b184b709ed39196e4e13693c3b2bdcd290c7c36b3ef00fd24ab3caebadf17b->leave($__internal_e8b184b709ed39196e4e13693c3b2bdcd290c7c36b3ef00fd24ab3caebadf17b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69862041974eb87ef2f23e5536347bb2cdda8e8b35824031ff62a033c6397305 = $this->env->getExtension("native_profiler");
        $__internal_69862041974eb87ef2f23e5536347bb2cdda8e8b35824031ff62a033c6397305->enter($__internal_69862041974eb87ef2f23e5536347bb2cdda8e8b35824031ff62a033c6397305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69862041974eb87ef2f23e5536347bb2cdda8e8b35824031ff62a033c6397305->leave($__internal_69862041974eb87ef2f23e5536347bb2cdda8e8b35824031ff62a033c6397305_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ 'favicon.ico' }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
