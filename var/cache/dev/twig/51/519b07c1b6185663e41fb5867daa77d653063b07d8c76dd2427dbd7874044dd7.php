<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6793034bff1678e632e09f363168fdaf669b1cdb97ec4572fb8cd5b875128a36 extends Twig_Template
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
        $__internal_ca621289bb8b3595f583cd44f04a8860812240a54645e3ddde5f6c127a5a6012 = $this->env->getExtension("native_profiler");
        $__internal_ca621289bb8b3595f583cd44f04a8860812240a54645e3ddde5f6c127a5a6012->enter($__internal_ca621289bb8b3595f583cd44f04a8860812240a54645e3ddde5f6c127a5a6012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ca621289bb8b3595f583cd44f04a8860812240a54645e3ddde5f6c127a5a6012->leave($__internal_ca621289bb8b3595f583cd44f04a8860812240a54645e3ddde5f6c127a5a6012_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
