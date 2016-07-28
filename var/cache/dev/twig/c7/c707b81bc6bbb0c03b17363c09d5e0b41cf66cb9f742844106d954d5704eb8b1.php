<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_c52cadc5ca393db6247c303ef198c419292798ffcb57ad5f7a72d87e5e8997ca extends Twig_Template
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
        $__internal_08bd8bd5113570a6947dbc986aff77baac190d91512c5285007682366168415d = $this->env->getExtension("native_profiler");
        $__internal_08bd8bd5113570a6947dbc986aff77baac190d91512c5285007682366168415d->enter($__internal_08bd8bd5113570a6947dbc986aff77baac190d91512c5285007682366168415d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">

    <div class=\"span3\">
        ";
        // line 6
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 6)->display($context);
        // line 7
        echo "    </div>

    <div class=\"span9\">
        <h2>Modifier mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">
                    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_08bd8bd5113570a6947dbc986aff77baac190d91512c5285007682366168415d->leave($__internal_08bd8bd5113570a6947dbc986aff77baac190d91512c5285007682366168415d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  49 => 18,  44 => 16,  40 => 15,  30 => 7,  28 => 6,  22 => 2,);
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
/*         <h2>Modifier mes informations</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/* */
/*                 <div class="span4">*/
/*                     {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <div>*/
/*                         <input class="btn btn-primary" type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*                     </div>*/
/*                     {{ form_end(form) }}*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
