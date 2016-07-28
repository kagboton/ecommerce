<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_03e2ad9d6f486c1d0b1319beb3e904d37548d7f1f1361df1e062f2781cf4e88b extends Twig_Template
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
        $__internal_936be7669315c5e1a9b4132a682fafef6c949b71c9330fdec1def5957d5fa08a = $this->env->getExtension("native_profiler");
        $__internal_936be7669315c5e1a9b4132a682fafef6c949b71c9330fdec1def5957d5fa08a->enter($__internal_936be7669315c5e1a9b4132a682fafef6c949b71c9330fdec1def5957d5fa08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_936be7669315c5e1a9b4132a682fafef6c949b71c9330fdec1def5957d5fa08a->leave($__internal_936be7669315c5e1a9b4132a682fafef6c949b71c9330fdec1def5957d5fa08a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
