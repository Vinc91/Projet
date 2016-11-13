<?php

/* PWProgresSiesBundle::show_content.html.twig */
class __TwigTemplate_a823dc042e664093c1cc6348cf9ae866d3caa95d19140232c87fa78e6ed40f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0fb01a46b2a2ec639468ca9156de1836d7b17e6c79f16b9a806d6c9a993b396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fb01a46b2a2ec639468ca9156de1836d7b17e6c79f16b9a806d6c9a993b396->enter($__internal_e0fb01a46b2a2ec639468ca9156de1836d7b17e6c79f16b9a806d6c9a993b396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWProgresSiesBundle::show_content.html.twig"));

        // line 2
        echo "<h3><strong>Mes informations</strong></h3></br>
<div class=\"well fos_user_user_show\">
    <p>";
        // line 5
        echo "    <strong>Nom d'utilisateur</strong>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo "    <strong>Adresse e-mail</strong>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e0fb01a46b2a2ec639468ca9156de1836d7b17e6c79f16b9a806d6c9a993b396->leave($__internal_e0fb01a46b2a2ec639468ca9156de1836d7b17e6c79f16b9a806d6c9a993b396_prof);

    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle::show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  26 => 5,  22 => 2,);
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
<h3><strong>Mes informations</strong></h3></br>
<div class=\"well fos_user_user_show\">
    <p>{# 'profile.show.username'|trans #}
    <strong>Nom d'utilisateur</strong>: {{ user.username }}</p>
    <p>{# 'profile.show.email'|trans #}
    <strong>Adresse e-mail</strong>: {{ user.email }}</p>
</div>
", "PWProgresSiesBundle::show_content.html.twig", "C:\\wamp64\\www\\Bla-master\\app/Resources/PWProgresSiesBundle/views/show_content.html.twig");
    }
}
