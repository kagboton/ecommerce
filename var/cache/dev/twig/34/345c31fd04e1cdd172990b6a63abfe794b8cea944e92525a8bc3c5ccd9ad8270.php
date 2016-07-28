<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_3ed808184222252dcb06d212cfc5660ec51bd95217453cfe08fdd661baf5aa21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_6cd95f05910606669c2178de2440e5e058c7f657483e5766e1c384ecd919e7f6 = $this->env->getExtension("native_profiler");
        $__internal_6cd95f05910606669c2178de2440e5e058c7f657483e5766e1c384ecd919e7f6->enter($__internal_6cd95f05910606669c2178de2440e5e058c7f657483e5766e1c384ecd919e7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cd95f05910606669c2178de2440e5e058c7f657483e5766e1c384ecd919e7f6->leave($__internal_6cd95f05910606669c2178de2440e5e058c7f657483e5766e1c384ecd919e7f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ac3e0a71723887b3db5ed5cc966d4b68463097f4d76e0139bf66c867e06f31d = $this->env->getExtension("native_profiler");
        $__internal_8ac3e0a71723887b3db5ed5cc966d4b68463097f4d76e0139bf66c867e06f31d->enter($__internal_8ac3e0a71723887b3db5ed5cc966d4b68463097f4d76e0139bf66c867e06f31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_8ac3e0a71723887b3db5ed5cc966d4b68463097f4d76e0139bf66c867e06f31d->leave($__internal_8ac3e0a71723887b3db5ed5cc966d4b68463097f4d76e0139bf66c867e06f31d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
