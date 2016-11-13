<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a0351307739bba73de27024632ebff1785902a064e6b449b96e91f4747fcfc1c extends Twig_Template
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
        $__internal_0df6507c6fa21ed3a6b2ab60ee07804cfb58107ee5040238d87e80384abe8abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df6507c6fa21ed3a6b2ab60ee07804cfb58107ee5040238d87e80384abe8abf->enter($__internal_0df6507c6fa21ed3a6b2ab60ee07804cfb58107ee5040238d87e80384abe8abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0df6507c6fa21ed3a6b2ab60ee07804cfb58107ee5040238d87e80384abe8abf->leave($__internal_0df6507c6fa21ed3a6b2ab60ee07804cfb58107ee5040238d87e80384abe8abf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
