<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_36851a51fb1a21d1ef7605eabdd06a5b509799bdb043f46fb9336a64928501e5 extends Twig_Template
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
        $__internal_14e02d4817a08fbdb318b05b7c7b10529e714092cc876e173e5b2e0504d65271 = $this->env->getExtension("native_profiler");
        $__internal_14e02d4817a08fbdb318b05b7c7b10529e714092cc876e173e5b2e0504d65271->enter($__internal_14e02d4817a08fbdb318b05b7c7b10529e714092cc876e173e5b2e0504d65271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_14e02d4817a08fbdb318b05b7c7b10529e714092cc876e173e5b2e0504d65271->leave($__internal_14e02d4817a08fbdb318b05b7c7b10529e714092cc876e173e5b2e0504d65271_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
