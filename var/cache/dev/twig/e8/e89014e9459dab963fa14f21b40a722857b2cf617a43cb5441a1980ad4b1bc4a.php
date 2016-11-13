<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_989fcdcd1cc68e15d8018de04cbf363c41e5839787b3d2c6fe0cdf2a0a8c7e16 extends Twig_Template
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
        $__internal_0bfbd0b310487ff77257b50e9e3c5001bd9ea34e5be26b25a289579dd521dd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfbd0b310487ff77257b50e9e3c5001bd9ea34e5be26b25a289579dd521dd77->enter($__internal_0bfbd0b310487ff77257b50e9e3c5001bd9ea34e5be26b25a289579dd521dd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0bfbd0b310487ff77257b50e9e3c5001bd9ea34e5be26b25a289579dd521dd77->leave($__internal_0bfbd0b310487ff77257b50e9e3c5001bd9ea34e5be26b25a289579dd521dd77_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_152fa799c3b45bec8b027f1f033ba36cfa7e2f848c06d9fe631702dc254a6910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152fa799c3b45bec8b027f1f033ba36cfa7e2f848c06d9fe631702dc254a6910->enter($__internal_152fa799c3b45bec8b027f1f033ba36cfa7e2f848c06d9fe631702dc254a6910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_152fa799c3b45bec8b027f1f033ba36cfa7e2f848c06d9fe631702dc254a6910->leave($__internal_152fa799c3b45bec8b027f1f033ba36cfa7e2f848c06d9fe631702dc254a6910_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_320f424d09a213e27a8a24ffb8ba2196cd86589363d028f6b93d62f8e7646e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320f424d09a213e27a8a24ffb8ba2196cd86589363d028f6b93d62f8e7646e56->enter($__internal_320f424d09a213e27a8a24ffb8ba2196cd86589363d028f6b93d62f8e7646e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_320f424d09a213e27a8a24ffb8ba2196cd86589363d028f6b93d62f8e7646e56->leave($__internal_320f424d09a213e27a8a24ffb8ba2196cd86589363d028f6b93d62f8e7646e56_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d93c088c4d66794b64fd07e5d6f29d98837917da6657d702c8bfff8060b27e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93c088c4d66794b64fd07e5d6f29d98837917da6657d702c8bfff8060b27e78->enter($__internal_d93c088c4d66794b64fd07e5d6f29d98837917da6657d702c8bfff8060b27e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_d93c088c4d66794b64fd07e5d6f29d98837917da6657d702c8bfff8060b27e78->leave($__internal_d93c088c4d66794b64fd07e5d6f29d98837917da6657d702c8bfff8060b27e78_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
