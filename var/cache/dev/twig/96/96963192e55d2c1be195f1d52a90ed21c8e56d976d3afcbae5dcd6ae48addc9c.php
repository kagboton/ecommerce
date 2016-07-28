<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1926d38667697a890a6d04264f37853f487a0ea63d8ecf29dbde0eabd7d1418d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_3a72c68a05d045d63c0bef7fc2a52a898bd9ae47fff7d08953f7d4cb3b5ac370 = $this->env->getExtension("native_profiler");
        $__internal_3a72c68a05d045d63c0bef7fc2a52a898bd9ae47fff7d08953f7d4cb3b5ac370->enter($__internal_3a72c68a05d045d63c0bef7fc2a52a898bd9ae47fff7d08953f7d4cb3b5ac370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a72c68a05d045d63c0bef7fc2a52a898bd9ae47fff7d08953f7d4cb3b5ac370->leave($__internal_3a72c68a05d045d63c0bef7fc2a52a898bd9ae47fff7d08953f7d4cb3b5ac370_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a59b0891c45166ded6b5f11b397b3da01f92f4b42b1aba03bcfc43020787665 = $this->env->getExtension("native_profiler");
        $__internal_4a59b0891c45166ded6b5f11b397b3da01f92f4b42b1aba03bcfc43020787665->enter($__internal_4a59b0891c45166ded6b5f11b397b3da01f92f4b42b1aba03bcfc43020787665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a59b0891c45166ded6b5f11b397b3da01f92f4b42b1aba03bcfc43020787665->leave($__internal_4a59b0891c45166ded6b5f11b397b3da01f92f4b42b1aba03bcfc43020787665_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ad3257d76fcc390030cfd1b8d33f9ae6dce15f8963d3f28954e64ab81d1e2db = $this->env->getExtension("native_profiler");
        $__internal_4ad3257d76fcc390030cfd1b8d33f9ae6dce15f8963d3f28954e64ab81d1e2db->enter($__internal_4ad3257d76fcc390030cfd1b8d33f9ae6dce15f8963d3f28954e64ab81d1e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "            ";
        
        $__internal_4ad3257d76fcc390030cfd1b8d33f9ae6dce15f8963d3f28954e64ab81d1e2db->leave($__internal_4ad3257d76fcc390030cfd1b8d33f9ae6dce15f8963d3f28954e64ab81d1e2db_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
