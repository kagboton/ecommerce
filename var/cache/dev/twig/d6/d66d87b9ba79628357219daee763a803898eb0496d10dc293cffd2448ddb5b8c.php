<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_867146f6fedc4f398c09692c1db7c7fe439163a26cddb33f7bcb6f0dfe653ff5 extends Twig_Template
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
        $__internal_92a14e96cd9e9bdebdbf11f41a954c6ac3febc5113b89ca19a1998ba0f9d0ebf = $this->env->getExtension("native_profiler");
        $__internal_92a14e96cd9e9bdebdbf11f41a954c6ac3febc5113b89ca19a1998ba0f9d0ebf->enter($__internal_92a14e96cd9e9bdebdbf11f41a954c6ac3febc5113b89ca19a1998ba0f9d0ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_92a14e96cd9e9bdebdbf11f41a954c6ac3febc5113b89ca19a1998ba0f9d0ebf->leave($__internal_92a14e96cd9e9bdebdbf11f41a954c6ac3febc5113b89ca19a1998ba0f9d0ebf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b19fbe4ff15087bc6a5fd6c466c41006391823eb08dcf9d162a0eb454570b9ac = $this->env->getExtension("native_profiler");
        $__internal_b19fbe4ff15087bc6a5fd6c466c41006391823eb08dcf9d162a0eb454570b9ac->enter($__internal_b19fbe4ff15087bc6a5fd6c466c41006391823eb08dcf9d162a0eb454570b9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b19fbe4ff15087bc6a5fd6c466c41006391823eb08dcf9d162a0eb454570b9ac->leave($__internal_b19fbe4ff15087bc6a5fd6c466c41006391823eb08dcf9d162a0eb454570b9ac_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bba33913fea5dac811dc3d12536f17a9bdbc21d2461cdb0d7af62dd981c36902 = $this->env->getExtension("native_profiler");
        $__internal_bba33913fea5dac811dc3d12536f17a9bdbc21d2461cdb0d7af62dd981c36902->enter($__internal_bba33913fea5dac811dc3d12536f17a9bdbc21d2461cdb0d7af62dd981c36902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bba33913fea5dac811dc3d12536f17a9bdbc21d2461cdb0d7af62dd981c36902->leave($__internal_bba33913fea5dac811dc3d12536f17a9bdbc21d2461cdb0d7af62dd981c36902_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_94763f9858769eb19e4a11a4b3cd83a61a2079cc7355988710d235eaee1b164a = $this->env->getExtension("native_profiler");
        $__internal_94763f9858769eb19e4a11a4b3cd83a61a2079cc7355988710d235eaee1b164a->enter($__internal_94763f9858769eb19e4a11a4b3cd83a61a2079cc7355988710d235eaee1b164a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_94763f9858769eb19e4a11a4b3cd83a61a2079cc7355988710d235eaee1b164a->leave($__internal_94763f9858769eb19e4a11a4b3cd83a61a2079cc7355988710d235eaee1b164a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
