<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2da3162134d4d7488466b4cf50eff6e576c5dd423b59603faa66ad02fd253f30 extends Twig_Template
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
        $__internal_9edd80714f579b825ead546f06bdde155ba1e86ce73edad0ed83d1ef829f8374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edd80714f579b825ead546f06bdde155ba1e86ce73edad0ed83d1ef829f8374->enter($__internal_9edd80714f579b825ead546f06bdde155ba1e86ce73edad0ed83d1ef829f8374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9edd80714f579b825ead546f06bdde155ba1e86ce73edad0ed83d1ef829f8374->leave($__internal_9edd80714f579b825ead546f06bdde155ba1e86ce73edad0ed83d1ef829f8374_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
