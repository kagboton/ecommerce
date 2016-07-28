<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1574430e148429b6f87440f7f1012002aac754c3820ac2e74b002a5e7d5cebde extends Twig_Template
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
        $__internal_3ffdc5f8a3afd77be0574edbe090aa435e5f2e1a177f850a36cceddadf5ac222 = $this->env->getExtension("native_profiler");
        $__internal_3ffdc5f8a3afd77be0574edbe090aa435e5f2e1a177f850a36cceddadf5ac222->enter($__internal_3ffdc5f8a3afd77be0574edbe090aa435e5f2e1a177f850a36cceddadf5ac222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3ffdc5f8a3afd77be0574edbe090aa435e5f2e1a177f850a36cceddadf5ac222->leave($__internal_3ffdc5f8a3afd77be0574edbe090aa435e5f2e1a177f850a36cceddadf5ac222_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
