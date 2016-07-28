<?php

/* EcommerceBundle:Default/Panier/layout:validation.html.twig */
class __TwigTemplate_9afe39b5f6bfed09bf7284ae6e0b92103f33f4924eb1e0890fc9508d12f492bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default/Panier/layout:validation.html.twig", 1);
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
        $__internal_ec4abfb3926a40bc37f1f2d3b78bc1280c122664468c1a5c5f55d8c44cf927c4 = $this->env->getExtension("native_profiler");
        $__internal_ec4abfb3926a40bc37f1f2d3b78bc1280c122664468c1a5c5f55d8c44cf927c4->enter($__internal_ec4abfb3926a40bc37f1f2d3b78bc1280c122664468c1a5c5f55d8c44cf927c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/Panier/layout:validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec4abfb3926a40bc37f1f2d3b78bc1280c122664468c1a5c5f55d8c44cf927c4->leave($__internal_ec4abfb3926a40bc37f1f2d3b78bc1280c122664468c1a5c5f55d8c44cf927c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2443da048375d9cf2d368a94c4e8cf3bb960afa72aae082d2e0a2da0a648c4fa = $this->env->getExtension("native_profiler");
        $__internal_2443da048375d9cf2d368a94c4e8cf3bb960afa72aae082d2e0a2da0a648c4fa->enter($__internal_2443da048375d9cf2d368a94c4e8cf3bb960afa72aae082d2e0a2da0a648c4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default/Panier/layout:validation.html.twig", 8)->display($context);
        // line 9
        echo "            </div>
            <div class=\"span9\">
                <h2>Valider mon parnier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>Références</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Total HT</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>AB29837</td>
                            <td>
                                2
                            </td>
                            <td>333,33€</td>
                            <td>333,33€</td>
                        </tr>
                        <tr>
                            <td>AC34423</td>
                            <td>
                                1
                            </td>
                            <td>333,33€</td>
                            <td>666,66€</td>
                        </tr>
                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>

                    <dt>TVA :</dt>
                    <dd>200€</dd>

                    <dt>Total:</dt>
                    <dd>999,99€ TTC</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            </div>

        </div>
    </div>

";
        
        $__internal_2443da048375d9cf2d368a94c4e8cf3bb960afa72aae082d2e0a2da0a648c4fa->leave($__internal_2443da048375d9cf2d368a94c4e8cf3bb960afa72aae082d2e0a2da0a648c4fa_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/Panier/layout:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span3">*/
/*                 {% include "::modulesUsed/navigation.html.twig" %}*/
/*             </div>*/
/*             <div class="span9">*/
/*                 <h2>Valider mon parnier</h2>*/
/*                 <form>*/
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>Références</th>*/
/*                             <th>Quantité</th>*/
/*                             <th>Prix unitaire</th>*/
/*                             <th>Total HT</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         <tr>*/
/*                             <td>AB29837</td>*/
/*                             <td>*/
/*                                 2*/
/*                             </td>*/
/*                             <td>333,33€</td>*/
/*                             <td>333,33€</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>AC34423</td>*/
/*                             <td>*/
/*                                 1*/
/*                             </td>*/
/*                             <td>333,33€</td>*/
/*                             <td>666,66€</td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/* */
/*                 <dl class="dl-horizontal pull-right">*/
/*                     <dt>Total HT :</dt>*/
/*                     <dd>799,99€</dd>*/
/* */
/*                     <dt>TVA :</dt>*/
/*                     <dd>200€</dd>*/
/* */
/*                     <dt>Total:</dt>*/
/*                     <dd>999,99€ TTC</dd>*/
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="#" class="btn btn-success pull-right">Payer</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
