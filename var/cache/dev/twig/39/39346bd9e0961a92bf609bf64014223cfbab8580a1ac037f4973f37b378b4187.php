<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_93b32f3d7cb44e063c5c3b287e25273917925540dc90d31e11823213c78eaf37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d1885d2e5d3e9a839adf9448c23a4c2234b7e2bb3a5bf43ed8307fa4c968c4d3 = $this->env->getExtension("native_profiler");
        $__internal_d1885d2e5d3e9a839adf9448c23a4c2234b7e2bb3a5bf43ed8307fa4c968c4d3->enter($__internal_d1885d2e5d3e9a839adf9448c23a4c2234b7e2bb3a5bf43ed8307fa4c968c4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1885d2e5d3e9a839adf9448c23a4c2234b7e2bb3a5bf43ed8307fa4c968c4d3->leave($__internal_d1885d2e5d3e9a839adf9448c23a4c2234b7e2bb3a5bf43ed8307fa4c968c4d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef2a6d1ce423fb1152260b456b3e0b821a79cd94c8babf1e7b0ffd7bb6957628 = $this->env->getExtension("native_profiler");
        $__internal_ef2a6d1ce423fb1152260b456b3e0b821a79cd94c8babf1e7b0ffd7bb6957628->enter($__internal_ef2a6d1ce423fb1152260b456b3e0b821a79cd94c8babf1e7b0ffd7bb6957628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ef2a6d1ce423fb1152260b456b3e0b821a79cd94c8babf1e7b0ffd7bb6957628->leave($__internal_ef2a6d1ce423fb1152260b456b3e0b821a79cd94c8babf1e7b0ffd7bb6957628_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
