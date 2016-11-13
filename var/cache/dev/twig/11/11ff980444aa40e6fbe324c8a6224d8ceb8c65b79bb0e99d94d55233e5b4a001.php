<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_07d7e6102649d1c7efb857b8b0d4a76a24f14fc84a21ab0575bb13cc72979c15 extends Twig_Template
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
        $__internal_e00e4cd60deb4042a22347ff69170c2e76cd9d705813da0347cb4c0cb4e0bf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00e4cd60deb4042a22347ff69170c2e76cd9d705813da0347cb4c0cb4e0bf91->enter($__internal_e00e4cd60deb4042a22347ff69170c2e76cd9d705813da0347cb4c0cb4e0bf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e00e4cd60deb4042a22347ff69170c2e76cd9d705813da0347cb4c0cb4e0bf91->leave($__internal_e00e4cd60deb4042a22347ff69170c2e76cd9d705813da0347cb4c0cb4e0bf91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
