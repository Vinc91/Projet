<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_bc822bb6b113d6e95b92acb09bc44d5f495acddcd8c1854205091b3b74be7335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17e95478adbeffcc8dac80ee2b29de9eae5689d352b28beb377e8b3f6476b337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e95478adbeffcc8dac80ee2b29de9eae5689d352b28beb377e8b3f6476b337->enter($__internal_17e95478adbeffcc8dac80ee2b29de9eae5689d352b28beb377e8b3f6476b337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e95478adbeffcc8dac80ee2b29de9eae5689d352b28beb377e8b3f6476b337->leave($__internal_17e95478adbeffcc8dac80ee2b29de9eae5689d352b28beb377e8b3f6476b337_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_981a3c65702a726dee8b897fdd0959e52ace4c6d3690bac0c05a6ea955078bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981a3c65702a726dee8b897fdd0959e52ace4c6d3690bac0c05a6ea955078bd7->enter($__internal_981a3c65702a726dee8b897fdd0959e52ace4c6d3690bac0c05a6ea955078bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_981a3c65702a726dee8b897fdd0959e52ace4c6d3690bac0c05a6ea955078bd7->leave($__internal_981a3c65702a726dee8b897fdd0959e52ace4c6d3690bac0c05a6ea955078bd7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94fc454e54020118a7f718d0aad7a1c8db88d0ab373e858996a234787b87ba2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fc454e54020118a7f718d0aad7a1c8db88d0ab373e858996a234787b87ba2d->enter($__internal_94fc454e54020118a7f718d0aad7a1c8db88d0ab373e858996a234787b87ba2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_94fc454e54020118a7f718d0aad7a1c8db88d0ab373e858996a234787b87ba2d->leave($__internal_94fc454e54020118a7f718d0aad7a1c8db88d0ab373e858996a234787b87ba2d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e799ef5eabe5ca38ea3922cd5a4d85c1ba8a74a7fca28af7763b3536cf9a800b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e799ef5eabe5ca38ea3922cd5a4d85c1ba8a74a7fca28af7763b3536cf9a800b->enter($__internal_e799ef5eabe5ca38ea3922cd5a4d85c1ba8a74a7fca28af7763b3536cf9a800b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e799ef5eabe5ca38ea3922cd5a4d85c1ba8a74a7fca28af7763b3536cf9a800b->leave($__internal_e799ef5eabe5ca38ea3922cd5a4d85c1ba8a74a7fca28af7763b3536cf9a800b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
