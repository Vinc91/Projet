<?php

/* PWUserBundle:Security:login.html.twig */
class __TwigTemplate_c48fa8ee6f424da10830e9a4fb71c22e757a5c6146ec59ce5f52c2ab73f1a64f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Security:login.html.twig", 1);
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
        $__internal_58e9069f4d1dcb0cf97a914bb9daa3d413657e16513ebfb6ef65b9894d50fce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e9069f4d1dcb0cf97a914bb9daa3d413657e16513ebfb6ef65b9894d50fce0->enter($__internal_58e9069f4d1dcb0cf97a914bb9daa3d413657e16513ebfb6ef65b9894d50fce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58e9069f4d1dcb0cf97a914bb9daa3d413657e16513ebfb6ef65b9894d50fce0->leave($__internal_58e9069f4d1dcb0cf97a914bb9daa3d413657e16513ebfb6ef65b9894d50fce0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d10abff7fb6c59f168889942983f7ebad2bb5df033b07816389d64b33c469bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10abff7fb6c59f168889942983f7ebad2bb5df033b07816389d64b33c469bb5->enter($__internal_d10abff7fb6c59f168889942983f7ebad2bb5df033b07816389d64b33c469bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_d10abff7fb6c59f168889942983f7ebad2bb5df033b07816389d64b33c469bb5->leave($__internal_d10abff7fb6c59f168889942983f7ebad2bb5df033b07816389d64b33c469bb5_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "PWUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
