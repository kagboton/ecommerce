<?php

/* EcommerceBundle:Default:Categories/modulesUsed/menu.html.twig */
class __TwigTemplate_94aee0295e344122204581644a776f506de12f8e01221295a8bc43e3a099e4b9 extends Twig_Template
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
        $__internal_786355008797b20de33573f1ee88be9848e4e2c8f34b7a1be53bae1b67405a1c = $this->env->getExtension("native_profiler");
        $__internal_786355008797b20de33573f1ee88be9848e4e2c8f34b7a1be53bae1b67405a1c->enter($__internal_786355008797b20de33573f1ee88be9848e4e2c8f34b7a1be53bae1b67405a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Categories/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "    <li>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieProduits", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_786355008797b20de33573f1ee88be9848e4e2c8f34b7a1be53bae1b67405a1c->leave($__internal_786355008797b20de33573f1ee88be9848e4e2c8f34b7a1be53bae1b67405a1c_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Categories/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for categorie in categories %}*/
/*     <li>*/
/*         <a href="{{ path('categorieProduits', {'categorie' : categorie.id}) }}"> {{ categorie.nom }}</a>*/
/*     </li>*/
/* {% endfor %}*/
