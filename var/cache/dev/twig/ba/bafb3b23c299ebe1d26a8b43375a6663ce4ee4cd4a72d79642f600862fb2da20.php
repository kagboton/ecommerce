<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d8c65152091e31f20f084e71e456b507b4aab02f84f6081ae86a4d57168a9e51 extends Twig_Template
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
        $__internal_b41a90940f136a28baa07a71d5d0584c53d7fedd5e291168faba9905b3c3984e = $this->env->getExtension("native_profiler");
        $__internal_b41a90940f136a28baa07a71d5d0584c53d7fedd5e291168faba9905b3c3984e->enter($__internal_b41a90940f136a28baa07a71d5d0584c53d7fedd5e291168faba9905b3c3984e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b41a90940f136a28baa07a71d5d0584c53d7fedd5e291168faba9905b3c3984e->leave($__internal_b41a90940f136a28baa07a71d5d0584c53d7fedd5e291168faba9905b3c3984e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
