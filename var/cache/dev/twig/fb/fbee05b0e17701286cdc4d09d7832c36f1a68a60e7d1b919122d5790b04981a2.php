<?php

/* @Ecommerce/Default/Panier/layout/validation.html.twig */
class __TwigTemplate_9969765d36c1d81573bcfa4a41863b5f6c140180844f54590255bde9da21c170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Ecommerce/Default/Panier/layout/validation.html.twig", 1);
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
        $__internal_92659e98bbcfd6a92c27d13e06aac56642757b3d0bbe00ecad93259b8e523958 = $this->env->getExtension("native_profiler");
        $__internal_92659e98bbcfd6a92c27d13e06aac56642757b3d0bbe00ecad93259b8e523958->enter($__internal_92659e98bbcfd6a92c27d13e06aac56642757b3d0bbe00ecad93259b8e523958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/Panier/layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92659e98bbcfd6a92c27d13e06aac56642757b3d0bbe00ecad93259b8e523958->leave($__internal_92659e98bbcfd6a92c27d13e06aac56642757b3d0bbe00ecad93259b8e523958_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1435b7ae1dbf421971083e645531c9c83cb93811c5c9778bc6e0702abf8e5e76 = $this->env->getExtension("native_profiler");
        $__internal_1435b7ae1dbf421971083e645531c9c83cb93811c5c9778bc6e0702abf8e5e76->enter($__internal_1435b7ae1dbf421971083e645531c9c83cb93811c5c9778bc6e0702abf8e5e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/Panier/layout/validation.html.twig", 8)->display($context);
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
        
        $__internal_1435b7ae1dbf421971083e645531c9c83cb93811c5c9778bc6e0702abf8e5e76->leave($__internal_1435b7ae1dbf421971083e645531c9c83cb93811c5c9778bc6e0702abf8e5e76_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/Panier/layout/validation.html.twig";
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
