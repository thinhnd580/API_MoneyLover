<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c77a3df82fb1c999533cb7af3920242badc911ec388fe9390ad640f09e045cf4 extends Twig_Template
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
        $__internal_07a66142d0fbb19feba56365a254cedf31e62de01a1af32a08fbbc346c0af6f8 = $this->env->getExtension("native_profiler");
        $__internal_07a66142d0fbb19feba56365a254cedf31e62de01a1af32a08fbbc346c0af6f8->enter($__internal_07a66142d0fbb19feba56365a254cedf31e62de01a1af32a08fbbc346c0af6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a66142d0fbb19feba56365a254cedf31e62de01a1af32a08fbbc346c0af6f8->leave($__internal_07a66142d0fbb19feba56365a254cedf31e62de01a1af32a08fbbc346c0af6f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89c2ddf541a34b1a194901e36808481cdf1cbd8c39ebe952f830aaafca2a68f7 = $this->env->getExtension("native_profiler");
        $__internal_89c2ddf541a34b1a194901e36808481cdf1cbd8c39ebe952f830aaafca2a68f7->enter($__internal_89c2ddf541a34b1a194901e36808481cdf1cbd8c39ebe952f830aaafca2a68f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_89c2ddf541a34b1a194901e36808481cdf1cbd8c39ebe952f830aaafca2a68f7->leave($__internal_89c2ddf541a34b1a194901e36808481cdf1cbd8c39ebe952f830aaafca2a68f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2db4bf2e2e783d55b73a1d771bcb82377c65cae97dbc3a6011e00fa57b219d4f = $this->env->getExtension("native_profiler");
        $__internal_2db4bf2e2e783d55b73a1d771bcb82377c65cae97dbc3a6011e00fa57b219d4f->enter($__internal_2db4bf2e2e783d55b73a1d771bcb82377c65cae97dbc3a6011e00fa57b219d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2db4bf2e2e783d55b73a1d771bcb82377c65cae97dbc3a6011e00fa57b219d4f->leave($__internal_2db4bf2e2e783d55b73a1d771bcb82377c65cae97dbc3a6011e00fa57b219d4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3011ee4eda11f3ff9a992f3eeac2243d4ee892e080384123bcffc8ada2c8c68 = $this->env->getExtension("native_profiler");
        $__internal_d3011ee4eda11f3ff9a992f3eeac2243d4ee892e080384123bcffc8ada2c8c68->enter($__internal_d3011ee4eda11f3ff9a992f3eeac2243d4ee892e080384123bcffc8ada2c8c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d3011ee4eda11f3ff9a992f3eeac2243d4ee892e080384123bcffc8ada2c8c68->leave($__internal_d3011ee4eda11f3ff9a992f3eeac2243d4ee892e080384123bcffc8ada2c8c68_prof);

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
