<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3ebf4bb6c3c4c9a7b7368a9bb1200df3c08dca5bd17b5cefaa6caf20243d5587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_ace5bf444c02d39e4b289e7af22b8e2a210567f4b88b27b7bff26dcb38a7b71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace5bf444c02d39e4b289e7af22b8e2a210567f4b88b27b7bff26dcb38a7b71f->enter($__internal_ace5bf444c02d39e4b289e7af22b8e2a210567f4b88b27b7bff26dcb38a7b71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ace5bf444c02d39e4b289e7af22b8e2a210567f4b88b27b7bff26dcb38a7b71f->leave($__internal_ace5bf444c02d39e4b289e7af22b8e2a210567f4b88b27b7bff26dcb38a7b71f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa57d1c80c768dfd995e5b5b5c1583f0ea2dc7c066fe5d3fc91e6f476fe80176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa57d1c80c768dfd995e5b5b5c1583f0ea2dc7c066fe5d3fc91e6f476fe80176->enter($__internal_fa57d1c80c768dfd995e5b5b5c1583f0ea2dc7c066fe5d3fc91e6f476fe80176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fa57d1c80c768dfd995e5b5b5c1583f0ea2dc7c066fe5d3fc91e6f476fe80176->leave($__internal_fa57d1c80c768dfd995e5b5b5c1583f0ea2dc7c066fe5d3fc91e6f476fe80176_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1c86f986fc7cc49147cb71c6aed6af8b1ff84382ccf761b2c00ff3e592f86b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c86f986fc7cc49147cb71c6aed6af8b1ff84382ccf761b2c00ff3e592f86b4->enter($__internal_b1c86f986fc7cc49147cb71c6aed6af8b1ff84382ccf761b2c00ff3e592f86b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1c86f986fc7cc49147cb71c6aed6af8b1ff84382ccf761b2c00ff3e592f86b4->leave($__internal_b1c86f986fc7cc49147cb71c6aed6af8b1ff84382ccf761b2c00ff3e592f86b4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_52c298bc6ef40bfef7a2d6f6e5a5779ef40d6c3aecf4cd625cfcac6961bf7dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c298bc6ef40bfef7a2d6f6e5a5779ef40d6c3aecf4cd625cfcac6961bf7dc9->enter($__internal_52c298bc6ef40bfef7a2d6f6e5a5779ef40d6c3aecf4cd625cfcac6961bf7dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_52c298bc6ef40bfef7a2d6f6e5a5779ef40d6c3aecf4cd625cfcac6961bf7dc9->leave($__internal_52c298bc6ef40bfef7a2d6f6e5a5779ef40d6c3aecf4cd625cfcac6961bf7dc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
