<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e294a6dce3c8e8b5bcaa400124481d9834a46dce83a82124f52d817ab77ebba9 extends Twig_Template
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
        $__internal_4aa06b38806c5202256115224ca7c793d3422735ff09c28d8ca397c2b39825c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa06b38806c5202256115224ca7c793d3422735ff09c28d8ca397c2b39825c6->enter($__internal_4aa06b38806c5202256115224ca7c793d3422735ff09c28d8ca397c2b39825c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4aa06b38806c5202256115224ca7c793d3422735ff09c28d8ca397c2b39825c6->leave($__internal_4aa06b38806c5202256115224ca7c793d3422735ff09c28d8ca397c2b39825c6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4b1d14dbef51b756b2394add5342202ac2df0d62408b0adace935cd0fc80a5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1d14dbef51b756b2394add5342202ac2df0d62408b0adace935cd0fc80a5c0->enter($__internal_4b1d14dbef51b756b2394add5342202ac2df0d62408b0adace935cd0fc80a5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4b1d14dbef51b756b2394add5342202ac2df0d62408b0adace935cd0fc80a5c0->leave($__internal_4b1d14dbef51b756b2394add5342202ac2df0d62408b0adace935cd0fc80a5c0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7f939fc7b427ccf672b90451238cfd12e95e5d265509b85222c9c294d742d00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f939fc7b427ccf672b90451238cfd12e95e5d265509b85222c9c294d742d00e->enter($__internal_7f939fc7b427ccf672b90451238cfd12e95e5d265509b85222c9c294d742d00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7f939fc7b427ccf672b90451238cfd12e95e5d265509b85222c9c294d742d00e->leave($__internal_7f939fc7b427ccf672b90451238cfd12e95e5d265509b85222c9c294d742d00e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ff5b41b7be5f7575714e5e8cc41d17a73bd3bb66ce9cd585a828026fd40174f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5b41b7be5f7575714e5e8cc41d17a73bd3bb66ce9cd585a828026fd40174f5->enter($__internal_ff5b41b7be5f7575714e5e8cc41d17a73bd3bb66ce9cd585a828026fd40174f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_ff5b41b7be5f7575714e5e8cc41d17a73bd3bb66ce9cd585a828026fd40174f5->leave($__internal_ff5b41b7be5f7575714e5e8cc41d17a73bd3bb66ce9cd585a828026fd40174f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
