<?php

/* PWUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_7b0e96dd5085758e62c1346e26f86c0372eaa154f7a429cfdbfcbc82b1edb853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_c4af7523870233b982c54af61cf0ca92176448068bee92baecb521bbeaa643fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4af7523870233b982c54af61cf0ca92176448068bee92baecb521bbeaa643fc->enter($__internal_c4af7523870233b982c54af61cf0ca92176448068bee92baecb521bbeaa643fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4af7523870233b982c54af61cf0ca92176448068bee92baecb521bbeaa643fc->leave($__internal_c4af7523870233b982c54af61cf0ca92176448068bee92baecb521bbeaa643fc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc4a9d77e3f2505b34f04961dca1591f094f2e72f274c7233feecd9664f3891f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4a9d77e3f2505b34f04961dca1591f094f2e72f274c7233feecd9664f3891f->enter($__internal_cc4a9d77e3f2505b34f04961dca1591f094f2e72f274c7233feecd9664f3891f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Resetting:check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_cc4a9d77e3f2505b34f04961dca1591f094f2e72f274c7233feecd9664f3891f->leave($__internal_cc4a9d77e3f2505b34f04961dca1591f094f2e72f274c7233feecd9664f3891f_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Resetting:check_email.html.twig";
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
", "PWUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
