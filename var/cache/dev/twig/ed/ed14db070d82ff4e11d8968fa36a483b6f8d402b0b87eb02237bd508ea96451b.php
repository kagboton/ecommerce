<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_660855e36d013a55ca98506389c8e5c117ba9b70455c8f6ddba6128b499261e7 extends Twig_Template
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
        $__internal_c1b74a30553cc1aef189b3a5a1297ba26651956cf7c97d3d05df365a1801af13 = $this->env->getExtension("native_profiler");
        $__internal_c1b74a30553cc1aef189b3a5a1297ba26651956cf7c97d3d05df365a1801af13->enter($__internal_c1b74a30553cc1aef189b3a5a1297ba26651956cf7c97d3d05df365a1801af13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c1b74a30553cc1aef189b3a5a1297ba26651956cf7c97d3d05df365a1801af13->leave($__internal_c1b74a30553cc1aef189b3a5a1297ba26651956cf7c97d3d05df365a1801af13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
