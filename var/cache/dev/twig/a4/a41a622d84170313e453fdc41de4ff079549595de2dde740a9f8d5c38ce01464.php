<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_07b3e7a4a7971d72d2df6028231fae200aa4f56192ebe852a57e6e14fe1d65c9 extends Twig_Template
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
        $__internal_4ec0d1ddd9353902da0f7ce0d60276cd2e400ccb8d26ccdc89e43dc232a82aca = $this->env->getExtension("native_profiler");
        $__internal_4ec0d1ddd9353902da0f7ce0d60276cd2e400ccb8d26ccdc89e43dc232a82aca->enter($__internal_4ec0d1ddd9353902da0f7ce0d60276cd2e400ccb8d26ccdc89e43dc232a82aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_4ec0d1ddd9353902da0f7ce0d60276cd2e400ccb8d26ccdc89e43dc232a82aca->leave($__internal_4ec0d1ddd9353902da0f7ce0d60276cd2e400ccb8d26ccdc89e43dc232a82aca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
