<?php

/* @PWProgresSies/ProgresSies/view.html.twig */
class __TwigTemplate_4900d2a7680a38d761d9e0cf78b033f48947bfd333c7c58b4566240095142a7f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - View";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
";
    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        // line 12
        echo "         <div id=\"menu\" class=\"col-md-3\">
      <h3> Dernieres series suivies </h3>

      ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PWProgresSiesBundle:ProgresSies:menu"));
        echo "
    </div>
    ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo " <div id=\"conteneur\" style=\"display: flex; flex-wrap: nowrap; margin-top:20px; margin-bottom: 20px\">

 \t <div class=\"element\">
 \t\t";
        // line 23
        if ( !(null === $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "image", array()))) {
            // line 24
            echo " \t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "image", array()), "url", array()), "html", null, true);
            echo "\" width=\"180\" height=\"250\" alt=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "image", array()), "alt", array()), "html", null, true);
            echo "\">
 \t\t";
        }
        // line 26
        echo " \t </div>

 \t <div class=\"element\" style=\"margin-left: 20px; margin-top:-25px\">

 \t\t<h2> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "titre", array()), "html", null, true);
        echo " </h2>
     <p style=\"margin-top: 20px\">Crée par : <strong>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "createur", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "date", array()), "html", null, true);
        echo ") </strong></p>
\t\t <p>Nombres de saisons : <strong> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "nbsaisons", array()), "html", null, true);
        echo "</strong></p>
     ";
        // line 33
        if ( !$this->getAttribute($this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "genres", array()), "empty", array())) {
            // line 34
            echo "      <p>Genre : <strong>
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "genres", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "avancement", array()), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "avancement", array()), "html", null, true);
        echo "%;\">
      ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "avancement", array()), "html", null, true);
        echo "%
      </div>
   </div>
  ";
        // line 48
        if ( !(null === $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "image", array()))) {
            // line 49
            echo "   <div style=\"padding-left: 335px\">
    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_update", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la série
    </a>
    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_delete", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la série
    </a>
    </div>
  ";
        } else {
            // line 60
            echo "   <div style=\"padding-left: 515px\">
    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_update", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier la série
    </a>
    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_delete", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer la série
    </a>
    </div>
  ";
        }
        // line 71
        echo " \t</div>

</div>


 ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["saisons"]) ? $context["saisons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["saison"]) {
            // line 77
            echo "<div class=\"well\">

 <div class=\"row\">

  <div class=\"col-md-4\">
    <div class=\"btn-group btn-group-lg\" role=\"group\" aria-label=\"Large button group\">
    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      Saison ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "num", array()), "html", null, true);
            echo "
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\">
      <li><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "id", array()), "choice" => 1, "saisonid" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\"> Marquer comme vue </a></li>
      <li><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "id", array()), "choice" => 2, "saisonid" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\"> Marquer comme non vue </a></li>
      <li role=\"separator\" class=\"divider\"></li>
      <li><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view_saison", array("id" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\"> Episodes </a></li>
    </ul>
   </div>
  </div>

 <div class=\"col-md-8\" style=\"padding-top:10px\">
  <div class=\"progress\">
    <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "avancement", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "avancement", array()), "html", null, true);
            echo "%;\">
      ";
            // line 99
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
        // line 108
        echo "
";
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
        return array (  272 => 108,  257 => 99,  251 => 98,  241 => 91,  236 => 89,  232 => 88,  225 => 84,  216 => 77,  212 => 76,  205 => 71,  196 => 65,  189 => 61,  186 => 60,  177 => 54,  170 => 50,  167 => 49,  165 => 48,  159 => 45,  153 => 44,  148 => 41,  143 => 38,  129 => 37,  123 => 36,  106 => 35,  103 => 34,  101 => 33,  97 => 32,  91 => 31,  87 => 30,  81 => 26,  73 => 24,  71 => 23,  66 => 20,  63 => 19,  56 => 15,  51 => 12,  48 => 11,  41 => 6,  38 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PWProgresSies/ProgresSies/view.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\ProgresSies\\view.html.twig");
    }
}
