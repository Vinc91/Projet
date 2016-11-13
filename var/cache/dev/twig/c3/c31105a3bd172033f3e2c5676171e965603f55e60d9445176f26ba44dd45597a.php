<?php

/* PWUserBundle:Registration:email.txt.twig */
class __TwigTemplate_82c322fa8fa1b0f618532ee00d5dfedef83475267a22b06bc1f1da4f9ed5d079 extends Twig_Template
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
        $__internal_463ecb7bf8c6879f2c28996045365bd0f8084cbdd1490d4638352548ccd4cf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463ecb7bf8c6879f2c28996045365bd0f8084cbdd1490d4638352548ccd4cf9a->enter($__internal_463ecb7bf8c6879f2c28996045365bd0f8084cbdd1490d4638352548ccd4cf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_463ecb7bf8c6879f2c28996045365bd0f8084cbdd1490d4638352548ccd4cf9a->leave($__internal_463ecb7bf8c6879f2c28996045365bd0f8084cbdd1490d4638352548ccd4cf9a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8dfa0adc4d70cd8f8fb7fd3765f0e89061386e2de9c0c0752d0bb5c2e4be4bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfa0adc4d70cd8f8fb7fd3765f0e89061386e2de9c0c0752d0bb5c2e4be4bd3->enter($__internal_8dfa0adc4d70cd8f8fb7fd3765f0e89061386e2de9c0c0752d0bb5c2e4be4bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8dfa0adc4d70cd8f8fb7fd3765f0e89061386e2de9c0c0752d0bb5c2e4be4bd3->leave($__internal_8dfa0adc4d70cd8f8fb7fd3765f0e89061386e2de9c0c0752d0bb5c2e4be4bd3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9cf01fdd81b8da50563088e83e8a82c1f3f3dcd17c51b0cc9ae572c9de63e45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf01fdd81b8da50563088e83e8a82c1f3f3dcd17c51b0cc9ae572c9de63e45f->enter($__internal_9cf01fdd81b8da50563088e83e8a82c1f3f3dcd17c51b0cc9ae572c9de63e45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9cf01fdd81b8da50563088e83e8a82c1f3f3dcd17c51b0cc9ae572c9de63e45f->leave($__internal_9cf01fdd81b8da50563088e83e8a82c1f3f3dcd17c51b0cc9ae572c9de63e45f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7699ab596eebeb3a035dfac48a93b6e083ddde0fc31f87faa334cf2951860fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7699ab596eebeb3a035dfac48a93b6e083ddde0fc31f87faa334cf2951860fe6->enter($__internal_7699ab596eebeb3a035dfac48a93b6e083ddde0fc31f87faa334cf2951860fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Registration:email.txt.twig"));

        
        $__internal_7699ab596eebeb3a035dfac48a93b6e083ddde0fc31f87faa334cf2951860fe6->leave($__internal_7699ab596eebeb3a035dfac48a93b6e083ddde0fc31f87faa334cf2951860fe6_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Registration:email.txt.twig";
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
", "PWUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
