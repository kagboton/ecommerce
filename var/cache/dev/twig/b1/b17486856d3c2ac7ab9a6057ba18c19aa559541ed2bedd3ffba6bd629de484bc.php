<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9281d3a271033bcd79321e5e95c84aaaa2639bc829fceb580b5a19925078aaca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_cbfa015e2e2bb4eef3c49e5c127bbef6d3a41484f8ad18b2e506ff9399314151 = $this->env->getExtension("native_profiler");
        $__internal_cbfa015e2e2bb4eef3c49e5c127bbef6d3a41484f8ad18b2e506ff9399314151->enter($__internal_cbfa015e2e2bb4eef3c49e5c127bbef6d3a41484f8ad18b2e506ff9399314151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbfa015e2e2bb4eef3c49e5c127bbef6d3a41484f8ad18b2e506ff9399314151->leave($__internal_cbfa015e2e2bb4eef3c49e5c127bbef6d3a41484f8ad18b2e506ff9399314151_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3c3920a327911926122ee8d3698804f035dbfa093d701d1395d390621f28f75 = $this->env->getExtension("native_profiler");
        $__internal_c3c3920a327911926122ee8d3698804f035dbfa093d701d1395d390621f28f75->enter($__internal_c3c3920a327911926122ee8d3698804f035dbfa093d701d1395d390621f28f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c3c3920a327911926122ee8d3698804f035dbfa093d701d1395d390621f28f75->leave($__internal_c3c3920a327911926122ee8d3698804f035dbfa093d701d1395d390621f28f75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
