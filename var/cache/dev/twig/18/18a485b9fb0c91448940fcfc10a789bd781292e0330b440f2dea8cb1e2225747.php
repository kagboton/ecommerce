<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_faa8b58be9dd42649e6390d7eae59ddb21de7b123bf65a2f62c970874286c818 extends Twig_Template
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
        $__internal_d82c4d0b9338b9e17fc5c6d27bfb94f10f160c81019d774b431d92aa84f9cc8e = $this->env->getExtension("native_profiler");
        $__internal_d82c4d0b9338b9e17fc5c6d27bfb94f10f160c81019d774b431d92aa84f9cc8e->enter($__internal_d82c4d0b9338b9e17fc5c6d27bfb94f10f160c81019d774b431d92aa84f9cc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d82c4d0b9338b9e17fc5c6d27bfb94f10f160c81019d774b431d92aa84f9cc8e->leave($__internal_d82c4d0b9338b9e17fc5c6d27bfb94f10f160c81019d774b431d92aa84f9cc8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
