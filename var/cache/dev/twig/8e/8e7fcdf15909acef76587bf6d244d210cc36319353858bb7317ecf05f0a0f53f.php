<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6c9bb08f6ffbd5a319125072b38de3cad98b8d7b19a405f07fe135660d255f93 extends Twig_Template
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
        $__internal_10e170af14acc89e6a8279e079c06a59718d6f71bc83afdf349e4c811b2ec52f = $this->env->getExtension("native_profiler");
        $__internal_10e170af14acc89e6a8279e079c06a59718d6f71bc83afdf349e4c811b2ec52f->enter($__internal_10e170af14acc89e6a8279e079c06a59718d6f71bc83afdf349e4c811b2ec52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_10e170af14acc89e6a8279e079c06a59718d6f71bc83afdf349e4c811b2ec52f->leave($__internal_10e170af14acc89e6a8279e079c06a59718d6f71bc83afdf349e4c811b2ec52f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
