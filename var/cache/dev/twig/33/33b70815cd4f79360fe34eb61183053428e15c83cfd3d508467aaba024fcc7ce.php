<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_23c03e98c1e8064ba35c940cd1db34a506e219a5ae67f6b63a8fad598f237c7d extends Twig_Template
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
        $__internal_23cc6d6af18bc2094918b05c1ebd9b4a3bd6465d09a9e54735771d0bad158490 = $this->env->getExtension("native_profiler");
        $__internal_23cc6d6af18bc2094918b05c1ebd9b4a3bd6465d09a9e54735771d0bad158490->enter($__internal_23cc6d6af18bc2094918b05c1ebd9b4a3bd6465d09a9e54735771d0bad158490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_23cc6d6af18bc2094918b05c1ebd9b4a3bd6465d09a9e54735771d0bad158490->leave($__internal_23cc6d6af18bc2094918b05c1ebd9b4a3bd6465d09a9e54735771d0bad158490_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
