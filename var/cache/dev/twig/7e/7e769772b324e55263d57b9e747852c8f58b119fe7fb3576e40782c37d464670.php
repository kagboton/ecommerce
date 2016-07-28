<?php

/* layout/layout.html.twig */
class __TwigTemplate_d54a29327220fe5bd1c56364db8d0e690c1c27eb972ef8f74b766f3dcf0d54f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2151a2a0e4f4b280985b7033cea13131e907c27bb50d56889a9e05a4776995ff = $this->env->getExtension("native_profiler");
        $__internal_2151a2a0e4f4b280985b7033cea13131e907c27bb50d56889a9e05a4776995ff->enter($__internal_2151a2a0e4f4b280985b7033cea13131e907c27bb50d56889a9e05a4776995ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"index.php\">DevAndClick</a>
            <div class=\"nav-collapse collapse\">
                <form class=\"navbar-form form-search pull-right\">
                    <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                    <button type=\"submit\" class=\"btn\">Rechercher</button>
                </form>
            </div>
        </div>
    </div>
</div>

";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
<hr>

<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 1));
        echo "\">CGV</a>
                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 2));
        echo "\">Mentions légales</a>
                </ul>
            </div>

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: 02 35 00 00 00</p>
                <p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2014 - DevAndClick</p>
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "
</body>
</html>
";
        
        $__internal_2151a2a0e4f4b280985b7033cea13131e907c27bb50d56889a9e05a4776995ff->leave($__internal_2151a2a0e4f4b280985b7033cea13131e907c27bb50d56889a9e05a4776995ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ad6c58efc09cc14af3ec6e1bdf8d53b477a2f54aa3af2d055784f32b92c45dc = $this->env->getExtension("native_profiler");
        $__internal_5ad6c58efc09cc14af3ec6e1bdf8d53b477a2f54aa3af2d055784f32b92c45dc->enter($__internal_5ad6c58efc09cc14af3ec6e1bdf8d53b477a2f54aa3af2d055784f32b92c45dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ad6c58efc09cc14af3ec6e1bdf8d53b477a2f54aa3af2d055784f32b92c45dc->leave($__internal_5ad6c58efc09cc14af3ec6e1bdf8d53b477a2f54aa3af2d055784f32b92c45dc_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0d3e58175b6f9d8044e698e7ba60f80cd82a87b4c3466f24ba58ad7e151a9e8 = $this->env->getExtension("native_profiler");
        $__internal_e0d3e58175b6f9d8044e698e7ba60f80cd82a87b4c3466f24ba58ad7e151a9e8->enter($__internal_e0d3e58175b6f9d8044e698e7ba60f80cd82a87b4c3466f24ba58ad7e151a9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0d3e58175b6f9d8044e698e7ba60f80cd82a87b4c3466f24ba58ad7e151a9e8->leave($__internal_e0d3e58175b6f9d8044e698e7ba60f80cd82a87b4c3466f24ba58ad7e151a9e8_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b2787b4a47538eff9a67af3c89321d73d676fcf4c15f8867610ca39ce11832f = $this->env->getExtension("native_profiler");
        $__internal_4b2787b4a47538eff9a67af3c89321d73d676fcf4c15f8867610ca39ce11832f->enter($__internal_4b2787b4a47538eff9a67af3c89321d73d676fcf4c15f8867610ca39ce11832f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b2787b4a47538eff9a67af3c89321d73d676fcf4c15f8867610ca39ce11832f->leave($__internal_4b2787b4a47538eff9a67af3c89321d73d676fcf4c15f8867610ca39ce11832f_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2af49b696f3980c7301d3c5fc81ce8f224e89677855516f80ff4af59da14e93 = $this->env->getExtension("native_profiler");
        $__internal_f2af49b696f3980c7301d3c5fc81ce8f224e89677855516f80ff4af59da14e93->enter($__internal_f2af49b696f3980c7301d3c5fc81ce8f224e89677855516f80ff4af59da14e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f2af49b696f3980c7301d3c5fc81ce8f224e89677855516f80ff4af59da14e93->leave($__internal_f2af49b696f3980c7301d3c5fc81ce8f224e89677855516f80ff4af59da14e93_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 71,  168 => 34,  157 => 10,  145 => 5,  135 => 72,  133 => 71,  128 => 69,  124 => 68,  98 => 45,  94 => 44,  83 => 35,  81 => 34,  54 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />*/
/*     <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.css')}}" />*/
/*     <link rel="stylesheet" href="{{asset('css/style.css')}}" />*/
/*     <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" />*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* */
/* <div class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="navbar-inner">*/
/*         <div class="container">*/
/*             <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="brand" href="index.php">DevAndClick</a>*/
/*             <div class="nav-collapse collapse">*/
/*                 <form class="navbar-form form-search pull-right">*/
/*                     <input id="Search" name="Search" type="text" class="input-medium search-query">*/
/*                     <button type="submit" class="btn">Rechercher</button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% block body %}{% endblock %}*/
/* */
/* <hr>*/
/* */
/* <footer id="footer" class="vspace20">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span4 offset1">*/
/*                 <h4>Informations</h4>*/
/*                 <ul class="nav nav-stacked">*/
/*                     <li><a href="{{ path('page', {'id' : 1 })  }}">CGV</a>*/
/*                     <li><a href="{{ path('page', {'id' : 2})  }}">Mentions légales</a>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="span4">*/
/*                 <h4>Notre entrepôt</h4>*/
/*                 <p><i class="icon-map-marker"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>*/
/*             </div>*/
/* */
/*             <div class="span2">*/
/*                 <h4>Nous contacter</h4>*/
/*                 <p><i class="icon-phone"></i>&nbsp;Tel: 02 35 00 00 00</p>*/
/*                 <p><i class="icon-print"></i>&nbsp;Fax: 02 35 00 00 00</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="span4">*/
/*                 <p>&copy; Copyright 2014 - DevAndClick</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* <script src="{{ asset('js/jquery-1.10.0.min.js')}}"></script>*/
/* <script src="{{asset('js/bootstrap.js') }}"></script>*/
/* */
/* {% block javascripts %}{% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
