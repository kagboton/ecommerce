<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6c527d34c068f5bba5a6e9216b2f951f221dbec8c2b9ec264dee49cb06e8ea3e extends Twig_Template
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
        $__internal_3a0236f5de29908c3a74639debb8bddefa7e2dc159a0f2cec0eaea384a065a2e = $this->env->getExtension("native_profiler");
        $__internal_3a0236f5de29908c3a74639debb8bddefa7e2dc159a0f2cec0eaea384a065a2e->enter($__internal_3a0236f5de29908c3a74639debb8bddefa7e2dc159a0f2cec0eaea384a065a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3a0236f5de29908c3a74639debb8bddefa7e2dc159a0f2cec0eaea384a065a2e->leave($__internal_3a0236f5de29908c3a74639debb8bddefa7e2dc159a0f2cec0eaea384a065a2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
