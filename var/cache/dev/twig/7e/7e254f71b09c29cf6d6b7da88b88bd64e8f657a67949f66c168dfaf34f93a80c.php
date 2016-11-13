<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_75a12e8b17dc40e30d69312f3a39eb1c93e253a6a94ea642ee09fe4f014b6752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_ad2567e0200dff11dcaedbdbefac6dc4ba0defef1a30c66e7fb339503b6d1e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2567e0200dff11dcaedbdbefac6dc4ba0defef1a30c66e7fb339503b6d1e2b->enter($__internal_ad2567e0200dff11dcaedbdbefac6dc4ba0defef1a30c66e7fb339503b6d1e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad2567e0200dff11dcaedbdbefac6dc4ba0defef1a30c66e7fb339503b6d1e2b->leave($__internal_ad2567e0200dff11dcaedbdbefac6dc4ba0defef1a30c66e7fb339503b6d1e2b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14f922f3d6fa527fae186ac374e309d6ca2acfd6d5fd3e5ef96431312a51aff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f922f3d6fa527fae186ac374e309d6ca2acfd6d5fd3e5ef96431312a51aff5->enter($__internal_14f922f3d6fa527fae186ac374e309d6ca2acfd6d5fd3e5ef96431312a51aff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_14f922f3d6fa527fae186ac374e309d6ca2acfd6d5fd3e5ef96431312a51aff5->leave($__internal_14f922f3d6fa527fae186ac374e309d6ca2acfd6d5fd3e5ef96431312a51aff5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
