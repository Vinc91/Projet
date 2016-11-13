<?php

/* @PWUser/Registration/confirmed.html.twig */
class __TwigTemplate_98efca998792bc61200e0780935e6269703d431af1e8fea8e8ad3177051f960a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Registration/confirmed.html.twig", 1);
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
        $__internal_49682384e16e5abbbccd3f1b7eeaa8f551aefe0b1c4503b1d6d39f8a4972d9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49682384e16e5abbbccd3f1b7eeaa8f551aefe0b1c4503b1d6d39f8a4972d9b8->enter($__internal_49682384e16e5abbbccd3f1b7eeaa8f551aefe0b1c4503b1d6d39f8a4972d9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49682384e16e5abbbccd3f1b7eeaa8f551aefe0b1c4503b1d6d39f8a4972d9b8->leave($__internal_49682384e16e5abbbccd3f1b7eeaa8f551aefe0b1c4503b1d6d39f8a4972d9b8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75f4bea436c91eb9f8f7e930d67433a678e74060a51a9ef99b431e1f70d9440b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f4bea436c91eb9f8f7e930d67433a678e74060a51a9ef99b431e1f70d9440b->enter($__internal_75f4bea436c91eb9f8f7e930d67433a678e74060a51a9ef99b431e1f70d9440b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Registration/confirmed.html.twig"));

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
        
        $__internal_75f4bea436c91eb9f8f7e930d67433a678e74060a51a9ef99b431e1f70d9440b->leave($__internal_75f4bea436c91eb9f8f7e930d67433a678e74060a51a9ef99b431e1f70d9440b_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Registration/confirmed.html.twig";
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
", "@PWUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
