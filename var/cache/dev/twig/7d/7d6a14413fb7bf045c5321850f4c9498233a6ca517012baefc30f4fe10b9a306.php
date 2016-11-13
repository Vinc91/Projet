<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_dc5f32c80e0b79ce3c2a0e204ccaceb1d7eceefd6c33ff05a2c5275668fa9d95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_02be14e54aa7ae74d9d3f7322f1f15567682621c0dae4fa6d0583df8b9fc030f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02be14e54aa7ae74d9d3f7322f1f15567682621c0dae4fa6d0583df8b9fc030f->enter($__internal_02be14e54aa7ae74d9d3f7322f1f15567682621c0dae4fa6d0583df8b9fc030f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02be14e54aa7ae74d9d3f7322f1f15567682621c0dae4fa6d0583df8b9fc030f->leave($__internal_02be14e54aa7ae74d9d3f7322f1f15567682621c0dae4fa6d0583df8b9fc030f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60bdcb9f37bf8387c9ea0bbc445890f743750c7ca21328c9022dece601f824ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bdcb9f37bf8387c9ea0bbc445890f743750c7ca21328c9022dece601f824ae->enter($__internal_60bdcb9f37bf8387c9ea0bbc445890f743750c7ca21328c9022dece601f824ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/ChangePassword/change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_60bdcb9f37bf8387c9ea0bbc445890f743750c7ca21328c9022dece601f824ae->leave($__internal_60bdcb9f37bf8387c9ea0bbc445890f743750c7ca21328c9022dece601f824ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
