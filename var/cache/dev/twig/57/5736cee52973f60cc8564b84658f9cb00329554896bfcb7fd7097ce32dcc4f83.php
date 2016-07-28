<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_6860ce0b8a6443e7d91209dfd21d84ee22e49dc4d306a3b387bb97ab94e28a6e extends Twig_Template
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
        $__internal_f4bcd643d5308f44a1193cfcecba5993b7085b1282e95385236000737df9c3b2 = $this->env->getExtension("native_profiler");
        $__internal_f4bcd643d5308f44a1193cfcecba5993b7085b1282e95385236000737df9c3b2->enter($__internal_f4bcd643d5308f44a1193cfcecba5993b7085b1282e95385236000737df9c3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
                    ";
        // line 44
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"));
        // line 45
        echo "
                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 1));
        echo "\">CGV</a>
                    <li><a href=\"";
        // line 47
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
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "
</body>
</html>
";
        
        $__internal_f4bcd643d5308f44a1193cfcecba5993b7085b1282e95385236000737df9c3b2->leave($__internal_f4bcd643d5308f44a1193cfcecba5993b7085b1282e95385236000737df9c3b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3146cbec2a00e38557994ef3e07fb3917afacc06aad548f857da21b38f6a5ba = $this->env->getExtension("native_profiler");
        $__internal_c3146cbec2a00e38557994ef3e07fb3917afacc06aad548f857da21b38f6a5ba->enter($__internal_c3146cbec2a00e38557994ef3e07fb3917afacc06aad548f857da21b38f6a5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c3146cbec2a00e38557994ef3e07fb3917afacc06aad548f857da21b38f6a5ba->leave($__internal_c3146cbec2a00e38557994ef3e07fb3917afacc06aad548f857da21b38f6a5ba_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74ede56410f6949d0bfc452712ba8a86fea85e92d31416ae552fa1220eda58d5 = $this->env->getExtension("native_profiler");
        $__internal_74ede56410f6949d0bfc452712ba8a86fea85e92d31416ae552fa1220eda58d5->enter($__internal_74ede56410f6949d0bfc452712ba8a86fea85e92d31416ae552fa1220eda58d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_74ede56410f6949d0bfc452712ba8a86fea85e92d31416ae552fa1220eda58d5->leave($__internal_74ede56410f6949d0bfc452712ba8a86fea85e92d31416ae552fa1220eda58d5_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffeff1e7d07cb371f80f36db3590dffa366623006a4cb4c1e2d4cf1b89a204d1 = $this->env->getExtension("native_profiler");
        $__internal_ffeff1e7d07cb371f80f36db3590dffa366623006a4cb4c1e2d4cf1b89a204d1->enter($__internal_ffeff1e7d07cb371f80f36db3590dffa366623006a4cb4c1e2d4cf1b89a204d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ffeff1e7d07cb371f80f36db3590dffa366623006a4cb4c1e2d4cf1b89a204d1->leave($__internal_ffeff1e7d07cb371f80f36db3590dffa366623006a4cb4c1e2d4cf1b89a204d1_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c9b2c5c5024b33bb6c536484837258c43962e6ddb87a5b3bec241bf55baf436 = $this->env->getExtension("native_profiler");
        $__internal_7c9b2c5c5024b33bb6c536484837258c43962e6ddb87a5b3bec241bf55baf436->enter($__internal_7c9b2c5c5024b33bb6c536484837258c43962e6ddb87a5b3bec241bf55baf436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c9b2c5c5024b33bb6c536484837258c43962e6ddb87a5b3bec241bf55baf436->leave($__internal_7c9b2c5c5024b33bb6c536484837258c43962e6ddb87a5b3bec241bf55baf436_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 73,  173 => 34,  162 => 10,  150 => 5,  140 => 74,  138 => 73,  133 => 71,  129 => 70,  103 => 47,  99 => 46,  96 => 45,  94 => 44,  83 => 35,  81 => 34,  54 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*                     {{ render(controller(*/
/*                     'PagesBundle:Pages:menu')) }}*/
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
