<?php

/* modulesUsed/utilisateur.html.twig */
class __TwigTemplate_f8ad48735301b448fbf78427479b82d021e8c55ce6c6f76431715fc7a9e34f7e extends Twig_Template
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
        $__internal_a3ca7341597a81425a1eee4cda28b72eefc9fda7dbe103d1ec579c8192a045e1 = $this->env->getExtension("native_profiler");
        $__internal_a3ca7341597a81425a1eee4cda28b72eefc9fda7dbe103d1ec579c8192a045e1->enter($__internal_a3ca7341597a81425a1eee4cda28b72eefc9fda7dbe103d1ec579c8192a045e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/utilisateur.html.twig"));

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
        
        $__internal_a3ca7341597a81425a1eee4cda28b72eefc9fda7dbe103d1ec579c8192a045e1->leave($__internal_a3ca7341597a81425a1eee4cda28b72eefc9fda7dbe103d1ec579c8192a045e1_prof);

    }

    public function getTemplateName()
    {
        return "modulesUsed/utilisateur.html.twig";
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
