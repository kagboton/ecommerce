<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6b9af5470b7ebedf01bfd28ec1adcb4ef05b057dd6ff06e741f2147722b3aaa9 extends Twig_Template
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
        $__internal_e6c178eaa1a6fe0a0ad926a8683572c0fbb91a00f076bdb7b054591c216c2f55 = $this->env->getExtension("native_profiler");
        $__internal_e6c178eaa1a6fe0a0ad926a8683572c0fbb91a00f076bdb7b054591c216c2f55->enter($__internal_e6c178eaa1a6fe0a0ad926a8683572c0fbb91a00f076bdb7b054591c216c2f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e6c178eaa1a6fe0a0ad926a8683572c0fbb91a00f076bdb7b054591c216c2f55->leave($__internal_e6c178eaa1a6fe0a0ad926a8683572c0fbb91a00f076bdb7b054591c216c2f55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
