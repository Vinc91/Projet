<?php

/* @PWProgresSies/ProgresSies/view.html.twig */
class __TwigTemplate_c2914e328dbff7a48dc4305c66509943b012658057bb3404c35f104f8b75110c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "@PWProgresSies/ProgresSies/view.html.twig", 1);
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
        $__internal_6180ea9420a3084daef699fa44534e795a5f15567f54325179251170b7691296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6180ea9420a3084daef699fa44534e795a5f15567f54325179251170b7691296->enter($__internal_6180ea9420a3084daef699fa44534e795a5f15567f54325179251170b7691296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWProgresSies/ProgresSies/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6180ea9420a3084daef699fa44534e795a5f15567f54325179251170b7691296->leave($__internal_6180ea9420a3084daef699fa44534e795a5f15567f54325179251170b7691296_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81556de70f4331c37036a33fca3d849f303919ea4f1e55b3d389321c67573073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81556de70f4331c37036a33fca3d849f303919ea4f1e55b3d389321c67573073->enter($__internal_81556de70f4331c37036a33fca3d849f303919ea4f1e55b3d389321c67573073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/view.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "titre", array()), "html", null, true);
        
        $__internal_81556de70f4331c37036a33fca3d849f303919ea4f1e55b3d389321c67573073->leave($__internal_81556de70f4331c37036a33fca3d849f303919ea4f1e55b3d389321c67573073_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_5f4678c5e754274d8609a6687aadbe04eb1bf3c397a1449299edf6c0f72a7971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4678c5e754274d8609a6687aadbe04eb1bf3c397a1449299edf6c0f72a7971->enter($__internal_5f4678c5e754274d8609a6687aadbe04eb1bf3c397a1449299edf6c0f72a7971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/view.html.twig"));

        // line 6
        echo "      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
";
        
        $__internal_5f4678c5e754274d8609a6687aadbe04eb1bf3c397a1449299edf6c0f72a7971->leave($__internal_5f4678c5e754274d8609a6687aadbe04eb1bf3c397a1449299edf6c0f72a7971_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf982041f0d974d1dad9247b657b0a3c33a3a849c634714ba4a812947b353c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf982041f0d974d1dad9247b657b0a3c33a3a849c634714ba4a812947b353c80->enter($__internal_cf982041f0d974d1dad9247b657b0a3c33a3a849c634714ba4a812947b353c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/view.html.twig"));

        // line 12
        echo "         <div id=\"menu\" class=\"col-md-3\">
      <h3> Dernières séries suivies </h3>

      ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PWProgresSiesBundle:ProgresSies:menu"));
        echo "
    </div>
    ";
        
        $__internal_cf982041f0d974d1dad9247b657b0a3c33a3a849c634714ba4a812947b353c80->leave($__internal_cf982041f0d974d1dad9247b657b0a3c33a3a849c634714ba4a812947b353c80_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_7febac673a5a567425369483e6b661e7f641c5d0efd786bdf018522f8c30d9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7febac673a5a567425369483e6b661e7f641c5d0efd786bdf018522f8c30d9a6->enter($__internal_7febac673a5a567425369483e6b661e7f641c5d0efd786bdf018522f8c30d9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/view.html.twig"));

        // line 20
        echo " <div id=\"conteneur\" class=\"col-sm-12\">
  <div class=\"row \">
 \t <div class=\"element col-sm-2\" style=\"padding-top: 20px\">
 \t\t";
        // line 23
        if ( !(null === $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "image", array()))) {
            // line 24
            echo " \t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "image", array()), "url", array()), "html", null, true);
            echo "\" width=\"180\" height=\"250\" alt=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
 \t\t";
        }
        // line 26
        echo " \t </div>
   <div class=\"col-sm-1\"></div>
 \t <div class=\"element col-sm-9\" style=\"padding-left:40px\">

 \t\t<h2> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "titre", array()), "html", null, true);
        echo " </h2>
     <p style=\"margin-top: 20px\">Crée par : <strong>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "createur", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "date", array()), "html", null, true);
        echo ") </strong></p>
\t\t <p>Nombres de saisons : <strong> ";
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
   <div class=\"col-sm-9\" style=\"padding-left:100px\">
    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_update", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la série
    </a>
    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_delete", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la série
    </a>
    </div>
  ";
        } else {
            // line 61
            echo "   <div style=\"padding-left: 515px\">
    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_update", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la série
    </a>
    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_delete", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la série
    </a>
    </div>
  ";
        }
        // line 72
        echo " \t</div>
</div>
</br>
</div>


 ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["saisons"]) ? $context["saisons"] : $this->getContext($context, "saisons")));
        foreach ($context['_seq'] as $context["_key"] => $context["saison"]) {
            // line 79
            echo "<div class=\"well\">

 <div class=\"row\">

  <div class=\"col-md-4\">
    <div class=\"btn-group btn-group-lg\" role=\"group\" aria-label=\"Large button group\">
    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      Saison ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "num", array()), "html", null, true);
            echo "
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\">
      <li><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()), "choice" => 1, "saisonid" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\"> Marquer comme vue </a></li>
      <li><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()), "choice" => 2, "saisonid" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\"> Marquer comme non vue </a></li>
      <li role=\"separator\" class=\"divider\"></li>
      <li><a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view_saison", array("id" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\"> Episodes </a></li>
    </ul>
   </div>
  </div>

 <div class=\"col-md-8\" style=\"padding-top:10px\">
  <div class=\"progress\">
    <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "avancement", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "avancement", array()), "html", null, true);
            echo "%;\">
      ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "avancement", array()), "html", null, true);
            echo "%
    </div>
  </div>
 </div>

 </div>

</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
";
        
        $__internal_7febac673a5a567425369483e6b661e7f641c5d0efd786bdf018522f8c30d9a6->leave($__internal_7febac673a5a567425369483e6b661e7f641c5d0efd786bdf018522f8c30d9a6_prof);

    }

    public function getTemplateName()
    {
        return "@PWProgresSies/ProgresSies/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 110,  287 => 101,  281 => 100,  271 => 93,  266 => 91,  262 => 90,  255 => 86,  246 => 79,  242 => 78,  234 => 72,  225 => 66,  218 => 62,  215 => 61,  206 => 55,  199 => 51,  195 => 49,  193 => 48,  187 => 45,  181 => 44,  176 => 41,  171 => 38,  157 => 37,  151 => 36,  134 => 35,  131 => 34,  129 => 33,  125 => 32,  119 => 31,  115 => 30,  109 => 26,  101 => 24,  99 => 23,  94 => 20,  88 => 19,  78 => 15,  73 => 12,  67 => 11,  57 => 6,  51 => 5,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} - {{serie.titre}}{% endblock %}

{% block header %}
      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
{% endblock %}

    {% block menu %}
         <div id=\"menu\" class=\"col-md-3\">
      <h3> Dernières séries suivies </h3>

      {{ render(controller(\"PWProgresSiesBundle:ProgresSies:menu\")) }}
    </div>
    {% endblock %}

{% block body %}
 <div id=\"conteneur\" class=\"col-sm-12\">
  <div class=\"row \">
 \t <div class=\"element col-sm-2\" style=\"padding-top: 20px\">
 \t\t{% if serie.image is not null %}
 \t\t\t<img src=\"{{ serie.image.url }}\" width=\"180\" height=\"250\" alt=\" {{serie.image.alt}}\">
 \t\t{% endif %}
 \t </div>
   <div class=\"col-sm-1\"></div>
 \t <div class=\"element col-sm-9\" style=\"padding-left:40px\">

 \t\t<h2> {{ serie.titre}} </h2>
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
  <div class=\"col-sm-3\"></div>
   <div class=\"col-sm-9\" style=\"padding-left:100px\">
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
 \t</div>
</div>
</br>
</div>


 {% for saison in saisons %}
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
      <li role=\"separator\" class=\"divider\"></li>
      <li><a href=\"{{ path('pw_progres_sies_view_saison', {'id': saison.id}) }}\"> Episodes </a></li>
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

</div>
  {% endfor %}

{% endblock %}", "@PWProgresSies/ProgresSies/view.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\ProgresSies\\view.html.twig");
    }
}
