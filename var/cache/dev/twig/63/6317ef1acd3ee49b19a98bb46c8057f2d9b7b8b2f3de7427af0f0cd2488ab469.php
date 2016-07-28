<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_4833c30afd9f771f925211d3211833c934d0373357cb555564490c0bed72ce6d extends Twig_Template
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
        $__internal_4a84790248a529c652ee577df900449467a5949c1888f17b69549869581c2ba3 = $this->env->getExtension("native_profiler");
        $__internal_4a84790248a529c652ee577df900449467a5949c1888f17b69549869581c2ba3->enter($__internal_4a84790248a529c652ee577df900449467a5949c1888f17b69549869581c2ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_4a84790248a529c652ee577df900449467a5949c1888f17b69549869581c2ba3->leave($__internal_4a84790248a529c652ee577df900449467a5949c1888f17b69549869581c2ba3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
