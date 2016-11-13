<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_af0a57c1b59bfe8adb1fa1649cdfbef581816a027fd88b135f33f33de8622547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_c346b79d7b93ceec2def9b9b117d271a633e3022ffc2e0b620160438142e51ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c346b79d7b93ceec2def9b9b117d271a633e3022ffc2e0b620160438142e51ea->enter($__internal_c346b79d7b93ceec2def9b9b117d271a633e3022ffc2e0b620160438142e51ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c346b79d7b93ceec2def9b9b117d271a633e3022ffc2e0b620160438142e51ea->leave($__internal_c346b79d7b93ceec2def9b9b117d271a633e3022ffc2e0b620160438142e51ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_014eefc8f526245bc503874dc78162165f9e94a5f269d67acbb36a7aa9a12afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014eefc8f526245bc503874dc78162165f9e94a5f269d67acbb36a7aa9a12afe->enter($__internal_014eefc8f526245bc503874dc78162165f9e94a5f269d67acbb36a7aa9a12afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_014eefc8f526245bc503874dc78162165f9e94a5f269d67acbb36a7aa9a12afe->leave($__internal_014eefc8f526245bc503874dc78162165f9e94a5f269d67acbb36a7aa9a12afe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
