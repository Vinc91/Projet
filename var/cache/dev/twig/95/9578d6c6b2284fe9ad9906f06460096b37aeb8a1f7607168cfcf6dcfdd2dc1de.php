<?php

/* @PWUser/Group/new.html.twig */
class __TwigTemplate_a94bf90faa4caa86baa0d9265ad6b18663f8a1ff65fc55ec9bfbb83eeb4b842e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Group/new.html.twig", 1);
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
        $__internal_993685850a6f05c582925e39c0714986ec206d6f37ffda856f7b3f8dba15880e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993685850a6f05c582925e39c0714986ec206d6f37ffda856f7b3f8dba15880e->enter($__internal_993685850a6f05c582925e39c0714986ec206d6f37ffda856f7b3f8dba15880e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_993685850a6f05c582925e39c0714986ec206d6f37ffda856f7b3f8dba15880e->leave($__internal_993685850a6f05c582925e39c0714986ec206d6f37ffda856f7b3f8dba15880e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae867018a562fdb0b2e5097f3c89fcf08e4acaa86287baad304e297314a86af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae867018a562fdb0b2e5097f3c89fcf08e4acaa86287baad304e297314a86af4->enter($__internal_ae867018a562fdb0b2e5097f3c89fcf08e4acaa86287baad304e297314a86af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Group/new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@PWUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_ae867018a562fdb0b2e5097f3c89fcf08e4acaa86287baad304e297314a86af4->leave($__internal_ae867018a562fdb0b2e5097f3c89fcf08e4acaa86287baad304e297314a86af4_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Group/new.html.twig";
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
", "@PWUser/Group/new.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
