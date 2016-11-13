<?php

/* @PWUser/Resetting/request.html.twig */
class __TwigTemplate_6c8924eb098ec429903a8a6bc90d45379b1bd80ee6d16194633702922bf75e1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4b2e05239fc4d94b699cdfdc089a0af5aef9c4e481f7a3410ebe64651f4f6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b2e05239fc4d94b699cdfdc089a0af5aef9c4e481f7a3410ebe64651f4f6a0->enter($__internal_e4b2e05239fc4d94b699cdfdc089a0af5aef9c4e481f7a3410ebe64651f4f6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4b2e05239fc4d94b699cdfdc089a0af5aef9c4e481f7a3410ebe64651f4f6a0->leave($__internal_e4b2e05239fc4d94b699cdfdc089a0af5aef9c4e481f7a3410ebe64651f4f6a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a40aa65da12ff3dd74fb463b366fe3176e4ee475e907fe341984f037067cde7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40aa65da12ff3dd74fb463b366fe3176e4ee475e907fe341984f037067cde7d->enter($__internal_a40aa65da12ff3dd74fb463b366fe3176e4ee475e907fe341984f037067cde7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@PWUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_a40aa65da12ff3dd74fb463b366fe3176e4ee475e907fe341984f037067cde7d->leave($__internal_a40aa65da12ff3dd74fb463b366fe3176e4ee475e907fe341984f037067cde7d_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PWUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
