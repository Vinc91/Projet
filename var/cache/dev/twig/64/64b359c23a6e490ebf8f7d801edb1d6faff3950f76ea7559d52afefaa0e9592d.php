<?php

/* PWUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_2eabd664b0d4f9f78c46ca45b9785cbe8b4778bf1a3cdb34c21806d16ac89335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_16e7795eec240e10ad94658aa6937dea14203ecdc2bdf1b7b602bb94185b305d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e7795eec240e10ad94658aa6937dea14203ecdc2bdf1b7b602bb94185b305d->enter($__internal_16e7795eec240e10ad94658aa6937dea14203ecdc2bdf1b7b602bb94185b305d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16e7795eec240e10ad94658aa6937dea14203ecdc2bdf1b7b602bb94185b305d->leave($__internal_16e7795eec240e10ad94658aa6937dea14203ecdc2bdf1b7b602bb94185b305d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2bd53cf9ac7b9581bca29ce6d604752f3e12a9350af32ffb3bde9f28ebba14a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd53cf9ac7b9581bca29ce6d604752f3e12a9350af32ffb3bde9f28ebba14a8->enter($__internal_2bd53cf9ac7b9581bca29ce6d604752f3e12a9350af32ffb3bde9f28ebba14a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2bd53cf9ac7b9581bca29ce6d604752f3e12a9350af32ffb3bde9f28ebba14a8->leave($__internal_2bd53cf9ac7b9581bca29ce6d604752f3e12a9350af32ffb3bde9f28ebba14a8_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "PWUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
