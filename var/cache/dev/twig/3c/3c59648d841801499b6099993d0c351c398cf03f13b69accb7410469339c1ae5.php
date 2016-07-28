<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_17150e1d7a280448434df514e68b7744771c3251f320b368220f4e5305691347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ae7c86981e7dd9de7b52081c772190864a8ae10d1afe7fe26e845738d1b7ec0e = $this->env->getExtension("native_profiler");
        $__internal_ae7c86981e7dd9de7b52081c772190864a8ae10d1afe7fe26e845738d1b7ec0e->enter($__internal_ae7c86981e7dd9de7b52081c772190864a8ae10d1afe7fe26e845738d1b7ec0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7c86981e7dd9de7b52081c772190864a8ae10d1afe7fe26e845738d1b7ec0e->leave($__internal_ae7c86981e7dd9de7b52081c772190864a8ae10d1afe7fe26e845738d1b7ec0e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1f063f4d70f1470624cb92497c6029a2d764815005908be4387f5c4f615de66 = $this->env->getExtension("native_profiler");
        $__internal_e1f063f4d70f1470624cb92497c6029a2d764815005908be4387f5c4f615de66->enter($__internal_e1f063f4d70f1470624cb92497c6029a2d764815005908be4387f5c4f615de66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_e1f063f4d70f1470624cb92497c6029a2d764815005908be4387f5c4f615de66->leave($__internal_e1f063f4d70f1470624cb92497c6029a2d764815005908be4387f5c4f615de66_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
