<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_77c3d6e7ffe58417b56ae10f46e463be4b83ee3933eb96ec9283866e1c52544f extends Twig_Template
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
        $__internal_cc91ed2cc3616c0d398469ef75a5d5afd1975e6beb3d852ea946d88aac6affab = $this->env->getExtension("native_profiler");
        $__internal_cc91ed2cc3616c0d398469ef75a5d5afd1975e6beb3d852ea946d88aac6affab->enter($__internal_cc91ed2cc3616c0d398469ef75a5d5afd1975e6beb3d852ea946d88aac6affab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cc91ed2cc3616c0d398469ef75a5d5afd1975e6beb3d852ea946d88aac6affab->leave($__internal_cc91ed2cc3616c0d398469ef75a5d5afd1975e6beb3d852ea946d88aac6affab_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c7cd067f31e5ffe19035c245bf16d4c836ca057a4e666cd4fe7f334bf2466bb = $this->env->getExtension("native_profiler");
        $__internal_5c7cd067f31e5ffe19035c245bf16d4c836ca057a4e666cd4fe7f334bf2466bb->enter($__internal_5c7cd067f31e5ffe19035c245bf16d4c836ca057a4e666cd4fe7f334bf2466bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5c7cd067f31e5ffe19035c245bf16d4c836ca057a4e666cd4fe7f334bf2466bb->leave($__internal_5c7cd067f31e5ffe19035c245bf16d4c836ca057a4e666cd4fe7f334bf2466bb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
