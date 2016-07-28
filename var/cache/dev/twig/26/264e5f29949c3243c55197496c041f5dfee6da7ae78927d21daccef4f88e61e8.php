<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_da3153c0a3ffdc5bb6766493aa08755586c727afd126ca67e69094f22b7e2c30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_935868af5f424b7da79c6f09351f25cbf4e6e8cad8f30c8eb9a52fd516af98df = $this->env->getExtension("native_profiler");
        $__internal_935868af5f424b7da79c6f09351f25cbf4e6e8cad8f30c8eb9a52fd516af98df->enter($__internal_935868af5f424b7da79c6f09351f25cbf4e6e8cad8f30c8eb9a52fd516af98df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_935868af5f424b7da79c6f09351f25cbf4e6e8cad8f30c8eb9a52fd516af98df->leave($__internal_935868af5f424b7da79c6f09351f25cbf4e6e8cad8f30c8eb9a52fd516af98df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27215bbd5144e59022e571d0e0a94c7efaf5aed58ec8f20cf64cdd4e83849e42 = $this->env->getExtension("native_profiler");
        $__internal_27215bbd5144e59022e571d0e0a94c7efaf5aed58ec8f20cf64cdd4e83849e42->enter($__internal_27215bbd5144e59022e571d0e0a94c7efaf5aed58ec8f20cf64cdd4e83849e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_27215bbd5144e59022e571d0e0a94c7efaf5aed58ec8f20cf64cdd4e83849e42->leave($__internal_27215bbd5144e59022e571d0e0a94c7efaf5aed58ec8f20cf64cdd4e83849e42_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
