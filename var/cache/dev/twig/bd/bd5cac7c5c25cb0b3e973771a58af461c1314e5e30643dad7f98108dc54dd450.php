<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_766c359797a1dc16eb6a53f9d836e7a4b75d238c21bc186bb19c9ea488dc689d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_3a8bee5e3e370430b6bbd9a3f0789e495c5cb558b2c2d6e064568643b27800ea = $this->env->getExtension("native_profiler");
        $__internal_3a8bee5e3e370430b6bbd9a3f0789e495c5cb558b2c2d6e064568643b27800ea->enter($__internal_3a8bee5e3e370430b6bbd9a3f0789e495c5cb558b2c2d6e064568643b27800ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a8bee5e3e370430b6bbd9a3f0789e495c5cb558b2c2d6e064568643b27800ea->leave($__internal_3a8bee5e3e370430b6bbd9a3f0789e495c5cb558b2c2d6e064568643b27800ea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fa20e3dbb728112f9ab6a8db010f28a2bc59e6e0e45f58c0dfc177cc30f432b = $this->env->getExtension("native_profiler");
        $__internal_3fa20e3dbb728112f9ab6a8db010f28a2bc59e6e0e45f58c0dfc177cc30f432b->enter($__internal_3fa20e3dbb728112f9ab6a8db010f28a2bc59e6e0e45f58c0dfc177cc30f432b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3fa20e3dbb728112f9ab6a8db010f28a2bc59e6e0e45f58c0dfc177cc30f432b->leave($__internal_3fa20e3dbb728112f9ab6a8db010f28a2bc59e6e0e45f58c0dfc177cc30f432b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
