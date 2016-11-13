<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_fa4e1f37c591cdccad0e053fc60875294c96cebefa3d0081bc40fb8bc5786ffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_cc4c06fea08d2f71f34f644e5ac9b45d116da8d6de962370f106c196bb885290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4c06fea08d2f71f34f644e5ac9b45d116da8d6de962370f106c196bb885290->enter($__internal_cc4c06fea08d2f71f34f644e5ac9b45d116da8d6de962370f106c196bb885290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc4c06fea08d2f71f34f644e5ac9b45d116da8d6de962370f106c196bb885290->leave($__internal_cc4c06fea08d2f71f34f644e5ac9b45d116da8d6de962370f106c196bb885290_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ec016573aa74304d040c5362989a7988ff9d0fee5750385d715beefb4e44e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec016573aa74304d040c5362989a7988ff9d0fee5750385d715beefb4e44e1d->enter($__internal_4ec016573aa74304d040c5362989a7988ff9d0fee5750385d715beefb4e44e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_4ec016573aa74304d040c5362989a7988ff9d0fee5750385d715beefb4e44e1d->leave($__internal_4ec016573aa74304d040c5362989a7988ff9d0fee5750385d715beefb4e44e1d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
