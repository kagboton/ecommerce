<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_17d5e98699c8a0c7dc863cbb99b2da167e50ca1d074061a12b7489d640b0505d extends Twig_Template
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
        $__internal_77b6f0a1bb8494e05065cdbd096913a94f7dcc8e154ae3fc64191dda78a08ebc = $this->env->getExtension("native_profiler");
        $__internal_77b6f0a1bb8494e05065cdbd096913a94f7dcc8e154ae3fc64191dda78a08ebc->enter($__internal_77b6f0a1bb8494e05065cdbd096913a94f7dcc8e154ae3fc64191dda78a08ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_77b6f0a1bb8494e05065cdbd096913a94f7dcc8e154ae3fc64191dda78a08ebc->leave($__internal_77b6f0a1bb8494e05065cdbd096913a94f7dcc8e154ae3fc64191dda78a08ebc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
