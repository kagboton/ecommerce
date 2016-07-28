<?php

/* PagesBundle:Default:Pages/modulesUsed/menu.html.twig */
class __TwigTemplate_61d6083532420f6ad79f3897f48b5ff4d82774de6c398cc9ba402785b0090a5a extends Twig_Template
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
        $__internal_11bcecdb8f36b88b922486755a7df5e783c52348ac795089cbca0b7531d5ca6e = $this->env->getExtension("native_profiler");
        $__internal_11bcecdb8f36b88b922486755a7df5e783c52348ac795089cbca0b7531d5ca6e->enter($__internal_11bcecdb8f36b88b922486755a7df5e783c52348ac795089cbca0b7531d5ca6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:Pages/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_11bcecdb8f36b88b922486755a7df5e783c52348ac795089cbca0b7531d5ca6e->leave($__internal_11bcecdb8f36b88b922486755a7df5e783c52348ac795089cbca0b7531d5ca6e_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:Pages/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {% for page in pages %}*/
/*     <li><a href="{{ path('page', {'id' : page.id })  }}">{{ page.titre }}</a>*/
/* {% endfor %}*/
