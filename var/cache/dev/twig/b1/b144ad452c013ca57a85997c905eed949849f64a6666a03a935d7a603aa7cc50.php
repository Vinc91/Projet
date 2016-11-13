<?php

/* PWProgresSiesBundle:ProgresSies:form.html.twig */
class __TwigTemplate_d2f2bcdc3d0adf9f7053af111b2d40c0b64dd76911aaf150f6055cc1a1afbcd4 extends Twig_Template
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
        $__internal_e03956269313763216b5820f02f44b591119757fbb2fb80d9086b1298a826e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03956269313763216b5820f02f44b591119757fbb2fb80d9086b1298a826e5f->enter($__internal_e03956269313763216b5820f02f44b591119757fbb2fb80d9086b1298a826e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWProgresSiesBundle:ProgresSies:form.html.twig"));

        // line 1
        echo "<div class=\"well\">

  ";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

   ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'row');
        echo "

  <div class=\"form-group\">
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date de création"));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createur", array()), 'row');
        echo "
  ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
  ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbSaisons", array()), 'row');
        echo "

  ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "genres", array()), 'row');
        echo "

   ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>";
        
        $__internal_e03956269313763216b5820f02f44b591119757fbb2fb80d9086b1298a826e5f->leave($__internal_e03956269313763216b5820f02f44b591119757fbb2fb80d9086b1298a826e5f_prof);

    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle:ProgresSies:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  81 => 25,  76 => 23,  71 => 21,  66 => 19,  62 => 18,  58 => 17,  51 => 13,  46 => 11,  42 => 10,  36 => 7,  31 => 5,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">

  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {{ form_errors(form) }}

   {{ form_row(form.titre) }}

  <div class=\"form-group\">
    {{ form_label(form.date, \"Date de création\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.date) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {{ form_row(form.createur) }}
  {{form_row(form.image)}}
  {{ form_row(form.nbSaisons)}}

  {{ form_row(form.genres)}}

   {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }}

  {{ form_rest(form) }}
  {{ form_end(form) }}

</div>", "PWProgresSiesBundle:ProgresSies:form.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/ProgresSies/form.html.twig");
    }
}
