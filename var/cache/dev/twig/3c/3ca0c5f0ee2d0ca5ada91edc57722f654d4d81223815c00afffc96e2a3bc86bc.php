<?php

/* @PWUser/Registration/register.html.twig */
class __TwigTemplate_25a5eee4b3c8a573f152405d927ea599056e189c3042ceddbd27b3fa1375b689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Registration/register.html.twig", 1);
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
        $__internal_950c6bd619c287d046294905244fbe3de5caeb10f599063eb463ab8bf0ba764c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950c6bd619c287d046294905244fbe3de5caeb10f599063eb463ab8bf0ba764c->enter($__internal_950c6bd619c287d046294905244fbe3de5caeb10f599063eb463ab8bf0ba764c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_950c6bd619c287d046294905244fbe3de5caeb10f599063eb463ab8bf0ba764c->leave($__internal_950c6bd619c287d046294905244fbe3de5caeb10f599063eb463ab8bf0ba764c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcea9be483280f0200a611054c4cf22fb5775713a506ad955ff4268cbe6a974e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcea9be483280f0200a611054c4cf22fb5775713a506ad955ff4268cbe6a974e->enter($__internal_fcea9be483280f0200a611054c4cf22fb5775713a506ad955ff4268cbe6a974e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@PWUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_fcea9be483280f0200a611054c4cf22fb5775713a506ad955ff4268cbe6a974e->leave($__internal_fcea9be483280f0200a611054c4cf22fb5775713a506ad955ff4268cbe6a974e_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Registration/register.html.twig";
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
", "@PWUser/Registration/register.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
