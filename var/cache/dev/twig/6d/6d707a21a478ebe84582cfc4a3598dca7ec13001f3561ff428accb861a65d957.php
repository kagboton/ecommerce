<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d1ad79e287a37a93c116aa957ab692834e4ed20481505550a5113a9aecaa8edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_9923d4ba9d2b3b7012e9b509f41c88e99c178ce45ddb6e225340c0ea9b1eadba = $this->env->getExtension("native_profiler");
        $__internal_9923d4ba9d2b3b7012e9b509f41c88e99c178ce45ddb6e225340c0ea9b1eadba->enter($__internal_9923d4ba9d2b3b7012e9b509f41c88e99c178ce45ddb6e225340c0ea9b1eadba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9923d4ba9d2b3b7012e9b509f41c88e99c178ce45ddb6e225340c0ea9b1eadba->leave($__internal_9923d4ba9d2b3b7012e9b509f41c88e99c178ce45ddb6e225340c0ea9b1eadba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a92a41aff8f710faf8ce8f65f7858896da9eb4048b02b7c0fd368ec1c025dae0 = $this->env->getExtension("native_profiler");
        $__internal_a92a41aff8f710faf8ce8f65f7858896da9eb4048b02b7c0fd368ec1c025dae0->enter($__internal_a92a41aff8f710faf8ce8f65f7858896da9eb4048b02b7c0fd368ec1c025dae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a92a41aff8f710faf8ce8f65f7858896da9eb4048b02b7c0fd368ec1c025dae0->leave($__internal_a92a41aff8f710faf8ce8f65f7858896da9eb4048b02b7c0fd368ec1c025dae0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
