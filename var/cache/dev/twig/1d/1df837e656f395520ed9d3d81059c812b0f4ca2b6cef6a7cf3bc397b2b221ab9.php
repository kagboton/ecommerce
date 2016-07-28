<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b6cac73f7edbbbcb4e002c5f3607f85ae10cf1f42b6ba36d064e723de8dc3df1 extends Twig_Template
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
        $__internal_7e7aaeab8a35e89ea0ac49cf68aac0758ccb062a697410d3a409bfa626dba8a9 = $this->env->getExtension("native_profiler");
        $__internal_7e7aaeab8a35e89ea0ac49cf68aac0758ccb062a697410d3a409bfa626dba8a9->enter($__internal_7e7aaeab8a35e89ea0ac49cf68aac0758ccb062a697410d3a409bfa626dba8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7e7aaeab8a35e89ea0ac49cf68aac0758ccb062a697410d3a409bfa626dba8a9->leave($__internal_7e7aaeab8a35e89ea0ac49cf68aac0758ccb062a697410d3a409bfa626dba8a9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f56941113de4f842e1932e91e0f60afcbd0dcda3d04bcb66511ff396fe56884b = $this->env->getExtension("native_profiler");
        $__internal_f56941113de4f842e1932e91e0f60afcbd0dcda3d04bcb66511ff396fe56884b->enter($__internal_f56941113de4f842e1932e91e0f60afcbd0dcda3d04bcb66511ff396fe56884b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f56941113de4f842e1932e91e0f60afcbd0dcda3d04bcb66511ff396fe56884b->leave($__internal_f56941113de4f842e1932e91e0f60afcbd0dcda3d04bcb66511ff396fe56884b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_843c2c2182db0d309eac7e6ed4d12ccbdb25760c7e0c777d11b125d644469fbc = $this->env->getExtension("native_profiler");
        $__internal_843c2c2182db0d309eac7e6ed4d12ccbdb25760c7e0c777d11b125d644469fbc->enter($__internal_843c2c2182db0d309eac7e6ed4d12ccbdb25760c7e0c777d11b125d644469fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_843c2c2182db0d309eac7e6ed4d12ccbdb25760c7e0c777d11b125d644469fbc->leave($__internal_843c2c2182db0d309eac7e6ed4d12ccbdb25760c7e0c777d11b125d644469fbc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_948fa8120ad0335237e8aceb167bf73e8b1a42b1c1ae3e3fb42db5c2429bc033 = $this->env->getExtension("native_profiler");
        $__internal_948fa8120ad0335237e8aceb167bf73e8b1a42b1c1ae3e3fb42db5c2429bc033->enter($__internal_948fa8120ad0335237e8aceb167bf73e8b1a42b1c1ae3e3fb42db5c2429bc033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_948fa8120ad0335237e8aceb167bf73e8b1a42b1c1ae3e3fb42db5c2429bc033->leave($__internal_948fa8120ad0335237e8aceb167bf73e8b1a42b1c1ae3e3fb42db5c2429bc033_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
