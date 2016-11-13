<?php

/* @PWUser/Group/list.html.twig */
class __TwigTemplate_054ede3dfd46f4c74faa416ecc2a6a80f932b02192d4796c5480e1656435cc14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Group/list.html.twig", 1);
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
        $__internal_3de2830dc38fe59da749eb34790650797979307cbecdbd37401a72894527b329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de2830dc38fe59da749eb34790650797979307cbecdbd37401a72894527b329->enter($__internal_3de2830dc38fe59da749eb34790650797979307cbecdbd37401a72894527b329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3de2830dc38fe59da749eb34790650797979307cbecdbd37401a72894527b329->leave($__internal_3de2830dc38fe59da749eb34790650797979307cbecdbd37401a72894527b329_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a9b9ffaed4f99b25cfa7d905c8a4a8b267b839c3bc845a22fd61a1e92dc3653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9b9ffaed4f99b25cfa7d905c8a4a8b267b839c3bc845a22fd61a1e92dc3653->enter($__internal_4a9b9ffaed4f99b25cfa7d905c8a4a8b267b839c3bc845a22fd61a1e92dc3653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@PWUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_4a9b9ffaed4f99b25cfa7d905c8a4a8b267b839c3bc845a22fd61a1e92dc3653->leave($__internal_4a9b9ffaed4f99b25cfa7d905c8a4a8b267b839c3bc845a22fd61a1e92dc3653_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Group/list.html.twig";
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
", "@PWUser/Group/list.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
