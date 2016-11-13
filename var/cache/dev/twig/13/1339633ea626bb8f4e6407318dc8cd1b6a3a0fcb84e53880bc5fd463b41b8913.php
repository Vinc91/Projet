<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_de5d86679e24c39511959549919d6fb00dffbfa9f84a885621b7f3659ee811e8 extends Twig_Template
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
        $__internal_9473458f55dc5cfb4ba718e1cecf885ebbc614a0b5c2f03ddb21ddb3562ecd51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9473458f55dc5cfb4ba718e1cecf885ebbc614a0b5c2f03ddb21ddb3562ecd51->enter($__internal_9473458f55dc5cfb4ba718e1cecf885ebbc614a0b5c2f03ddb21ddb3562ecd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9473458f55dc5cfb4ba718e1cecf885ebbc614a0b5c2f03ddb21ddb3562ecd51->leave($__internal_9473458f55dc5cfb4ba718e1cecf885ebbc614a0b5c2f03ddb21ddb3562ecd51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
