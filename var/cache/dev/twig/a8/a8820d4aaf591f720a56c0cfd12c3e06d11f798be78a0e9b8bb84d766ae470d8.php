<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_8aaf605f2aef40f30057b9b304745b34d14349c1c607cb0879aeb6cae4034739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_81fe4095d930fed12448edadb2f0ac0357d7e66f12402087236c4cb06d146ab0 = $this->env->getExtension("native_profiler");
        $__internal_81fe4095d930fed12448edadb2f0ac0357d7e66f12402087236c4cb06d146ab0->enter($__internal_81fe4095d930fed12448edadb2f0ac0357d7e66f12402087236c4cb06d146ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fe4095d930fed12448edadb2f0ac0357d7e66f12402087236c4cb06d146ab0->leave($__internal_81fe4095d930fed12448edadb2f0ac0357d7e66f12402087236c4cb06d146ab0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed5ef3362ee71484ba955270d75be3d77a28910f7ac3c6ea4d419a08af88b1d4 = $this->env->getExtension("native_profiler");
        $__internal_ed5ef3362ee71484ba955270d75be3d77a28910f7ac3c6ea4d419a08af88b1d4->enter($__internal_ed5ef3362ee71484ba955270d75be3d77a28910f7ac3c6ea4d419a08af88b1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ed5ef3362ee71484ba955270d75be3d77a28910f7ac3c6ea4d419a08af88b1d4->leave($__internal_ed5ef3362ee71484ba955270d75be3d77a28910f7ac3c6ea4d419a08af88b1d4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
