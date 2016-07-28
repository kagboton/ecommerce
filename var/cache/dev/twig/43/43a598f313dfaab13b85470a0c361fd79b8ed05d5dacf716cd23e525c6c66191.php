<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e84f9772a8a8a2a757295d20c0269ebb4c5ace1a304db6b73ba77fae32d30646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_68b58e222cc24647c78a3ff4b55fd0d7a5f60ac5b326a85f26b567508f15bdf4 = $this->env->getExtension("native_profiler");
        $__internal_68b58e222cc24647c78a3ff4b55fd0d7a5f60ac5b326a85f26b567508f15bdf4->enter($__internal_68b58e222cc24647c78a3ff4b55fd0d7a5f60ac5b326a85f26b567508f15bdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68b58e222cc24647c78a3ff4b55fd0d7a5f60ac5b326a85f26b567508f15bdf4->leave($__internal_68b58e222cc24647c78a3ff4b55fd0d7a5f60ac5b326a85f26b567508f15bdf4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e79c38a5d0b75fc85dcbdb635ac5cbd8a3b94e716cfa5db61107c1a6b6d267e6 = $this->env->getExtension("native_profiler");
        $__internal_e79c38a5d0b75fc85dcbdb635ac5cbd8a3b94e716cfa5db61107c1a6b6d267e6->enter($__internal_e79c38a5d0b75fc85dcbdb635ac5cbd8a3b94e716cfa5db61107c1a6b6d267e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e79c38a5d0b75fc85dcbdb635ac5cbd8a3b94e716cfa5db61107c1a6b6d267e6->leave($__internal_e79c38a5d0b75fc85dcbdb635ac5cbd8a3b94e716cfa5db61107c1a6b6d267e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
