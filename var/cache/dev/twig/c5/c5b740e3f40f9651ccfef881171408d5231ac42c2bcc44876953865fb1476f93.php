<?php

/* base.html.twig */
class __TwigTemplate_58ba3c3052905254a9a9062c32335c6b025b68145784106637867ce3a446b398 extends Twig_Template
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
        $__internal_5387db20b567209a1ee623a379e4115f2a6f3f0f9141ab57881a9d9fd46bfca8 = $this->env->getExtension("native_profiler");
        $__internal_5387db20b567209a1ee623a379e4115f2a6f3f0f9141ab57881a9d9fd46bfca8->enter($__internal_5387db20b567209a1ee623a379e4115f2a6f3f0f9141ab57881a9d9fd46bfca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5387db20b567209a1ee623a379e4115f2a6f3f0f9141ab57881a9d9fd46bfca8->leave($__internal_5387db20b567209a1ee623a379e4115f2a6f3f0f9141ab57881a9d9fd46bfca8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eef3b5b29dae25c1f4349019e0572fff7cc5e42fa84887ff965fbe51c3c1b4ef = $this->env->getExtension("native_profiler");
        $__internal_eef3b5b29dae25c1f4349019e0572fff7cc5e42fa84887ff965fbe51c3c1b4ef->enter($__internal_eef3b5b29dae25c1f4349019e0572fff7cc5e42fa84887ff965fbe51c3c1b4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eef3b5b29dae25c1f4349019e0572fff7cc5e42fa84887ff965fbe51c3c1b4ef->leave($__internal_eef3b5b29dae25c1f4349019e0572fff7cc5e42fa84887ff965fbe51c3c1b4ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47c58f728416dc1f43b8acce9cdccc78637562ab3ab2af9e9b04295514b6fd4d = $this->env->getExtension("native_profiler");
        $__internal_47c58f728416dc1f43b8acce9cdccc78637562ab3ab2af9e9b04295514b6fd4d->enter($__internal_47c58f728416dc1f43b8acce9cdccc78637562ab3ab2af9e9b04295514b6fd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_47c58f728416dc1f43b8acce9cdccc78637562ab3ab2af9e9b04295514b6fd4d->leave($__internal_47c58f728416dc1f43b8acce9cdccc78637562ab3ab2af9e9b04295514b6fd4d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_77d85c2348164d8227d794db340da66d3f25c98f83b3694572524403869f8603 = $this->env->getExtension("native_profiler");
        $__internal_77d85c2348164d8227d794db340da66d3f25c98f83b3694572524403869f8603->enter($__internal_77d85c2348164d8227d794db340da66d3f25c98f83b3694572524403869f8603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77d85c2348164d8227d794db340da66d3f25c98f83b3694572524403869f8603->leave($__internal_77d85c2348164d8227d794db340da66d3f25c98f83b3694572524403869f8603_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5f60cb3a3234612b9154e7aa5a570e05dd9d1d4cd7bc559f32b6433f12cc761 = $this->env->getExtension("native_profiler");
        $__internal_e5f60cb3a3234612b9154e7aa5a570e05dd9d1d4cd7bc559f32b6433f12cc761->enter($__internal_e5f60cb3a3234612b9154e7aa5a570e05dd9d1d4cd7bc559f32b6433f12cc761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5f60cb3a3234612b9154e7aa5a570e05dd9d1d4cd7bc559f32b6433f12cc761->leave($__internal_e5f60cb3a3234612b9154e7aa5a570e05dd9d1d4cd7bc559f32b6433f12cc761_prof);

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
