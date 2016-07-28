<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5474f21577b766b6b5b129b7e5043943d97e8c7745fe1ac84ea51e0a17755d54 extends Twig_Template
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
        $__internal_8cf9fab76ad14b90d9072fee0c41990843c106086cdd86747bc29a17696ddaad = $this->env->getExtension("native_profiler");
        $__internal_8cf9fab76ad14b90d9072fee0c41990843c106086cdd86747bc29a17696ddaad->enter($__internal_8cf9fab76ad14b90d9072fee0c41990843c106086cdd86747bc29a17696ddaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8cf9fab76ad14b90d9072fee0c41990843c106086cdd86747bc29a17696ddaad->leave($__internal_8cf9fab76ad14b90d9072fee0c41990843c106086cdd86747bc29a17696ddaad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
