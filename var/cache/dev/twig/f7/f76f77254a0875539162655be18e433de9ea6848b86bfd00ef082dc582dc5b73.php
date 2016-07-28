<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_51a4d88a8c24a8c6594e2e2d17db82a5135c013a40dbf212d04d19152ce0bd03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b6d1eabd33ee63edc870b3af98857f89aba7d8ab4adf5fb2b9175507679b5752 = $this->env->getExtension("native_profiler");
        $__internal_b6d1eabd33ee63edc870b3af98857f89aba7d8ab4adf5fb2b9175507679b5752->enter($__internal_b6d1eabd33ee63edc870b3af98857f89aba7d8ab4adf5fb2b9175507679b5752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6d1eabd33ee63edc870b3af98857f89aba7d8ab4adf5fb2b9175507679b5752->leave($__internal_b6d1eabd33ee63edc870b3af98857f89aba7d8ab4adf5fb2b9175507679b5752_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff9a298f273f6699c44bdd62181878ff9c2264f4d94950cc98f4648350c5aeca = $this->env->getExtension("native_profiler");
        $__internal_ff9a298f273f6699c44bdd62181878ff9c2264f4d94950cc98f4648350c5aeca->enter($__internal_ff9a298f273f6699c44bdd62181878ff9c2264f4d94950cc98f4648350c5aeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ff9a298f273f6699c44bdd62181878ff9c2264f4d94950cc98f4648350c5aeca->leave($__internal_ff9a298f273f6699c44bdd62181878ff9c2264f4d94950cc98f4648350c5aeca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
