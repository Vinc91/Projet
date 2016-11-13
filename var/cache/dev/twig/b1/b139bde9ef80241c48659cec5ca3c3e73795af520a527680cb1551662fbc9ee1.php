<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_6c50b43b6e5da8fe30b7d433454aa2b1e28c710b0342f6c30ae66535047f6c46 extends Twig_Template
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
        $__internal_9d52bb34e794f6aaf3fda7540bcc18163fe6a6af4a4b848d1a7f63cc813cc2a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d52bb34e794f6aaf3fda7540bcc18163fe6a6af4a4b848d1a7f63cc813cc2a7->enter($__internal_9d52bb34e794f6aaf3fda7540bcc18163fe6a6af4a4b848d1a7f63cc813cc2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9d52bb34e794f6aaf3fda7540bcc18163fe6a6af4a4b848d1a7f63cc813cc2a7->leave($__internal_9d52bb34e794f6aaf3fda7540bcc18163fe6a6af4a4b848d1a7f63cc813cc2a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
