<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_df26f396b27805c8b223a512686bab95a255fc77c49f7e1c2be83aaaa60162e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d08bb920c494b18f79b9be056190798cb6d43411d8fe3283090f128df00608cc = $this->env->getExtension("native_profiler");
        $__internal_d08bb920c494b18f79b9be056190798cb6d43411d8fe3283090f128df00608cc->enter($__internal_d08bb920c494b18f79b9be056190798cb6d43411d8fe3283090f128df00608cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d08bb920c494b18f79b9be056190798cb6d43411d8fe3283090f128df00608cc->leave($__internal_d08bb920c494b18f79b9be056190798cb6d43411d8fe3283090f128df00608cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_290d91da274f65bb8e03afae4b71fb0c8ee4e9787ff99c8c6226912a82f9e497 = $this->env->getExtension("native_profiler");
        $__internal_290d91da274f65bb8e03afae4b71fb0c8ee4e9787ff99c8c6226912a82f9e497->enter($__internal_290d91da274f65bb8e03afae4b71fb0c8ee4e9787ff99c8c6226912a82f9e497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_290d91da274f65bb8e03afae4b71fb0c8ee4e9787ff99c8c6226912a82f9e497->leave($__internal_290d91da274f65bb8e03afae4b71fb0c8ee4e9787ff99c8c6226912a82f9e497_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d797d3249d9a4730f648ae35565b2ac92807ee72177eccb8e13808098eeeef1 = $this->env->getExtension("native_profiler");
        $__internal_2d797d3249d9a4730f648ae35565b2ac92807ee72177eccb8e13808098eeeef1->enter($__internal_2d797d3249d9a4730f648ae35565b2ac92807ee72177eccb8e13808098eeeef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d797d3249d9a4730f648ae35565b2ac92807ee72177eccb8e13808098eeeef1->leave($__internal_2d797d3249d9a4730f648ae35565b2ac92807ee72177eccb8e13808098eeeef1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f15e899489997c7d660588209d9a5e6ab46c66ac1c204798ac7efd0179ad8135 = $this->env->getExtension("native_profiler");
        $__internal_f15e899489997c7d660588209d9a5e6ab46c66ac1c204798ac7efd0179ad8135->enter($__internal_f15e899489997c7d660588209d9a5e6ab46c66ac1c204798ac7efd0179ad8135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f15e899489997c7d660588209d9a5e6ab46c66ac1c204798ac7efd0179ad8135->leave($__internal_f15e899489997c7d660588209d9a5e6ab46c66ac1c204798ac7efd0179ad8135_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
