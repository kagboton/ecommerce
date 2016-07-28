<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_71f0733c4eee454d3fe502aca6baa42efefec3fbbb23d413aac700d0fb2e9121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_e317e1b8dd435731422070cc4450d1c4ff0d3e7ae659e49637948d501fa3b733 = $this->env->getExtension("native_profiler");
        $__internal_e317e1b8dd435731422070cc4450d1c4ff0d3e7ae659e49637948d501fa3b733->enter($__internal_e317e1b8dd435731422070cc4450d1c4ff0d3e7ae659e49637948d501fa3b733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e317e1b8dd435731422070cc4450d1c4ff0d3e7ae659e49637948d501fa3b733->leave($__internal_e317e1b8dd435731422070cc4450d1c4ff0d3e7ae659e49637948d501fa3b733_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c720b7a741598febe4096d11774e9a26b2c59b2419551139af69939f06c0dfe = $this->env->getExtension("native_profiler");
        $__internal_3c720b7a741598febe4096d11774e9a26b2c59b2419551139af69939f06c0dfe->enter($__internal_3c720b7a741598febe4096d11774e9a26b2c59b2419551139af69939f06c0dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_3c720b7a741598febe4096d11774e9a26b2c59b2419551139af69939f06c0dfe->leave($__internal_3c720b7a741598febe4096d11774e9a26b2c59b2419551139af69939f06c0dfe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
