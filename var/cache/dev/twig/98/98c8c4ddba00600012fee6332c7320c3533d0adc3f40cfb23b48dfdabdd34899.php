<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bf5f69735b3c58cea4e9fb77b19c9960a69140c13f35d1b1812472a244031f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c99234d1c5b24f50c406616eb11fc33901942240f9a36a4b329c241741ecaa4e = $this->env->getExtension("native_profiler");
        $__internal_c99234d1c5b24f50c406616eb11fc33901942240f9a36a4b329c241741ecaa4e->enter($__internal_c99234d1c5b24f50c406616eb11fc33901942240f9a36a4b329c241741ecaa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c99234d1c5b24f50c406616eb11fc33901942240f9a36a4b329c241741ecaa4e->leave($__internal_c99234d1c5b24f50c406616eb11fc33901942240f9a36a4b329c241741ecaa4e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d44130e655f20b8dfb9d88de376daa592e09a59675f2888e40502a5e2cb04f03 = $this->env->getExtension("native_profiler");
        $__internal_d44130e655f20b8dfb9d88de376daa592e09a59675f2888e40502a5e2cb04f03->enter($__internal_d44130e655f20b8dfb9d88de376daa592e09a59675f2888e40502a5e2cb04f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d44130e655f20b8dfb9d88de376daa592e09a59675f2888e40502a5e2cb04f03->leave($__internal_d44130e655f20b8dfb9d88de376daa592e09a59675f2888e40502a5e2cb04f03_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1b8a3d7f57b5bdbedb3ca8cc35ba3d19347f268951be8b1d8f1fc6a8f72763c8 = $this->env->getExtension("native_profiler");
        $__internal_1b8a3d7f57b5bdbedb3ca8cc35ba3d19347f268951be8b1d8f1fc6a8f72763c8->enter($__internal_1b8a3d7f57b5bdbedb3ca8cc35ba3d19347f268951be8b1d8f1fc6a8f72763c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1b8a3d7f57b5bdbedb3ca8cc35ba3d19347f268951be8b1d8f1fc6a8f72763c8->leave($__internal_1b8a3d7f57b5bdbedb3ca8cc35ba3d19347f268951be8b1d8f1fc6a8f72763c8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_deb37d05b335fcead2a9e85cb83e3c1d78ad90ee3a442dc9ca0b072e9383f20c = $this->env->getExtension("native_profiler");
        $__internal_deb37d05b335fcead2a9e85cb83e3c1d78ad90ee3a442dc9ca0b072e9383f20c->enter($__internal_deb37d05b335fcead2a9e85cb83e3c1d78ad90ee3a442dc9ca0b072e9383f20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_deb37d05b335fcead2a9e85cb83e3c1d78ad90ee3a442dc9ca0b072e9383f20c->leave($__internal_deb37d05b335fcead2a9e85cb83e3c1d78ad90ee3a442dc9ca0b072e9383f20c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
