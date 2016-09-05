<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3506cbe6f9256113e4dc154dd754c2e505e433fe39f4e4729b8f750b0a1f18c2 extends Twig_Template
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
        $__internal_b51eebb7f0074657d1482cd243683d259ee258661aba59acfcd07094990b9395 = $this->env->getExtension("native_profiler");
        $__internal_b51eebb7f0074657d1482cd243683d259ee258661aba59acfcd07094990b9395->enter($__internal_b51eebb7f0074657d1482cd243683d259ee258661aba59acfcd07094990b9395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b51eebb7f0074657d1482cd243683d259ee258661aba59acfcd07094990b9395->leave($__internal_b51eebb7f0074657d1482cd243683d259ee258661aba59acfcd07094990b9395_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c8a9d95f5b95d172ee5b40d104c3ff2c9c0b46b9f292550c86a27f85e56823d = $this->env->getExtension("native_profiler");
        $__internal_2c8a9d95f5b95d172ee5b40d104c3ff2c9c0b46b9f292550c86a27f85e56823d->enter($__internal_2c8a9d95f5b95d172ee5b40d104c3ff2c9c0b46b9f292550c86a27f85e56823d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c8a9d95f5b95d172ee5b40d104c3ff2c9c0b46b9f292550c86a27f85e56823d->leave($__internal_2c8a9d95f5b95d172ee5b40d104c3ff2c9c0b46b9f292550c86a27f85e56823d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_397f14e48c7e67f138c89c3ad8f86e6bba448ca842ef0a34cfd01108abd0532e = $this->env->getExtension("native_profiler");
        $__internal_397f14e48c7e67f138c89c3ad8f86e6bba448ca842ef0a34cfd01108abd0532e->enter($__internal_397f14e48c7e67f138c89c3ad8f86e6bba448ca842ef0a34cfd01108abd0532e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_397f14e48c7e67f138c89c3ad8f86e6bba448ca842ef0a34cfd01108abd0532e->leave($__internal_397f14e48c7e67f138c89c3ad8f86e6bba448ca842ef0a34cfd01108abd0532e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f0b57af3deedd3b98715ec84deead7874687449874a6070f9f8af7404a2b4b3 = $this->env->getExtension("native_profiler");
        $__internal_1f0b57af3deedd3b98715ec84deead7874687449874a6070f9f8af7404a2b4b3->enter($__internal_1f0b57af3deedd3b98715ec84deead7874687449874a6070f9f8af7404a2b4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f0b57af3deedd3b98715ec84deead7874687449874a6070f9f8af7404a2b4b3->leave($__internal_1f0b57af3deedd3b98715ec84deead7874687449874a6070f9f8af7404a2b4b3_prof);

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
