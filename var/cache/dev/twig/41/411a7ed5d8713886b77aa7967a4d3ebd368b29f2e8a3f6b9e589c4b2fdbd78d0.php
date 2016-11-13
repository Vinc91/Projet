<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2a601ee93904e3b0127cfe654cf4d7f2075cdaf0030d279945e27246659e038a extends Twig_Template
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
        $__internal_177c141be1e5e8d992ccefd3aa396b63611e3d245bf50e6c8bed6cc129ec3fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177c141be1e5e8d992ccefd3aa396b63611e3d245bf50e6c8bed6cc129ec3fef->enter($__internal_177c141be1e5e8d992ccefd3aa396b63611e3d245bf50e6c8bed6cc129ec3fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_177c141be1e5e8d992ccefd3aa396b63611e3d245bf50e6c8bed6cc129ec3fef->leave($__internal_177c141be1e5e8d992ccefd3aa396b63611e3d245bf50e6c8bed6cc129ec3fef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
