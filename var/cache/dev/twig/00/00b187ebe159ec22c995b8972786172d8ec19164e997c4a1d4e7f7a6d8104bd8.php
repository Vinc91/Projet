<?php

/* @PWProgresSies/ProgresSies/menu.html.twig */
class __TwigTemplate_282c58a7e022da7e9f96c4f50132465d7edb91198920eb432cb0a3b6a5931957 extends Twig_Template
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
        $__internal_ae7f64ce46b5662471f9930d315d9d2e4344e075dc7945ee1503f4c7a9d91e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7f64ce46b5662471f9930d315d9d2e4344e075dc7945ee1503f4c7a9d91e64->enter($__internal_ae7f64ce46b5662471f9930d315d9d2e4344e075dc7945ee1503f4c7a9d91e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWProgresSies/ProgresSies/menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 2
        $context["i"] = 0;
        // line 3
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Series"]) ? $context["Series"] : $this->getContext($context, "Series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 3)) {
                // line 4
                echo "    <li>
      <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_view", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
                echo "\">
        ";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "titre", array()), "html", null, true);
                echo "
      </a>
    </li>
    ";
                // line 9
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 10
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
        
        $__internal_ae7f64ce46b5662471f9930d315d9d2e4344e075dc7945ee1503f4c7a9d91e64->leave($__internal_ae7f64ce46b5662471f9930d315d9d2e4344e075dc7945ee1503f4c7a9d91e64_prof);

    }

    public function getTemplateName()
    {
        return "@PWProgresSies/ProgresSies/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  48 => 10,  46 => 9,  40 => 6,  36 => 5,  33 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-pills nav-stacked\">
  {% set i = 0 %}
  {% for serie in Series if i<3 %}
    <li>
      <a href=\"{{ path('pw_progres_sies_view', {'id': serie.id}) }}\">
        {{ serie.titre }}
      </a>
    </li>
    {% set i=i+1 %}
  {% endfor %}
</ul>", "@PWProgresSies/ProgresSies/menu.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\ProgresSies\\menu.html.twig");
    }
}
