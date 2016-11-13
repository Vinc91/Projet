<?php

/* @PWUser/Profile/show_content.html.twig */
class __TwigTemplate_5f0c5f02c64c2572b2accb6006c659228f11725001c3452e7dda0fbcb7f9fa9d extends Twig_Template
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
        $__internal_14c4297d953091df8faa9b0717060d0c2ca16345a3bf374aa60064eb90c7bfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c4297d953091df8faa9b0717060d0c2ca16345a3bf374aa60064eb90c7bfff->enter($__internal_14c4297d953091df8faa9b0717060d0c2ca16345a3bf374aa60064eb90c7bfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Profile/show_content.html.twig"));

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
        
        $__internal_14c4297d953091df8faa9b0717060d0c2ca16345a3bf374aa60064eb90c7bfff->leave($__internal_14c4297d953091df8faa9b0717060d0c2ca16345a3bf374aa60064eb90c7bfff_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Profile/show_content.html.twig";
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
", "@PWUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
