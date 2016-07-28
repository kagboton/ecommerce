<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_da55c5fc7b0ce509349a7ae81a37789a27bb5c5c69d5af22e1d86eb8a04865a6 extends Twig_Template
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
        $__internal_46a09ad010c716d69022d2e0d41d8d25e083cd24ebef267a9604264af5281b81 = $this->env->getExtension("native_profiler");
        $__internal_46a09ad010c716d69022d2e0d41d8d25e083cd24ebef267a9604264af5281b81->enter($__internal_46a09ad010c716d69022d2e0d41d8d25e083cd24ebef267a9604264af5281b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_46a09ad010c716d69022d2e0d41d8d25e083cd24ebef267a9604264af5281b81->leave($__internal_46a09ad010c716d69022d2e0d41d8d25e083cd24ebef267a9604264af5281b81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
