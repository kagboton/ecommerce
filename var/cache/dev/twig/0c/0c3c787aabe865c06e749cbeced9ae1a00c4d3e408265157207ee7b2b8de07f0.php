<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_66ad0d186e81048dc0a660a4c0bc11a939b7e9caacb48754d9dff999bfc6596e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_9023b8d2400cbaf96a3401936942314d7e853f41e15b6cb5021adec2e12da942 = $this->env->getExtension("native_profiler");
        $__internal_9023b8d2400cbaf96a3401936942314d7e853f41e15b6cb5021adec2e12da942->enter($__internal_9023b8d2400cbaf96a3401936942314d7e853f41e15b6cb5021adec2e12da942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9023b8d2400cbaf96a3401936942314d7e853f41e15b6cb5021adec2e12da942->leave($__internal_9023b8d2400cbaf96a3401936942314d7e853f41e15b6cb5021adec2e12da942_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09404b2ba94d58e84deb7d2019308ad908cd0f65a81c7b31993d1dbb0bb2cba3 = $this->env->getExtension("native_profiler");
        $__internal_09404b2ba94d58e84deb7d2019308ad908cd0f65a81c7b31993d1dbb0bb2cba3->enter($__internal_09404b2ba94d58e84deb7d2019308ad908cd0f65a81c7b31993d1dbb0bb2cba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_09404b2ba94d58e84deb7d2019308ad908cd0f65a81c7b31993d1dbb0bb2cba3->leave($__internal_09404b2ba94d58e84deb7d2019308ad908cd0f65a81c7b31993d1dbb0bb2cba3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
