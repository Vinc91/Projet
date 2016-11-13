<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7c808a1ad41b93eaaeb2915dbcb780cd48d0ffbc80ed0b0a70b6bcdff9e0a8e8 extends Twig_Template
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
        $__internal_5be85d2f169d63fa0289399f674034a0de4d24075b1905cfd3c5788d371f1db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be85d2f169d63fa0289399f674034a0de4d24075b1905cfd3c5788d371f1db8->enter($__internal_5be85d2f169d63fa0289399f674034a0de4d24075b1905cfd3c5788d371f1db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5be85d2f169d63fa0289399f674034a0de4d24075b1905cfd3c5788d371f1db8->leave($__internal_5be85d2f169d63fa0289399f674034a0de4d24075b1905cfd3c5788d371f1db8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
