<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3a39980e94980300a3168db2733483d5addd0ef6f09fdb362cfc574cd5766e59 extends Twig_Template
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
        $__internal_bf507d0067b36012e7ad5adef8762291814702c40b42d899445d4d2d6b83554b = $this->env->getExtension("native_profiler");
        $__internal_bf507d0067b36012e7ad5adef8762291814702c40b42d899445d4d2d6b83554b->enter($__internal_bf507d0067b36012e7ad5adef8762291814702c40b42d899445d4d2d6b83554b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_bf507d0067b36012e7ad5adef8762291814702c40b42d899445d4d2d6b83554b->leave($__internal_bf507d0067b36012e7ad5adef8762291814702c40b42d899445d4d2d6b83554b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
