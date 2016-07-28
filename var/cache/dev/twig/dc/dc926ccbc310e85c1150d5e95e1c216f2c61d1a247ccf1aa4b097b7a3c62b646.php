<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a062f472849f7862aef42c629ed8a439b93aaf00a1f04f2e2a5f5cdda0e2493d extends Twig_Template
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
        $__internal_fb75864623a7447f395b7407685a40d2e3fff29c549ba5fdfdd835025a0fd963 = $this->env->getExtension("native_profiler");
        $__internal_fb75864623a7447f395b7407685a40d2e3fff29c549ba5fdfdd835025a0fd963->enter($__internal_fb75864623a7447f395b7407685a40d2e3fff29c549ba5fdfdd835025a0fd963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_fb75864623a7447f395b7407685a40d2e3fff29c549ba5fdfdd835025a0fd963->leave($__internal_fb75864623a7447f395b7407685a40d2e3fff29c549ba5fdfdd835025a0fd963_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
