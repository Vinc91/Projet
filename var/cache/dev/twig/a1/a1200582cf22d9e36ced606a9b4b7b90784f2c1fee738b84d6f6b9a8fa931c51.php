<?php

/* PWUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d99c16818be6bf6eccf5200b16e9252b804d9637e140ce9146939460bff1d75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6a507aee69ef8575c1fd4eb494714df3fd5db7f9d718ef45fffb6386c72942b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a507aee69ef8575c1fd4eb494714df3fd5db7f9d718ef45fffb6386c72942b7->enter($__internal_6a507aee69ef8575c1fd4eb494714df3fd5db7f9d718ef45fffb6386c72942b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a507aee69ef8575c1fd4eb494714df3fd5db7f9d718ef45fffb6386c72942b7->leave($__internal_6a507aee69ef8575c1fd4eb494714df3fd5db7f9d718ef45fffb6386c72942b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a325cef2f8c6873c147f9a85998503b7b90f453d975a68c3d55b807328569f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a325cef2f8c6873c147f9a85998503b7b90f453d975a68c3d55b807328569f51->enter($__internal_a325cef2f8c6873c147f9a85998503b7b90f453d975a68c3d55b807328569f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "PWUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a325cef2f8c6873c147f9a85998503b7b90f453d975a68c3d55b807328569f51->leave($__internal_a325cef2f8c6873c147f9a85998503b7b90f453d975a68c3d55b807328569f51_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Resetting:reset.html.twig";
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
", "PWUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
