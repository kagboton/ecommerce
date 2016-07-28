<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_20de43e886a2dfa447369d9b82fcaaf131950ef5cf9b48fa5f3fcf19c6fd55af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_be99f1d4f0aa8ef1776fceb755675dfff1f2a373b11d537feaeb669272937cb3 = $this->env->getExtension("native_profiler");
        $__internal_be99f1d4f0aa8ef1776fceb755675dfff1f2a373b11d537feaeb669272937cb3->enter($__internal_be99f1d4f0aa8ef1776fceb755675dfff1f2a373b11d537feaeb669272937cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be99f1d4f0aa8ef1776fceb755675dfff1f2a373b11d537feaeb669272937cb3->leave($__internal_be99f1d4f0aa8ef1776fceb755675dfff1f2a373b11d537feaeb669272937cb3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c23fbcfb48eb6d3b5e4271f1d0bbbf2b276763e673684bb9abd974301f9c63a = $this->env->getExtension("native_profiler");
        $__internal_9c23fbcfb48eb6d3b5e4271f1d0bbbf2b276763e673684bb9abd974301f9c63a->enter($__internal_9c23fbcfb48eb6d3b5e4271f1d0bbbf2b276763e673684bb9abd974301f9c63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9c23fbcfb48eb6d3b5e4271f1d0bbbf2b276763e673684bb9abd974301f9c63a->leave($__internal_9c23fbcfb48eb6d3b5e4271f1d0bbbf2b276763e673684bb9abd974301f9c63a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
