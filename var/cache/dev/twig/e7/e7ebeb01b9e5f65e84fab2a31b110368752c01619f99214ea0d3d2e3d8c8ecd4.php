<?php

/* base.html.twig */
class __TwigTemplate_ee793bf11edaa465cc7aa994cd5a763f7b195318fac049884d5e01d8fafb6299 extends Twig_Template
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
        $__internal_46bd5f343c4da464298ed2adf7f1ca6ade3f8902b73b3d16696f295291c09c42 = $this->env->getExtension("native_profiler");
        $__internal_46bd5f343c4da464298ed2adf7f1ca6ade3f8902b73b3d16696f295291c09c42->enter($__internal_46bd5f343c4da464298ed2adf7f1ca6ade3f8902b73b3d16696f295291c09c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_46bd5f343c4da464298ed2adf7f1ca6ade3f8902b73b3d16696f295291c09c42->leave($__internal_46bd5f343c4da464298ed2adf7f1ca6ade3f8902b73b3d16696f295291c09c42_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8f2a9f4fb8dc0543ac92c21a82be8a50345efa513d22841ce86113fe06ba432 = $this->env->getExtension("native_profiler");
        $__internal_a8f2a9f4fb8dc0543ac92c21a82be8a50345efa513d22841ce86113fe06ba432->enter($__internal_a8f2a9f4fb8dc0543ac92c21a82be8a50345efa513d22841ce86113fe06ba432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a8f2a9f4fb8dc0543ac92c21a82be8a50345efa513d22841ce86113fe06ba432->leave($__internal_a8f2a9f4fb8dc0543ac92c21a82be8a50345efa513d22841ce86113fe06ba432_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58bc12986a680347abdf85db46e3cbbc7cf6b52d856db726437fc751a9e6a333 = $this->env->getExtension("native_profiler");
        $__internal_58bc12986a680347abdf85db46e3cbbc7cf6b52d856db726437fc751a9e6a333->enter($__internal_58bc12986a680347abdf85db46e3cbbc7cf6b52d856db726437fc751a9e6a333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_58bc12986a680347abdf85db46e3cbbc7cf6b52d856db726437fc751a9e6a333->leave($__internal_58bc12986a680347abdf85db46e3cbbc7cf6b52d856db726437fc751a9e6a333_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe3140f1ac02f11e25fa4f2e59048b889b301f5b31e4b4bb45844bb7bc886278 = $this->env->getExtension("native_profiler");
        $__internal_fe3140f1ac02f11e25fa4f2e59048b889b301f5b31e4b4bb45844bb7bc886278->enter($__internal_fe3140f1ac02f11e25fa4f2e59048b889b301f5b31e4b4bb45844bb7bc886278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe3140f1ac02f11e25fa4f2e59048b889b301f5b31e4b4bb45844bb7bc886278->leave($__internal_fe3140f1ac02f11e25fa4f2e59048b889b301f5b31e4b4bb45844bb7bc886278_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b38b3e2da5ec38052f5ddf0800f41a0be99c6cdb86874955cbbaf259b3b3ebcd = $this->env->getExtension("native_profiler");
        $__internal_b38b3e2da5ec38052f5ddf0800f41a0be99c6cdb86874955cbbaf259b3b3ebcd->enter($__internal_b38b3e2da5ec38052f5ddf0800f41a0be99c6cdb86874955cbbaf259b3b3ebcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b38b3e2da5ec38052f5ddf0800f41a0be99c6cdb86874955cbbaf259b3b3ebcd->leave($__internal_b38b3e2da5ec38052f5ddf0800f41a0be99c6cdb86874955cbbaf259b3b3ebcd_prof);

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
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
