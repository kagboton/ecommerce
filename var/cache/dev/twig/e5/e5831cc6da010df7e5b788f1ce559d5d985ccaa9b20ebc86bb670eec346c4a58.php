<?php

/* EcommerceBundle:Default:Produits/layout/produits.html.twig */
class __TwigTemplate_bb2c09af48f074968401f42076ff2bfce19f9a9330e238570e332d204b8bdd3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:Produits/layout/produits.html.twig", 1);
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
        $__internal_b2f8a2e1068dcdae73371a9ddab41220f2a440bee51be6603e614d4f202ef798 = $this->env->getExtension("native_profiler");
        $__internal_b2f8a2e1068dcdae73371a9ddab41220f2a440bee51be6603e614d4f202ef798->enter($__internal_b2f8a2e1068dcdae73371a9ddab41220f2a440bee51be6603e614d4f202ef798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2f8a2e1068dcdae73371a9ddab41220f2a440bee51be6603e614d4f202ef798->leave($__internal_b2f8a2e1068dcdae73371a9ddab41220f2a440bee51be6603e614d4f202ef798_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f47fac2b3ca7b9194efaa749f48eaa1f4d7c8213d9787bd46db72cd4b085f39 = $this->env->getExtension("native_profiler");
        $__internal_9f47fac2b3ca7b9194efaa749f48eaa1f4d7c8213d9787bd46db72cd4b085f39->enter($__internal_9f47fac2b3ca7b9194efaa749f48eaa1f4d7c8213d9787bd46db72cd4b085f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:Produits/layout/produits.html.twig", 9)->display($context);
        // line 10
        echo "                ";
        $this->loadTemplate("::modulesUsed/utilisateur.html.twig", "EcommerceBundle:Default:Produits/layout/produits.html.twig", 10)->display($context);
        // line 11
        echo "            </div>

            <div class=\"span9\">

                <ul class=\"thumbnails\">


                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 19
            echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                                <div class=\"caption\">
                                    <h4>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</h4>
                                    <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</p>
                                    <a class=\"btn btn-primary\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                    <a class=\"btn btn-success\" href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\">Ajouter au panier</a>
                                </div>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

";
        
        $__internal_9f47fac2b3ca7b9194efaa749f48eaa1f4d7c8213d9787bd46db72cd4b085f39->leave($__internal_9f47fac2b3ca7b9194efaa749f48eaa1f4d7c8213d9787bd46db72cd4b085f39_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  69 => 21,  65 => 19,  61 => 18,  52 => 11,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {% include "::modulesUsed/utilisateur.html.twig" %}*/
/*             </div>*/
/* */
/*             <div class="span9">*/
/* */
/*                 <ul class="thumbnails">*/
/* */
/* */
/*                     {% for produit in produits %}*/
/*                         <li class="span3">*/
/*                             <div class="thumbnail">*/
/*                                 <img src="{{ produit.image.path}}" alt="DevAndClick" width="300" height="300">*/
/*                                 <div class="caption">*/
/*                                     <h4>{{ produit.nom }}</h4>*/
/*                                     <p>{{ produit.prix }}</p>*/
/*                                     <a class="btn btn-primary" href="{{ path('presentation', {'id' : produit.id}) }}">Plus d'infos</a>*/
/*                                     <a class="btn btn-success" href="{{ path('panier') }}">Ajouter au panier</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                     {% endfor %}*/
/* */
/*                 </ul>*/
/* */
/*                 <div class="pagination">*/
/*                     <ul>*/
/*                         <li class="disabled"><span>Précédent</span></li>*/
/*                         <li class="disabled"><span>1</span></li>*/
/*                         <li><a href="#">2</a></li>*/
/*                         <li><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">Suivant</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
