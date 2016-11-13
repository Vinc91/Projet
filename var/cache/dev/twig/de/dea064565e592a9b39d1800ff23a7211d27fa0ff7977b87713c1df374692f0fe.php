<?php

/* @PWUser/Resetting/email.txt.twig */
class __TwigTemplate_a103ca23dd147a9e3d249952b94df3319329c770c7400701199bf184515fcff9 extends Twig_Template
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
        $__internal_e8b6ac090f101c8988d7e7d96b2b2ba111e141e5d5193adf26fe3866862407bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b6ac090f101c8988d7e7d96b2b2ba111e141e5d5193adf26fe3866862407bd->enter($__internal_e8b6ac090f101c8988d7e7d96b2b2ba111e141e5d5193adf26fe3866862407bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e8b6ac090f101c8988d7e7d96b2b2ba111e141e5d5193adf26fe3866862407bd->leave($__internal_e8b6ac090f101c8988d7e7d96b2b2ba111e141e5d5193adf26fe3866862407bd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b20caac921738085996af5dc16ed4d1b9c0812d67f11173cc42610a91c8779ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20caac921738085996af5dc16ed4d1b9c0812d67f11173cc42610a91c8779ad->enter($__internal_b20caac921738085996af5dc16ed4d1b9c0812d67f11173cc42610a91c8779ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b20caac921738085996af5dc16ed4d1b9c0812d67f11173cc42610a91c8779ad->leave($__internal_b20caac921738085996af5dc16ed4d1b9c0812d67f11173cc42610a91c8779ad_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_63e90cfbd278f539435d6a58f59ce525c401028d6db44753819fb0e2dcf45918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e90cfbd278f539435d6a58f59ce525c401028d6db44753819fb0e2dcf45918->enter($__internal_63e90cfbd278f539435d6a58f59ce525c401028d6db44753819fb0e2dcf45918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_63e90cfbd278f539435d6a58f59ce525c401028d6db44753819fb0e2dcf45918->leave($__internal_63e90cfbd278f539435d6a58f59ce525c401028d6db44753819fb0e2dcf45918_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_93a06d0b895edacacc66b2fef17dbedbd06a11f7a4607fa269f5a8d5c4620a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a06d0b895edacacc66b2fef17dbedbd06a11f7a4607fa269f5a8d5c4620a47->enter($__internal_93a06d0b895edacacc66b2fef17dbedbd06a11f7a4607fa269f5a8d5c4620a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Resetting/email.txt.twig"));

        
        $__internal_93a06d0b895edacacc66b2fef17dbedbd06a11f7a4607fa269f5a8d5c4620a47->leave($__internal_93a06d0b895edacacc66b2fef17dbedbd06a11f7a4607fa269f5a8d5c4620a47_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Resetting/email.txt.twig";
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
", "@PWUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
