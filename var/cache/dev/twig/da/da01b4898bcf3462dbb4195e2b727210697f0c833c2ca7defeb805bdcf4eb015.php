<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c60fd0cdb875f7f3a329fed69cd87fb6bbce7e315a609da3def4d7537f02b535 extends Twig_Template
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
        $__internal_09586132e7db274380e4fafa4125db4f7912586fc78ef7749b7acecedcde76fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09586132e7db274380e4fafa4125db4f7912586fc78ef7749b7acecedcde76fe->enter($__internal_09586132e7db274380e4fafa4125db4f7912586fc78ef7749b7acecedcde76fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_09586132e7db274380e4fafa4125db4f7912586fc78ef7749b7acecedcde76fe->leave($__internal_09586132e7db274380e4fafa4125db4f7912586fc78ef7749b7acecedcde76fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
