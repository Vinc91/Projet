<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_02eb1a320aab8c414770915e54a0dda8a2b2f922617c6dfdf297dfd03afd9d2d extends Twig_Template
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
        $__internal_87efdd533f3c7edd1a1b4a5b61e949a3205020e26d91c4822d13c1ea6ce28a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87efdd533f3c7edd1a1b4a5b61e949a3205020e26d91c4822d13c1ea6ce28a46->enter($__internal_87efdd533f3c7edd1a1b4a5b61e949a3205020e26d91c4822d13c1ea6ce28a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_87efdd533f3c7edd1a1b4a5b61e949a3205020e26d91c4822d13c1ea6ce28a46->leave($__internal_87efdd533f3c7edd1a1b4a5b61e949a3205020e26d91c4822d13c1ea6ce28a46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
