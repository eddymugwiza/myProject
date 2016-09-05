<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6d6ed21f510f71f000ff4829917cfe88ed9995ff5bf4f71aee0f553a452005e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41c6f1d932f76fc822578a4f11452ff8beed769fd72646894e1296a8bb2ea834 = $this->env->getExtension("native_profiler");
        $__internal_41c6f1d932f76fc822578a4f11452ff8beed769fd72646894e1296a8bb2ea834->enter($__internal_41c6f1d932f76fc822578a4f11452ff8beed769fd72646894e1296a8bb2ea834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c6f1d932f76fc822578a4f11452ff8beed769fd72646894e1296a8bb2ea834->leave($__internal_41c6f1d932f76fc822578a4f11452ff8beed769fd72646894e1296a8bb2ea834_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b5b18c9186c9aca0b3df22c538d86131a7d65ff0e39a2697edb42f490fff44d = $this->env->getExtension("native_profiler");
        $__internal_9b5b18c9186c9aca0b3df22c538d86131a7d65ff0e39a2697edb42f490fff44d->enter($__internal_9b5b18c9186c9aca0b3df22c538d86131a7d65ff0e39a2697edb42f490fff44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9b5b18c9186c9aca0b3df22c538d86131a7d65ff0e39a2697edb42f490fff44d->leave($__internal_9b5b18c9186c9aca0b3df22c538d86131a7d65ff0e39a2697edb42f490fff44d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05a87213b202b497fcd78e6ec9e29c9e0a42d0e450451ba7dbff0a0a504fddb4 = $this->env->getExtension("native_profiler");
        $__internal_05a87213b202b497fcd78e6ec9e29c9e0a42d0e450451ba7dbff0a0a504fddb4->enter($__internal_05a87213b202b497fcd78e6ec9e29c9e0a42d0e450451ba7dbff0a0a504fddb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_05a87213b202b497fcd78e6ec9e29c9e0a42d0e450451ba7dbff0a0a504fddb4->leave($__internal_05a87213b202b497fcd78e6ec9e29c9e0a42d0e450451ba7dbff0a0a504fddb4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e85c9e0d0e9a5f19f2351e6a76a7c60b8396c840951bd8d580fea4eb422b9a86 = $this->env->getExtension("native_profiler");
        $__internal_e85c9e0d0e9a5f19f2351e6a76a7c60b8396c840951bd8d580fea4eb422b9a86->enter($__internal_e85c9e0d0e9a5f19f2351e6a76a7c60b8396c840951bd8d580fea4eb422b9a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e85c9e0d0e9a5f19f2351e6a76a7c60b8396c840951bd8d580fea4eb422b9a86->leave($__internal_e85c9e0d0e9a5f19f2351e6a76a7c60b8396c840951bd8d580fea4eb422b9a86_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
