<?php

/* @PWUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_a00ea7177d9f6e34178bb218d65b0e007519717a212d74e73f72e161a1b35f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_1c86840bc6c57f0da49fd80980e8a78ab734d139a9397ac7cf0bf30c606df922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c86840bc6c57f0da49fd80980e8a78ab734d139a9397ac7cf0bf30c606df922->enter($__internal_1c86840bc6c57f0da49fd80980e8a78ab734d139a9397ac7cf0bf30c606df922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c86840bc6c57f0da49fd80980e8a78ab734d139a9397ac7cf0bf30c606df922->leave($__internal_1c86840bc6c57f0da49fd80980e8a78ab734d139a9397ac7cf0bf30c606df922_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51ddb0795aa5533c96fe0a2c523f37e13c637f4124a4f2ce86ff54f0d58d2d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ddb0795aa5533c96fe0a2c523f37e13c637f4124a4f2ce86ff54f0d58d2d29->enter($__internal_51ddb0795aa5533c96fe0a2c523f37e13c637f4124a4f2ce86ff54f0d58d2d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/ChangePassword/change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@PWUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_51ddb0795aa5533c96fe0a2c523f37e13c637f4124a4f2ce86ff54f0d58d2d29->leave($__internal_51ddb0795aa5533c96fe0a2c523f37e13c637f4124a4f2ce86ff54f0d58d2d29_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/ChangePassword/change_password.html.twig";
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
", "@PWUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
