<?php

/* ::modulesUsed/utilisateur.html.twig */
class __TwigTemplate_589c17e59640475328f467da1cdc7fbe0cc25c566f7c8b4962a2c303c93f926a extends Twig_Template
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
        $__internal_a17db38124e7a5cdead34f55c9506afde4918bd0f2ed0d05d5a366559b3963be = $this->env->getExtension("native_profiler");
        $__internal_a17db38124e7a5cdead34f55c9506afde4918bd0f2ed0d05d5a366559b3963be->enter($__internal_a17db38124e7a5cdead34f55c9506afde4918bd0f2ed0d05d5a366559b3963be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/utilisateur.html.twig"));

        // line 1
        echo "
<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>";
        
        $__internal_a17db38124e7a5cdead34f55c9506afde4918bd0f2ed0d05d5a366559b3963be->leave($__internal_a17db38124e7a5cdead34f55c9506afde4918bd0f2ed0d05d5a366559b3963be_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  22 => 1,);
    }
}
/* */
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
