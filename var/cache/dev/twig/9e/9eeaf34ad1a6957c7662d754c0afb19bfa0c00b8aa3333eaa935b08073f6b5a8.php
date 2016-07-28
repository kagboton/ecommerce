<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_140ab67d602d30fcb8220720c76486e78e0d1772c8a7b0018aadb99a9e149fe3 extends Twig_Template
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
        $__internal_f2e78765874b25563486d86431a248f35507ebe9610d7f67682ead6ba7e5bc2a = $this->env->getExtension("native_profiler");
        $__internal_f2e78765874b25563486d86431a248f35507ebe9610d7f67682ead6ba7e5bc2a->enter($__internal_f2e78765874b25563486d86431a248f35507ebe9610d7f67682ead6ba7e5bc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f2e78765874b25563486d86431a248f35507ebe9610d7f67682ead6ba7e5bc2a->leave($__internal_f2e78765874b25563486d86431a248f35507ebe9610d7f67682ead6ba7e5bc2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
