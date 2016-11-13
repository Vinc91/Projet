<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e0f54fd7846aa2696d72b056ff5a5a129881e94987afeed13d711029e6097d07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c1f1b07735f8d44d9e4e03d908f726ad5e50c0832dbb48cc5ad3921dda5c819f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f1b07735f8d44d9e4e03d908f726ad5e50c0832dbb48cc5ad3921dda5c819f->enter($__internal_c1f1b07735f8d44d9e4e03d908f726ad5e50c0832dbb48cc5ad3921dda5c819f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f1b07735f8d44d9e4e03d908f726ad5e50c0832dbb48cc5ad3921dda5c819f->leave($__internal_c1f1b07735f8d44d9e4e03d908f726ad5e50c0832dbb48cc5ad3921dda5c819f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05b6fe33133a9626eeec8cbb326b7eb2b5ec5524ff47b65c785b49d5dc6710fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b6fe33133a9626eeec8cbb326b7eb2b5ec5524ff47b65c785b49d5dc6710fb->enter($__internal_05b6fe33133a9626eeec8cbb326b7eb2b5ec5524ff47b65c785b49d5dc6710fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_05b6fe33133a9626eeec8cbb326b7eb2b5ec5524ff47b65c785b49d5dc6710fb->leave($__internal_05b6fe33133a9626eeec8cbb326b7eb2b5ec5524ff47b65c785b49d5dc6710fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da58c3bda98606fa5274cdd4f831249d43961ec666a86658e8a982b6c6eb59ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da58c3bda98606fa5274cdd4f831249d43961ec666a86658e8a982b6c6eb59ec->enter($__internal_da58c3bda98606fa5274cdd4f831249d43961ec666a86658e8a982b6c6eb59ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da58c3bda98606fa5274cdd4f831249d43961ec666a86658e8a982b6c6eb59ec->leave($__internal_da58c3bda98606fa5274cdd4f831249d43961ec666a86658e8a982b6c6eb59ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1bcac1e130e5f9bea3264b3a464b5f01bd89e30e701fc3cfb0c57362b0159a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcac1e130e5f9bea3264b3a464b5f01bd89e30e701fc3cfb0c57362b0159a1f->enter($__internal_1bcac1e130e5f9bea3264b3a464b5f01bd89e30e701fc3cfb0c57362b0159a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1bcac1e130e5f9bea3264b3a464b5f01bd89e30e701fc3cfb0c57362b0159a1f->leave($__internal_1bcac1e130e5f9bea3264b3a464b5f01bd89e30e701fc3cfb0c57362b0159a1f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
