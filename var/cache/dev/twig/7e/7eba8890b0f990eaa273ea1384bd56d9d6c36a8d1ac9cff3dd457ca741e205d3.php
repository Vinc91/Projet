<?php

/* @PWUser/Profile/show.html.twig */
class __TwigTemplate_1d4f2d54383291fa2af7fccbc74c8ce8a21dba9d1f998feef47d8f147b521b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Profile/show.html.twig", 1);
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
        $__internal_2d4559f38391dff77bd2449a9453c009191c84c930ad294e6bfd1744c1954c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4559f38391dff77bd2449a9453c009191c84c930ad294e6bfd1744c1954c35->enter($__internal_2d4559f38391dff77bd2449a9453c009191c84c930ad294e6bfd1744c1954c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d4559f38391dff77bd2449a9453c009191c84c930ad294e6bfd1744c1954c35->leave($__internal_2d4559f38391dff77bd2449a9453c009191c84c930ad294e6bfd1744c1954c35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_818721bc9ac56e0fc6952d37d0907abe0dc6b37b766d0e31c6adf5019424d3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818721bc9ac56e0fc6952d37d0907abe0dc6b37b766d0e31c6adf5019424d3f1->enter($__internal_818721bc9ac56e0fc6952d37d0907abe0dc6b37b766d0e31c6adf5019424d3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Profile/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@PWUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_818721bc9ac56e0fc6952d37d0907abe0dc6b37b766d0e31c6adf5019424d3f1->leave($__internal_818721bc9ac56e0fc6952d37d0907abe0dc6b37b766d0e31c6adf5019424d3f1_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PWUser/Profile/show.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
