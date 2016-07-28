<?php

/* EcommerceBundle::test.html.twig */
class __TwigTemplate_8cee7cb52ebcbb7ccf4696b02880fb8090084ec0c33a6f242177f36b2df211c6 extends Twig_Template
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
        $__internal_6bd252051cef7586fbd03b51cc3376c7e50460b30bd59730e9d8f0d87f8c1f7b = $this->env->getExtension("native_profiler");
        $__internal_6bd252051cef7586fbd03b51cc3376c7e50460b30bd59730e9d8f0d87f8c1f7b->enter($__internal_6bd252051cef7586fbd03b51cc3376c7e50460b30bd59730e9d8f0d87f8c1f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle::test.html.twig"));

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
        
        $__internal_6bd252051cef7586fbd03b51cc3376c7e50460b30bd59730e9d8f0d87f8c1f7b->leave($__internal_6bd252051cef7586fbd03b51cc3376c7e50460b30bd59730e9d8f0d87f8c1f7b_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle::test.html.twig";
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
