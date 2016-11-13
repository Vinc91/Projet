<?php

/* @PWUser/Group/show.html.twig */
class __TwigTemplate_1414d8ed225279d19fc50ab1441ecf8dd551fee29fe78cd0ed03f08bea12d826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Group/show.html.twig", 1);
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
        $__internal_ab8c35d0985d7a8f3bc3ef5810deb2e008878872f808aa3332ba7c72232a85d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8c35d0985d7a8f3bc3ef5810deb2e008878872f808aa3332ba7c72232a85d6->enter($__internal_ab8c35d0985d7a8f3bc3ef5810deb2e008878872f808aa3332ba7c72232a85d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab8c35d0985d7a8f3bc3ef5810deb2e008878872f808aa3332ba7c72232a85d6->leave($__internal_ab8c35d0985d7a8f3bc3ef5810deb2e008878872f808aa3332ba7c72232a85d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14b5ac4a8682d7d9d03efc079b4fafe0f0926eabc412397b375ef576301bd502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b5ac4a8682d7d9d03efc079b4fafe0f0926eabc412397b375ef576301bd502->enter($__internal_14b5ac4a8682d7d9d03efc079b4fafe0f0926eabc412397b375ef576301bd502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Group/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@PWUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_14b5ac4a8682d7d9d03efc079b4fafe0f0926eabc412397b375ef576301bd502->leave($__internal_14b5ac4a8682d7d9d03efc079b4fafe0f0926eabc412397b375ef576301bd502_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PWUser/Group/show.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
