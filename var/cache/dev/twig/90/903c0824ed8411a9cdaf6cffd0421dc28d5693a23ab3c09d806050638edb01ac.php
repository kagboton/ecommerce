<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_30d5e567a98e497be0d3bd5ee46e36ced10ed55cb1e2c0f6a80521e4dc0e97c4 extends Twig_Template
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
        $__internal_b87247630c32d244a330e469dc8b5a74cd6f04b0976695a628d40ff93b3a5f81 = $this->env->getExtension("native_profiler");
        $__internal_b87247630c32d244a330e469dc8b5a74cd6f04b0976695a628d40ff93b3a5f81->enter($__internal_b87247630c32d244a330e469dc8b5a74cd6f04b0976695a628d40ff93b3a5f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b87247630c32d244a330e469dc8b5a74cd6f04b0976695a628d40ff93b3a5f81->leave($__internal_b87247630c32d244a330e469dc8b5a74cd6f04b0976695a628d40ff93b3a5f81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
