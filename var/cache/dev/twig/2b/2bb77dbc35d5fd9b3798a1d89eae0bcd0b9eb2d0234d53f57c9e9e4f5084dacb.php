<?php

/* @CoreSphereConsole/Toolbar/toolbar.html.twig */
class __TwigTemplate_974c230045f16f9de2fd9b5367d79d74b746601113c74a6640b9fda2ebdae7fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "@CoreSphereConsole/Toolbar/toolbar.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d33637c00c4de034589b54a54fdb848c1bb169dabed53857daa4f8c05e74caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d33637c00c4de034589b54a54fdb848c1bb169dabed53857daa4f8c05e74caf->enter($__internal_6d33637c00c4de034589b54a54fdb848c1bb169dabed53857daa4f8c05e74caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d33637c00c4de034589b54a54fdb848c1bb169dabed53857daa4f8c05e74caf->leave($__internal_6d33637c00c4de034589b54a54fdb848c1bb169dabed53857daa4f8c05e74caf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05e1438e0bc11452f438f17aa537578d7546c76ffc72cd701fe1be9bd0fa0509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e1438e0bc11452f438f17aa537578d7546c76ffc72cd701fe1be9bd0fa0509->enter($__internal_05e1438e0bc11452f438f17aa537578d7546c76ffc72cd701fe1be9bd0fa0509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "@CoreSphereConsole/Toolbar/toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_05e1438e0bc11452f438f17aa537578d7546c76ffc72cd701fe1be9bd0fa0509->leave($__internal_05e1438e0bc11452f438f17aa537578d7546c76ffc72cd701fe1be9bd0fa0509_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Toolbar/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  57 => 13,  54 => 12,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('console') }}\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    {% endset %}
    {% set text %}Console{% endset %}

    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "@CoreSphereConsole/Toolbar/toolbar.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\coresphere\\console-bundle\\Resources\\views\\Toolbar\\toolbar.html.twig");
    }
}
