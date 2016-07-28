<?php

/* @Ecommerce/Default/Produits/layout/presentation.html.twig */
class __TwigTemplate_f9ea0b1186ced99ab7eef5bac21500f5fb6608beddf71b4c4db42910ab4ecf30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Ecommerce/Default/Produits/layout/presentation.html.twig", 1);
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
        $__internal_76dd143eb7d85db05abe4c03940bda1d0b9388072244f71579e20d9e12b72c74 = $this->env->getExtension("native_profiler");
        $__internal_76dd143eb7d85db05abe4c03940bda1d0b9388072244f71579e20d9e12b72c74->enter($__internal_76dd143eb7d85db05abe4c03940bda1d0b9388072244f71579e20d9e12b72c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/Produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76dd143eb7d85db05abe4c03940bda1d0b9388072244f71579e20d9e12b72c74->leave($__internal_76dd143eb7d85db05abe4c03940bda1d0b9388072244f71579e20d9e12b72c74_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7324caf9f200407c31308cd7beee6a2df090bce05af43bd8795784ff08c2e91a = $this->env->getExtension("native_profiler");
        $__internal_7324caf9f200407c31308cd7beee6a2df090bce05af43bd8795784ff08c2e91a->enter($__internal_7324caf9f200407c31308cd7beee6a2df090bce05af43bd8795784ff08c2e91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/Produits/layout/presentation.html.twig", 8)->display($context);
        // line 9
        echo "            </div>

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>Item Brand and Category</h4>
                        <h5>AB29837 Item Model</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h4>3.33€</h4>
                        <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">


                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
                            </select>

                            <div>
                                <button class=\"btn btn-primary\">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>
          </div>
        </div>
    </div>

";
        
        $__internal_7324caf9f200407c31308cd7beee6a2df090bce05af43bd8795784ff08c2e91a->leave($__internal_7324caf9f200407c31308cd7beee6a2df090bce05af43bd8795784ff08c2e91a_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/Produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="span3">*/
/*                 {% include "::modulesUsed/navigation.html.twig" %}*/
/*             </div>*/
/* */
/*             <div class="span9">*/
/*                 <div class="row">*/
/*                     <div class="span5">*/
/*                         <img src="../img/holder.png" alt="DevAndClick" width="470" height="310">*/
/*                     </div>*/
/* */
/*                     <div class="span4">*/
/*                         <h4>Item Brand and Category</h4>*/
/*                         <h5>AB29837 Item Model</h5>*/
/*                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>*/
/*                         <h4>3.33€</h4>*/
/*                         <form action="{{ path('panier') }}">*/
/* */
/* */
/*                             <select name="qte" class="span1">*/
/*                                 <option>1</option>*/
/*                             </select>*/
/* */
/*                             <div>*/
/*                                 <button class="btn btn-primary">Ajouter au panier</button>*/
/*                             </div>*/
/*                         </form>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
