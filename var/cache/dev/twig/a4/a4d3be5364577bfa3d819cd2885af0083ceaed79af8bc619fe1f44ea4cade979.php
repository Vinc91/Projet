<?php

/* PWProgresSiesBundle:ProgresSies:formedit.html.twig */
class __TwigTemplate_f5ab9c85d33f340752bb4ca58141f63abe03ae67139d3cef9595e19f3141d437 extends Twig_Template
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
        $__internal_6685c781cf91395031d44467f3494d873c714a366779fcaa3eef24fe1be6880b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6685c781cf91395031d44467f3494d873c714a366779fcaa3eef24fe1be6880b->enter($__internal_6685c781cf91395031d44467f3494d873c714a366779fcaa3eef24fe1be6880b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWProgresSiesBundle:ProgresSies:formedit.html.twig"));

        // line 1
        echo "<div class=\"well\">
";
        // line 3
        echo "
  ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  <div class=\"form-group\">
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de la série"));
        echo "

    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date de création"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createur", array()), 'row');
        echo "

  ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "

  ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "genres", array()), 'row');
        echo "

   <div id=\"serie_edit_saisons\">
    <div class=\"form-group\">
    <label class=\"col-sm-2 control-label required\">
    Saisons
    </label>
    ";
        // line 37
        $context["i"] = 1;
        // line 38
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["saisons"]) ? $context["saisons"] : $this->getContext($context, "saisons")));
        foreach ($context['_seq'] as $context["_key"] => $context["saison"]) {
            // line 39
            echo "      <div class=\"form-group\">
        <div class=\"col-sm-10\">
          <div class=\"form_group\">
            <label class=\"col-sm-4 control-label required\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "titre", array()), "html", null, true);
            echo "</label>
            <div class=\"col-sm-3\">
              <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view_saison", array("id" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\"> 
              <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
              <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
               Ajouter des épisodes
              </button>
              </a>
            </div>
            <div class=\"col-sm-3\">
              <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_update", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()), "choice" => 1, "saisonid" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\"> 
              <button type=\"button\" class=\"btn btn-danger\" aria-label=\"Left Align\">
              <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
               
              </button>
              </a>
            </div>
          </div>

        </div>
      </div>
      ";
            // line 63
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 64
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    <div class=\"col-sm-3 control-label required\">
     <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_update", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()), "choice" => 2, "saisonid" => 0)), "html", null, true);
        echo "\" id=\"add_saison\" class=\"btn btn-default\">
      <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
      Ajouter une saison
     </a>
    </div>
    </div>
  </div>

   ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  ";
        // line 76
        echo "  ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
";
        
        $__internal_6685c781cf91395031d44467f3494d873c714a366779fcaa3eef24fe1be6880b->leave($__internal_6685c781cf91395031d44467f3494d873c714a366779fcaa3eef24fe1be6880b_prof);

    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle:ProgresSies:formedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 76,  158 => 74,  147 => 66,  144 => 65,  138 => 64,  136 => 63,  122 => 52,  111 => 44,  106 => 42,  101 => 39,  96 => 38,  94 => 37,  84 => 30,  79 => 28,  74 => 26,  67 => 22,  62 => 20,  58 => 19,  50 => 14,  44 => 11,  39 => 9,  33 => 6,  28 => 4,  25 => 3,  22 => 1,);
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
{#{{form(form)}}#}

  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {{ form_errors(form) }}

  <div class=\"form-group\">
    {{ form_label(form.titre, \"Titre de la série\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {{ form_errors(form.titre) }}

    <div class=\"col-sm-10\">
      {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  <div class=\"form-group\">
    {{ form_label(form.date, \"Date de création\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.date) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {{ form_row(form.createur) }}

  {{form_row(form.image)}}

  {{ form_row(form.genres)}}

   <div id=\"serie_edit_saisons\">
    <div class=\"form-group\">
    <label class=\"col-sm-2 control-label required\">
    Saisons
    </label>
    {% set i=1 %}
    {% for saison in saisons %}
      <div class=\"form-group\">
        <div class=\"col-sm-10\">
          <div class=\"form_group\">
            <label class=\"col-sm-4 control-label required\">{{saison.titre}}</label>
            <div class=\"col-sm-3\">
              <a href=\"{{ path('pw_progres_sies_view_saison', {'id': saison.id}) }}\"> 
              <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
              <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
               Ajouter des épisodes
              </button>
              </a>
            </div>
            <div class=\"col-sm-3\">
              <a href=\"{{ path('pw_progres_sies_update', {'id': serie.id, 'choice': 1, 'saisonid': saison.id}) }}\"> 
              <button type=\"button\" class=\"btn btn-danger\" aria-label=\"Left Align\">
              <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
               
              </button>
              </a>
            </div>
          </div>

        </div>
      </div>
      {% set i=i+1 %}
    {% endfor %}
    <div class=\"col-sm-3 control-label required\">
     <a href=\"{{ path('pw_progres_sies_update', {'id': serie.id, 'choice': 2, 'saisonid': 0}) }}\" id=\"add_saison\" class=\"btn btn-default\">
      <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
      Ajouter une saison
     </a>
    </div>
    </div>
  </div>

   {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }}
  {# Fermeture de la balise <form> du formulaire HTML #}
  {{ form_end(form) }}

</div>
", "PWProgresSiesBundle:ProgresSies:formedit.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/ProgresSies/formedit.html.twig");
    }
}
