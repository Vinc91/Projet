<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2e74ed745adaf382441b579a294e242b7a9805e5a6f09f0f5aa386646e76dd37 extends Twig_Template
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
        $__internal_be0a468080e5e5e8420f293a6ef86d3b5a0a92eb8e8f13d89a825fb66cad399f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0a468080e5e5e8420f293a6ef86d3b5a0a92eb8e8f13d89a825fb66cad399f->enter($__internal_be0a468080e5e5e8420f293a6ef86d3b5a0a92eb8e8f13d89a825fb66cad399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_be0a468080e5e5e8420f293a6ef86d3b5a0a92eb8e8f13d89a825fb66cad399f->leave($__internal_be0a468080e5e5e8420f293a6ef86d3b5a0a92eb8e8f13d89a825fb66cad399f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
