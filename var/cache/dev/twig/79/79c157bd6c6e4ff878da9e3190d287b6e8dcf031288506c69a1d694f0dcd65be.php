<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cb2425e5cd7d4ecba4c894fb6d64e5afb24581f0c3a10de8f525fb2cc521e34b extends Twig_Template
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
        $__internal_ad2d14322b503dc26235556a6dcfe39638e07c6850ffb53566b3bb83cdd658ab = $this->env->getExtension("native_profiler");
        $__internal_ad2d14322b503dc26235556a6dcfe39638e07c6850ffb53566b3bb83cdd658ab->enter($__internal_ad2d14322b503dc26235556a6dcfe39638e07c6850ffb53566b3bb83cdd658ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ad2d14322b503dc26235556a6dcfe39638e07c6850ffb53566b3bb83cdd658ab->leave($__internal_ad2d14322b503dc26235556a6dcfe39638e07c6850ffb53566b3bb83cdd658ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
