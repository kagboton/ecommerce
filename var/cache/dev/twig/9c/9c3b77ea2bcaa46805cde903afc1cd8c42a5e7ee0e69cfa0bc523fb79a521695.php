<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1f7305180736fec05ca2b1f13238f6d60202969844f893ead0deb9be97ca7d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3762e42d5179243c5cf1b4da98407bc2ed4d5a57d10fbe38f76afd4e9f1f0e51 = $this->env->getExtension("native_profiler");
        $__internal_3762e42d5179243c5cf1b4da98407bc2ed4d5a57d10fbe38f76afd4e9f1f0e51->enter($__internal_3762e42d5179243c5cf1b4da98407bc2ed4d5a57d10fbe38f76afd4e9f1f0e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3762e42d5179243c5cf1b4da98407bc2ed4d5a57d10fbe38f76afd4e9f1f0e51->leave($__internal_3762e42d5179243c5cf1b4da98407bc2ed4d5a57d10fbe38f76afd4e9f1f0e51_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29a248003bfe1eb65b5f1cd928448219a7a8f6d1882b9f3ff2fccac0a3967605 = $this->env->getExtension("native_profiler");
        $__internal_29a248003bfe1eb65b5f1cd928448219a7a8f6d1882b9f3ff2fccac0a3967605->enter($__internal_29a248003bfe1eb65b5f1cd928448219a7a8f6d1882b9f3ff2fccac0a3967605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_29a248003bfe1eb65b5f1cd928448219a7a8f6d1882b9f3ff2fccac0a3967605->leave($__internal_29a248003bfe1eb65b5f1cd928448219a7a8f6d1882b9f3ff2fccac0a3967605_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5053dbbcd2d169db9b019ffa6b305ba710dbb380460bf9cd04b4f8854d0fdd6 = $this->env->getExtension("native_profiler");
        $__internal_d5053dbbcd2d169db9b019ffa6b305ba710dbb380460bf9cd04b4f8854d0fdd6->enter($__internal_d5053dbbcd2d169db9b019ffa6b305ba710dbb380460bf9cd04b4f8854d0fdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d5053dbbcd2d169db9b019ffa6b305ba710dbb380460bf9cd04b4f8854d0fdd6->leave($__internal_d5053dbbcd2d169db9b019ffa6b305ba710dbb380460bf9cd04b4f8854d0fdd6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c74f3f9e0423c4bc27d6caa7939674d8376068abd0eac3562c730b54c7550ea = $this->env->getExtension("native_profiler");
        $__internal_2c74f3f9e0423c4bc27d6caa7939674d8376068abd0eac3562c730b54c7550ea->enter($__internal_2c74f3f9e0423c4bc27d6caa7939674d8376068abd0eac3562c730b54c7550ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2c74f3f9e0423c4bc27d6caa7939674d8376068abd0eac3562c730b54c7550ea->leave($__internal_2c74f3f9e0423c4bc27d6caa7939674d8376068abd0eac3562c730b54c7550ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
