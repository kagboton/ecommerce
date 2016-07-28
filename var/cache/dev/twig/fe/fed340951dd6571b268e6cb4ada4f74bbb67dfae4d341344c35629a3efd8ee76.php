<?php

/* modulesUsed/navigation.html.twig */
class __TwigTemplate_92447d52dbb5076325e45c70cbcd2c8f8930f6b48f89927febb2cb20b3e41190 extends Twig_Template
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
        $__internal_f0733c31ef806cb1a2febf63e612cc9659c2b801e7414d4fb74da99590c5295b = $this->env->getExtension("native_profiler");
        $__internal_f0733c31ef806cb1a2febf63e612cc9659c2b801e7414d4fb74da99590c5295b->enter($__internal_f0733c31ef806cb1a2febf63e612cc9659c2b801e7414d4fb74da99590c5295b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Nos produits</li>
        <li class=\"active\">
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">Légumes</a>
        </li>
        <li>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">Fruits</a>
        </li>
    </ul>
</div>
";
        
        $__internal_f0733c31ef806cb1a2febf63e612cc9659c2b801e7414d4fb74da99590c5295b->leave($__internal_f0733c31ef806cb1a2febf63e612cc9659c2b801e7414d4fb74da99590c5295b_prof);

    }

    public function getTemplateName()
    {
        return "modulesUsed/navigation.html.twig";
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
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li class="nav-header">Nos produits</li>*/
/*         <li class="active">*/
/*             <a href="{{ path('produits') }}">Légumes</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('produits') }}">Fruits</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* */
