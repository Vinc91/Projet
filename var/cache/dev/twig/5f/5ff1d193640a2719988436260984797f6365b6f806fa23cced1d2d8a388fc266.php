<?php

/* PWUserBundle:Group:show_content.html.twig */
class __TwigTemplate_1ad44db6e782a75bf61a4dac1da62895a24b986dbba890b0fa9903a470685b24 extends Twig_Template
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
        $__internal_8666ab0a938c3b530272e4920c972d5ca4d8e35cbb2a6ff7ce4ed4b75ff6585a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8666ab0a938c3b530272e4920c972d5ca4d8e35cbb2a6ff7ce4ed4b75ff6585a->enter($__internal_8666ab0a938c3b530272e4920c972d5ca4d8e35cbb2a6ff7ce4ed4b75ff6585a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_8666ab0a938c3b530272e4920c972d5ca4d8e35cbb2a6ff7ce4ed4b75ff6585a->leave($__internal_8666ab0a938c3b530272e4920c972d5ca4d8e35cbb2a6ff7ce4ed4b75ff6585a_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Group:show_content.html.twig";
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
", "PWUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Group/show_content.html.twig");
    }
}
