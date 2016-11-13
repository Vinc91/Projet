<?php

/* PWProgresSiesBundle:ProgresSies:index.html.twig */
class __TwigTemplate_9f8c07cb586723489c9e2074016e6f5f34b8564db717a76872f4bff4c390e9f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "PWProgresSiesBundle:ProgresSies:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_66c07571165e58b5b506a6e45a3344cfbfd443be1c50955d9d3b0ae0f1958599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c07571165e58b5b506a6e45a3344cfbfd443be1c50955d9d3b0ae0f1958599->enter($__internal_66c07571165e58b5b506a6e45a3344cfbfd443be1c50955d9d3b0ae0f1958599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWProgresSiesBundle:ProgresSies:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c07571165e58b5b506a6e45a3344cfbfd443be1c50955d9d3b0ae0f1958599->leave($__internal_66c07571165e58b5b506a6e45a3344cfbfd443be1c50955d9d3b0ae0f1958599_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2d16fb97fbd4dcfb55d9d28e41ad542b413f598f3e6dbea5446688f0cc19923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d16fb97fbd4dcfb55d9d28e41ad542b413f598f3e6dbea5446688f0cc19923->enter($__internal_c2d16fb97fbd4dcfb55d9d28e41ad542b413f598f3e6dbea5446688f0cc19923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWProgresSiesBundle:ProgresSies:index.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Home";
        
        $__internal_c2d16fb97fbd4dcfb55d9d28e41ad542b413f598f3e6dbea5446688f0cc19923->leave($__internal_c2d16fb97fbd4dcfb55d9d28e41ad542b413f598f3e6dbea5446688f0cc19923_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da03c8526941494a315fedc4598a0336fab9e1069e64740f95e6802113a8eafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da03c8526941494a315fedc4598a0336fab9e1069e64740f95e6802113a8eafa->enter($__internal_da03c8526941494a315fedc4598a0336fab9e1069e64740f95e6802113a8eafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWProgresSiesBundle:ProgresSies:index.html.twig"));

        // line 6
        if ( !twig_test_empty((isset($context["Series"]) ? $context["Series"] : $this->getContext($context, "Series")))) {
            // line 7
            echo "  <h2>Dernières séries suivies: </h2>

 ";
            // line 9
            $context["i"] = 0;
            // line 10
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Series"]) ? $context["Series"] : $this->getContext($context, "Series")));
            foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 3)) {
                    // line 11
                    echo "<div id=\"conteneur\" class=\"col-sm-12\">
  <div class=\"row\">
 \t  <div class=\"element col-sm-1\">
 \t\t   ";
                    // line 14
                    if ( !(null === $this->getAttribute($context["serie"], "image", array()))) {
                        // line 15
                        echo " \t\t\t    <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["serie"], "image", array()), "url", array()), "html", null, true);
                        echo "\" width=\"180\" height=\"250\" alt=\" ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["serie"], "image", array()), "alt", array()), "html", null, true);
                        echo "\">
 \t\t   ";
                    }
                    // line 17
                    echo " \t  </div>
   <div class=\"col-sm-2\"></div>
 \t <div class=\"element col-sm-8\" ";
                    // line 19
                    echo ">

 \t\t <h2> ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "titre", array()), "html", null, true);
                    echo " </h2>
     <p style=\"margin-top: 20px\">Crée par : <strong>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "createur", array()), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "date", array()), "html", null, true);
                    echo ") </strong></p>
\t\t <p>Nombres de saisons : <strong> ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "nbsaisons", array()), "html", null, true);
                    echo "</strong></p>
     ";
                    // line 24
                    if ( !$this->getAttribute($this->getAttribute($context["serie"], "genres", array()), "empty", array())) {
                        // line 25
                        echo "      <p>Genre : <strong>
        ";
                        // line 26
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
                            // line 27
                            echo "          ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "name", array()), "html", null, true);
                            if ( !$this->getAttribute($context["loop"], "last", array())) {
                                echo ", ";
                            }
                            // line 28
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
                        // line 29
                        echo "        </strong>
      </p>
     ";
                    }
                    // line 32
                    echo "
      <p>Avancement totale : </p>
      <div class=\"progress\">
          <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "avancement", array()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "avancement", array()), "html", null, true);
                    echo "%;\">
          ";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "avancement", array()), "html", null, true);
                    echo "%
          </div>
      </div>

      ";
                    // line 40
                    if ( !(null === $this->getAttribute($context["serie"], "image", array()))) {
                        // line 41
                        echo "        <div class=\"col-sm-9\"></div>
        <div>
          <a href=\"";
                        // line 43
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
                        echo "\">
\t        <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
  \t      <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
  \t       Voir Détails
\t        </button>
          </a>
        </div>
      ";
                    } else {
                        // line 51
                        echo "        <div style=\"padding-left: 510px\">
          <a href=\"";
                        // line 52
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
                    // line 60
                    echo " \t  </div>
   </div>
   </br>
</div>

 ";
                    // line 65
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 66
                    echo " ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 68
            echo "  <h2>Dernières séries suivies: </h2>
  <p> Vous n'avez pas encore de série. N'hésitez pas à en créer une.</p>
";
        }
        
        $__internal_da03c8526941494a315fedc4598a0336fab9e1069e64740f95e6802113a8eafa->leave($__internal_da03c8526941494a315fedc4598a0336fab9e1069e64740f95e6802113a8eafa_prof);

    }

    // line 73
    public function block_add($context, array $blocks = array())
    {
        $__internal_c95b0d66f4494dc7c472e39d79f1bb1299f9a019483439e5ae19b9f8a126e2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95b0d66f4494dc7c472e39d79f1bb1299f9a019483439e5ae19b9f8a126e2b0->enter($__internal_c95b0d66f4494dc7c472e39d79f1bb1299f9a019483439e5ae19b9f8a126e2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWProgresSiesBundle:ProgresSies:index.html.twig"));

        // line 74
        echo "<h2> Ajouter une Série </h2>
<div style=\"padding-top: 20px\">
  <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_add");
        echo "\">
    <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
    <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
    Ajouter une série
    </button>
  </a>
</div>
";
        
        $__internal_c95b0d66f4494dc7c472e39d79f1bb1299f9a019483439e5ae19b9f8a126e2b0->leave($__internal_c95b0d66f4494dc7c472e39d79f1bb1299f9a019483439e5ae19b9f8a126e2b0_prof);

    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle:ProgresSies:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 76,  235 => 74,  229 => 73,  219 => 68,  211 => 66,  209 => 65,  202 => 60,  191 => 52,  188 => 51,  177 => 43,  173 => 41,  171 => 40,  164 => 36,  158 => 35,  153 => 32,  148 => 29,  134 => 28,  128 => 27,  111 => 26,  108 => 25,  106 => 24,  102 => 23,  96 => 22,  92 => 21,  88 => 19,  84 => 17,  76 => 15,  74 => 14,  69 => 11,  63 => 10,  61 => 9,  57 => 7,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} - Home{% endblock %}

{% block body %}
{% if Series is not empty %}
  <h2>Dernières séries suivies: </h2>

 {% set i = 0 %}
  {% for serie in Series if i<3 %}
<div id=\"conteneur\" class=\"col-sm-12\">
  <div class=\"row\">
 \t  <div class=\"element col-sm-1\">
 \t\t   {% if serie.image is not null %}
 \t\t\t    <img src=\"{{ serie.image.url }}\" width=\"180\" height=\"250\" alt=\" {{serie.image.alt}}\">
 \t\t   {% endif %}
 \t  </div>
   <div class=\"col-sm-2\"></div>
 \t <div class=\"element col-sm-8\" {#style=\"margin-left: 20px; margin-top:-25px\"#}>

 \t\t <h2> {{ serie.titre}} </h2>
     <p style=\"margin-top: 20px\">Crée par : <strong>{{serie.createur}} ({{serie.date }}) </strong></p>
\t\t <p>Nombres de saisons : <strong> {{ serie.nbsaisons }}</strong></p>
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
\t        <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
  \t      <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
  \t       Voir Détails
\t        </button>
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
 \t  </div>
   </div>
   </br>
</div>

 {% set i=i+1 %}
 {% endfor %}
{% else %}
  <h2>Dernières séries suivies: </h2>
  <p> Vous n'avez pas encore de série. N'hésitez pas à en créer une.</p>
{% endif%}
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
{% endblock %}", "PWProgresSiesBundle:ProgresSies:index.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/ProgresSies/index.html.twig");
    }
}
