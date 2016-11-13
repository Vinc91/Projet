<?php

/* @PWProgresSies/ProgresSies/update.html.twig */
class __TwigTemplate_eebd8ec67f46adcfc939fd750442a2d450097bac1cb22c45d9a76d3c05e98bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "@PWProgresSies/ProgresSies/update.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWProgresSiesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bace8a51755d1e022356c88631bb587ced42cc7db151250d7d3939ac28a9563c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bace8a51755d1e022356c88631bb587ced42cc7db151250d7d3939ac28a9563c->enter($__internal_bace8a51755d1e022356c88631bb587ced42cc7db151250d7d3939ac28a9563c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWProgresSies/ProgresSies/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bace8a51755d1e022356c88631bb587ced42cc7db151250d7d3939ac28a9563c->leave($__internal_bace8a51755d1e022356c88631bb587ced42cc7db151250d7d3939ac28a9563c_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_9de65dd3abd018740f289afaf2964d3479871067a914f5c4fc653e852e873e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de65dd3abd018740f289afaf2964d3479871067a914f5c4fc653e852e873e83->enter($__internal_9de65dd3abd018740f289afaf2964d3479871067a914f5c4fc653e852e873e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/update.html.twig"));

        // line 4
        echo "      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
";
        
        $__internal_9de65dd3abd018740f289afaf2964d3479871067a914f5c4fc653e852e873e83->leave($__internal_9de65dd3abd018740f289afaf2964d3479871067a914f5c4fc653e852e873e83_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $__internal_901c8bf69d7f35f5a3cbacfa09cbe0531a663f3b5089a0e5e1b78a9e013c273e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901c8bf69d7f35f5a3cbacfa09cbe0531a663f3b5089a0e5e1b78a9e013c273e->enter($__internal_901c8bf69d7f35f5a3cbacfa09cbe0531a663f3b5089a0e5e1b78a9e013c273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/update.html.twig"));

        // line 10
        echo "    <div id=\"menu\" class=\"col-md-3\">
      <h3> Dernières séries suivies </h3>

      ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PWProgresSiesBundle:ProgresSies:menu"));
        echo "
    </div>
    ";
        
        $__internal_901c8bf69d7f35f5a3cbacfa09cbe0531a663f3b5089a0e5e1b78a9e013c273e->leave($__internal_901c8bf69d7f35f5a3cbacfa09cbe0531a663f3b5089a0e5e1b78a9e013c273e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eab2dd11ecd3f9125de4223579241926e20b0b1dd3ec270178ed81b36c265fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eab2dd11ecd3f9125de4223579241926e20b0b1dd3ec270178ed81b36c265fd->enter($__internal_1eab2dd11ecd3f9125de4223579241926e20b0b1dd3ec270178ed81b36c265fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/update.html.twig"));

        // line 18
        echo "\t<h3> Modifier votre série </h3>
\t";
        // line 19
        echo twig_include($this->env, $context, "PWProgresSiesBundle:ProgresSies:formedit.html.twig");
        echo "
";
        
        $__internal_1eab2dd11ecd3f9125de4223579241926e20b0b1dd3ec270178ed81b36c265fd->leave($__internal_1eab2dd11ecd3f9125de4223579241926e20b0b1dd3ec270178ed81b36c265fd_prof);

    }

    public function getTemplateName()
    {
        return "@PWProgresSies/ProgresSies/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  79 => 18,  73 => 17,  63 => 13,  58 => 10,  52 => 9,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PWProgresSiesBundle::layout.html.twig\" %}

{% block header %}
      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
{% endblock %}

    {% block menu %}
    <div id=\"menu\" class=\"col-md-3\">
      <h3> Dernières séries suivies </h3>

      {{ render(controller(\"PWProgresSiesBundle:ProgresSies:menu\")) }}
    </div>
    {% endblock %}

{% block body %}
\t<h3> Modifier votre série </h3>
\t{{ include(\"PWProgresSiesBundle:ProgresSies:formedit.html.twig\") }}
{% endblock %}", "@PWProgresSies/ProgresSies/update.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\ProgresSies\\update.html.twig");
    }
}
