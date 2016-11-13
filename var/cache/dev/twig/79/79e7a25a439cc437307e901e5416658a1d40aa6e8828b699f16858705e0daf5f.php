<?php

/* @PWUser/Security/login.html.twig */
class __TwigTemplate_f799e096d5a8909450ae95998913cb228be665271937d3f7a50f8f472dc29ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Security/login.html.twig", 1);
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
        $__internal_d687988a52ebd18b39b8de58c3dd85a6dd3dd6c3193a25cc2f8df5e3b96fc05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d687988a52ebd18b39b8de58c3dd85a6dd3dd6c3193a25cc2f8df5e3b96fc05f->enter($__internal_d687988a52ebd18b39b8de58c3dd85a6dd3dd6c3193a25cc2f8df5e3b96fc05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d687988a52ebd18b39b8de58c3dd85a6dd3dd6c3193a25cc2f8df5e3b96fc05f->leave($__internal_d687988a52ebd18b39b8de58c3dd85a6dd3dd6c3193a25cc2f8df5e3b96fc05f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e4e70627a9b6d3d4aefe84378c7ee63f32cc09230e950e9eb1954a46c04ecc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4e70627a9b6d3d4aefe84378c7ee63f32cc09230e950e9eb1954a46c04ecc3->enter($__internal_2e4e70627a9b6d3d4aefe84378c7ee63f32cc09230e950e9eb1954a46c04ecc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Security/login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_2e4e70627a9b6d3d4aefe84378c7ee63f32cc09230e950e9eb1954a46c04ecc3->leave($__internal_2e4e70627a9b6d3d4aefe84378c7ee63f32cc09230e950e9eb1954a46c04ecc3_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Security/login.html.twig";
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
", "@PWUser/Security/login.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
