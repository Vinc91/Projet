<?php

/* @PWUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_082f69a543a4dce46010b994faa740d6763912b870cd5407407f53fb7292ec2a extends Twig_Template
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
        $__internal_b9b043bef293f1c0130d3d0f56e6c518de758cda4c17d181ad52af5ea94080d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b043bef293f1c0130d3d0f56e6c518de758cda4c17d181ad52af5ea94080d0->enter($__internal_b9b043bef293f1c0130d3d0f56e6c518de758cda4c17d181ad52af5ea94080d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "<h3><strong>Changez votre mot de passe: </strong></h3></br>
<div class=\"well\">
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_b9b043bef293f1c0130d3d0f56e6c518de758cda4c17d181ad52af5ea94080d0->leave($__internal_b9b043bef293f1c0130d3d0f56e6c518de758cda4c17d181ad52af5ea94080d0_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/ChangePassword/change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  35 => 7,  30 => 5,  26 => 4,  22 => 2,);
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
<h3><strong>Changez votre mot de passe: </strong></h3></br>
<div class=\"well\">
{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
</div>", "@PWUser/ChangePassword/change_password_content.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\ChangePassword\\change_password_content.html.twig");
    }
}
