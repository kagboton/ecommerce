<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bb8a4a66205ccc8d36378f094886ce69357a0a6edaf4c0452e2c96d52fd0d856 extends Twig_Template
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
        $__internal_5b087a2a4856fd6e526d7a53aa8405c01feaecc9ed19b7eaf34177897351d223 = $this->env->getExtension("native_profiler");
        $__internal_5b087a2a4856fd6e526d7a53aa8405c01feaecc9ed19b7eaf34177897351d223->enter($__internal_5b087a2a4856fd6e526d7a53aa8405c01feaecc9ed19b7eaf34177897351d223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_5b087a2a4856fd6e526d7a53aa8405c01feaecc9ed19b7eaf34177897351d223->leave($__internal_5b087a2a4856fd6e526d7a53aa8405c01feaecc9ed19b7eaf34177897351d223_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
