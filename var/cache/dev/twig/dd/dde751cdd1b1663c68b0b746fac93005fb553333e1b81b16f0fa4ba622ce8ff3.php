<?php

/* EcommerceBundle:Default:Produits/layout/presentation.html.twig */
class __TwigTemplate_6ba4b0e5d44e76fbfbe1715704b905c84438bc656a53a72e2cca976ed35263c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:Produits/layout/presentation.html.twig", 1);
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
        $__internal_98bbf0cc2fe1fdd12f5a024c4c33f62dc2c8e6d95241eb429bc885bd5830f15b = $this->env->getExtension("native_profiler");
        $__internal_98bbf0cc2fe1fdd12f5a024c4c33f62dc2c8e6d95241eb429bc885bd5830f15b->enter($__internal_98bbf0cc2fe1fdd12f5a024c4c33f62dc2c8e6d95241eb429bc885bd5830f15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98bbf0cc2fe1fdd12f5a024c4c33f62dc2c8e6d95241eb429bc885bd5830f15b->leave($__internal_98bbf0cc2fe1fdd12f5a024c4c33f62dc2c8e6d95241eb429bc885bd5830f15b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b26ec722fcfb6016d0652b1ab0b1c5d4ea4194d01d6f4298e682487030e924c = $this->env->getExtension("native_profiler");
        $__internal_6b26ec722fcfb6016d0652b1ab0b1c5d4ea4194d01d6f4298e682487030e924c->enter($__internal_6b26ec722fcfb6016d0652b1ab0b1c5d4ea4194d01d6f4298e682487030e924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:Produits/layout/presentation.html.twig", 8)->display($context);
        // line 9
        echo "            </div>

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                        <h5>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
                        <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                        <h4>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo "</h4>
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
        
        $__internal_6b26ec722fcfb6016d0652b1ab0b1c5d4ea4194d01d6f4298e682487030e924c->leave($__internal_6b26ec722fcfb6016d0652b1ab0b1c5d4ea4194d01d6f4298e682487030e924c_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  55 => 14,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                         <img src="{{ produit.image.path }}" alt="DevAndClick" width="470" height="310">*/
/*                     </div>*/
/* */
/*                     <div class="span4">*/
/*                         <h4>{{ produit.nom }}</h4>*/
/*                         <h5>{{ produit.categorie.nom }}</h5>*/
/*                         <p>{{ produit.description }}</p>*/
/*                         <h4>{{ produit.prix }}</h4>*/
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
