<?php

/* @PWProgresSies/ProgresSies/menu.html.twig */
class __TwigTemplate_03f75643aa9a15be41fd2ed9a66714f25ad94b962fa739b694023c10222182ab extends Twig_Template
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
        echo "<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 2
        $context["i"] = 0;
        // line 3
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Series"]) ? $context["Series"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            if (((isset($context["i"]) ? $context["i"] : null) < 3)) {
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
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 10
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
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
        return array (  52 => 11,  45 => 10,  43 => 9,  37 => 6,  33 => 5,  30 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PWProgresSies/ProgresSies/menu.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\ProgresSies\\menu.html.twig");
    }
}
