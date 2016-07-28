<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_b96e352bc6e12ed2058ddb09ba6e180cad57db9d32bce6baab9d5a2bb886f34f extends Twig_Template
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
        $__internal_53daa5f3519a673c25b97f28e39aef555f57640250ead5332550de7cf7f9360d = $this->env->getExtension("native_profiler");
        $__internal_53daa5f3519a673c25b97f28e39aef555f57640250ead5332550de7cf7f9360d->enter($__internal_53daa5f3519a673c25b97f28e39aef555f57640250ead5332550de7cf7f9360d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_53daa5f3519a673c25b97f28e39aef555f57640250ead5332550de7cf7f9360d->leave($__internal_53daa5f3519a673c25b97f28e39aef555f57640250ead5332550de7cf7f9360d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
