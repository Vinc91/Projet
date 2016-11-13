<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_10e5adac9773dac6bd135a8dc2a392dec4175c86539e77f1fd4d3707780cbcc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db23596e5458d0ca45a165ff853c3faf6652834e6f4019670f1fba42683d8e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db23596e5458d0ca45a165ff853c3faf6652834e6f4019670f1fba42683d8e78->enter($__internal_db23596e5458d0ca45a165ff853c3faf6652834e6f4019670f1fba42683d8e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_db23596e5458d0ca45a165ff853c3faf6652834e6f4019670f1fba42683d8e78->leave($__internal_db23596e5458d0ca45a165ff853c3faf6652834e6f4019670f1fba42683d8e78_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_89589ee5ebba14e50cfc69f235014376a89910b0eec48b93b583d1d58b02ef17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89589ee5ebba14e50cfc69f235014376a89910b0eec48b93b583d1d58b02ef17->enter($__internal_89589ee5ebba14e50cfc69f235014376a89910b0eec48b93b583d1d58b02ef17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_89589ee5ebba14e50cfc69f235014376a89910b0eec48b93b583d1d58b02ef17->leave($__internal_89589ee5ebba14e50cfc69f235014376a89910b0eec48b93b583d1d58b02ef17_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
