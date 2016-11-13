<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_eaadace9b4aae5952f24ad2a416c7bd15e70bee5f14d8c6677f9d5c774339534 extends Twig_Template
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
        $__internal_8e2a3bd13ad5646260b553016f44544c1eac109e9fa4a6b8c881ecf7f2ebaa3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2a3bd13ad5646260b553016f44544c1eac109e9fa4a6b8c881ecf7f2ebaa3a->enter($__internal_8e2a3bd13ad5646260b553016f44544c1eac109e9fa4a6b8c881ecf7f2ebaa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_8e2a3bd13ad5646260b553016f44544c1eac109e9fa4a6b8c881ecf7f2ebaa3a->leave($__internal_8e2a3bd13ad5646260b553016f44544c1eac109e9fa4a6b8c881ecf7f2ebaa3a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
