<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_e782b09d1a52fac324e4f6fc69fe709c1b7b5d755f5998fc032a4c3723f09fa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6738418c8079757e9f7abe01fdf2db5d3a3cc6a3065385d5ac09326afbecb1dc = $this->env->getExtension("native_profiler");
        $__internal_6738418c8079757e9f7abe01fdf2db5d3a3cc6a3065385d5ac09326afbecb1dc->enter($__internal_6738418c8079757e9f7abe01fdf2db5d3a3cc6a3065385d5ac09326afbecb1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_6738418c8079757e9f7abe01fdf2db5d3a3cc6a3065385d5ac09326afbecb1dc->leave($__internal_6738418c8079757e9f7abe01fdf2db5d3a3cc6a3065385d5ac09326afbecb1dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
