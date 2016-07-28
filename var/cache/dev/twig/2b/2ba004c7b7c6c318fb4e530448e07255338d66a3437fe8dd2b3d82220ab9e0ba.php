<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b06edccaec44727076bdc331d362d3f682ee53418266312416979cd360085a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47ac9b53cbfd4326f7df8286e1d03d4049bbe6ec9a1cda3d6c5163c62040a93b = $this->env->getExtension("native_profiler");
        $__internal_47ac9b53cbfd4326f7df8286e1d03d4049bbe6ec9a1cda3d6c5163c62040a93b->enter($__internal_47ac9b53cbfd4326f7df8286e1d03d4049bbe6ec9a1cda3d6c5163c62040a93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47ac9b53cbfd4326f7df8286e1d03d4049bbe6ec9a1cda3d6c5163c62040a93b->leave($__internal_47ac9b53cbfd4326f7df8286e1d03d4049bbe6ec9a1cda3d6c5163c62040a93b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6e355d530a9126caa0e9b4a5dd0a7f71ada3f7e10753d7b9e5b5061785def38 = $this->env->getExtension("native_profiler");
        $__internal_f6e355d530a9126caa0e9b4a5dd0a7f71ada3f7e10753d7b9e5b5061785def38->enter($__internal_f6e355d530a9126caa0e9b4a5dd0a7f71ada3f7e10753d7b9e5b5061785def38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f6e355d530a9126caa0e9b4a5dd0a7f71ada3f7e10753d7b9e5b5061785def38->leave($__internal_f6e355d530a9126caa0e9b4a5dd0a7f71ada3f7e10753d7b9e5b5061785def38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
