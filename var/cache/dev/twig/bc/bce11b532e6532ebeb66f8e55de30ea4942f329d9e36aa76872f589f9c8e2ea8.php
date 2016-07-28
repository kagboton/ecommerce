<?php

/* PagesBundle:Default:Pages\layout\page.html.twig */
class __TwigTemplate_df384e5109ffba89e4892b81c2ccaf95c2f79862cad71242e3b4e26c084e9d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default:Pages\\layout\\page.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d46a46e8e198ed160408ecfa54792919ac0baa07f33b746b5610061e7b0e06c = $this->env->getExtension("native_profiler");
        $__internal_0d46a46e8e198ed160408ecfa54792919ac0baa07f33b746b5610061e7b0e06c->enter($__internal_0d46a46e8e198ed160408ecfa54792919ac0baa07f33b746b5610061e7b0e06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:Pages\\layout\\page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d46a46e8e198ed160408ecfa54792919ac0baa07f33b746b5610061e7b0e06c->leave($__internal_0d46a46e8e198ed160408ecfa54792919ac0baa07f33b746b5610061e7b0e06c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b73ccb0851a1cf49ccf1f9972306fa895a8dce5a3c7e16ddba69b352c1e8771 = $this->env->getExtension("native_profiler");
        $__internal_6b73ccb0851a1cf49ccf1f9972306fa895a8dce5a3c7e16ddba69b352c1e8771->enter($__internal_6b73ccb0851a1cf49ccf1f9972306fa895a8dce5a3c7e16ddba69b352c1e8771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
            <div class=\"span12\">
                    ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "
                </div>
        </div>
    </div>
";
        
        $__internal_6b73ccb0851a1cf49ccf1f9972306fa895a8dce5a3c7e16ddba69b352c1e8771->leave($__internal_6b73ccb0851a1cf49ccf1f9972306fa895a8dce5a3c7e16ddba69b352c1e8771_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:Pages\\layout\\page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <h1>{{ page.titre }}</h1>*/
/*             <div class="span12">*/
/*                     {{ page.contenu | raw }}*/
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
