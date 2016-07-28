<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_08bc14f1fb0b4e4ef37069f8bfa3bde1072c0a3e33d284fc4b68be2e6b03e5fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_28c488f8c49e3936234ab40445f2b38049983aee7d2def04efb5769702dd30ad = $this->env->getExtension("native_profiler");
        $__internal_28c488f8c49e3936234ab40445f2b38049983aee7d2def04efb5769702dd30ad->enter($__internal_28c488f8c49e3936234ab40445f2b38049983aee7d2def04efb5769702dd30ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28c488f8c49e3936234ab40445f2b38049983aee7d2def04efb5769702dd30ad->leave($__internal_28c488f8c49e3936234ab40445f2b38049983aee7d2def04efb5769702dd30ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3621a910bf23d556bf7dd2caea6c1aaf9a31525d2c6c71030ef3f623cb07cad = $this->env->getExtension("native_profiler");
        $__internal_e3621a910bf23d556bf7dd2caea6c1aaf9a31525d2c6c71030ef3f623cb07cad->enter($__internal_e3621a910bf23d556bf7dd2caea6c1aaf9a31525d2c6c71030ef3f623cb07cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e3621a910bf23d556bf7dd2caea6c1aaf9a31525d2c6c71030ef3f623cb07cad->leave($__internal_e3621a910bf23d556bf7dd2caea6c1aaf9a31525d2c6c71030ef3f623cb07cad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
