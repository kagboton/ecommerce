<?php

/* EcommerceBundle:Default:Panier\layout\panier.html.twig */
class __TwigTemplate_43fc74d9e32d111147b2029c5cfc67f0ef1783ffdfb750b1bf248b77d02e2ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:Panier\\layout\\panier.html.twig", 1);
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
        $__internal_964750ca3db1711066936d215ae7c5efeb14cebdb4931ff11335d7cfd1490641 = $this->env->getExtension("native_profiler");
        $__internal_964750ca3db1711066936d215ae7c5efeb14cebdb4931ff11335d7cfd1490641->enter($__internal_964750ca3db1711066936d215ae7c5efeb14cebdb4931ff11335d7cfd1490641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Panier\\layout\\panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_964750ca3db1711066936d215ae7c5efeb14cebdb4931ff11335d7cfd1490641->leave($__internal_964750ca3db1711066936d215ae7c5efeb14cebdb4931ff11335d7cfd1490641_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63418412ce4a80a7642cd261c36c606d0247605e1edd9dbd9e9e81ab92084f18 = $this->env->getExtension("native_profiler");
        $__internal_63418412ce4a80a7642cd261c36c606d0247605e1edd9dbd9e9e81ab92084f18->enter($__internal_63418412ce4a80a7642cd261c36c606d0247605e1edd9dbd9e9e81ab92084f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:Panier\\layout\\panier.html.twig", 9)->display($context);
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
        
        $__internal_63418412ce4a80a7642cd261c36c606d0247605e1edd9dbd9e9e81ab92084f18->leave($__internal_63418412ce4a80a7642cd261c36c606d0247605e1edd9dbd9e9e81ab92084f18_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Panier\\layout\\panier.html.twig";
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
