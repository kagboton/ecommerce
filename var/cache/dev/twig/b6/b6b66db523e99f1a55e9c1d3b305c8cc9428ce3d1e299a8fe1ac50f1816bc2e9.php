<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_043ed0c7958396e0f467b9d61b092c1b4f518a2c4160622bb757e91a1b0bba87 extends Twig_Template
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
        $__internal_55d98434c2465468cff1ab93b36ff77c39c047a4536ca42d73e9668e3412a39b = $this->env->getExtension("native_profiler");
        $__internal_55d98434c2465468cff1ab93b36ff77c39c047a4536ca42d73e9668e3412a39b->enter($__internal_55d98434c2465468cff1ab93b36ff77c39c047a4536ca42d73e9668e3412a39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_55d98434c2465468cff1ab93b36ff77c39c047a4536ca42d73e9668e3412a39b->leave($__internal_55d98434c2465468cff1ab93b36ff77c39c047a4536ca42d73e9668e3412a39b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
