<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_438bf42d3b8f9311ecc358c46c9daac3cd0a566c994ffce40ab75a8fc5e7407a extends Twig_Template
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
        $__internal_864c62699430aa4488fcd02145e8158110e95149f6535bd9a2b447023281e595 = $this->env->getExtension("native_profiler");
        $__internal_864c62699430aa4488fcd02145e8158110e95149f6535bd9a2b447023281e595->enter($__internal_864c62699430aa4488fcd02145e8158110e95149f6535bd9a2b447023281e595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_864c62699430aa4488fcd02145e8158110e95149f6535bd9a2b447023281e595->leave($__internal_864c62699430aa4488fcd02145e8158110e95149f6535bd9a2b447023281e595_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
