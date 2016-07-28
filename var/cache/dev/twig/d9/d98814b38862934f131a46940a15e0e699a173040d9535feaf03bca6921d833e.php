<?php

/* @Utilisateurs/Default/modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_ca1dfc77021c53144b3277f29a5d6c45898b83220749327fa7fbeccd73aba790 extends Twig_Template
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
        $__internal_5aea7cbb8581121e3146b378fcea7ee53b8aa063dd922184d298d3fce8e6ed76 = $this->env->getExtension("native_profiler");
        $__internal_5aea7cbb8581121e3146b378fcea7ee53b8aa063dd922184d298d3fce8e6ed76->enter($__internal_5aea7cbb8581121e3146b378fcea7ee53b8aa063dd922184d298d3fce8e6ed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/modulesUsed/utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>";
        
        $__internal_5aea7cbb8581121e3146b378fcea7ee53b8aa063dd922184d298d3fce8e6ed76->leave($__internal_5aea7cbb8581121e3146b378fcea7ee53b8aa063dd922184d298d3fce8e6ed76_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }
}
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
