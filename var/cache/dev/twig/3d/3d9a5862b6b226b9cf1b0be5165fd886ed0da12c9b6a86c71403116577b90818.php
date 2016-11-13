<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_81b9eaf2bc2e7d5f26fb3b4c31a7982ead3f9c2f689b63d87097d5fd65ddcf6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_4be3fae0351539967b7af13ec8522717d3e29a00c679a5c77edf8aa99feaa568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be3fae0351539967b7af13ec8522717d3e29a00c679a5c77edf8aa99feaa568->enter($__internal_4be3fae0351539967b7af13ec8522717d3e29a00c679a5c77edf8aa99feaa568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be3fae0351539967b7af13ec8522717d3e29a00c679a5c77edf8aa99feaa568->leave($__internal_4be3fae0351539967b7af13ec8522717d3e29a00c679a5c77edf8aa99feaa568_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_665dfbcf5ba2431b13f3b7a1b63716cca92329ef46fdb9f3481c213b2e208532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665dfbcf5ba2431b13f3b7a1b63716cca92329ef46fdb9f3481c213b2e208532->enter($__internal_665dfbcf5ba2431b13f3b7a1b63716cca92329ef46fdb9f3481c213b2e208532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_665dfbcf5ba2431b13f3b7a1b63716cca92329ef46fdb9f3481c213b2e208532->leave($__internal_665dfbcf5ba2431b13f3b7a1b63716cca92329ef46fdb9f3481c213b2e208532_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a43df8585b568f26e02f4718dffc3a3f37592ac92a03b6e5a23924a7372337a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43df8585b568f26e02f4718dffc3a3f37592ac92a03b6e5a23924a7372337a4->enter($__internal_a43df8585b568f26e02f4718dffc3a3f37592ac92a03b6e5a23924a7372337a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

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
        
        $__internal_a43df8585b568f26e02f4718dffc3a3f37592ac92a03b6e5a23924a7372337a4->leave($__internal_a43df8585b568f26e02f4718dffc3a3f37592ac92a03b6e5a23924a7372337a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
