<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_110a723a2e30fbb0136bab04ff0d7a06a4fc33ca52808a23dc04754dfa4da87f extends Twig_Template
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
        $__internal_94c2fc11cd256ab46302bae961461e58285459e4d3e878bd3e745d3dd44f3f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c2fc11cd256ab46302bae961461e58285459e4d3e878bd3e745d3dd44f3f3e->enter($__internal_94c2fc11cd256ab46302bae961461e58285459e4d3e878bd3e745d3dd44f3f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_94c2fc11cd256ab46302bae961461e58285459e4d3e878bd3e745d3dd44f3f3e->leave($__internal_94c2fc11cd256ab46302bae961461e58285459e4d3e878bd3e745d3dd44f3f3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
