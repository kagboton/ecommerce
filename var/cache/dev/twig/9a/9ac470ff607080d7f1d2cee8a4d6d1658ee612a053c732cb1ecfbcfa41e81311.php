<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_f8e2c943687e5b1018f534a4b0c093d5f5ecdacccd69cb5a94404a26493f12ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_fa2a503254c4e23fc664033d09fd7b042e9b001bfa6e44eb22c98c95adcf4243 = $this->env->getExtension("native_profiler");
        $__internal_fa2a503254c4e23fc664033d09fd7b042e9b001bfa6e44eb22c98c95adcf4243->enter($__internal_fa2a503254c4e23fc664033d09fd7b042e9b001bfa6e44eb22c98c95adcf4243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa2a503254c4e23fc664033d09fd7b042e9b001bfa6e44eb22c98c95adcf4243->leave($__internal_fa2a503254c4e23fc664033d09fd7b042e9b001bfa6e44eb22c98c95adcf4243_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55f1d2e115fbe94c1818266a7c7f8c026c69ae336b8eadcd2c4afb9979b40e7c = $this->env->getExtension("native_profiler");
        $__internal_55f1d2e115fbe94c1818266a7c7f8c026c69ae336b8eadcd2c4afb9979b40e7c->enter($__internal_55f1d2e115fbe94c1818266a7c7f8c026c69ae336b8eadcd2c4afb9979b40e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_55f1d2e115fbe94c1818266a7c7f8c026c69ae336b8eadcd2c4afb9979b40e7c->leave($__internal_55f1d2e115fbe94c1818266a7c7f8c026c69ae336b8eadcd2c4afb9979b40e7c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
