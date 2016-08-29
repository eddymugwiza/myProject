<?php

/* base.html.twig */
class __TwigTemplate_f0e7da88287ec86fc1f7b7e1ef8b0b99c7b2842c572cf23c824bab99d618ba19 extends Twig_Template
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
        $__internal_190b626d6ace02983dbafb5f62578b29d254f2380322d8c2d038b995e094cb7f = $this->env->getExtension("native_profiler");
        $__internal_190b626d6ace02983dbafb5f62578b29d254f2380322d8c2d038b995e094cb7f->enter($__internal_190b626d6ace02983dbafb5f62578b29d254f2380322d8c2d038b995e094cb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_190b626d6ace02983dbafb5f62578b29d254f2380322d8c2d038b995e094cb7f->leave($__internal_190b626d6ace02983dbafb5f62578b29d254f2380322d8c2d038b995e094cb7f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d62dcf486977ba6074d7377a89bfbd7b5e0b5e18e185c1b5ace2ede8d50f0e98 = $this->env->getExtension("native_profiler");
        $__internal_d62dcf486977ba6074d7377a89bfbd7b5e0b5e18e185c1b5ace2ede8d50f0e98->enter($__internal_d62dcf486977ba6074d7377a89bfbd7b5e0b5e18e185c1b5ace2ede8d50f0e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d62dcf486977ba6074d7377a89bfbd7b5e0b5e18e185c1b5ace2ede8d50f0e98->leave($__internal_d62dcf486977ba6074d7377a89bfbd7b5e0b5e18e185c1b5ace2ede8d50f0e98_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d8c7757ac181e34d890d666f4d7f7134471f04f243137e0b0e874fc513a1368 = $this->env->getExtension("native_profiler");
        $__internal_7d8c7757ac181e34d890d666f4d7f7134471f04f243137e0b0e874fc513a1368->enter($__internal_7d8c7757ac181e34d890d666f4d7f7134471f04f243137e0b0e874fc513a1368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7d8c7757ac181e34d890d666f4d7f7134471f04f243137e0b0e874fc513a1368->leave($__internal_7d8c7757ac181e34d890d666f4d7f7134471f04f243137e0b0e874fc513a1368_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_52b3c2d3554cda0ff0ea6902470ba72a1dbdbbf229e9ed12ff30611c426e4c01 = $this->env->getExtension("native_profiler");
        $__internal_52b3c2d3554cda0ff0ea6902470ba72a1dbdbbf229e9ed12ff30611c426e4c01->enter($__internal_52b3c2d3554cda0ff0ea6902470ba72a1dbdbbf229e9ed12ff30611c426e4c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52b3c2d3554cda0ff0ea6902470ba72a1dbdbbf229e9ed12ff30611c426e4c01->leave($__internal_52b3c2d3554cda0ff0ea6902470ba72a1dbdbbf229e9ed12ff30611c426e4c01_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd8dbbeedc7bc2ef4375d1ee0c07cd7e3fab8ac0a592c2db41ea03a88fcc646c = $this->env->getExtension("native_profiler");
        $__internal_cd8dbbeedc7bc2ef4375d1ee0c07cd7e3fab8ac0a592c2db41ea03a88fcc646c->enter($__internal_cd8dbbeedc7bc2ef4375d1ee0c07cd7e3fab8ac0a592c2db41ea03a88fcc646c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cd8dbbeedc7bc2ef4375d1ee0c07cd7e3fab8ac0a592c2db41ea03a88fcc646c->leave($__internal_cd8dbbeedc7bc2ef4375d1ee0c07cd7e3fab8ac0a592c2db41ea03a88fcc646c_prof);

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
