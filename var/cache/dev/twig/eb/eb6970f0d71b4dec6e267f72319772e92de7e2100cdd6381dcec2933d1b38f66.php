<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_1ff238e9333d8c9324ae191a24a53b053e98f36b6281df83c70be76ae732816d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_5b65fe1cde132f7d25520af9fe378f743f47aca30e18c17f121a3d9e3d508d3f = $this->env->getExtension("native_profiler");
        $__internal_5b65fe1cde132f7d25520af9fe378f743f47aca30e18c17f121a3d9e3d508d3f->enter($__internal_5b65fe1cde132f7d25520af9fe378f743f47aca30e18c17f121a3d9e3d508d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b65fe1cde132f7d25520af9fe378f743f47aca30e18c17f121a3d9e3d508d3f->leave($__internal_5b65fe1cde132f7d25520af9fe378f743f47aca30e18c17f121a3d9e3d508d3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9385ebffc1645f1c88301b6d1eb5b3130c5d5b0f6925dfe8aff99cf89a3aa19 = $this->env->getExtension("native_profiler");
        $__internal_b9385ebffc1645f1c88301b6d1eb5b3130c5d5b0f6925dfe8aff99cf89a3aa19->enter($__internal_b9385ebffc1645f1c88301b6d1eb5b3130c5d5b0f6925dfe8aff99cf89a3aa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b9385ebffc1645f1c88301b6d1eb5b3130c5d5b0f6925dfe8aff99cf89a3aa19->leave($__internal_b9385ebffc1645f1c88301b6d1eb5b3130c5d5b0f6925dfe8aff99cf89a3aa19_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
