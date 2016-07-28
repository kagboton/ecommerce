<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_a2a5d2a3a0bbcb544173f4effb77262649ce45f9b28d35b90a0364c606db2bf0 extends Twig_Template
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
        $__internal_0d65413c774d024b7ee451e0e77c7aa0ec50a8a87096e55aa9aecc617c9126ec = $this->env->getExtension("native_profiler");
        $__internal_0d65413c774d024b7ee451e0e77c7aa0ec50a8a87096e55aa9aecc617c9126ec->enter($__internal_0d65413c774d024b7ee451e0e77c7aa0ec50a8a87096e55aa9aecc617c9126ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Vous avez perdu votre mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, un email vous seras envoyé.<br />
                        Il contiendra la procèdure à suivre pour récupérer votre mot de passe.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                        ";
        // line 18
        if (array_key_exists("invalid_username", $context)) {
            // line 19
            echo "                            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 21
        echo "                        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />

                        <br/>

                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_0d65413c774d024b7ee451e0e77c7aa0ec50a8a87096e55aa9aecc617c9126ec->leave($__internal_0d65413c774d024b7ee451e0e77c7aa0ec50a8a87096e55aa9aecc617c9126ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 26,  51 => 21,  45 => 19,  43 => 18,  39 => 17,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*     <div class="span12">*/
/*         <h2>Mot de passe perdu</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <h4>Vous avez perdu votre mot de passe ?</h4>*/
/*                     <em>*/
/*                         Compléter le formulaire, un email vous seras envoyé.<br />*/
/*                         Il contiendra la procèdure à suivre pour récupérer votre mot de passe.*/
/*                     </em>*/
/*                 </div>*/
/* */
/*                 <div class="span4 offset2">*/
/*                     <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*                         {% if invalid_username is defined %}*/
/*                             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*                         {% endif %}*/
/*                         <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*                         <input type="text" id="username" name="username" required="required" />*/
/* */
/*                         <br/>*/
/* */
/*                         <input class="btn btn-primary" type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/* */
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
