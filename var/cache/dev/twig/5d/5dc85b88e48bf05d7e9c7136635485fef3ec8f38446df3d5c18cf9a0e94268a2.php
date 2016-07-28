<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d243620a694419ae6b565f2c329dbf43ebc8a605316976141ca362531599c100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_15c970c02fa6e83d410d9caf81d83cf4f3889763ee299841f24b2455e67b5ad9 = $this->env->getExtension("native_profiler");
        $__internal_15c970c02fa6e83d410d9caf81d83cf4f3889763ee299841f24b2455e67b5ad9->enter($__internal_15c970c02fa6e83d410d9caf81d83cf4f3889763ee299841f24b2455e67b5ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15c970c02fa6e83d410d9caf81d83cf4f3889763ee299841f24b2455e67b5ad9->leave($__internal_15c970c02fa6e83d410d9caf81d83cf4f3889763ee299841f24b2455e67b5ad9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dc56c776411920771d6c0e5783de5368ae9e6881b44e4410d897b10ec7b73af = $this->env->getExtension("native_profiler");
        $__internal_5dc56c776411920771d6c0e5783de5368ae9e6881b44e4410d897b10ec7b73af->enter($__internal_5dc56c776411920771d6c0e5783de5368ae9e6881b44e4410d897b10ec7b73af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5dc56c776411920771d6c0e5783de5368ae9e6881b44e4410d897b10ec7b73af->leave($__internal_5dc56c776411920771d6c0e5783de5368ae9e6881b44e4410d897b10ec7b73af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
