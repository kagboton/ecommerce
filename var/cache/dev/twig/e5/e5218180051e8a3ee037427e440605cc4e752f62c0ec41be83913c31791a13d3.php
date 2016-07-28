<?php

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_f250934735e36568b88075c343fbf2f8a5b5def737fbcc6de31a7503a48d6b0e extends Twig_Template
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
        $__internal_15ba41eedbd42e12872072e9287e6bf3ba69f3e3582558cec517dba7f02fb72f = $this->env->getExtension("native_profiler");
        $__internal_15ba41eedbd42e12872072e9287e6bf3ba69f3e3582558cec517dba7f02fb72f->enter($__internal_15ba41eedbd42e12872072e9287e6bf3ba69f3e3582558cec517dba7f02fb72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

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
        
        $__internal_15ba41eedbd42e12872072e9287e6bf3ba69f3e3582558cec517dba7f02fb72f->leave($__internal_15ba41eedbd42e12872072e9287e6bf3ba69f3e3582558cec517dba7f02fb72f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
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
