<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_52fe0746a73f1ecc256871da490cae3c8ddf3304082ed9c14f8c4fe97a161072 extends Twig_Template
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
        $__internal_73eb7990f2b2dc94ef7d6e75ba4aa0b96fc99279a97e63eaf9439c05ae18c669 = $this->env->getExtension("native_profiler");
        $__internal_73eb7990f2b2dc94ef7d6e75ba4aa0b96fc99279a97e63eaf9439c05ae18c669->enter($__internal_73eb7990f2b2dc94ef7d6e75ba4aa0b96fc99279a97e63eaf9439c05ae18c669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_73eb7990f2b2dc94ef7d6e75ba4aa0b96fc99279a97e63eaf9439c05ae18c669->leave($__internal_73eb7990f2b2dc94ef7d6e75ba4aa0b96fc99279a97e63eaf9439c05ae18c669_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
