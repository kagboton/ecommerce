<?php

/* @Ecommerce/test.html.twig */
class __TwigTemplate_3647cf78bb5235b31bc113f3f1593d26e0aa477ff66d6818fe958dd10a6d02d9 extends Twig_Template
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
        $__internal_ded4c2a19f8efe6b54891c653cfa9803773a1b32c0b04d124118bce4d351cedc = $this->env->getExtension("native_profiler");
        $__internal_ded4c2a19f8efe6b54891c653cfa9803773a1b32c0b04d124118bce4d351cedc->enter($__internal_ded4c2a19f8efe6b54891c653cfa9803773a1b32c0b04d124118bce4d351cedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/test.html.twig"));

        // line 1
        echo "<html>
    <body>
        formulaire:

        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\" method=\"post\">
            ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        </form>
    </body>

</html>



";
        
        $__internal_ded4c2a19f8efe6b54891c653cfa9803773a1b32c0b04d124118bce4d351cedc->leave($__internal_ded4c2a19f8efe6b54891c653cfa9803773a1b32c0b04d124118bce4d351cedc_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <html>*/
/*     <body>*/
/*         formulaire:*/
/* */
/*         <form action="{{ path('test') }}" method="post">*/
/*             {{ form(form) }}*/
/* */
/*         </form>*/
/*     </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
/* */
