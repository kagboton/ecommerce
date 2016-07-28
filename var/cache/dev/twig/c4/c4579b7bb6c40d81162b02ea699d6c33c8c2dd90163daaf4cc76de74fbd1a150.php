<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_da61e0ff5426d454e16067b64b70fb39babb16d0a10f34baf615f3f1c17626ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_77cc1742a99d2877bbda4959b29bb1eed2923b2eaec896fdeadf06d9f2a4fc35 = $this->env->getExtension("native_profiler");
        $__internal_77cc1742a99d2877bbda4959b29bb1eed2923b2eaec896fdeadf06d9f2a4fc35->enter($__internal_77cc1742a99d2877bbda4959b29bb1eed2923b2eaec896fdeadf06d9f2a4fc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77cc1742a99d2877bbda4959b29bb1eed2923b2eaec896fdeadf06d9f2a4fc35->leave($__internal_77cc1742a99d2877bbda4959b29bb1eed2923b2eaec896fdeadf06d9f2a4fc35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30dd62810ba0f449a9a69b732941c7ac3bf48d341af83acd3b36f49c08bd6906 = $this->env->getExtension("native_profiler");
        $__internal_30dd62810ba0f449a9a69b732941c7ac3bf48d341af83acd3b36f49c08bd6906->enter($__internal_30dd62810ba0f449a9a69b732941c7ac3bf48d341af83acd3b36f49c08bd6906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_30dd62810ba0f449a9a69b732941c7ac3bf48d341af83acd3b36f49c08bd6906->leave($__internal_30dd62810ba0f449a9a69b732941c7ac3bf48d341af83acd3b36f49c08bd6906_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
