<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c495e584825b603a29b7659f53eb7b83ffde84573ead01a808c0c593d9978c76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_91fa61739476179f8de17330e25333ce309b6a8e5ef2005720fc37d1b801ef3d = $this->env->getExtension("native_profiler");
        $__internal_91fa61739476179f8de17330e25333ce309b6a8e5ef2005720fc37d1b801ef3d->enter($__internal_91fa61739476179f8de17330e25333ce309b6a8e5ef2005720fc37d1b801ef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91fa61739476179f8de17330e25333ce309b6a8e5ef2005720fc37d1b801ef3d->leave($__internal_91fa61739476179f8de17330e25333ce309b6a8e5ef2005720fc37d1b801ef3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a5318c330336e9922594f49dd92892f308fe11d8533356ff159c482d04d7fcd = $this->env->getExtension("native_profiler");
        $__internal_7a5318c330336e9922594f49dd92892f308fe11d8533356ff159c482d04d7fcd->enter($__internal_7a5318c330336e9922594f49dd92892f308fe11d8533356ff159c482d04d7fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7a5318c330336e9922594f49dd92892f308fe11d8533356ff159c482d04d7fcd->leave($__internal_7a5318c330336e9922594f49dd92892f308fe11d8533356ff159c482d04d7fcd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16260293a8bf3faf7e28182991ed4ac05c9330c05f9ca0bf2007136ae1caa650 = $this->env->getExtension("native_profiler");
        $__internal_16260293a8bf3faf7e28182991ed4ac05c9330c05f9ca0bf2007136ae1caa650->enter($__internal_16260293a8bf3faf7e28182991ed4ac05c9330c05f9ca0bf2007136ae1caa650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16260293a8bf3faf7e28182991ed4ac05c9330c05f9ca0bf2007136ae1caa650->leave($__internal_16260293a8bf3faf7e28182991ed4ac05c9330c05f9ca0bf2007136ae1caa650_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
