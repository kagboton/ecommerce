<?php

/* @Ecommerce/Default/Panier/layout/panier.html.twig */
class __TwigTemplate_626fc72643aaacfbd8557f8af857d1103d5e3e4faf9033e4b657f9b7c119feba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Ecommerce/Default/Panier/layout/panier.html.twig", 1);
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
        $__internal_0b4695082757d3c481b29e87a3c572cdd083ad969a4d196bb713e44eaa77cb71 = $this->env->getExtension("native_profiler");
        $__internal_0b4695082757d3c481b29e87a3c572cdd083ad969a4d196bb713e44eaa77cb71->enter($__internal_0b4695082757d3c481b29e87a3c572cdd083ad969a4d196bb713e44eaa77cb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/Panier/layout/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b4695082757d3c481b29e87a3c572cdd083ad969a4d196bb713e44eaa77cb71->leave($__internal_0b4695082757d3c481b29e87a3c572cdd083ad969a4d196bb713e44eaa77cb71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98858b08edbccba23e97fb8092e48e7c15ae1372c4691eaeb46670fbc6792ca0 = $this->env->getExtension("native_profiler");
        $__internal_98858b08edbccba23e97fb8092e48e7c15ae1372c4691eaeb46670fbc6792ca0->enter($__internal_98858b08edbccba23e97fb8092e48e7c15ae1372c4691eaeb46670fbc6792ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/Panier/layout/panier.html.twig", 9)->display($context);
        // line 10
        echo "            </div>

            <div class=\"span9\">
                <h2>Votre parnier</h2>
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
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>333,33€</td>
                            <td>333,33€</td>
                        </tr>
                        <tr>
                            <td>AC34423</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
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
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>

";
        
        $__internal_98858b08edbccba23e97fb8092e48e7c15ae1372c4691eaeb46670fbc6792ca0->leave($__internal_98858b08edbccba23e97fb8092e48e7c15ae1372c4691eaeb46670fbc6792ca0_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/Panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 61,  101 => 60,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="span3">*/
/*                 {% include "::modulesUsed/navigation.html.twig" %}*/
/*             </div>*/
/* */
/*             <div class="span9">*/
/*                 <h2>Votre parnier</h2>*/
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
/*                                 <select class="span1"><option>1</option></select>&nbsp;*/
/*                                 <a href="#"><i class="icon-refresh"></i></a>*/
/*                                 <a href="#"><i class="icon-trash"></i></a>*/
/*                             </td>*/
/*                             <td>333,33€</td>*/
/*                             <td>333,33€</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>AC34423</td>*/
/*                             <td>*/
/*                                 <select class="span1"><option>1</option></select>&nbsp;*/
/*                                 <a href="#"><i class="icon-refresh"></i></a>*/
/*                                 <a href="#"><i class="icon-trash"></i></a>*/
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
/*                     <dd>999,99€</dd>*/
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="{{ path('livraison') }}" class="btn btn-success pull-right">Valider mon panier</a>*/
/*                 <a href="{{ path('produits') }}" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
