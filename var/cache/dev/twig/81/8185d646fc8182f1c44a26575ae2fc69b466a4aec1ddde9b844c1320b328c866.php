<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_df55933f5825509658dbbd59afdad0f85a714d628d9157d54fad316cb934b48e extends Twig_Template
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
        $__internal_7d4c69b2f4f9d7e3b0ec89700b9b20242fa08a7637f2aec138747a872e16519e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4c69b2f4f9d7e3b0ec89700b9b20242fa08a7637f2aec138747a872e16519e->enter($__internal_7d4c69b2f4f9d7e3b0ec89700b9b20242fa08a7637f2aec138747a872e16519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7d4c69b2f4f9d7e3b0ec89700b9b20242fa08a7637f2aec138747a872e16519e->leave($__internal_7d4c69b2f4f9d7e3b0ec89700b9b20242fa08a7637f2aec138747a872e16519e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
