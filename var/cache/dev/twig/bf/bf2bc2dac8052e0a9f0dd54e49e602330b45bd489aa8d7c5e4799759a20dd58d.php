<?php

/* @PWUser/Registration/check_email.html.twig */
class __TwigTemplate_9f684205a7788bf426305031ce436c4621ce339fd72bf5bb6ca136fa15000456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Registration/check_email.html.twig", 1);
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
        $__internal_85b61ad47f1bc87dc7e0a71120cd385be2350d48800cd93832fbd1d95e57da19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b61ad47f1bc87dc7e0a71120cd385be2350d48800cd93832fbd1d95e57da19->enter($__internal_85b61ad47f1bc87dc7e0a71120cd385be2350d48800cd93832fbd1d95e57da19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85b61ad47f1bc87dc7e0a71120cd385be2350d48800cd93832fbd1d95e57da19->leave($__internal_85b61ad47f1bc87dc7e0a71120cd385be2350d48800cd93832fbd1d95e57da19_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7bdceabaabb1041564304343a0aa64a2be010a5fec76c6ee3333ddae0344a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bdceabaabb1041564304343a0aa64a2be010a5fec76c6ee3333ddae0344a2a->enter($__internal_f7bdceabaabb1041564304343a0aa64a2be010a5fec76c6ee3333ddae0344a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Registration/check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f7bdceabaabb1041564304343a0aa64a2be010a5fec76c6ee3333ddae0344a2a->leave($__internal_f7bdceabaabb1041564304343a0aa64a2be010a5fec76c6ee3333ddae0344a2a_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Registration/check_email.html.twig";
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
", "@PWUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
