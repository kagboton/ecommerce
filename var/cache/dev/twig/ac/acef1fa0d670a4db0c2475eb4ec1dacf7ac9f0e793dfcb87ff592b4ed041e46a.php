<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_020a01b52ce22f1d40197abf744c0edb76bfb99655ebcd269efc756312e55c7c extends Twig_Template
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
        $__internal_4e7e63cf8b9e6eefff538ed67ce95df014faee42245c87b95cbf0f687bd59d5b = $this->env->getExtension("native_profiler");
        $__internal_4e7e63cf8b9e6eefff538ed67ce95df014faee42245c87b95cbf0f687bd59d5b->enter($__internal_4e7e63cf8b9e6eefff538ed67ce95df014faee42245c87b95cbf0f687bd59d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4e7e63cf8b9e6eefff538ed67ce95df014faee42245c87b95cbf0f687bd59d5b->leave($__internal_4e7e63cf8b9e6eefff538ed67ce95df014faee42245c87b95cbf0f687bd59d5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
