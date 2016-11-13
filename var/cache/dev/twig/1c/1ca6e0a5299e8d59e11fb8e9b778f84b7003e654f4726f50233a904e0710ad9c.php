<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_4866701d14417253db7a186d286d4486da818c26ce28c0715c17e7690109c67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_9ddddb08ef57c88a4b0ce5e42ad126bcb2bc6990fe51235a214c3658032a5b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddddb08ef57c88a4b0ce5e42ad126bcb2bc6990fe51235a214c3658032a5b2f->enter($__internal_9ddddb08ef57c88a4b0ce5e42ad126bcb2bc6990fe51235a214c3658032a5b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ddddb08ef57c88a4b0ce5e42ad126bcb2bc6990fe51235a214c3658032a5b2f->leave($__internal_9ddddb08ef57c88a4b0ce5e42ad126bcb2bc6990fe51235a214c3658032a5b2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da5dffcb62b0dc7114731fc4927136041330c9df5600348b001264d33fd07ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5dffcb62b0dc7114731fc4927136041330c9df5600348b001264d33fd07ded->enter($__internal_da5dffcb62b0dc7114731fc4927136041330c9df5600348b001264d33fd07ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_da5dffcb62b0dc7114731fc4927136041330c9df5600348b001264d33fd07ded->leave($__internal_da5dffcb62b0dc7114731fc4927136041330c9df5600348b001264d33fd07ded_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
