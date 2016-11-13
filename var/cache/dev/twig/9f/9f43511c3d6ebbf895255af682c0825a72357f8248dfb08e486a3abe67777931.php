<?php

/* @PWUser/Resetting/reset.html.twig */
class __TwigTemplate_fefbb5ef4695549776bbd02356635b8f713b677424b352170376de0c4f0b4293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Resetting/reset.html.twig", 1);
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
        $__internal_a21db05643a0a41f8ec6074d21df777e976a8b703fa286c1a416224c0155852a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21db05643a0a41f8ec6074d21df777e976a8b703fa286c1a416224c0155852a->enter($__internal_a21db05643a0a41f8ec6074d21df777e976a8b703fa286c1a416224c0155852a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a21db05643a0a41f8ec6074d21df777e976a8b703fa286c1a416224c0155852a->leave($__internal_a21db05643a0a41f8ec6074d21df777e976a8b703fa286c1a416224c0155852a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35278335ff3f14f40ff32a2c947443b646e3560133868f1c00358b740226c5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35278335ff3f14f40ff32a2c947443b646e3560133868f1c00358b740226c5a2->enter($__internal_35278335ff3f14f40ff32a2c947443b646e3560133868f1c00358b740226c5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@PWUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_35278335ff3f14f40ff32a2c947443b646e3560133868f1c00358b740226c5a2->leave($__internal_35278335ff3f14f40ff32a2c947443b646e3560133868f1c00358b740226c5a2_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PWUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
