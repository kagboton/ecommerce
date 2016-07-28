<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_a8bd4b9d20089b27f87ca033208b87d3d58e530663904f74cd9ce832b30662d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_d49755999ac8bbd53d73f66ba634ecbf9195c5cdc8149a9c79deb0ba8634a0d4 = $this->env->getExtension("native_profiler");
        $__internal_d49755999ac8bbd53d73f66ba634ecbf9195c5cdc8149a9c79deb0ba8634a0d4->enter($__internal_d49755999ac8bbd53d73f66ba634ecbf9195c5cdc8149a9c79deb0ba8634a0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d49755999ac8bbd53d73f66ba634ecbf9195c5cdc8149a9c79deb0ba8634a0d4->leave($__internal_d49755999ac8bbd53d73f66ba634ecbf9195c5cdc8149a9c79deb0ba8634a0d4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcd41df9c2715bfd265f092c5cfab959ae650aaf4384f5f2449cf1589785e9e9 = $this->env->getExtension("native_profiler");
        $__internal_dcd41df9c2715bfd265f092c5cfab959ae650aaf4384f5f2449cf1589785e9e9->enter($__internal_dcd41df9c2715bfd265f092c5cfab959ae650aaf4384f5f2449cf1589785e9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_dcd41df9c2715bfd265f092c5cfab959ae650aaf4384f5f2449cf1589785e9e9->leave($__internal_dcd41df9c2715bfd265f092c5cfab959ae650aaf4384f5f2449cf1589785e9e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
