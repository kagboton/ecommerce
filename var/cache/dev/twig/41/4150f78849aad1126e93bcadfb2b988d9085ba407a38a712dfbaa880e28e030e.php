<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4f0150ef5e50ae5973e15d1866fc8955b40c9d5daedddeb793fe778f371b527f extends Twig_Template
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
        $__internal_2e18fd50926aa86437b5758eea644782b0f3300e332af033fa726ff8c157c71b = $this->env->getExtension("native_profiler");
        $__internal_2e18fd50926aa86437b5758eea644782b0f3300e332af033fa726ff8c157c71b->enter($__internal_2e18fd50926aa86437b5758eea644782b0f3300e332af033fa726ff8c157c71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2e18fd50926aa86437b5758eea644782b0f3300e332af033fa726ff8c157c71b->leave($__internal_2e18fd50926aa86437b5758eea644782b0f3300e332af033fa726ff8c157c71b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
