<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_58d91123ac653afe8ef8214c25f3c74debfec75bc18a4cf3f66063140f659f4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_00006879673bb9a776575eca2b688b33aaf6e1106942687dab46479a890e49aa = $this->env->getExtension("native_profiler");
        $__internal_00006879673bb9a776575eca2b688b33aaf6e1106942687dab46479a890e49aa->enter($__internal_00006879673bb9a776575eca2b688b33aaf6e1106942687dab46479a890e49aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00006879673bb9a776575eca2b688b33aaf6e1106942687dab46479a890e49aa->leave($__internal_00006879673bb9a776575eca2b688b33aaf6e1106942687dab46479a890e49aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c55b8feb0a2381fc4471575ea35f34c4a47373ae986e640005e8a6bd678c6fb = $this->env->getExtension("native_profiler");
        $__internal_5c55b8feb0a2381fc4471575ea35f34c4a47373ae986e640005e8a6bd678c6fb->enter($__internal_5c55b8feb0a2381fc4471575ea35f34c4a47373ae986e640005e8a6bd678c6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_5c55b8feb0a2381fc4471575ea35f34c4a47373ae986e640005e8a6bd678c6fb->leave($__internal_5c55b8feb0a2381fc4471575ea35f34c4a47373ae986e640005e8a6bd678c6fb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
