<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_33b15d24f5e10af1cdf4cba4820e8a5c733d551ecb55709a06d3fdbcf3c886df extends Twig_Template
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
        $__internal_429f6797bb0fc3e8639c3e03f960971fee6cbb9baae879b481bf7338c5a5498b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429f6797bb0fc3e8639c3e03f960971fee6cbb9baae879b481bf7338c5a5498b->enter($__internal_429f6797bb0fc3e8639c3e03f960971fee6cbb9baae879b481bf7338c5a5498b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_429f6797bb0fc3e8639c3e03f960971fee6cbb9baae879b481bf7338c5a5498b->leave($__internal_429f6797bb0fc3e8639c3e03f960971fee6cbb9baae879b481bf7338c5a5498b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
