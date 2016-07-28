<?php

/* @FOSUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_b5bccee67d8bbcc99deea00a6fd17c44ecc512dfa05636bf1c3a668dab16258d extends Twig_Template
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
        $__internal_6eb4e4c95331e25b842fedfe590f3dbd1b7084eabd2ce29ae996de9d7a5808b7 = $this->env->getExtension("native_profiler");
        $__internal_6eb4e4c95331e25b842fedfe590f3dbd1b7084eabd2ce29ae996de9d7a5808b7->enter($__internal_6eb4e4c95331e25b842fedfe590f3dbd1b7084eabd2ce29ae996de9d7a5808b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">

    <div class=\"span3\">
        ";
        // line 6
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "@FOSUser/ChangePassword/changePassword_content.html.twig", 6)->display($context);
        // line 7
        echo "    </div>

    <div class=\"span9\">
        <h2>Changer mot de passe</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">

                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6eb4e4c95331e25b842fedfe590f3dbd1b7084eabd2ce29ae996de9d7a5808b7->leave($__internal_6eb4e4c95331e25b842fedfe590f3dbd1b7084eabd2ce29ae996de9d7a5808b7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  50 => 19,  45 => 17,  41 => 16,  30 => 7,  28 => 6,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/* */
/*     <div class="span3">*/
/*         {%  include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*     </div>*/
/* */
/*     <div class="span9">*/
/*         <h2>Changer mot de passe</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/* */
/*                 <div class="span4">*/
/* */
/*                     {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <input class="btn btn-primary" type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*                     </div>*/
/*                     {{ form_end(form) }}*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
