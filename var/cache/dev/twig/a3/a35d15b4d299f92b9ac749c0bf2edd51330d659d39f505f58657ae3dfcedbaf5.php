<?php

/* PWProgresSiesBundle:ProgresSies:update.html.twig */
class __TwigTemplate_9be9bbbdaa87813f39f9fd9d63f9bb3a197799b10a62f8f893c33a7596ff6db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "PWProgresSiesBundle:ProgresSies:update.html.twig", 1);
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
        $__internal_52088a8914366010fb8be1001306080e905ca94f0e3239bf85e05e49a1fda48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52088a8914366010fb8be1001306080e905ca94f0e3239bf85e05e49a1fda48b->enter($__internal_52088a8914366010fb8be1001306080e905ca94f0e3239bf85e05e49a1fda48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWProgresSiesBundle:ProgresSies:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52088a8914366010fb8be1001306080e905ca94f0e3239bf85e05e49a1fda48b->leave($__internal_52088a8914366010fb8be1001306080e905ca94f0e3239bf85e05e49a1fda48b_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ced240ddec20ccefc71a09d7ffd3c25cedaa9271c8c5dc2b2b7cd3bd99aab090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced240ddec20ccefc71a09d7ffd3c25cedaa9271c8c5dc2b2b7cd3bd99aab090->enter($__internal_ced240ddec20ccefc71a09d7ffd3c25cedaa9271c8c5dc2b2b7cd3bd99aab090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWProgresSiesBundle:ProgresSies:update.html.twig"));

        // line 4
        echo "      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
";
        
        $__internal_ced240ddec20ccefc71a09d7ffd3c25cedaa9271c8c5dc2b2b7cd3bd99aab090->leave($__internal_ced240ddec20ccefc71a09d7ffd3c25cedaa9271c8c5dc2b2b7cd3bd99aab090_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5bdc26e691effd7ed86a55f144e8e34b4e0cfe06a33e5a9aaf2b0be7fbc02b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdc26e691effd7ed86a55f144e8e34b4e0cfe06a33e5a9aaf2b0be7fbc02b69->enter($__internal_5bdc26e691effd7ed86a55f144e8e34b4e0cfe06a33e5a9aaf2b0be7fbc02b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWProgresSiesBundle:ProgresSies:update.html.twig"));

        // line 10
        echo "    <div id=\"menu\" class=\"col-md-3\">
      <h3> Dernières séries suivies </h3>

      ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PWProgresSiesBundle:ProgresSies:menu"));
        echo "
    </div>
    ";
        
        $__internal_5bdc26e691effd7ed86a55f144e8e34b4e0cfe06a33e5a9aaf2b0be7fbc02b69->leave($__internal_5bdc26e691effd7ed86a55f144e8e34b4e0cfe06a33e5a9aaf2b0be7fbc02b69_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_57547e103af0bf2411382f13f6fd163ccc68dbd0383fb41d9f4ee62c623e0234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57547e103af0bf2411382f13f6fd163ccc68dbd0383fb41d9f4ee62c623e0234->enter($__internal_57547e103af0bf2411382f13f6fd163ccc68dbd0383fb41d9f4ee62c623e0234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWProgresSiesBundle:ProgresSies:update.html.twig"));

        // line 18
        echo "\t<h3> Modifier votre série </h3>
\t";
        // line 19
        echo twig_include($this->env, $context, "PWProgresSiesBundle:ProgresSies:formedit.html.twig");
        echo "
";
        
        $__internal_57547e103af0bf2411382f13f6fd163ccc68dbd0383fb41d9f4ee62c623e0234->leave($__internal_57547e103af0bf2411382f13f6fd163ccc68dbd0383fb41d9f4ee62c623e0234_prof);

    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle:ProgresSies:update.html.twig";
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
{% endblock %}", "PWProgresSiesBundle:ProgresSies:update.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/ProgresSies/update.html.twig");
    }
}
