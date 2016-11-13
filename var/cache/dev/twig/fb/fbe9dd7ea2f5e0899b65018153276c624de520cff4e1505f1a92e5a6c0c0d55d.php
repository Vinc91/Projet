<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_50edf8bcf35f45557f59319380b0c1ff54a1cda33c5d438ecc71d00d996c95a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_39d76b2c77ff8cca12ccac7bba8f2f5f94414951457cbfd6e4a4aee7c648ab02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d76b2c77ff8cca12ccac7bba8f2f5f94414951457cbfd6e4a4aee7c648ab02->enter($__internal_39d76b2c77ff8cca12ccac7bba8f2f5f94414951457cbfd6e4a4aee7c648ab02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d76b2c77ff8cca12ccac7bba8f2f5f94414951457cbfd6e4a4aee7c648ab02->leave($__internal_39d76b2c77ff8cca12ccac7bba8f2f5f94414951457cbfd6e4a4aee7c648ab02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd98fd86ac96e37fe75bc5b637da081c03ec036d1b4161473e73dbc9f987c054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd98fd86ac96e37fe75bc5b637da081c03ec036d1b4161473e73dbc9f987c054->enter($__internal_cd98fd86ac96e37fe75bc5b637da081c03ec036d1b4161473e73dbc9f987c054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_cd98fd86ac96e37fe75bc5b637da081c03ec036d1b4161473e73dbc9f987c054->leave($__internal_cd98fd86ac96e37fe75bc5b637da081c03ec036d1b4161473e73dbc9f987c054_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
