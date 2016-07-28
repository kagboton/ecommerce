<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6a5df1a776a3a6ab5f1e86eb977e26122d09aca41bff7ca543747d5ffca41ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c7b9de632c943be9999b20efb1498d6127169c2a5c51390eeb2bf90b0827b3ad = $this->env->getExtension("native_profiler");
        $__internal_c7b9de632c943be9999b20efb1498d6127169c2a5c51390eeb2bf90b0827b3ad->enter($__internal_c7b9de632c943be9999b20efb1498d6127169c2a5c51390eeb2bf90b0827b3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7b9de632c943be9999b20efb1498d6127169c2a5c51390eeb2bf90b0827b3ad->leave($__internal_c7b9de632c943be9999b20efb1498d6127169c2a5c51390eeb2bf90b0827b3ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86aee66ee41dbe67d65026e59a47f0ee3b7a8119d5010c6eb7d57c1e8b06fed3 = $this->env->getExtension("native_profiler");
        $__internal_86aee66ee41dbe67d65026e59a47f0ee3b7a8119d5010c6eb7d57c1e8b06fed3->enter($__internal_86aee66ee41dbe67d65026e59a47f0ee3b7a8119d5010c6eb7d57c1e8b06fed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_86aee66ee41dbe67d65026e59a47f0ee3b7a8119d5010c6eb7d57c1e8b06fed3->leave($__internal_86aee66ee41dbe67d65026e59a47f0ee3b7a8119d5010c6eb7d57c1e8b06fed3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
