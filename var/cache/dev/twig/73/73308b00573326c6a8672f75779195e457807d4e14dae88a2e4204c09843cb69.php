<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_66530475f94267024595648dbfa99b28967846b1eb057510fa4428d799a3e6ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7943ced54e6d0e444b2b57fe9dcb5137dbed57f6a7c3614eed09a7f3ba68da58 = $this->env->getExtension("native_profiler");
        $__internal_7943ced54e6d0e444b2b57fe9dcb5137dbed57f6a7c3614eed09a7f3ba68da58->enter($__internal_7943ced54e6d0e444b2b57fe9dcb5137dbed57f6a7c3614eed09a7f3ba68da58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_7943ced54e6d0e444b2b57fe9dcb5137dbed57f6a7c3614eed09a7f3ba68da58->leave($__internal_7943ced54e6d0e444b2b57fe9dcb5137dbed57f6a7c3614eed09a7f3ba68da58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
