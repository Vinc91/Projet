<?php

/* @PWUser/Registration/email.txt.twig */
class __TwigTemplate_baed151010c70f666bb2c84e22e891c8885d5f673c27a869155b7c1d49cccdec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f62e4b59f7cfd9bbe96d3a20f817b714bb103d1d67f0ad61fff190f9b074ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f62e4b59f7cfd9bbe96d3a20f817b714bb103d1d67f0ad61fff190f9b074ff8->enter($__internal_5f62e4b59f7cfd9bbe96d3a20f817b714bb103d1d67f0ad61fff190f9b074ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5f62e4b59f7cfd9bbe96d3a20f817b714bb103d1d67f0ad61fff190f9b074ff8->leave($__internal_5f62e4b59f7cfd9bbe96d3a20f817b714bb103d1d67f0ad61fff190f9b074ff8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e327b1bf86b57df488b70d138f1b0606a8732595798b16e88bb494f1aee83ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e327b1bf86b57df488b70d138f1b0606a8732595798b16e88bb494f1aee83ca8->enter($__internal_e327b1bf86b57df488b70d138f1b0606a8732595798b16e88bb494f1aee83ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e327b1bf86b57df488b70d138f1b0606a8732595798b16e88bb494f1aee83ca8->leave($__internal_e327b1bf86b57df488b70d138f1b0606a8732595798b16e88bb494f1aee83ca8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_37a4c22869f1afedeabfbe49eb5bb8f1a4b69dcc2b4e56deda047f86bc54ec5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a4c22869f1afedeabfbe49eb5bb8f1a4b69dcc2b4e56deda047f86bc54ec5c->enter($__internal_37a4c22869f1afedeabfbe49eb5bb8f1a4b69dcc2b4e56deda047f86bc54ec5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_37a4c22869f1afedeabfbe49eb5bb8f1a4b69dcc2b4e56deda047f86bc54ec5c->leave($__internal_37a4c22869f1afedeabfbe49eb5bb8f1a4b69dcc2b4e56deda047f86bc54ec5c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_90aba0378652893fbd261a4ba866800e722bd5bbff216619338fc0807c36c892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90aba0378652893fbd261a4ba866800e722bd5bbff216619338fc0807c36c892->enter($__internal_90aba0378652893fbd261a4ba866800e722bd5bbff216619338fc0807c36c892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Registration/email.txt.twig"));

        
        $__internal_90aba0378652893fbd261a4ba866800e722bd5bbff216619338fc0807c36c892->leave($__internal_90aba0378652893fbd261a4ba866800e722bd5bbff216619338fc0807c36c892_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@PWUser/Registration/email.txt.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
