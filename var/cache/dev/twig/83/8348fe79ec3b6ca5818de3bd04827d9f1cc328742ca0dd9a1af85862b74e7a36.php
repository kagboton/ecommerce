<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d7c0b39efe36efb3b5677ea5de170ddfdfd1d01162c5fd43e724c5b0e0e3d8b7 extends Twig_Template
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
        $__internal_49142b95ad487f2cb6bd7b1402bbff23f3f19100c88df4fcc4f749f4fe4575cc = $this->env->getExtension("native_profiler");
        $__internal_49142b95ad487f2cb6bd7b1402bbff23f3f19100c88df4fcc4f749f4fe4575cc->enter($__internal_49142b95ad487f2cb6bd7b1402bbff23f3f19100c88df4fcc4f749f4fe4575cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_49142b95ad487f2cb6bd7b1402bbff23f3f19100c88df4fcc4f749f4fe4575cc->leave($__internal_49142b95ad487f2cb6bd7b1402bbff23f3f19100c88df4fcc4f749f4fe4575cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
