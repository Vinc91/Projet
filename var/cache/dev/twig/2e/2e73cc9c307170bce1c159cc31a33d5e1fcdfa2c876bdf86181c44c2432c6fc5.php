<?php

/* PWUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_047288105d27529e28363738bee51c613a95ffd15d171695a57e98b596a8aedb extends Twig_Template
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
        $__internal_a7b12041ffb50a99dbdd9f62d381c79ae3d400eba67a8eb810abadd090beb131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b12041ffb50a99dbdd9f62d381c79ae3d400eba67a8eb810abadd090beb131->enter($__internal_a7b12041ffb50a99dbdd9f62d381c79ae3d400eba67a8eb810abadd090beb131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a7b12041ffb50a99dbdd9f62d381c79ae3d400eba67a8eb810abadd090beb131->leave($__internal_a7b12041ffb50a99dbdd9f62d381c79ae3d400eba67a8eb810abadd090beb131_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6957e81baed70bc042fdf8763df1e2b1713cb621e0cb74fd418cf64f40fd8d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6957e81baed70bc042fdf8763df1e2b1713cb621e0cb74fd418cf64f40fd8d06->enter($__internal_6957e81baed70bc042fdf8763df1e2b1713cb621e0cb74fd418cf64f40fd8d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6957e81baed70bc042fdf8763df1e2b1713cb621e0cb74fd418cf64f40fd8d06->leave($__internal_6957e81baed70bc042fdf8763df1e2b1713cb621e0cb74fd418cf64f40fd8d06_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_797bbc827ca78f9fa89ed23bb784f2439ed52ec57652669423f80a27c823802a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797bbc827ca78f9fa89ed23bb784f2439ed52ec57652669423f80a27c823802a->enter($__internal_797bbc827ca78f9fa89ed23bb784f2439ed52ec57652669423f80a27c823802a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_797bbc827ca78f9fa89ed23bb784f2439ed52ec57652669423f80a27c823802a->leave($__internal_797bbc827ca78f9fa89ed23bb784f2439ed52ec57652669423f80a27c823802a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_10f772311d9e4385354aafc4cc99c0b33345b22653297140899bc23a5c1262b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f772311d9e4385354aafc4cc99c0b33345b22653297140899bc23a5c1262b9->enter($__internal_10f772311d9e4385354aafc4cc99c0b33345b22653297140899bc23a5c1262b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Resetting:email.txt.twig"));

        
        $__internal_10f772311d9e4385354aafc4cc99c0b33345b22653297140899bc23a5c1262b9->leave($__internal_10f772311d9e4385354aafc4cc99c0b33345b22653297140899bc23a5c1262b9_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "PWUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
