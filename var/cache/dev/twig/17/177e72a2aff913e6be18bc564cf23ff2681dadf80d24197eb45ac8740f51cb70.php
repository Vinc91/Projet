<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1fd77681199e0976b9530428cf747d27adaa86ce6c71ea6bb4b0cceec649187c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6635914bcebcbe6582afb4f47a27de3624d3f28c2da154d9b8dc64cc6aae5437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6635914bcebcbe6582afb4f47a27de3624d3f28c2da154d9b8dc64cc6aae5437->enter($__internal_6635914bcebcbe6582afb4f47a27de3624d3f28c2da154d9b8dc64cc6aae5437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6635914bcebcbe6582afb4f47a27de3624d3f28c2da154d9b8dc64cc6aae5437->leave($__internal_6635914bcebcbe6582afb4f47a27de3624d3f28c2da154d9b8dc64cc6aae5437_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b26e1c165233490275668eb789205653a9c6fbf921cda19594b67e657b9758b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26e1c165233490275668eb789205653a9c6fbf921cda19594b67e657b9758b7->enter($__internal_b26e1c165233490275668eb789205653a9c6fbf921cda19594b67e657b9758b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_b26e1c165233490275668eb789205653a9c6fbf921cda19594b67e657b9758b7->leave($__internal_b26e1c165233490275668eb789205653a9c6fbf921cda19594b67e657b9758b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99f3ac519fe3d0ee4cdc4ff705a146e8740ee0f49f89fd1f21c45f25ea3ed91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f3ac519fe3d0ee4cdc4ff705a146e8740ee0f49f89fd1f21c45f25ea3ed91f->enter($__internal_99f3ac519fe3d0ee4cdc4ff705a146e8740ee0f49f89fd1f21c45f25ea3ed91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_99f3ac519fe3d0ee4cdc4ff705a146e8740ee0f49f89fd1f21c45f25ea3ed91f->leave($__internal_99f3ac519fe3d0ee4cdc4ff705a146e8740ee0f49f89fd1f21c45f25ea3ed91f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
