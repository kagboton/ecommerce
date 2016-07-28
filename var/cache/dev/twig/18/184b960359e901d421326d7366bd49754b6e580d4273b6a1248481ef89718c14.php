<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_43566235139a66c5d091f5fc672155031d986f09c37a08e0b9fce9982bced1af extends Twig_Template
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
        $__internal_08c3cf6e97a733f0218cd3e217001600ab673102b7d8eaaaf769923a87de622c = $this->env->getExtension("native_profiler");
        $__internal_08c3cf6e97a733f0218cd3e217001600ab673102b7d8eaaaf769923a87de622c->enter($__internal_08c3cf6e97a733f0218cd3e217001600ab673102b7d8eaaaf769923a87de622c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_08c3cf6e97a733f0218cd3e217001600ab673102b7d8eaaaf769923a87de622c->leave($__internal_08c3cf6e97a733f0218cd3e217001600ab673102b7d8eaaaf769923a87de622c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
