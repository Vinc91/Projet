<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_c6b91e499a516f6f7e02e74cf92b4a14cbbaa168f5ae7856d1e3da028619e728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_61b291958fda404dfb327eb41821b3e3e5e28bbaf0e0133e5c2bebd4f8af0108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b291958fda404dfb327eb41821b3e3e5e28bbaf0e0133e5c2bebd4f8af0108->enter($__internal_61b291958fda404dfb327eb41821b3e3e5e28bbaf0e0133e5c2bebd4f8af0108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b291958fda404dfb327eb41821b3e3e5e28bbaf0e0133e5c2bebd4f8af0108->leave($__internal_61b291958fda404dfb327eb41821b3e3e5e28bbaf0e0133e5c2bebd4f8af0108_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb0d77dc1e7afdb0592c266227bb76b4c61e5de96e6942815cc459e65097b2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0d77dc1e7afdb0592c266227bb76b4c61e5de96e6942815cc459e65097b2f1->enter($__internal_fb0d77dc1e7afdb0592c266227bb76b4c61e5de96e6942815cc459e65097b2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fb0d77dc1e7afdb0592c266227bb76b4c61e5de96e6942815cc459e65097b2f1->leave($__internal_fb0d77dc1e7afdb0592c266227bb76b4c61e5de96e6942815cc459e65097b2f1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
