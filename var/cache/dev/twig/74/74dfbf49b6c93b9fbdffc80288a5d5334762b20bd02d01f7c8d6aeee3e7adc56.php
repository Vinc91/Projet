<?php

/* @PWUser/Group/show_content.html.twig */
class __TwigTemplate_f76029ab6df91f68432b4cc30ef51e825e0a051a5647a5f172a6793afa01ded3 extends Twig_Template
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
        $__internal_a5e376456e6c47592edb45eddc0a563d136d02012c23bc4c725dbf4ff1443671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e376456e6c47592edb45eddc0a563d136d02012c23bc4c725dbf4ff1443671->enter($__internal_a5e376456e6c47592edb45eddc0a563d136d02012c23bc4c725dbf4ff1443671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_a5e376456e6c47592edb45eddc0a563d136d02012c23bc4c725dbf4ff1443671->leave($__internal_a5e376456e6c47592edb45eddc0a563d136d02012c23bc4c725dbf4ff1443671_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@PWUser/Group/show_content.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
