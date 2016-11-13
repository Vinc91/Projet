<?php

/* PWUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_c0d5a1d4c645b50dd5c25b5c888ec5812c2e22df7a330940622d4f7d4acc8e95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_9f9ae9ce42cb1b49546584caf8956123b887b701c5aad700e07556081848dab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9ae9ce42cb1b49546584caf8956123b887b701c5aad700e07556081848dab8->enter($__internal_9f9ae9ce42cb1b49546584caf8956123b887b701c5aad700e07556081848dab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9ae9ce42cb1b49546584caf8956123b887b701c5aad700e07556081848dab8->leave($__internal_9f9ae9ce42cb1b49546584caf8956123b887b701c5aad700e07556081848dab8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36aa48dbe779fc4395070047ab1af6ed1291e74efbb32ca86d287ee9ee6e255a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36aa48dbe779fc4395070047ab1af6ed1291e74efbb32ca86d287ee9ee6e255a->enter($__internal_36aa48dbe779fc4395070047ab1af6ed1291e74efbb32ca86d287ee9ee6e255a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "PWUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_36aa48dbe779fc4395070047ab1af6ed1291e74efbb32ca86d287ee9ee6e255a->leave($__internal_36aa48dbe779fc4395070047ab1af6ed1291e74efbb32ca86d287ee9ee6e255a_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:ChangePassword:change_password.html.twig";
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
", "PWUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
