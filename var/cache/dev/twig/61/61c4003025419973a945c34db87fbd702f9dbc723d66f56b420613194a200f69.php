<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_806c05de1a1382a1e1c571e8df0337ce07e0fb30872f90ec009855cf82b47a61 extends Twig_Template
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
        $__internal_58593c6b6c7b124a556198668cd0eb2d82fc4ae2ee51e9aeb2d03a24a93a38d8 = $this->env->getExtension("native_profiler");
        $__internal_58593c6b6c7b124a556198668cd0eb2d82fc4ae2ee51e9aeb2d03a24a93a38d8->enter($__internal_58593c6b6c7b124a556198668cd0eb2d82fc4ae2ee51e9aeb2d03a24a93a38d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Récupération du mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                        Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_58593c6b6c7b124a556198668cd0eb2d82fc4ae2ee51e9aeb2d03a24a93a38d8->leave($__internal_58593c6b6c7b124a556198668cd0eb2d82fc4ae2ee51e9aeb2d03a24a93a38d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 22,  48 => 20,  43 => 18,  39 => 17,  22 => 2,);
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
/*                     <h4>Récupération du mot de passe ?</h4>*/
/*                     <em>*/
/*                         Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />*/
/*                         Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.*/
/*                     </em>*/
/*                 </div>*/
/* */
/*                 <div class="span4 offset2">*/
/*                     {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <input class="btn btn-primary" type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*                     </div>*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
