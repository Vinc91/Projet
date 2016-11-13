<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4236023924304a6a131add3b0e51c57ebb827d8ee54ff4232d38b659fd3e9973 extends Twig_Template
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
        $__internal_3dece87ec8c20004d2601017a69f5bb355ef5e62386a9a77f8962c1bc32df6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dece87ec8c20004d2601017a69f5bb355ef5e62386a9a77f8962c1bc32df6aa->enter($__internal_3dece87ec8c20004d2601017a69f5bb355ef5e62386a9a77f8962c1bc32df6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3dece87ec8c20004d2601017a69f5bb355ef5e62386a9a77f8962c1bc32df6aa->leave($__internal_3dece87ec8c20004d2601017a69f5bb355ef5e62386a9a77f8962c1bc32df6aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
