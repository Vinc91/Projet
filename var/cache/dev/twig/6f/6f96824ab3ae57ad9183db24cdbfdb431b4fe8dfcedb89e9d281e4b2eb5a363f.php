<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_b188b5cc974de8b9938915cd5a95fbecc99b47afeecb4cf4c27d838c38180993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_958035d2832e5ccd5ad3185b7d95cb4487af4d56c2932e50fd719492eb84e570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958035d2832e5ccd5ad3185b7d95cb4487af4d56c2932e50fd719492eb84e570->enter($__internal_958035d2832e5ccd5ad3185b7d95cb4487af4d56c2932e50fd719492eb84e570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_958035d2832e5ccd5ad3185b7d95cb4487af4d56c2932e50fd719492eb84e570->leave($__internal_958035d2832e5ccd5ad3185b7d95cb4487af4d56c2932e50fd719492eb84e570_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6069df87bc58738b5126f9be20b769c474f1a478f1a674039c9c2e43a10b5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6069df87bc58738b5126f9be20b769c474f1a478f1a674039c9c2e43a10b5de->enter($__internal_c6069df87bc58738b5126f9be20b769c474f1a478f1a674039c9c2e43a10b5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_c6069df87bc58738b5126f9be20b769c474f1a478f1a674039c9c2e43a10b5de->leave($__internal_c6069df87bc58738b5126f9be20b769c474f1a478f1a674039c9c2e43a10b5de_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
