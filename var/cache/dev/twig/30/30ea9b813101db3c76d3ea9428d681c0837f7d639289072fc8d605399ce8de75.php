<?php

/* @PWProgresSies/ProgresSies/viewall.html.twig */
class __TwigTemplate_500d4fbba098e0a1aad18a402c121fc5b228e9d97fa35790a773e6d31c06d15f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "@PWProgresSies/ProgresSies/viewall.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'add' => array($this, 'block_add'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWProgresSiesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6375a9c3500dd671bddc285ff7d458cdb833a0b1345cd9175d44e3f343a9779c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6375a9c3500dd671bddc285ff7d458cdb833a0b1345cd9175d44e3f343a9779c->enter($__internal_6375a9c3500dd671bddc285ff7d458cdb833a0b1345cd9175d44e3f343a9779c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWProgresSies/ProgresSies/viewall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6375a9c3500dd671bddc285ff7d458cdb833a0b1345cd9175d44e3f343a9779c->leave($__internal_6375a9c3500dd671bddc285ff7d458cdb833a0b1345cd9175d44e3f343a9779c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_517fd18eb0889e514509096797ed6bd8b2b130f11e511927a8b2f779b6b988f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517fd18eb0889e514509096797ed6bd8b2b130f11e511927a8b2f779b6b988f3->enter($__internal_517fd18eb0889e514509096797ed6bd8b2b130f11e511927a8b2f779b6b988f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/viewall.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Mes Séries";
        
        $__internal_517fd18eb0889e514509096797ed6bd8b2b130f11e511927a8b2f779b6b988f3->leave($__internal_517fd18eb0889e514509096797ed6bd8b2b130f11e511927a8b2f779b6b988f3_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_dd410c0c12e2b50bcbc3e8ca26ed2a8f77427cf3f3903c55d9be7719cd77a3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd410c0c12e2b50bcbc3e8ca26ed2a8f77427cf3f3903c55d9be7719cd77a3df->enter($__internal_dd410c0c12e2b50bcbc3e8ca26ed2a8f77427cf3f3903c55d9be7719cd77a3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/viewall.html.twig"));

        // line 6
        echo "      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
";
        
        $__internal_dd410c0c12e2b50bcbc3e8ca26ed2a8f77427cf3f3903c55d9be7719cd77a3df->leave($__internal_dd410c0c12e2b50bcbc3e8ca26ed2a8f77427cf3f3903c55d9be7719cd77a3df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_976c172517edf28ffe101640cb76096f8bbdc39a37d0689f5bb8c11370039bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976c172517edf28ffe101640cb76096f8bbdc39a37d0689f5bb8c11370039bd0->enter($__internal_976c172517edf28ffe101640cb76096f8bbdc39a37d0689f5bb8c11370039bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/viewall.html.twig"));

        // line 12
        echo " <h2> Voici toutes mes series en cours : </h2>
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Series"]) ? $context["Series"] : $this->getContext($context, "Series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 14
            echo "<div id=\"conteneur\" class=\"col-md-12\">
  <div class=\"row\">
    <div class=\"element col-sm-1\">
       ";
            // line 17
            if ( !(null === $this->getAttribute($context["serie"], "image", array()))) {
                // line 18
                echo "          <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["serie"], "image", array()), "url", array()), "html", null, true);
                echo "\" width=\"180\" height=\"250\" alt=\" ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["serie"], "image", array()), "alt", array()), "html", null, true);
                echo "\">
       ";
            }
            // line 20
            echo "    </div>
   <div class=\"col-sm-2\"></div>
   <div class=\"element col-sm-8\" >

     <h2> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "titre", array()), "html", null, true);
            echo " </h2>
     <p style=\"margin-top: 20px\">Crée par : <strong>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "createur", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "date", array()), "html", null, true);
            echo ") </strong></p>
     <p>Nombres de saisons : <strong> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "nbsaisons", array()), "html", null, true);
            echo "</strong></p>
     ";
            // line 27
            if ( !$this->getAttribute($this->getAttribute($context["serie"], "genres", array()), "empty", array())) {
                // line 28
                echo "      <p>Genre : <strong>
        ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["serie"], "genres", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 30
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "name", array()), "html", null, true);
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 31
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "        </strong>
      </p>
     ";
            }
            // line 35
            echo "
      <p>Avancement totale : </p>
      <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "avancement", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "avancement", array()), "html", null, true);
            echo "%;\">
          ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "avancement", array()), "html", null, true);
            echo "%
          </div>
      </div>

      ";
            // line 43
            if ( !(null === $this->getAttribute($context["serie"], "image", array()))) {
                // line 44
                echo "        <div class=\"col-sm-9\"></div>
        <div>
          <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
                echo "\">
          <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
          <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
           Voir Détails
          </button>
          </a>
        </div>
      ";
            } else {
                // line 54
                echo "        <div style=\"padding-left: 510px\">
          <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
                echo "\">
          <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
          <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
          Voir Détails
          </button>
          </a>
        </div>
      ";
            }
            // line 63
            echo "    </div>
   </div>
   </br>
</div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo " ";
        if ( !twig_test_empty((isset($context["Series"]) ? $context["Series"] : $this->getContext($context, "Series")))) {
            // line 69
            echo " <ul class=\"pagination\">
    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["pg"]) {
                // line 71
                echo "      <li ";
                if (($context["pg"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo " class=\"active\" ";
                }
                echo ">
        <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_viewall", array("page" => $context["pg"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["pg"], "html", null, true);
                echo "</a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "  </ul>
  ";
        } else {
            // line 77
            echo "    <p> Vous n'avez pas encore de série. N'hésitez pas à en créer une.</p>
  ";
        }
        
        $__internal_976c172517edf28ffe101640cb76096f8bbdc39a37d0689f5bb8c11370039bd0->leave($__internal_976c172517edf28ffe101640cb76096f8bbdc39a37d0689f5bb8c11370039bd0_prof);

    }

    // line 80
    public function block_add($context, array $blocks = array())
    {
        $__internal_f48ccfecdcfdc39eb28832eafc09aa10e149db1864bf21b59f066fc49ff42b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48ccfecdcfdc39eb28832eafc09aa10e149db1864bf21b59f066fc49ff42b01->enter($__internal_f48ccfecdcfdc39eb28832eafc09aa10e149db1864bf21b59f066fc49ff42b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/viewall.html.twig"));

        // line 81
        echo "<h2> Ajouter une Série </h2>
<div style=\"padding-top: 20px\">
  <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_add");
        echo "\">
    <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
    <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
    Ajouter une série
    </button>
  </a>
</div>
";
        
        $__internal_f48ccfecdcfdc39eb28832eafc09aa10e149db1864bf21b59f066fc49ff42b01->leave($__internal_f48ccfecdcfdc39eb28832eafc09aa10e149db1864bf21b59f066fc49ff42b01_prof);

    }

    public function getTemplateName()
    {
        return "@PWProgresSies/ProgresSies/viewall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 83,  267 => 81,  261 => 80,  252 => 77,  248 => 75,  237 => 72,  230 => 71,  226 => 70,  223 => 69,  220 => 68,  210 => 63,  199 => 55,  196 => 54,  185 => 46,  181 => 44,  179 => 43,  172 => 39,  166 => 38,  161 => 35,  156 => 32,  142 => 31,  136 => 30,  119 => 29,  116 => 28,  114 => 27,  110 => 26,  104 => 25,  100 => 24,  94 => 20,  86 => 18,  84 => 17,  79 => 14,  75 => 13,  72 => 12,  66 => 11,  56 => 6,  50 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PWProgresSiesBundle::layout.html.twig\" %}

{% block title %}{{ parent() }} - Mes Séries{% endblock %}

{% block header %}
      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
{% endblock %}

{% block body %}
 <h2> Voici toutes mes series en cours : </h2>
  {% for serie in Series %}
<div id=\"conteneur\" class=\"col-md-12\">
  <div class=\"row\">
    <div class=\"element col-sm-1\">
       {% if serie.image is not null %}
          <img src=\"{{ serie.image.url }}\" width=\"180\" height=\"250\" alt=\" {{serie.image.alt}}\">
       {% endif %}
    </div>
   <div class=\"col-sm-2\"></div>
   <div class=\"element col-sm-8\" >

     <h2> {{ serie.titre}} </h2>
     <p style=\"margin-top: 20px\">Crée par : <strong>{{serie.createur}} ({{serie.date }}) </strong></p>
     <p>Nombres de saisons : <strong> {{ serie.nbsaisons }}</strong></p>
     {% if not serie.genres.empty %}
      <p>Genre : <strong>
        {%for genre in serie.genres %}
          {{genre.name}}{% if not loop.last %}, {% endif %}
        {% endfor %}
        </strong>
      </p>
     {% endif %}

      <p>Avancement totale : </p>
      <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"{{serie.avancement}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{serie.avancement}}%;\">
          {{serie.avancement}}%
          </div>
      </div>

      {% if serie.image is not null %}
        <div class=\"col-sm-9\"></div>
        <div>
          <a href=\"{{ path('pw_progres_sies_view', {'id': serie.id}) }}\">
          <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
          <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
           Voir Détails
          </button>
          </a>
        </div>
      {% else %}
        <div style=\"padding-left: 510px\">
          <a href=\"{{ path('pw_progres_sies_view', {'id': serie.id}) }}\">
          <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
          <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
          Voir Détails
          </button>
          </a>
        </div>
      {% endif %}
    </div>
   </div>
   </br>
</div>
 {% endfor %}
 {% if Series is not empty %}
 <ul class=\"pagination\">
    {% for pg in range(1, nbPages) %}
      <li {% if pg == page %} class=\"active\" {% endif %}>
        <a href=\"{{ path('pw_progres_sies_viewall', {'page': pg}) }}\">{{ pg }}</a>
      </li>
    {% endfor %}
  </ul>
  {% else %}
    <p> Vous n'avez pas encore de série. N'hésitez pas à en créer une.</p>
  {% endif %}
{% endblock %}
{% block add %}
<h2> Ajouter une Série </h2>
<div style=\"padding-top: 20px\">
  <a href=\"{{ path('pw_progres_sies_add')}}\">
    <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
    <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
    Ajouter une série
    </button>
  </a>
</div>
{% endblock %}", "@PWProgresSies/ProgresSies/viewall.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\ProgresSies\\viewall.html.twig");
    }
}
