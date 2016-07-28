<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5635fa83beafa8a07609dec6c2695c2cf4d06be42fd85b6c449f5aa7c9c5a997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_67e74c0fa64c1124a61c8e0a671683102ed3dfc3f137f207dd542ebe66bcb4f6 = $this->env->getExtension("native_profiler");
        $__internal_67e74c0fa64c1124a61c8e0a671683102ed3dfc3f137f207dd542ebe66bcb4f6->enter($__internal_67e74c0fa64c1124a61c8e0a671683102ed3dfc3f137f207dd542ebe66bcb4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e74c0fa64c1124a61c8e0a671683102ed3dfc3f137f207dd542ebe66bcb4f6->leave($__internal_67e74c0fa64c1124a61c8e0a671683102ed3dfc3f137f207dd542ebe66bcb4f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8502e0d9bbb63eacce424ceb2d6e9991506518b340a60e6b3090fe1135225e91 = $this->env->getExtension("native_profiler");
        $__internal_8502e0d9bbb63eacce424ceb2d6e9991506518b340a60e6b3090fe1135225e91->enter($__internal_8502e0d9bbb63eacce424ceb2d6e9991506518b340a60e6b3090fe1135225e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8502e0d9bbb63eacce424ceb2d6e9991506518b340a60e6b3090fe1135225e91->leave($__internal_8502e0d9bbb63eacce424ceb2d6e9991506518b340a60e6b3090fe1135225e91_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d67712361a4fa5325e9b3cba47b97c80c4fedb8bc22ab2b422decdbe2a671845 = $this->env->getExtension("native_profiler");
        $__internal_d67712361a4fa5325e9b3cba47b97c80c4fedb8bc22ab2b422decdbe2a671845->enter($__internal_d67712361a4fa5325e9b3cba47b97c80c4fedb8bc22ab2b422decdbe2a671845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d67712361a4fa5325e9b3cba47b97c80c4fedb8bc22ab2b422decdbe2a671845->leave($__internal_d67712361a4fa5325e9b3cba47b97c80c4fedb8bc22ab2b422decdbe2a671845_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
