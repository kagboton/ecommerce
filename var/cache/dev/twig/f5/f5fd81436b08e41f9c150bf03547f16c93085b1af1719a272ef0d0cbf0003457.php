<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_7e14bbc3ccf22f08696c3fc00378fb4045384b1187fa78162aba6ceb54d7bb2e extends Twig_Template
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
        $__internal_82a7434b0d9ab042c164baeab9b43a3e43876d1d2e83eb236b99db9c149452c9 = $this->env->getExtension("native_profiler");
        $__internal_82a7434b0d9ab042c164baeab9b43a3e43876d1d2e83eb236b99db9c149452c9->enter($__internal_82a7434b0d9ab042c164baeab9b43a3e43876d1d2e83eb236b99db9c149452c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Nos produits</li>
        ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"));
        // line 5
        echo "
    </ul>
</div>
";
        
        $__internal_82a7434b0d9ab042c164baeab9b43a3e43876d1d2e83eb236b99db9c149452c9->leave($__internal_82a7434b0d9ab042c164baeab9b43a3e43876d1d2e83eb236b99db9c149452c9_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li class="nav-header">Nos produits</li>*/
/*         {{ render(controller(*/
/*             'EcommerceBundle:Categories:menu')) }}*/
/*     </ul>*/
/* </div>*/
/* */
