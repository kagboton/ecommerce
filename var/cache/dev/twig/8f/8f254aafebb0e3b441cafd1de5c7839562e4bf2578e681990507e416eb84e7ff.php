<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9139828b9a5219cd85612ec125c1cc24c787d9d83d3739ed2d1eeed448119cc3 extends Twig_Template
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
        $__internal_a599d89c9c84b149f5659cc6f6c1ec2f6820292014b075f80f00426eba5c26fc = $this->env->getExtension("native_profiler");
        $__internal_a599d89c9c84b149f5659cc6f6c1ec2f6820292014b075f80f00426eba5c26fc->enter($__internal_a599d89c9c84b149f5659cc6f6c1ec2f6820292014b075f80f00426eba5c26fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a599d89c9c84b149f5659cc6f6c1ec2f6820292014b075f80f00426eba5c26fc->leave($__internal_a599d89c9c84b149f5659cc6f6c1ec2f6820292014b075f80f00426eba5c26fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
