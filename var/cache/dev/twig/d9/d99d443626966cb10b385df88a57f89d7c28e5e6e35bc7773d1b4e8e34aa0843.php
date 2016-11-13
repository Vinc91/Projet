<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_6e64e78b9f73ba083f071eb2daf0b92494aac5be074a26a495bad7feca4c4172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6aedd0f8e45435e8dad8a405d04a52a81e73e1a7429e8f312e0560a64a0cc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6aedd0f8e45435e8dad8a405d04a52a81e73e1a7429e8f312e0560a64a0cc5f->enter($__internal_b6aedd0f8e45435e8dad8a405d04a52a81e73e1a7429e8f312e0560a64a0cc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<div class=\"well col-md-offset-4\" >
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div style=\"padding-left:200px\">
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
<div class=\"col-md-offset-4\" >
      <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-menu-left\"></i>
      Retour
    </a>
</div>";
        
        $__internal_b6aedd0f8e45435e8dad8a405d04a52a81e73e1a7429e8f312e0560a64a0cc5f->leave($__internal_b6aedd0f8e45435e8dad8a405d04a52a81e73e1a7429e8f312e0560a64a0cc5f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"well col-md-offset-4\" >
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div style=\"padding-left:200px\">
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
</div>
<div class=\"col-md-offset-4\" >
      <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-menu-left\"></i>
      Retour
    </a>
</div>", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
