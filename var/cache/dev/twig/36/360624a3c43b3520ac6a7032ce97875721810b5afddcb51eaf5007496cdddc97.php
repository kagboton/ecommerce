<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_1746d04f04c6ee36f8b1f8be7471bccc9506a0921a11742b1b5fae2e56d0b5bd extends Twig_Template
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
        $__internal_5420a505fa1325683830e45e9288b13c40d9c7b3caab6da17e91d43f8e572247 = $this->env->getExtension("native_profiler");
        $__internal_5420a505fa1325683830e45e9288b13c40d9c7b3caab6da17e91d43f8e572247->enter($__internal_5420a505fa1325683830e45e9288b13c40d9c7b3caab6da17e91d43f8e572247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5420a505fa1325683830e45e9288b13c40d9c7b3caab6da17e91d43f8e572247->leave($__internal_5420a505fa1325683830e45e9288b13c40d9c7b3caab6da17e91d43f8e572247_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c6b6c46657a385e931bb2362eb3a645673baf35ad1c459269b3043be977fcf63 = $this->env->getExtension("native_profiler");
        $__internal_c6b6c46657a385e931bb2362eb3a645673baf35ad1c459269b3043be977fcf63->enter($__internal_c6b6c46657a385e931bb2362eb3a645673baf35ad1c459269b3043be977fcf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c6b6c46657a385e931bb2362eb3a645673baf35ad1c459269b3043be977fcf63->leave($__internal_c6b6c46657a385e931bb2362eb3a645673baf35ad1c459269b3043be977fcf63_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5155077e3231558c779ad8626ec14fb2028dc205270f8efb466297b7a4cbd1ad = $this->env->getExtension("native_profiler");
        $__internal_5155077e3231558c779ad8626ec14fb2028dc205270f8efb466297b7a4cbd1ad->enter($__internal_5155077e3231558c779ad8626ec14fb2028dc205270f8efb466297b7a4cbd1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5155077e3231558c779ad8626ec14fb2028dc205270f8efb466297b7a4cbd1ad->leave($__internal_5155077e3231558c779ad8626ec14fb2028dc205270f8efb466297b7a4cbd1ad_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4b076f71c68eac444f7cd6785e6b58debb194fd35b22c7c9ebc608508b54bea5 = $this->env->getExtension("native_profiler");
        $__internal_4b076f71c68eac444f7cd6785e6b58debb194fd35b22c7c9ebc608508b54bea5->enter($__internal_4b076f71c68eac444f7cd6785e6b58debb194fd35b22c7c9ebc608508b54bea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4b076f71c68eac444f7cd6785e6b58debb194fd35b22c7c9ebc608508b54bea5->leave($__internal_4b076f71c68eac444f7cd6785e6b58debb194fd35b22c7c9ebc608508b54bea5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
