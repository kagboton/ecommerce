<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c69438c0daa6e919d3a713f1b4457dfb076c0f6c7d5d8de4a19671dd1d86efad extends Twig_Template
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
        $__internal_059ed8a0a99a7eff1ebaf649ae41210b472ef07720de5e1d7d6c9025bdae4a69 = $this->env->getExtension("native_profiler");
        $__internal_059ed8a0a99a7eff1ebaf649ae41210b472ef07720de5e1d7d6c9025bdae4a69->enter($__internal_059ed8a0a99a7eff1ebaf649ae41210b472ef07720de5e1d7d6c9025bdae4a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_059ed8a0a99a7eff1ebaf649ae41210b472ef07720de5e1d7d6c9025bdae4a69->leave($__internal_059ed8a0a99a7eff1ebaf649ae41210b472ef07720de5e1d7d6c9025bdae4a69_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
