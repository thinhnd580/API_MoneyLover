<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1960de431fa49401244c3adca81ee8e80c58875326e76aff418cfb20784f51f extends Twig_Template
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
        $__internal_093ea15657263150114f2c6b974dad2f3e0e2f8ecd543b1f36763400546a9f48 = $this->env->getExtension("native_profiler");
        $__internal_093ea15657263150114f2c6b974dad2f3e0e2f8ecd543b1f36763400546a9f48->enter($__internal_093ea15657263150114f2c6b974dad2f3e0e2f8ecd543b1f36763400546a9f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_093ea15657263150114f2c6b974dad2f3e0e2f8ecd543b1f36763400546a9f48->leave($__internal_093ea15657263150114f2c6b974dad2f3e0e2f8ecd543b1f36763400546a9f48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c21e7b1b1b06740190cc2cdab26d6c3eb3d70b50cc1ab3aa11cfe7da482b9cf = $this->env->getExtension("native_profiler");
        $__internal_9c21e7b1b1b06740190cc2cdab26d6c3eb3d70b50cc1ab3aa11cfe7da482b9cf->enter($__internal_9c21e7b1b1b06740190cc2cdab26d6c3eb3d70b50cc1ab3aa11cfe7da482b9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9c21e7b1b1b06740190cc2cdab26d6c3eb3d70b50cc1ab3aa11cfe7da482b9cf->leave($__internal_9c21e7b1b1b06740190cc2cdab26d6c3eb3d70b50cc1ab3aa11cfe7da482b9cf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2ed8ca72f3e026539d14a09405a64b8fe2a56b5e04aaaae8efc7cdc1bc5de21 = $this->env->getExtension("native_profiler");
        $__internal_c2ed8ca72f3e026539d14a09405a64b8fe2a56b5e04aaaae8efc7cdc1bc5de21->enter($__internal_c2ed8ca72f3e026539d14a09405a64b8fe2a56b5e04aaaae8efc7cdc1bc5de21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c2ed8ca72f3e026539d14a09405a64b8fe2a56b5e04aaaae8efc7cdc1bc5de21->leave($__internal_c2ed8ca72f3e026539d14a09405a64b8fe2a56b5e04aaaae8efc7cdc1bc5de21_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db1bf11d6f722c854ba981ac3f16773b3ff9495c44b71bfb8cad1661a84cf437 = $this->env->getExtension("native_profiler");
        $__internal_db1bf11d6f722c854ba981ac3f16773b3ff9495c44b71bfb8cad1661a84cf437->enter($__internal_db1bf11d6f722c854ba981ac3f16773b3ff9495c44b71bfb8cad1661a84cf437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_db1bf11d6f722c854ba981ac3f16773b3ff9495c44b71bfb8cad1661a84cf437->leave($__internal_db1bf11d6f722c854ba981ac3f16773b3ff9495c44b71bfb8cad1661a84cf437_prof);

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
