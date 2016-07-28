<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e9c98f7f1b4dd1d2df61ed7ce2ddaa2bcdec00e58244227cda04a2891534f15f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_332551d317416f4dece65622682d2c572a6cba060e9cb5cb9f905cbab14fed96 = $this->env->getExtension("native_profiler");
        $__internal_332551d317416f4dece65622682d2c572a6cba060e9cb5cb9f905cbab14fed96->enter($__internal_332551d317416f4dece65622682d2c572a6cba060e9cb5cb9f905cbab14fed96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332551d317416f4dece65622682d2c572a6cba060e9cb5cb9f905cbab14fed96->leave($__internal_332551d317416f4dece65622682d2c572a6cba060e9cb5cb9f905cbab14fed96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fe6bc260578155049e6b93b08fbeb3909ac5bf9de46a21a53e9c0319e41db01 = $this->env->getExtension("native_profiler");
        $__internal_4fe6bc260578155049e6b93b08fbeb3909ac5bf9de46a21a53e9c0319e41db01->enter($__internal_4fe6bc260578155049e6b93b08fbeb3909ac5bf9de46a21a53e9c0319e41db01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4fe6bc260578155049e6b93b08fbeb3909ac5bf9de46a21a53e9c0319e41db01->leave($__internal_4fe6bc260578155049e6b93b08fbeb3909ac5bf9de46a21a53e9c0319e41db01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
