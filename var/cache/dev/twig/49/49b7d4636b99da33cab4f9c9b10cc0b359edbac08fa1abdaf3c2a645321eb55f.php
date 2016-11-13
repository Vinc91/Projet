<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_597e9be7993c4c53939c49e8b5c2afdab5d01a9d060f575176a095b0e1405a3a extends Twig_Template
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
        $__internal_fda3d787c1e1433675a28f1868a4b9f0442d059504f7635de4e9d8c7c5b648ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda3d787c1e1433675a28f1868a4b9f0442d059504f7635de4e9d8c7c5b648ef->enter($__internal_fda3d787c1e1433675a28f1868a4b9f0442d059504f7635de4e9d8c7c5b648ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fda3d787c1e1433675a28f1868a4b9f0442d059504f7635de4e9d8c7c5b648ef->leave($__internal_fda3d787c1e1433675a28f1868a4b9f0442d059504f7635de4e9d8c7c5b648ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
