<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a18e9291215bee16c968aebd946c9bb1f37627be31e62292c8c30706dd3324a8 extends Twig_Template
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
        $__internal_d6d1f49c46cf968b003b9f4e968e0364aab512cba49950abd1e56290c777ba54 = $this->env->getExtension("native_profiler");
        $__internal_d6d1f49c46cf968b003b9f4e968e0364aab512cba49950abd1e56290c777ba54->enter($__internal_d6d1f49c46cf968b003b9f4e968e0364aab512cba49950abd1e56290c777ba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d6d1f49c46cf968b003b9f4e968e0364aab512cba49950abd1e56290c777ba54->leave($__internal_d6d1f49c46cf968b003b9f4e968e0364aab512cba49950abd1e56290c777ba54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
