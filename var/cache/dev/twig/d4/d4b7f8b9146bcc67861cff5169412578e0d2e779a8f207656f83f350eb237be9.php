<?php

/* PWUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_54d10b0317f6400ea32ed472be0ca86c104cf0f87edaf957d986e5b03b88a5f3 extends Twig_Template
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
        $__internal_330c57568d206b5c9b40761cdb8588b30dea15dc7f80d7eeda314bfde3957928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330c57568d206b5c9b40761cdb8588b30dea15dc7f80d7eeda314bfde3957928->enter($__internal_330c57568d206b5c9b40761cdb8588b30dea15dc7f80d7eeda314bfde3957928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div class=\"col-sm-4\"></div>
<div class=\"well col-sm-8\" >
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
   <div class=\"row\">
    <div class=\"col-sm-4\"></div>
    <div class=\"col-sm-2\">
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    </div>
";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
<div class=\"col-sm-offset-4\" >
      <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-menu-left\"></i>
      Retour
    </a>
</div>";
        
        $__internal_330c57568d206b5c9b40761cdb8588b30dea15dc7f80d7eeda314bfde3957928->leave($__internal_330c57568d206b5c9b40761cdb8588b30dea15dc7f80d7eeda314bfde3957928_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  43 => 12,  37 => 9,  30 => 5,  26 => 4,  22 => 2,);
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
<div class=\"col-sm-4\"></div>
<div class=\"well col-sm-8\" >
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
   <div class=\"row\">
    <div class=\"col-sm-4\"></div>
    <div class=\"col-sm-2\">
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
    </div>
{{ form_end(form) }}
</div>
<div class=\"col-sm-offset-4\" >
      <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-menu-left\"></i>
      Retour
    </a>
</div>", "PWUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
