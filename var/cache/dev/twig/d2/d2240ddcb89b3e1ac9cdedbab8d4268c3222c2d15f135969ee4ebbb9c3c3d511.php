<?php

/* @Ecommerce/Default/Produits/layout/produits.html.twig */
class __TwigTemplate_10ee9515d4fe6170f21f0bec8b72aea6cce2a5f355f0aa553f608a9e79a5cf34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Ecommerce/Default/Produits/layout/produits.html.twig", 1);
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
        $__internal_df21f2e7e618160f193ebb790d6f615e53a17eb029ae43f0b405affcbdcecf21 = $this->env->getExtension("native_profiler");
        $__internal_df21f2e7e618160f193ebb790d6f615e53a17eb029ae43f0b405affcbdcecf21->enter($__internal_df21f2e7e618160f193ebb790d6f615e53a17eb029ae43f0b405affcbdcecf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/Produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df21f2e7e618160f193ebb790d6f615e53a17eb029ae43f0b405affcbdcecf21->leave($__internal_df21f2e7e618160f193ebb790d6f615e53a17eb029ae43f0b405affcbdcecf21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5037f3ff5f64260b2315eb50ce65f3bb47d89bf7bce89d9665f3f7cb16eb0e47 = $this->env->getExtension("native_profiler");
        $__internal_5037f3ff5f64260b2315eb50ce65f3bb47d89bf7bce89d9665f3f7cb16eb0e47->enter($__internal_5037f3ff5f64260b2315eb50ce65f3bb47d89bf7bce89d9665f3f7cb16eb0e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/Produits/layout/produits.html.twig", 9)->display($context);
        // line 10
        echo "                ";
        $this->loadTemplate("::modulesUsed/utilisateur.html.twig", "@Ecommerce/Default/Produits/layout/produits.html.twig", 10)->display($context);
        // line 11
        echo "            </div>

            <div class=\"span9\">

                <ul class=\"thumbnails\">


                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/holder.png"), "html", null, true);
            echo "\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                                <div class=\"caption\">
                                    <h4>Thumbnail label</h4>
                                    <p>100,00 €</p>
                                    <a class=\"btn btn-primary\" href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("presentation");
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
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
        
        $__internal_5037f3ff5f64260b2315eb50ce65f3bb47d89bf7bce89d9665f3f7cb16eb0e47->leave($__internal_5037f3ff5f64260b2315eb50ce65f3bb47d89bf7bce89d9665f3f7cb16eb0e47_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/Produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  80 => 26,  76 => 25,  69 => 21,  65 => 19,  61 => 18,  52 => 11,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     {% for i in 0..10 %}*/
/*                         <li class="span3">*/
/*                             <div class="thumbnail">*/
/*                                 <img src="{{ asset('img/holder.png')}}" alt="DevAndClick" width="300" height="300">*/
/*                                 <div class="caption">*/
/*                                     <h4>Thumbnail label</h4>*/
/*                                     <p>100,00 €</p>*/
/*                                     <a class="btn btn-primary" href="{{ path('presentation') }}">Plus d'infos</a>*/
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
