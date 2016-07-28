<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c47645995862cb357a14058a7b19cf1446c0cbb2844e2a96f09084f10fdc8b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4c4a9ddd6a17b8bab8a47374fe6994f830bf33caaffc45fba45da03783aa5e2 = $this->env->getExtension("native_profiler");
        $__internal_f4c4a9ddd6a17b8bab8a47374fe6994f830bf33caaffc45fba45da03783aa5e2->enter($__internal_f4c4a9ddd6a17b8bab8a47374fe6994f830bf33caaffc45fba45da03783aa5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f4c4a9ddd6a17b8bab8a47374fe6994f830bf33caaffc45fba45da03783aa5e2->leave($__internal_f4c4a9ddd6a17b8bab8a47374fe6994f830bf33caaffc45fba45da03783aa5e2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_89f2a4d649758b05475c38090e3bb122ae9acb094296f46c97da7beeb11fa923 = $this->env->getExtension("native_profiler");
        $__internal_89f2a4d649758b05475c38090e3bb122ae9acb094296f46c97da7beeb11fa923->enter($__internal_89f2a4d649758b05475c38090e3bb122ae9acb094296f46c97da7beeb11fa923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_89f2a4d649758b05475c38090e3bb122ae9acb094296f46c97da7beeb11fa923->leave($__internal_89f2a4d649758b05475c38090e3bb122ae9acb094296f46c97da7beeb11fa923_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
