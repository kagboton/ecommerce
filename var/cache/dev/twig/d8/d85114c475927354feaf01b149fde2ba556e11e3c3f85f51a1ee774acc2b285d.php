<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9adce38f6e1a0676bc43ddef6fa0467a0fb1d64d3340aece31a8984df6080439 extends Twig_Template
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
        $__internal_55a2527c0325ec8a6c54cf9e529f4e0204f89765c5d485740a2a08b3fe12d2fd = $this->env->getExtension("native_profiler");
        $__internal_55a2527c0325ec8a6c54cf9e529f4e0204f89765c5d485740a2a08b3fe12d2fd->enter($__internal_55a2527c0325ec8a6c54cf9e529f4e0204f89765c5d485740a2a08b3fe12d2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_55a2527c0325ec8a6c54cf9e529f4e0204f89765c5d485740a2a08b3fe12d2fd->leave($__internal_55a2527c0325ec8a6c54cf9e529f4e0204f89765c5d485740a2a08b3fe12d2fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
