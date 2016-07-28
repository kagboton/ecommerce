<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4616b84e4f93550805f678871b26994e9c0fd46f594b062947a8f0c259f3431e extends Twig_Template
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
        $__internal_b7bc7d7f17a562520f41b9f82ff7609150ab467104fcb81b5cad7408481d2342 = $this->env->getExtension("native_profiler");
        $__internal_b7bc7d7f17a562520f41b9f82ff7609150ab467104fcb81b5cad7408481d2342->enter($__internal_b7bc7d7f17a562520f41b9f82ff7609150ab467104fcb81b5cad7408481d2342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b7bc7d7f17a562520f41b9f82ff7609150ab467104fcb81b5cad7408481d2342->leave($__internal_b7bc7d7f17a562520f41b9f82ff7609150ab467104fcb81b5cad7408481d2342_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
