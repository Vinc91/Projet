<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2ea4ff01646148aea6110e422d72d8599b8e8b07b2557054eb1f38cafb8c66b6 extends Twig_Template
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
        $__internal_1b8b848df5f682a61488ff1de898357a80f7fec9bc91a63d9c12745003e9a6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8b848df5f682a61488ff1de898357a80f7fec9bc91a63d9c12745003e9a6ab->enter($__internal_1b8b848df5f682a61488ff1de898357a80f7fec9bc91a63d9c12745003e9a6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1b8b848df5f682a61488ff1de898357a80f7fec9bc91a63d9c12745003e9a6ab->leave($__internal_1b8b848df5f682a61488ff1de898357a80f7fec9bc91a63d9c12745003e9a6ab_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_37080605cefbcc2e6b085c872be1b2cd6260a39eca5725ebf436328f81139240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37080605cefbcc2e6b085c872be1b2cd6260a39eca5725ebf436328f81139240->enter($__internal_37080605cefbcc2e6b085c872be1b2cd6260a39eca5725ebf436328f81139240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_37080605cefbcc2e6b085c872be1b2cd6260a39eca5725ebf436328f81139240->leave($__internal_37080605cefbcc2e6b085c872be1b2cd6260a39eca5725ebf436328f81139240_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
