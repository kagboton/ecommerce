<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2356b77da698e34681de727e42839a3b96abd9b129cdab22c850990358428dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_674b843d74e456e6edd265a1073015766bdaaad6de1a37205a43a778ff9da049 = $this->env->getExtension("native_profiler");
        $__internal_674b843d74e456e6edd265a1073015766bdaaad6de1a37205a43a778ff9da049->enter($__internal_674b843d74e456e6edd265a1073015766bdaaad6de1a37205a43a778ff9da049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_674b843d74e456e6edd265a1073015766bdaaad6de1a37205a43a778ff9da049->leave($__internal_674b843d74e456e6edd265a1073015766bdaaad6de1a37205a43a778ff9da049_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c879a0b4f5da7c23b9801e4e9e2965e9ba4f96275e1321cab6a5f3494a5465a5 = $this->env->getExtension("native_profiler");
        $__internal_c879a0b4f5da7c23b9801e4e9e2965e9ba4f96275e1321cab6a5f3494a5465a5->enter($__internal_c879a0b4f5da7c23b9801e4e9e2965e9ba4f96275e1321cab6a5f3494a5465a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c879a0b4f5da7c23b9801e4e9e2965e9ba4f96275e1321cab6a5f3494a5465a5->leave($__internal_c879a0b4f5da7c23b9801e4e9e2965e9ba4f96275e1321cab6a5f3494a5465a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
