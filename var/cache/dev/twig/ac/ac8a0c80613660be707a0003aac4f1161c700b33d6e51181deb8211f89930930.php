<?php

/* PWUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a3e8217c3507976e776a8d0a88b0632ab398ea08e11a9ad69cf9463aff74efbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_2f96b11744ae4e3361b1e29fc8f114056d0f3d4285c0a91f99fcc305bdc6ad76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f96b11744ae4e3361b1e29fc8f114056d0f3d4285c0a91f99fcc305bdc6ad76->enter($__internal_2f96b11744ae4e3361b1e29fc8f114056d0f3d4285c0a91f99fcc305bdc6ad76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f96b11744ae4e3361b1e29fc8f114056d0f3d4285c0a91f99fcc305bdc6ad76->leave($__internal_2f96b11744ae4e3361b1e29fc8f114056d0f3d4285c0a91f99fcc305bdc6ad76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e9b367890aa823808c633a847293bfb7ae77a65388f33147454db184d66c9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9b367890aa823808c633a847293bfb7ae77a65388f33147454db184d66c9cf->enter($__internal_6e9b367890aa823808c633a847293bfb7ae77a65388f33147454db184d66c9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "PWUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6e9b367890aa823808c633a847293bfb7ae77a65388f33147454db184d66c9cf->leave($__internal_6e9b367890aa823808c633a847293bfb7ae77a65388f33147454db184d66c9cf_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "PWUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
