<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_aee2f0452965dc41d12dbca2f5b4eac57f693c5b7d896294364962b14369d06b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_2f6ffb380c2bf51315246ece9597afb9c873bdd0621409c1406a8a15598d9db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6ffb380c2bf51315246ece9597afb9c873bdd0621409c1406a8a15598d9db0->enter($__internal_2f6ffb380c2bf51315246ece9597afb9c873bdd0621409c1406a8a15598d9db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6ffb380c2bf51315246ece9597afb9c873bdd0621409c1406a8a15598d9db0->leave($__internal_2f6ffb380c2bf51315246ece9597afb9c873bdd0621409c1406a8a15598d9db0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e8118103a8c91d89b2a1058308b10ea768cbb6c2019369401aa80253a04ab73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8118103a8c91d89b2a1058308b10ea768cbb6c2019369401aa80253a04ab73->enter($__internal_9e8118103a8c91d89b2a1058308b10ea768cbb6c2019369401aa80253a04ab73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9e8118103a8c91d89b2a1058308b10ea768cbb6c2019369401aa80253a04ab73->leave($__internal_9e8118103a8c91d89b2a1058308b10ea768cbb6c2019369401aa80253a04ab73_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
