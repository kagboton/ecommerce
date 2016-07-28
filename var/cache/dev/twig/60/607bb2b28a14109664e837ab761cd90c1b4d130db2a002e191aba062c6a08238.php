<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a79fc0b412e007fa8f891644a7df967ba59903a40dc86f52cbc20716771f997a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f58abeaa6f4626c5842bb75361fffda6d91797dbaaea9ca8d23b831b5818d2dc = $this->env->getExtension("native_profiler");
        $__internal_f58abeaa6f4626c5842bb75361fffda6d91797dbaaea9ca8d23b831b5818d2dc->enter($__internal_f58abeaa6f4626c5842bb75361fffda6d91797dbaaea9ca8d23b831b5818d2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f58abeaa6f4626c5842bb75361fffda6d91797dbaaea9ca8d23b831b5818d2dc->leave($__internal_f58abeaa6f4626c5842bb75361fffda6d91797dbaaea9ca8d23b831b5818d2dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06eb8b7217d8bcd00f62be4ea4419f0a796194078d968c1cd495f19e85c2146c = $this->env->getExtension("native_profiler");
        $__internal_06eb8b7217d8bcd00f62be4ea4419f0a796194078d968c1cd495f19e85c2146c->enter($__internal_06eb8b7217d8bcd00f62be4ea4419f0a796194078d968c1cd495f19e85c2146c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06eb8b7217d8bcd00f62be4ea4419f0a796194078d968c1cd495f19e85c2146c->leave($__internal_06eb8b7217d8bcd00f62be4ea4419f0a796194078d968c1cd495f19e85c2146c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_275896bfca4c3355070a09dcc0dbca80549d0d8b2598edd2a361e52f7939c4f3 = $this->env->getExtension("native_profiler");
        $__internal_275896bfca4c3355070a09dcc0dbca80549d0d8b2598edd2a361e52f7939c4f3->enter($__internal_275896bfca4c3355070a09dcc0dbca80549d0d8b2598edd2a361e52f7939c4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_275896bfca4c3355070a09dcc0dbca80549d0d8b2598edd2a361e52f7939c4f3->leave($__internal_275896bfca4c3355070a09dcc0dbca80549d0d8b2598edd2a361e52f7939c4f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6153b44eb76ef04bc22c2eb153a81a763322f581924be8591b6a89f5580bc249 = $this->env->getExtension("native_profiler");
        $__internal_6153b44eb76ef04bc22c2eb153a81a763322f581924be8591b6a89f5580bc249->enter($__internal_6153b44eb76ef04bc22c2eb153a81a763322f581924be8591b6a89f5580bc249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6153b44eb76ef04bc22c2eb153a81a763322f581924be8591b6a89f5580bc249->leave($__internal_6153b44eb76ef04bc22c2eb153a81a763322f581924be8591b6a89f5580bc249_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
