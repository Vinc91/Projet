<?php

/* PWUserBundle:Group:list.html.twig */
class __TwigTemplate_c389bff0e360eab148f1d3c443ae9f1f0eb75913ea0c49264a2bb381398f7769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Group:list.html.twig", 1);
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
        $__internal_a6b9dc5e464d63b4197f1277d6ee35be2308d264fe75a6d4ec2af085e458a090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b9dc5e464d63b4197f1277d6ee35be2308d264fe75a6d4ec2af085e458a090->enter($__internal_a6b9dc5e464d63b4197f1277d6ee35be2308d264fe75a6d4ec2af085e458a090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b9dc5e464d63b4197f1277d6ee35be2308d264fe75a6d4ec2af085e458a090->leave($__internal_a6b9dc5e464d63b4197f1277d6ee35be2308d264fe75a6d4ec2af085e458a090_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcbead1319bef67170b9610d99dae35f18c2920e3803d0cc0f15737272e3f29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbead1319bef67170b9610d99dae35f18c2920e3803d0cc0f15737272e3f29d->enter($__internal_dcbead1319bef67170b9610d99dae35f18c2920e3803d0cc0f15737272e3f29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "PWUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_dcbead1319bef67170b9610d99dae35f18c2920e3803d0cc0f15737272e3f29d->leave($__internal_dcbead1319bef67170b9610d99dae35f18c2920e3803d0cc0f15737272e3f29d_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Group:list.html.twig";
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
", "PWUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Group/list.html.twig");
    }
}
