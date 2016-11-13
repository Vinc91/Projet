<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_dae1187cdb5175112c5198b0f5fe803011b4e196589c775f1be1dd2c0d126e92 extends Twig_Template
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
        $__internal_a96504df53fc297373298010079f80dc03defb2d25825ff7fb8a11ba5ca2c1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96504df53fc297373298010079f80dc03defb2d25825ff7fb8a11ba5ca2c1ab->enter($__internal_a96504df53fc297373298010079f80dc03defb2d25825ff7fb8a11ba5ca2c1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a96504df53fc297373298010079f80dc03defb2d25825ff7fb8a11ba5ca2c1ab->leave($__internal_a96504df53fc297373298010079f80dc03defb2d25825ff7fb8a11ba5ca2c1ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
