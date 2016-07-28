<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_923f834a4af13902878516cb185b18d20c6749efd24a704fc0e02d4f1c9be71c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_0c113e32a0b69faf9c3f4b13a2892979b4b4e7753746a0b446f0eaca1b095b56 = $this->env->getExtension("native_profiler");
        $__internal_0c113e32a0b69faf9c3f4b13a2892979b4b4e7753746a0b446f0eaca1b095b56->enter($__internal_0c113e32a0b69faf9c3f4b13a2892979b4b4e7753746a0b446f0eaca1b095b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c113e32a0b69faf9c3f4b13a2892979b4b4e7753746a0b446f0eaca1b095b56->leave($__internal_0c113e32a0b69faf9c3f4b13a2892979b4b4e7753746a0b446f0eaca1b095b56_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47596c89c6383a5a73434b2571cba3eddfbdff745c3e475bf614d04b1a42c04e = $this->env->getExtension("native_profiler");
        $__internal_47596c89c6383a5a73434b2571cba3eddfbdff745c3e475bf614d04b1a42c04e->enter($__internal_47596c89c6383a5a73434b2571cba3eddfbdff745c3e475bf614d04b1a42c04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_47596c89c6383a5a73434b2571cba3eddfbdff745c3e475bf614d04b1a42c04e->leave($__internal_47596c89c6383a5a73434b2571cba3eddfbdff745c3e475bf614d04b1a42c04e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
