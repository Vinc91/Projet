<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c4fd3a8831f7ff38fe80d2d670fe71a794bd1ed29e3e926f3c2a03c6fef16b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_a19df72d798689f4df0f687b57f0869c5d3713cb3204f02fa2ae4505ea331b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19df72d798689f4df0f687b57f0869c5d3713cb3204f02fa2ae4505ea331b51->enter($__internal_a19df72d798689f4df0f687b57f0869c5d3713cb3204f02fa2ae4505ea331b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a19df72d798689f4df0f687b57f0869c5d3713cb3204f02fa2ae4505ea331b51->leave($__internal_a19df72d798689f4df0f687b57f0869c5d3713cb3204f02fa2ae4505ea331b51_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f99858b88d2e9dcd709477c5da3460e8c40e63dcbf4e812b546f8045159c0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f99858b88d2e9dcd709477c5da3460e8c40e63dcbf4e812b546f8045159c0ba->enter($__internal_2f99858b88d2e9dcd709477c5da3460e8c40e63dcbf4e812b546f8045159c0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_2f99858b88d2e9dcd709477c5da3460e8c40e63dcbf4e812b546f8045159c0ba->leave($__internal_2f99858b88d2e9dcd709477c5da3460e8c40e63dcbf4e812b546f8045159c0ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
