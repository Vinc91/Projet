<?php

/* PWUserBundle:Registration:register.html.twig */
class __TwigTemplate_e298a38c9ae7e61355a23bbaef032d2b6b84d682fab410a611773bf25ed22c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Registration:register.html.twig", 1);
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
        $__internal_840f7b7316c2d57d59f542b4ca1dcca8b88f9bdf8fd4f61377adc910501937fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840f7b7316c2d57d59f542b4ca1dcca8b88f9bdf8fd4f61377adc910501937fd->enter($__internal_840f7b7316c2d57d59f542b4ca1dcca8b88f9bdf8fd4f61377adc910501937fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_840f7b7316c2d57d59f542b4ca1dcca8b88f9bdf8fd4f61377adc910501937fd->leave($__internal_840f7b7316c2d57d59f542b4ca1dcca8b88f9bdf8fd4f61377adc910501937fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c43a85f5977b3f5b60565aabb10e2b279ddd1e368424f0134f57940556e82b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c43a85f5977b3f5b60565aabb10e2b279ddd1e368424f0134f57940556e82b9->enter($__internal_8c43a85f5977b3f5b60565aabb10e2b279ddd1e368424f0134f57940556e82b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "PWUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8c43a85f5977b3f5b60565aabb10e2b279ddd1e368424f0134f57940556e82b9->leave($__internal_8c43a85f5977b3f5b60565aabb10e2b279ddd1e368424f0134f57940556e82b9_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "PWUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
