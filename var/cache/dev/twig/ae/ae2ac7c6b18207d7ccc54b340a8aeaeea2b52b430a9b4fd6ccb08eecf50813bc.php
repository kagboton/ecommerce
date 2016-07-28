<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5ebabb225d25e92d5c563e11bc4304f3492f13ece21e40e30039d655f582077f extends Twig_Template
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
        $__internal_2e1dd0c21f393ceceb4d6cb042035b56c91802fed8adb76a598382ad5d31c937 = $this->env->getExtension("native_profiler");
        $__internal_2e1dd0c21f393ceceb4d6cb042035b56c91802fed8adb76a598382ad5d31c937->enter($__internal_2e1dd0c21f393ceceb4d6cb042035b56c91802fed8adb76a598382ad5d31c937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2e1dd0c21f393ceceb4d6cb042035b56c91802fed8adb76a598382ad5d31c937->leave($__internal_2e1dd0c21f393ceceb4d6cb042035b56c91802fed8adb76a598382ad5d31c937_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
