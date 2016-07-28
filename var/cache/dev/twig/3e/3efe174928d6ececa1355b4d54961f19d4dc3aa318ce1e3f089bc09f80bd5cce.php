<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3e429478cabd51d6cc4a78a6ca15f52f5cfbbebd8f337bbf065feb63be466221 extends Twig_Template
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
        $__internal_7c79c7087bebaaebf557c8631ad6f252864f6380fc48ae78ed52faddb8f3086d = $this->env->getExtension("native_profiler");
        $__internal_7c79c7087bebaaebf557c8631ad6f252864f6380fc48ae78ed52faddb8f3086d->enter($__internal_7c79c7087bebaaebf557c8631ad6f252864f6380fc48ae78ed52faddb8f3086d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7c79c7087bebaaebf557c8631ad6f252864f6380fc48ae78ed52faddb8f3086d->leave($__internal_7c79c7087bebaaebf557c8631ad6f252864f6380fc48ae78ed52faddb8f3086d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
