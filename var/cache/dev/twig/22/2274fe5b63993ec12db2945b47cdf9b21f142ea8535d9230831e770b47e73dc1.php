<?php

/* @PWProgresSies/ProgresSies/viewsaison.html.twig */
class __TwigTemplate_0545bbc2613d92ba24acde8ba0287f9a436b35eb4c68b0cd2b9cf6d569be923a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "@PWProgresSies/ProgresSies/viewsaison.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWProgresSiesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f16926d436f74ee1bc713f80993cdddefb37cff86e61bcbce4844952f5f86775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16926d436f74ee1bc713f80993cdddefb37cff86e61bcbce4844952f5f86775->enter($__internal_f16926d436f74ee1bc713f80993cdddefb37cff86e61bcbce4844952f5f86775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWProgresSies/ProgresSies/viewsaison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16926d436f74ee1bc713f80993cdddefb37cff86e61bcbce4844952f5f86775->leave($__internal_f16926d436f74ee1bc713f80993cdddefb37cff86e61bcbce4844952f5f86775_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4484344df337fb91f1874e7fa33c36c67e4a914064d9f054a1510c0ba3cc22cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4484344df337fb91f1874e7fa33c36c67e4a914064d9f054a1510c0ba3cc22cb->enter($__internal_4484344df337fb91f1874e7fa33c36c67e4a914064d9f054a1510c0ba3cc22cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/viewsaison.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "titre", array()), "html", null, true);
        
        $__internal_4484344df337fb91f1874e7fa33c36c67e4a914064d9f054a1510c0ba3cc22cb->leave($__internal_4484344df337fb91f1874e7fa33c36c67e4a914064d9f054a1510c0ba3cc22cb_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_547ebb71f40b699b7f138213166a2a405be85cef95505620a4b95ef11a5c7311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547ebb71f40b699b7f138213166a2a405be85cef95505620a4b95ef11a5c7311->enter($__internal_547ebb71f40b699b7f138213166a2a405be85cef95505620a4b95ef11a5c7311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/viewsaison.html.twig"));

        // line 6
        echo "      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
";
        
        $__internal_547ebb71f40b699b7f138213166a2a405be85cef95505620a4b95ef11a5c7311->leave($__internal_547ebb71f40b699b7f138213166a2a405be85cef95505620a4b95ef11a5c7311_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_802ff5522ab5cbb7205eaee0a977dcc33da5053e7b972111110bea28324bbd12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802ff5522ab5cbb7205eaee0a977dcc33da5053e7b972111110bea28324bbd12->enter($__internal_802ff5522ab5cbb7205eaee0a977dcc33da5053e7b972111110bea28324bbd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/viewsaison.html.twig"));

        // line 12
        echo "         <div id=\"menu\" class=\"col-md-3\">
      <h3> Dernieres series suivies </h3>

      ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PWProgresSiesBundle:ProgresSies:menu"));
        echo "
    </div>
    ";
        
        $__internal_802ff5522ab5cbb7205eaee0a977dcc33da5053e7b972111110bea28324bbd12->leave($__internal_802ff5522ab5cbb7205eaee0a977dcc33da5053e7b972111110bea28324bbd12_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_e807d982e6f473fae57aa3a34b4212ae859f493dc94312de9562b6d87009c2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e807d982e6f473fae57aa3a34b4212ae859f493dc94312de9562b6d87009c2b2->enter($__internal_e807d982e6f473fae57aa3a34b4212ae859f493dc94312de9562b6d87009c2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/viewsaison.html.twig"));

        // line 20
        echo " <div id=\"conteneur\" class=\"col-sm-12\">
  <div class=\"row\">
   <div class=\"element col-sm-2\" style=\"padding-top: 20px\">
    ";
        // line 23
        if ( !(null === $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "image", array()))) {
            // line 24
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "image", array()), "url", array()), "html", null, true);
            echo "\" width=\"180\" height=\"250\" alt=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 26
        echo "   </div>
   <div class=\"col-sm-1\"></div>
   <div class=\"element col-sm-9\" style=\"padding-left:40px\">

    <h2> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "titre", array()), "html", null, true);
        echo " </h2>
     <p style=\"margin-top: 20px\">Crée par : <strong>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "createur", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "date", array()), "html", null, true);
        echo ") </strong></p>
     <p>Nombres de saisons : <strong> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "nbsaisons", array()), "html", null, true);
        echo "</strong></p>
     ";
        // line 33
        if ( !$this->getAttribute($this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "genres", array()), "empty", array())) {
            // line 34
            echo "      <p>Genre : <strong>
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "genres", array()));
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
                // line 36
                echo "          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 37
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
            // line 38
            echo "        </strong>
      </p>
      ";
        }
        // line 41
        echo "
    <p>Avancement totale : </p>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "avancement", array()), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "avancement", array()), "html", null, true);
        echo "%;\">
      ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "avancement", array()), "html", null, true);
        echo "%
      </div>
   </div>
  ";
        // line 48
        if ( !(null === $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "image", array()))) {
            // line 49
            echo "  <div class=\"col-sm-3\"></div>
   <div class=\"col-sm-9\" style=\"padding-left:20px\">
    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-menu-left\"></i>
        Retour
    </a>
    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_update", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la série
    </a>
    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_delete", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la série
    </a>
    </div>
  ";
        } else {
            // line 65
            echo "   <div style=\"padding-left: 515px\">
    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_update", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la série
    </a>
    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_delete", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la série
    </a>
    </div>
  ";
        }
        // line 76
        echo "  </div>
</div>
</br>
</div>

<div class=\"well\">

 <div class=\"row\">

  <div class=\"col-md-4\">
    <div class=\"btn-group btn-group-lg\" role=\"group\" aria-label=\"Large button group\">
    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      Saison ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "num", array()), "html", null, true);
        echo "
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\">
      <li><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()), "choice" => 1, "saisonid" => $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "id", array()))), "html", null, true);
        echo "\"> Marquer comme vue </a></li>
      <li><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()), "choice" => 2, "saisonid" => $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "id", array()))), "html", null, true);
        echo "\"> Marquer comme non vue </a></li>
    </ul>
   </div>
  </div>

 <div class=\"col-md-8\" style=\"padding-top:10px\">
  <div class=\"progress\">
    <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "avancement", array()), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "avancement", array()), "html", null, true);
        echo "%;\">
      ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["saison"]) ? $context["saison"] : $this->getContext($context, "saison")), "avancement", array()), "html", null, true);
        echo "%
    </div>
  </div>
 </div>
 </div>
 ";
        // line 106
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

     ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbEpisodes", array()), 'row');
        echo "
    <div class=\"form-group\">
    ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "episodes", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Episodes : "));
        echo "
    ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "episodes", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 116
        $context["i"] = 0;
        // line 117
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "episodes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["formepisode"]) {
            if ( !twig_test_empty((isset($context["episodes"]) ? $context["episodes"] : $this->getContext($context, "episodes")))) {
                // line 118
                echo "      ";
                $context["episode"] = $this->getAttribute((isset($context["episodes"]) ? $context["episodes"] : $this->getContext($context, "episodes")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array");
                // line 119
                echo "        <div class=\"form-group\">
        <label class=\"col-sm-3 control-label col-sm-3 control-label required\">Episode n°";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["episode"]) ? $context["episode"] : $this->getContext($context, "episode")), "num", array()), "html", null, true);
                echo "</label>
          <div class=\"col-sm-8\">
            <div class=\"form-group\">
              <div class=\"col-sm-2\"></div>
              <div class=\"col-sm-8\">
              ";
                // line 125
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["formepisode"], 'errors');
                echo "
              ";
                // line 126
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["formepisode"], "checked", array()), 'widget');
                echo "
              </div>
            </div>
          </div>
        </div>
        ";
                // line 131
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 132
                echo "      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formepisode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "    </div>
    <div class=\"col-sm-2\" >
     ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
     </div>
    </div>

      
";
        // line 140
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_e807d982e6f473fae57aa3a34b4212ae859f493dc94312de9562b6d87009c2b2->leave($__internal_e807d982e6f473fae57aa3a34b4212ae859f493dc94312de9562b6d87009c2b2_prof);

    }

    public function getTemplateName()
    {
        return "@PWProgresSies/ProgresSies/viewsaison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 140,  362 => 135,  358 => 133,  351 => 132,  349 => 131,  341 => 126,  337 => 125,  329 => 120,  326 => 119,  323 => 118,  317 => 117,  315 => 116,  309 => 113,  305 => 112,  300 => 110,  295 => 108,  290 => 106,  282 => 101,  276 => 100,  266 => 93,  262 => 92,  255 => 88,  241 => 76,  232 => 70,  225 => 66,  222 => 65,  213 => 59,  206 => 55,  199 => 51,  195 => 49,  193 => 48,  187 => 45,  181 => 44,  176 => 41,  171 => 38,  157 => 37,  151 => 36,  134 => 35,  131 => 34,  129 => 33,  125 => 32,  119 => 31,  115 => 30,  109 => 26,  101 => 24,  99 => 23,  94 => 20,  88 => 19,  78 => 15,  73 => 12,  67 => 11,  57 => 6,  51 => 5,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} - {{saison.titre}}{% endblock %}

{% block header %}
      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
{% endblock %}

    {% block menu %}
         <div id=\"menu\" class=\"col-md-3\">
      <h3> Dernieres series suivies </h3>

      {{ render(controller(\"PWProgresSiesBundle:ProgresSies:menu\")) }}
    </div>
    {% endblock %}

{% block body %}
 <div id=\"conteneur\" class=\"col-sm-12\">
  <div class=\"row\">
   <div class=\"element col-sm-2\" style=\"padding-top: 20px\">
    {% if serie.image is not null %}
      <img src=\"{{ serie.image.url }}\" width=\"180\" height=\"250\" alt=\" {{serie.image.alt}}\">
    {% endif %}
   </div>
   <div class=\"col-sm-1\"></div>
   <div class=\"element col-sm-9\" style=\"padding-left:40px\">

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
  <div class=\"col-sm-3\"></div>
   <div class=\"col-sm-9\" style=\"padding-left:20px\">
    <a href=\"{{ path('pw_progres_sies_view', {'id': serie.id}) }}\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-menu-left\"></i>
        Retour
    </a>
    <a href=\"{{ path('pw_progres_sies_update', {'id': serie.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la série
    </a>
    <a href=\"{{ path('pw_progres_sies_delete', {'id': serie.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la série
    </a>
    </div>
  {% else %}
   <div style=\"padding-left: 515px\">
    <a href=\"{{ path('pw_progres_sies_update', {'id': serie.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la série
    </a>
    <a href=\"{{ path('pw_progres_sies_delete', {'id': serie.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la série
    </a>
    </div>
  {% endif %}
  </div>
</div>
</br>
</div>

<div class=\"well\">

 <div class=\"row\">

  <div class=\"col-md-4\">
    <div class=\"btn-group btn-group-lg\" role=\"group\" aria-label=\"Large button group\">
    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      Saison {{saison.num}}
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\">
      <li><a href=\"{{ path('pw_progres_sies_view', {'id': serie.id, 'choice': 1, 'saisonid': saison.id}) }}\"> Marquer comme vue </a></li>
      <li><a href=\"{{ path('pw_progres_sies_view', {'id': serie.id, 'choice': 2, 'saisonid': saison.id}) }}\"> Marquer comme non vue </a></li>
    </ul>
   </div>
  </div>

 <div class=\"col-md-8\" style=\"padding-top:10px\">
  <div class=\"progress\">
    <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"{{saison.avancement}}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{saison.avancement}}%;\">
      {{saison.avancement}}%
    </div>
  </div>
 </div>
 </div>
 {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {{ form_errors(form) }}

     {{ form_row(form.nbEpisodes)}}
    <div class=\"form-group\">
    {{ form_label(form.episodes, \"Episodes : \", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.episodes) }}

    <div class=\"col-sm-10\">
      {% set i=0 %}
      {% for formepisode in form.episodes if episodes is not empty%}
      {% set episode = episodes[i] %}
        <div class=\"form-group\">
        <label class=\"col-sm-3 control-label col-sm-3 control-label required\">Episode n°{{episode.num}}</label>
          <div class=\"col-sm-8\">
            <div class=\"form-group\">
              <div class=\"col-sm-2\"></div>
              <div class=\"col-sm-8\">
              {{ form_errors(formepisode) }}
              {{ form_widget(formepisode.checked) }}
              </div>
            </div>
          </div>
        </div>
        {% set i= i+1 %}
      {% endfor %}
    </div>
    <div class=\"col-sm-2\" >
     {{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }}
     </div>
    </div>

      
{{ form_end(form) }}
</div>
{% endblock %}", "@PWProgresSies/ProgresSies/viewsaison.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\ProgresSies\\viewsaison.html.twig");
    }
}
