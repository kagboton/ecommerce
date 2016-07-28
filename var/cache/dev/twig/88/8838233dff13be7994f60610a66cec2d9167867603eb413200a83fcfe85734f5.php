<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d42a0eaba000532ae6290567c0215494d5ab36d0b3b650193dc3e37999fdd098 extends Twig_Template
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
        $__internal_804007e6d9937ffb6ea9199897a786e0f2eadf49230871156f8c293f12e6f3b9 = $this->env->getExtension("native_profiler");
        $__internal_804007e6d9937ffb6ea9199897a786e0f2eadf49230871156f8c293f12e6f3b9->enter($__internal_804007e6d9937ffb6ea9199897a786e0f2eadf49230871156f8c293f12e6f3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_804007e6d9937ffb6ea9199897a786e0f2eadf49230871156f8c293f12e6f3b9->leave($__internal_804007e6d9937ffb6ea9199897a786e0f2eadf49230871156f8c293f12e6f3b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
