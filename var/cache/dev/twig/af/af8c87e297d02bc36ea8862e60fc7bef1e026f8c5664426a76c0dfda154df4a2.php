<?php

/* @PWUser/Resetting/check_email.html.twig */
class __TwigTemplate_0d31752827f413df7666b723b16abb92772c0791bf0b87ae202e0c40624ab2fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Resetting/check_email.html.twig", 1);
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
        $__internal_576ff9dcb4d3e4122d1cab18839b7830a3beb65a9155a3d1b663ea9be32aa986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576ff9dcb4d3e4122d1cab18839b7830a3beb65a9155a3d1b663ea9be32aa986->enter($__internal_576ff9dcb4d3e4122d1cab18839b7830a3beb65a9155a3d1b663ea9be32aa986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576ff9dcb4d3e4122d1cab18839b7830a3beb65a9155a3d1b663ea9be32aa986->leave($__internal_576ff9dcb4d3e4122d1cab18839b7830a3beb65a9155a3d1b663ea9be32aa986_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ee769a57bc37ffc6ca870b8610ab4fc62c7ec12a132de18aebbb2fb46daa9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee769a57bc37ffc6ca870b8610ab4fc62c7ec12a132de18aebbb2fb46daa9be->enter($__internal_7ee769a57bc37ffc6ca870b8610ab4fc62c7ec12a132de18aebbb2fb46daa9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Resetting/check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_7ee769a57bc37ffc6ca870b8610ab4fc62c7ec12a132de18aebbb2fb46daa9be->leave($__internal_7ee769a57bc37ffc6ca870b8610ab4fc62c7ec12a132de18aebbb2fb46daa9be_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "@PWUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
