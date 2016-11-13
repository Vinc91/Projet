<?php

/* PWUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a53f03987785b670f706ed33f8593015bac0dd45a54a50e3c7beb26a16d931b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_d0bfff401b14599ee460b0e9f55e0d1cc90ba7b54f2b826ef060158b0f3d6305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bfff401b14599ee460b0e9f55e0d1cc90ba7b54f2b826ef060158b0f3d6305->enter($__internal_d0bfff401b14599ee460b0e9f55e0d1cc90ba7b54f2b826ef060158b0f3d6305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0bfff401b14599ee460b0e9f55e0d1cc90ba7b54f2b826ef060158b0f3d6305->leave($__internal_d0bfff401b14599ee460b0e9f55e0d1cc90ba7b54f2b826ef060158b0f3d6305_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02b7c0300b0d97442fc3c2832ea033a8c3a061d157df67ee6fd2143ea6f22c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b7c0300b0d97442fc3c2832ea033a8c3a061d157df67ee6fd2143ea6f22c93->enter($__internal_02b7c0300b0d97442fc3c2832ea033a8c3a061d157df67ee6fd2143ea6f22c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Registration:confirmed.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_02b7c0300b0d97442fc3c2832ea033a8c3a061d157df67ee6fd2143ea6f22c93->leave($__internal_02b7c0300b0d97442fc3c2832ea033a8c3a061d157df67ee6fd2143ea6f22c93_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "PWUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
