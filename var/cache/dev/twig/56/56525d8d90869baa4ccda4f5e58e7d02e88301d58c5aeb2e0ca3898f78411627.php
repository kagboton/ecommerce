<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_f5e088f2794ac8fba425c65918b5dbaa92025e103a65f98bb1cc2c641ec974da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_41a4060c964c19695a905ddf6869866049de6c777435740d8de882f5c3f82837 = $this->env->getExtension("native_profiler");
        $__internal_41a4060c964c19695a905ddf6869866049de6c777435740d8de882f5c3f82837->enter($__internal_41a4060c964c19695a905ddf6869866049de6c777435740d8de882f5c3f82837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41a4060c964c19695a905ddf6869866049de6c777435740d8de882f5c3f82837->leave($__internal_41a4060c964c19695a905ddf6869866049de6c777435740d8de882f5c3f82837_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ba8b57b57e50600c3d6ff538d4ba89205ddd5d859d0048d5bfce022068d0109 = $this->env->getExtension("native_profiler");
        $__internal_3ba8b57b57e50600c3d6ff538d4ba89205ddd5d859d0048d5bfce022068d0109->enter($__internal_3ba8b57b57e50600c3d6ff538d4ba89205ddd5d859d0048d5bfce022068d0109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_3ba8b57b57e50600c3d6ff538d4ba89205ddd5d859d0048d5bfce022068d0109->leave($__internal_3ba8b57b57e50600c3d6ff538d4ba89205ddd5d859d0048d5bfce022068d0109_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
