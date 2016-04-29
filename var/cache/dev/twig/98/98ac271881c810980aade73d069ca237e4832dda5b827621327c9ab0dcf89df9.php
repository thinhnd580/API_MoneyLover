<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9914d9d2f605eaf45930aa93cc1f93bccc0ce4d65c5cd8e6cb1402d982504c01 extends Twig_Template
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
        $__internal_ec86b3da09528537d1a6a4fa6f5bfa22175ffd34234ec9ff0f3783318e6b2024 = $this->env->getExtension("native_profiler");
        $__internal_ec86b3da09528537d1a6a4fa6f5bfa22175ffd34234ec9ff0f3783318e6b2024->enter($__internal_ec86b3da09528537d1a6a4fa6f5bfa22175ffd34234ec9ff0f3783318e6b2024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec86b3da09528537d1a6a4fa6f5bfa22175ffd34234ec9ff0f3783318e6b2024->leave($__internal_ec86b3da09528537d1a6a4fa6f5bfa22175ffd34234ec9ff0f3783318e6b2024_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49205b8bc1961ccf6a2d169a69e6f6ef1ab885bf64a5d9f771563b138a2f0709 = $this->env->getExtension("native_profiler");
        $__internal_49205b8bc1961ccf6a2d169a69e6f6ef1ab885bf64a5d9f771563b138a2f0709->enter($__internal_49205b8bc1961ccf6a2d169a69e6f6ef1ab885bf64a5d9f771563b138a2f0709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_49205b8bc1961ccf6a2d169a69e6f6ef1ab885bf64a5d9f771563b138a2f0709->leave($__internal_49205b8bc1961ccf6a2d169a69e6f6ef1ab885bf64a5d9f771563b138a2f0709_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_118bef1a017557b7ff05558a832b5b5ac87c8ef42eaea79487a0ae26851fff3e = $this->env->getExtension("native_profiler");
        $__internal_118bef1a017557b7ff05558a832b5b5ac87c8ef42eaea79487a0ae26851fff3e->enter($__internal_118bef1a017557b7ff05558a832b5b5ac87c8ef42eaea79487a0ae26851fff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_118bef1a017557b7ff05558a832b5b5ac87c8ef42eaea79487a0ae26851fff3e->leave($__internal_118bef1a017557b7ff05558a832b5b5ac87c8ef42eaea79487a0ae26851fff3e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c698a0a2d5896e534063160e340c9ee0bc3fbf5f9fa4989763f978c396d874ae = $this->env->getExtension("native_profiler");
        $__internal_c698a0a2d5896e534063160e340c9ee0bc3fbf5f9fa4989763f978c396d874ae->enter($__internal_c698a0a2d5896e534063160e340c9ee0bc3fbf5f9fa4989763f978c396d874ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c698a0a2d5896e534063160e340c9ee0bc3fbf5f9fa4989763f978c396d874ae->leave($__internal_c698a0a2d5896e534063160e340c9ee0bc3fbf5f9fa4989763f978c396d874ae_prof);

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
