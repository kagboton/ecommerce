<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_7c7280dedbdd0ac1920861e273b69d23922a3f4d61a61f3a7a4347c4f90441d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f484eeead95ece606e09ddd7a7b9c0702f9feadfaf26831932c770d3ebbdce0c = $this->env->getExtension("native_profiler");
        $__internal_f484eeead95ece606e09ddd7a7b9c0702f9feadfaf26831932c770d3ebbdce0c->enter($__internal_f484eeead95ece606e09ddd7a7b9c0702f9feadfaf26831932c770d3ebbdce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f484eeead95ece606e09ddd7a7b9c0702f9feadfaf26831932c770d3ebbdce0c->leave($__internal_f484eeead95ece606e09ddd7a7b9c0702f9feadfaf26831932c770d3ebbdce0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5ee8f6b13581fec97390438b11651f43e514873e59ccc2c079f5fb3512757ec = $this->env->getExtension("native_profiler");
        $__internal_e5ee8f6b13581fec97390438b11651f43e514873e59ccc2c079f5fb3512757ec->enter($__internal_e5ee8f6b13581fec97390438b11651f43e514873e59ccc2c079f5fb3512757ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        // line 14
        echo "
        <div>
            ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "        </div>
    <div>
";
        
        $__internal_e5ee8f6b13581fec97390438b11651f43e514873e59ccc2c079f5fb3512757ec->leave($__internal_e5ee8f6b13581fec97390438b11651f43e514873e59ccc2c079f5fb3512757ec_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_920c169df13a211c373e7a2d6c2ec56e7232f3338b197a9e37ecc851d563aad2 = $this->env->getExtension("native_profiler");
        $__internal_920c169df13a211c373e7a2d6c2ec56e7232f3338b197a9e37ecc851d563aad2->enter($__internal_920c169df13a211c373e7a2d6c2ec56e7232f3338b197a9e37ecc851d563aad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "            ";
        
        $__internal_920c169df13a211c373e7a2d6c2ec56e7232f3338b197a9e37ecc851d563aad2->leave($__internal_920c169df13a211c373e7a2d6c2ec56e7232f3338b197a9e37ecc851d563aad2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 17,  94 => 16,  85 => 18,  83 => 16,  79 => 14,  76 => 13,  70 => 12,  61 => 9,  56 => 8,  51 => 7,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     <div>*/
/* {% endblock %}*/
