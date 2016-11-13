<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f4a9de669596455af0005169d9408d265ba9390456d2b0bce18c6a4db3a83d90 extends Twig_Template
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
        $__internal_75761579d2c3e1cfab2bd79bc5af652272db783eb43ebeb94b07f76590a0cd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75761579d2c3e1cfab2bd79bc5af652272db783eb43ebeb94b07f76590a0cd0a->enter($__internal_75761579d2c3e1cfab2bd79bc5af652272db783eb43ebeb94b07f76590a0cd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_75761579d2c3e1cfab2bd79bc5af652272db783eb43ebeb94b07f76590a0cd0a->leave($__internal_75761579d2c3e1cfab2bd79bc5af652272db783eb43ebeb94b07f76590a0cd0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
