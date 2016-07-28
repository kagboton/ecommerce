<?php

/* @Utilisateurs/Default/modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_bf9ada4102cf00b893dd8d68f4e98598dcc66138c07278e94114e03fa1a52fc7 extends Twig_Template
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
        $__internal_0ea0eba665f8a6c1f720e0469f1415c47541dab264ea44814d9e5507adf61615 = $this->env->getExtension("native_profiler");
        $__internal_0ea0eba665f8a6c1f720e0469f1415c47541dab264ea44814d9e5507adf61615->enter($__internal_0ea0eba665f8a6c1f720e0469f1415c47541dab264ea44814d9e5507adf61615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/modulesUsed/utilisateursConnecte.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mot de passe</a>
        </li>
        <li>
            <a href=\"facture.php\">Mes factures</a>
        </li>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\">Mes adresses</a>
        </li>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a>
        </li>
    </ul>
</div>";
        
        $__internal_0ea0eba665f8a6c1f720e0469f1415c47541dab264ea44814d9e5507adf61615->leave($__internal_0ea0eba665f8a6c1f720e0469f1415c47541dab264ea44814d9e5507adf61615_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  48 => 16,  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_show') }}">Mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_edit') }}">Editer mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_change_password') }}">Changer mot de passe</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="facture.php">Mes factures</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('livraison') }}">Mes adresses</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
