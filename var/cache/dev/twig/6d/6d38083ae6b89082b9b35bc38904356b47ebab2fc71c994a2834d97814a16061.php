<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b4760c85f2b97a13d5b64b560bb2b289d0e8fe7f19aad6f8bfcfe92bbad67746 extends Twig_Template
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
        $__internal_7520e6c4e4f43894108cdbd36cc8c9a51b6a97498c41fb13113121767d82b0d6 = $this->env->getExtension("native_profiler");
        $__internal_7520e6c4e4f43894108cdbd36cc8c9a51b6a97498c41fb13113121767d82b0d6->enter($__internal_7520e6c4e4f43894108cdbd36cc8c9a51b6a97498c41fb13113121767d82b0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7520e6c4e4f43894108cdbd36cc8c9a51b6a97498c41fb13113121767d82b0d6->leave($__internal_7520e6c4e4f43894108cdbd36cc8c9a51b6a97498c41fb13113121767d82b0d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d8fb9cc465d5d215a88eb8baa42873d6b227fe34527ae58ba664c64d06f9280 = $this->env->getExtension("native_profiler");
        $__internal_3d8fb9cc465d5d215a88eb8baa42873d6b227fe34527ae58ba664c64d06f9280->enter($__internal_3d8fb9cc465d5d215a88eb8baa42873d6b227fe34527ae58ba664c64d06f9280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d8fb9cc465d5d215a88eb8baa42873d6b227fe34527ae58ba664c64d06f9280->leave($__internal_3d8fb9cc465d5d215a88eb8baa42873d6b227fe34527ae58ba664c64d06f9280_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80fe52ae9067bb1d4a39933e881249b19d371b745810fa4fd007e04c2cd82c3d = $this->env->getExtension("native_profiler");
        $__internal_80fe52ae9067bb1d4a39933e881249b19d371b745810fa4fd007e04c2cd82c3d->enter($__internal_80fe52ae9067bb1d4a39933e881249b19d371b745810fa4fd007e04c2cd82c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80fe52ae9067bb1d4a39933e881249b19d371b745810fa4fd007e04c2cd82c3d->leave($__internal_80fe52ae9067bb1d4a39933e881249b19d371b745810fa4fd007e04c2cd82c3d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d22a2dd6845d61cad0f1320451ad3da47cea05561d507e1c1e1057792cfa67c = $this->env->getExtension("native_profiler");
        $__internal_6d22a2dd6845d61cad0f1320451ad3da47cea05561d507e1c1e1057792cfa67c->enter($__internal_6d22a2dd6845d61cad0f1320451ad3da47cea05561d507e1c1e1057792cfa67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6d22a2dd6845d61cad0f1320451ad3da47cea05561d507e1c1e1057792cfa67c->leave($__internal_6d22a2dd6845d61cad0f1320451ad3da47cea05561d507e1c1e1057792cfa67c_prof);

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
