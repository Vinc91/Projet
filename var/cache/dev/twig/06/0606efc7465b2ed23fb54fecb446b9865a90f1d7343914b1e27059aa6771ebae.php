<?php

/* PWUserBundle:Group:edit.html.twig */
class __TwigTemplate_4d10dac14bc0478c303e7d1ba33714ba47215503c304b767d6eac703ced05bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Group:edit.html.twig", 1);
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
        $__internal_08a81dfa547f902e863674ecb8cb769c6b5e2e3156251d91d78cd6ee65d187c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a81dfa547f902e863674ecb8cb769c6b5e2e3156251d91d78cd6ee65d187c3->enter($__internal_08a81dfa547f902e863674ecb8cb769c6b5e2e3156251d91d78cd6ee65d187c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a81dfa547f902e863674ecb8cb769c6b5e2e3156251d91d78cd6ee65d187c3->leave($__internal_08a81dfa547f902e863674ecb8cb769c6b5e2e3156251d91d78cd6ee65d187c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4775ef2906bd01a98c61cc26d79610291df2e7d3073f14af6300cf0976d55310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4775ef2906bd01a98c61cc26d79610291df2e7d3073f14af6300cf0976d55310->enter($__internal_4775ef2906bd01a98c61cc26d79610291df2e7d3073f14af6300cf0976d55310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "PWUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4775ef2906bd01a98c61cc26d79610291df2e7d3073f14af6300cf0976d55310->leave($__internal_4775ef2906bd01a98c61cc26d79610291df2e7d3073f14af6300cf0976d55310_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "PWUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Group/edit.html.twig");
    }
}
