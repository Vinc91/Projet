<?php

/* PWUserBundle:Group:new.html.twig */
class __TwigTemplate_a97415d5ef069d2f167f046612a941eb20fa33aca12f6245b10a17aa3fddc068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Group:new.html.twig", 1);
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
        $__internal_073cda71973ef0d00a659dc06ba57a5ed0e5317f4e122f074e073248c274d93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073cda71973ef0d00a659dc06ba57a5ed0e5317f4e122f074e073248c274d93c->enter($__internal_073cda71973ef0d00a659dc06ba57a5ed0e5317f4e122f074e073248c274d93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_073cda71973ef0d00a659dc06ba57a5ed0e5317f4e122f074e073248c274d93c->leave($__internal_073cda71973ef0d00a659dc06ba57a5ed0e5317f4e122f074e073248c274d93c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4a9cdcaf4a163f92273a6109273ba87f7030c593c11a7da9c0c9442a27755d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a9cdcaf4a163f92273a6109273ba87f7030c593c11a7da9c0c9442a27755d0->enter($__internal_a4a9cdcaf4a163f92273a6109273ba87f7030c593c11a7da9c0c9442a27755d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "PWUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a4a9cdcaf4a163f92273a6109273ba87f7030c593c11a7da9c0c9442a27755d0->leave($__internal_a4a9cdcaf4a163f92273a6109273ba87f7030c593c11a7da9c0c9442a27755d0_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "PWUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Group/new.html.twig");
    }
}
