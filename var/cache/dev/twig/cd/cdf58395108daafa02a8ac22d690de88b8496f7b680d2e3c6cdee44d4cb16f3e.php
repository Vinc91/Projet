<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c14286750b2e014d60edc8573e0fc48a607f71d8650bf5d693cd5972810b8535 extends Twig_Template
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
        $__internal_f21b3f41c4a50740da35696ed9002a3890cdf5891a80a20fc11137fc93204ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21b3f41c4a50740da35696ed9002a3890cdf5891a80a20fc11137fc93204ef2->enter($__internal_f21b3f41c4a50740da35696ed9002a3890cdf5891a80a20fc11137fc93204ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f21b3f41c4a50740da35696ed9002a3890cdf5891a80a20fc11137fc93204ef2->leave($__internal_f21b3f41c4a50740da35696ed9002a3890cdf5891a80a20fc11137fc93204ef2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
