<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_22260f794b9a335754818184df846f8e990135845a393cd13eff8405a35119f0 extends Twig_Template
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
        $__internal_a903a895dd71f2e44fa05d3c82b194c7e235811a7a9522108309c7d830bb1502 = $this->env->getExtension("native_profiler");
        $__internal_a903a895dd71f2e44fa05d3c82b194c7e235811a7a9522108309c7d830bb1502->enter($__internal_a903a895dd71f2e44fa05d3c82b194c7e235811a7a9522108309c7d830bb1502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a903a895dd71f2e44fa05d3c82b194c7e235811a7a9522108309c7d830bb1502->leave($__internal_a903a895dd71f2e44fa05d3c82b194c7e235811a7a9522108309c7d830bb1502_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
