<?php

/* PWProgresSiesBundle::register_content.html.twig */
class __TwigTemplate_974dc8db4c1ccfa7b4425888ace73ba09295b1ba47441b0989d2e1a24b8c0066 extends Twig_Template
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
        $__internal_94af34e8a8533422440b3b7a4b56dda9a7c0086fa6d1009cf15aacad3f5fa73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94af34e8a8533422440b3b7a4b56dda9a7c0086fa6d1009cf15aacad3f5fa73f->enter($__internal_94af34e8a8533422440b3b7a4b56dda9a7c0086fa6d1009cf15aacad3f5fa73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWProgresSiesBundle::register_content.html.twig"));

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
        
        $__internal_94af34e8a8533422440b3b7a4b56dda9a7c0086fa6d1009cf15aacad3f5fa73f->leave($__internal_94af34e8a8533422440b3b7a4b56dda9a7c0086fa6d1009cf15aacad3f5fa73f_prof);

    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle::register_content.html.twig";
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
</div>", "PWProgresSiesBundle::register_content.html.twig", "C:\\wamp64\\www\\Bla-master\\app/Resources/PWProgresSiesBundle/views/register_content.html.twig");
    }
}
