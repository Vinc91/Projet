<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_4cb450cbe45b119460d098e33dbbe3faa165373ebc6d90d2179852db3951896d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_cf7ed8410e11396bb688df991c9bc4b26a487538f1ff3c283cd109b076412f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7ed8410e11396bb688df991c9bc4b26a487538f1ff3c283cd109b076412f13->enter($__internal_cf7ed8410e11396bb688df991c9bc4b26a487538f1ff3c283cd109b076412f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7ed8410e11396bb688df991c9bc4b26a487538f1ff3c283cd109b076412f13->leave($__internal_cf7ed8410e11396bb688df991c9bc4b26a487538f1ff3c283cd109b076412f13_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c09201a640b9d9b149ae9ebe3b7b202f91288671327f1f11e01a879f736e035c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09201a640b9d9b149ae9ebe3b7b202f91288671327f1f11e01a879f736e035c->enter($__internal_c09201a640b9d9b149ae9ebe3b7b202f91288671327f1f11e01a879f736e035c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_c09201a640b9d9b149ae9ebe3b7b202f91288671327f1f11e01a879f736e035c->leave($__internal_c09201a640b9d9b149ae9ebe3b7b202f91288671327f1f11e01a879f736e035c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
