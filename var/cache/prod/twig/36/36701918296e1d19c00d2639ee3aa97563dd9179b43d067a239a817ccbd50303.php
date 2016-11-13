<?php

/* PWProgresSiesBundle::show_content.html.twig */
class __TwigTemplate_29f7c69f6930d6cd1cc76eaacdaa12f0c57e46b56d653dbdb1591af8a7a16b36 extends Twig_Template
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
        // line 2
        echo "<h3><strong>Mes informations</strong></h3></br>
<div class=\"well fos_user_user_show\">
    <p>";
        // line 5
        echo "    <strong>Nom d'utilisateur</strong>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo "    <strong>Adresse e-mail</strong>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</p>
</div>
";
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
        return array (  28 => 7,  23 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PWProgresSiesBundle::show_content.html.twig", "C:\\wamp64\\www\\Bla-master\\app/Resources/PWProgresSiesBundle/views/show_content.html.twig");
    }
}
