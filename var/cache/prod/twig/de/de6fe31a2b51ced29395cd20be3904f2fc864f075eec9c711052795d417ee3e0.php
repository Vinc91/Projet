<?php

/* PWProgresSiesBundle:ProgresSies:formedit.html.twig */
class __TwigTemplate_00c987c09a3f96ac29ddb92fb4e04312d2585f147682e0a2e189eecbb7dcb0c1 extends Twig_Template
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
        // line 1
        echo "<div class=\"well\">
";
        // line 3
        echo "
  ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

  <div class=\"form-group\">
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de la série"));
        echo "

    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date de création"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "createur", array()), 'row');
        echo "

  ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'row');
        echo "

  ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "genres", array()), 'row');
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
        $context['_seq'] = twig_ensure_traversable((isset($context["saisons"]) ? $context["saisons"] : null));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_update", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "id", array()), "choice" => 1, "saisonid" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
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
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_update", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "id", array()), "choice" => 2, "saisonid" => 0)), "html", null, true);
        echo "\" id=\"add_saison\" class=\"btn btn-default\">
      <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
      Ajouter une saison
     </a>
    </div>
    </div>
  </div>

   ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  ";
        // line 76
        echo "  ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

</div>
";
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
        return array (  159 => 76,  155 => 74,  144 => 66,  141 => 65,  135 => 64,  133 => 63,  119 => 52,  108 => 44,  103 => 42,  98 => 39,  93 => 38,  91 => 37,  81 => 30,  76 => 28,  71 => 26,  64 => 22,  59 => 20,  55 => 19,  47 => 14,  41 => 11,  36 => 9,  30 => 6,  25 => 4,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PWProgresSiesBundle:ProgresSies:formedit.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/ProgresSies/formedit.html.twig");
    }
}
