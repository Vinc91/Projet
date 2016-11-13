<?php

/* PWUserBundle:Group:show.html.twig */
class __TwigTemplate_3b4f67968206171d459feafd246b4454c001f68f1b8cc0dcef370b44772a5c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Group:show.html.twig", 1);
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
        $__internal_5688a9d9b7051df1ce848651df90f9b040cd35153f7c9e471d713afdfb7b2776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5688a9d9b7051df1ce848651df90f9b040cd35153f7c9e471d713afdfb7b2776->enter($__internal_5688a9d9b7051df1ce848651df90f9b040cd35153f7c9e471d713afdfb7b2776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5688a9d9b7051df1ce848651df90f9b040cd35153f7c9e471d713afdfb7b2776->leave($__internal_5688a9d9b7051df1ce848651df90f9b040cd35153f7c9e471d713afdfb7b2776_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7e06135e4c143edbf5ba1a367b88f1dd7327dfffefcd6b8c4ebd8628d4028ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e06135e4c143edbf5ba1a367b88f1dd7327dfffefcd6b8c4ebd8628d4028ff->enter($__internal_b7e06135e4c143edbf5ba1a367b88f1dd7327dfffefcd6b8c4ebd8628d4028ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "PWUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b7e06135e4c143edbf5ba1a367b88f1dd7327dfffefcd6b8c4ebd8628d4028ff->leave($__internal_b7e06135e4c143edbf5ba1a367b88f1dd7327dfffefcd6b8c4ebd8628d4028ff_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "PWUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Group/show.html.twig");
    }
}
