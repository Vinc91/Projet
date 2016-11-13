<?php

/* PWProgresSiesBundle:ProgresSies:index.html.twig */
class __TwigTemplate_8d0accb8a9bc6f7106d6248751b016e444b6d45d09e5bd21fccc9a304731f7a8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        if ( !twig_test_empty((isset($context["Series"]) ? $context["Series"] : null))) {
            // line 7
            echo "  <h2>Dernières séries suivies: </h2>

 ";
            // line 9
            $context["i"] = 0;
            // line 10
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Series"]) ? $context["Series"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
                if (((isset($context["i"]) ? $context["i"] : null) < 3)) {
                    // line 11
                    echo "\t<div id=\"conteneur\" style=\"display: flex; flex-wrap: nowrap; margin-top:20px; margin-bottom: 20px\">

 \t <div class=\"element\">
 \t\t";
                    // line 14
                    if ( !(null === $this->getAttribute($context["serie"], "image", array()))) {
                        // line 15
                        echo " \t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["serie"], "image", array()), "url", array()), "html", null, true);
                        echo "\" width=\"180\" height=\"250\" alt=\" ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["serie"], "image", array()), "alt", array()), "html", null, true);
                        echo "\">
 \t\t";
                    }
                    // line 17
                    echo " \t </div>

 \t <div class=\"element\" style=\"margin-left: 20px; margin-top:-25px\">

 \t\t<h2> ";
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
                        echo "   <div style=\"padding-left: 335px\">
    <a href=\"";
                        // line 42
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
                        // line 50
                        echo "   <div style=\"padding-left: 510px\">
      <a href=\"";
                        // line 51
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
                    // line 59
                    echo " \t</div>

</div>

 ";
                    // line 63
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                    // line 64
                    echo " ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 66
            echo "  <h2>Dernières séries suivies: </h2>
  <p> Vous n'avez pas encore de série. N'hésitez pas à en créer une.</p>
";
        }
    }

    // line 71
    public function block_add($context, array $blocks = array())
    {
        // line 72
        echo "<h2> Ajouter une Serie </h2>
<div style=\"padding-top: 20px\">
  <a href=\"";
        // line 74
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
        return "PWProgresSiesBundle:ProgresSies:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 74,  210 => 72,  207 => 71,  200 => 66,  192 => 64,  190 => 63,  184 => 59,  173 => 51,  170 => 50,  159 => 42,  156 => 41,  154 => 40,  147 => 36,  141 => 35,  136 => 32,  131 => 29,  117 => 28,  111 => 27,  94 => 26,  91 => 25,  89 => 24,  85 => 23,  79 => 22,  75 => 21,  69 => 17,  61 => 15,  59 => 14,  54 => 11,  48 => 10,  46 => 9,  42 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PWProgresSiesBundle:ProgresSies:index.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/ProgresSies/index.html.twig");
    }
}
