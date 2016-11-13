<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0df346f40fb70c600c1a5d7e0176d7c77f8fe67fcbc82be1bab9f5cf4f060b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d74353393a07003e5dd5e2ec9a61b1b92f998fe9aead6495f8498449c50b8b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74353393a07003e5dd5e2ec9a61b1b92f998fe9aead6495f8498449c50b8b8d->enter($__internal_d74353393a07003e5dd5e2ec9a61b1b92f998fe9aead6495f8498449c50b8b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d74353393a07003e5dd5e2ec9a61b1b92f998fe9aead6495f8498449c50b8b8d->leave($__internal_d74353393a07003e5dd5e2ec9a61b1b92f998fe9aead6495f8498449c50b8b8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff60bc9fa44cbca505c2a84f1fcdd28f10546214afb13f100b6beb454301344c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff60bc9fa44cbca505c2a84f1fcdd28f10546214afb13f100b6beb454301344c->enter($__internal_ff60bc9fa44cbca505c2a84f1fcdd28f10546214afb13f100b6beb454301344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff60bc9fa44cbca505c2a84f1fcdd28f10546214afb13f100b6beb454301344c->leave($__internal_ff60bc9fa44cbca505c2a84f1fcdd28f10546214afb13f100b6beb454301344c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d30fe350da3e4e1685b3344b5dd0c5c57f4a1291cbb4779d74617d9d686fa9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30fe350da3e4e1685b3344b5dd0c5c57f4a1291cbb4779d74617d9d686fa9d3->enter($__internal_d30fe350da3e4e1685b3344b5dd0c5c57f4a1291cbb4779d74617d9d686fa9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d30fe350da3e4e1685b3344b5dd0c5c57f4a1291cbb4779d74617d9d686fa9d3->leave($__internal_d30fe350da3e4e1685b3344b5dd0c5c57f4a1291cbb4779d74617d9d686fa9d3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9cc317e316fd4cc011687684a1eaef9ada67f1bde3e77ca54e1a9c20371ccae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cc317e316fd4cc011687684a1eaef9ada67f1bde3e77ca54e1a9c20371ccae->enter($__internal_e9cc317e316fd4cc011687684a1eaef9ada67f1bde3e77ca54e1a9c20371ccae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e9cc317e316fd4cc011687684a1eaef9ada67f1bde3e77ca54e1a9c20371ccae->leave($__internal_e9cc317e316fd4cc011687684a1eaef9ada67f1bde3e77ca54e1a9c20371ccae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
