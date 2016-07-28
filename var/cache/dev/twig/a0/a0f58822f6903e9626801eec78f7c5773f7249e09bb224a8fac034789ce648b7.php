<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_6920972966c6f2d2be7d88bec525743b77d5c6961ce6eadc4d80961afec7b647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_464a6ed2ad74d7c17e1bd5a317830f54b26a3808f2c919c1a88f0a05f73d87dd = $this->env->getExtension("native_profiler");
        $__internal_464a6ed2ad74d7c17e1bd5a317830f54b26a3808f2c919c1a88f0a05f73d87dd->enter($__internal_464a6ed2ad74d7c17e1bd5a317830f54b26a3808f2c919c1a88f0a05f73d87dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_464a6ed2ad74d7c17e1bd5a317830f54b26a3808f2c919c1a88f0a05f73d87dd->leave($__internal_464a6ed2ad74d7c17e1bd5a317830f54b26a3808f2c919c1a88f0a05f73d87dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2def0cc0e9f4efba21ee523fb74e12ff01f0372b0e94d5273a1c5595349ae1e = $this->env->getExtension("native_profiler");
        $__internal_f2def0cc0e9f4efba21ee523fb74e12ff01f0372b0e94d5273a1c5595349ae1e->enter($__internal_f2def0cc0e9f4efba21ee523fb74e12ff01f0372b0e94d5273a1c5595349ae1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_f2def0cc0e9f4efba21ee523fb74e12ff01f0372b0e94d5273a1c5595349ae1e->leave($__internal_f2def0cc0e9f4efba21ee523fb74e12ff01f0372b0e94d5273a1c5595349ae1e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
