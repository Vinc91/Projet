<?php

/* PWProgresSiesBundle:ProgresSies:viewall.html.twig */
class __TwigTemplate_bc746646e4d3fbeea68f6b2f3bb9b41c995dd59e17a7ae32ff7e593ce6829016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "PWProgresSiesBundle:ProgresSies:viewall.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ViewAll";
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
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo " <h2> Voici toutes mes series en cours : </h2>
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Series"]) ? $context["Series"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 14
            echo "\t<div id=\"conteneur\" style=\"display: flex; flex-wrap: nowrap; margin-top:20px; margin-bottom: 20px\">

 \t <div class=\"element\">
 \t\t";
            // line 17
            if ( !(null === $this->getAttribute($context["serie"], "image", array()))) {
                // line 18
                echo " \t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["serie"], "image", array()), "url", array()), "html", null, true);
                echo "\" width=\"180\" height=\"250\" alt=\" ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["serie"], "image", array()), "alt", array()), "html", null, true);
                echo "\">
 \t\t";
            }
            // line 20
            echo " \t </div>

 \t <div class=\"element\" style=\"margin-left: 20px; margin-top:-25px\">

 \t\t<h2> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "titre", array()), "html", null, true);
            echo " </h2>
     <p style=\"margin-top: 20px\">Crée par : <strong>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "createur", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "date", array()), "html", null, true);
            echo ") </strong></p>
\t\t <p>Nombres de saisons : <strong> ";
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
                echo "   <div style=\"padding-left: 335px\">
    <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
                echo "\">
\t<button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
  \t<span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
  \tView Details
\t</button>
    </a>
    </div>
  ";
            } else {
                // line 53
                echo "   <div style=\"padding-left: 510px\">
      <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
                echo "\">
      <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
      <span class=\"glyphicon glyphicon-align-left\" aria-hidden=\"true\"></span>
      View Details
      </button>
      </a>
  </div>
  ";
            }
            // line 62
            echo " \t</div>

</div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo " ";
        if ( !twig_test_empty((isset($context["Series"]) ? $context["Series"] : null))) {
            // line 68
            echo " <ul class=\"pagination\">
    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["pg"]) {
                // line 70
                echo "      <li ";
                if (($context["pg"] == (isset($context["page"]) ? $context["page"] : null))) {
                    echo " class=\"active\" ";
                }
                echo ">
        <a href=\"";
                // line 71
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
            // line 74
            echo "  </ul>
  ";
        } else {
            // line 76
            echo "    <p> Vous n'avez pas encore de série. N'hésitez pas à en créer une.</p>
  ";
        }
    }

    // line 79
    public function block_add($context, array $blocks = array())
    {
        // line 80
        echo "<h2> Ajouter une Serie </h2>
<div style=\"padding-top: 20px\">
  <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_add");
        echo "\">
    <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
    <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
    Ajouter une serie
    </button>
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle:ProgresSies:viewall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 82,  239 => 80,  236 => 79,  230 => 76,  226 => 74,  215 => 71,  208 => 70,  204 => 69,  201 => 68,  198 => 67,  188 => 62,  177 => 54,  174 => 53,  163 => 45,  160 => 44,  158 => 43,  151 => 39,  145 => 38,  140 => 35,  135 => 32,  121 => 31,  115 => 30,  98 => 29,  95 => 28,  93 => 27,  89 => 26,  83 => 25,  79 => 24,  73 => 20,  65 => 18,  63 => 17,  58 => 14,  54 => 13,  51 => 12,  48 => 11,  41 => 6,  38 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PWProgresSiesBundle:ProgresSies:viewall.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/ProgresSies/viewall.html.twig");
    }
}
