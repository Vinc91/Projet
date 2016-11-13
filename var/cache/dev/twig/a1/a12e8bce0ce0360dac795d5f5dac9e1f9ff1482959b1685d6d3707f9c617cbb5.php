<?php

/* @PWUser/Group/edit.html.twig */
class __TwigTemplate_9541e9d9e1dbbb8fc89f3f8238d5039af0507cd7be9639869aa1b6683fdac094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Group/edit.html.twig", 1);
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
        $__internal_2dbcfa4c64b72a3ec16c779ce1862625c870fccbb1e5cee3c8012ec27b04cc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbcfa4c64b72a3ec16c779ce1862625c870fccbb1e5cee3c8012ec27b04cc07->enter($__internal_2dbcfa4c64b72a3ec16c779ce1862625c870fccbb1e5cee3c8012ec27b04cc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dbcfa4c64b72a3ec16c779ce1862625c870fccbb1e5cee3c8012ec27b04cc07->leave($__internal_2dbcfa4c64b72a3ec16c779ce1862625c870fccbb1e5cee3c8012ec27b04cc07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c3d7e0e56400f7249eed19740447be9ff2488a4965fc4bdc6288456f666e032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3d7e0e56400f7249eed19740447be9ff2488a4965fc4bdc6288456f666e032->enter($__internal_6c3d7e0e56400f7249eed19740447be9ff2488a4965fc4bdc6288456f666e032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@PWUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6c3d7e0e56400f7249eed19740447be9ff2488a4965fc4bdc6288456f666e032->leave($__internal_6c3d7e0e56400f7249eed19740447be9ff2488a4965fc4bdc6288456f666e032_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PWUser/Group/edit.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
