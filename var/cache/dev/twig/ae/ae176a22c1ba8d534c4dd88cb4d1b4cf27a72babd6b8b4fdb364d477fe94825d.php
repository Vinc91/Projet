<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b529fa7227a367a7de95e2ceda5343eddf9401ed02ede716f78419ad8332c93b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_331509d27d2b1662428cd30fa04a5fa4e1b29547cf54f4e9140a2c64d0bb7e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331509d27d2b1662428cd30fa04a5fa4e1b29547cf54f4e9140a2c64d0bb7e5b->enter($__internal_331509d27d2b1662428cd30fa04a5fa4e1b29547cf54f4e9140a2c64d0bb7e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331509d27d2b1662428cd30fa04a5fa4e1b29547cf54f4e9140a2c64d0bb7e5b->leave($__internal_331509d27d2b1662428cd30fa04a5fa4e1b29547cf54f4e9140a2c64d0bb7e5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac755e01712fe75d5112b8988b50e31ef29e69baec47d1d01fbf4eb49ad7f142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac755e01712fe75d5112b8988b50e31ef29e69baec47d1d01fbf4eb49ad7f142->enter($__internal_ac755e01712fe75d5112b8988b50e31ef29e69baec47d1d01fbf4eb49ad7f142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_ac755e01712fe75d5112b8988b50e31ef29e69baec47d1d01fbf4eb49ad7f142->leave($__internal_ac755e01712fe75d5112b8988b50e31ef29e69baec47d1d01fbf4eb49ad7f142_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e20da6e25686616f08ea6487e1b4f5c801338ca72ebdb4f3edc3f66fbd0bf2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20da6e25686616f08ea6487e1b4f5c801338ca72ebdb4f3edc3f66fbd0bf2fc->enter($__internal_e20da6e25686616f08ea6487e1b4f5c801338ca72ebdb4f3edc3f66fbd0bf2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e20da6e25686616f08ea6487e1b4f5c801338ca72ebdb4f3edc3f66fbd0bf2fc->leave($__internal_e20da6e25686616f08ea6487e1b4f5c801338ca72ebdb4f3edc3f66fbd0bf2fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_530cae98ba283038063d533353042d9e0566476afae7bd4a2c4d923b031c51d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530cae98ba283038063d533353042d9e0566476afae7bd4a2c4d923b031c51d6->enter($__internal_530cae98ba283038063d533353042d9e0566476afae7bd4a2c4d923b031c51d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_530cae98ba283038063d533353042d9e0566476afae7bd4a2c4d923b031c51d6->leave($__internal_530cae98ba283038063d533353042d9e0566476afae7bd4a2c4d923b031c51d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
