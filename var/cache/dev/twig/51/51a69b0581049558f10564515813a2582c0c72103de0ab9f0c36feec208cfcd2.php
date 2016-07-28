<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_60c72d1459d1be1504a4c0268be4be20b37d69c113b8bbeab3d59878be42f6d2 extends Twig_Template
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
        $__internal_c381cd7e7541c9faaff86d894e59540eb16e6f769c67764b7df9f0cc3f3e650f = $this->env->getExtension("native_profiler");
        $__internal_c381cd7e7541c9faaff86d894e59540eb16e6f769c67764b7df9f0cc3f3e650f->enter($__internal_c381cd7e7541c9faaff86d894e59540eb16e6f769c67764b7df9f0cc3f3e650f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c381cd7e7541c9faaff86d894e59540eb16e6f769c67764b7df9f0cc3f3e650f->leave($__internal_c381cd7e7541c9faaff86d894e59540eb16e6f769c67764b7df9f0cc3f3e650f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
