<?php

/* @PWProgresSies/Default/index.html.twig */
class __TwigTemplate_5cb59268b15eebaf4e3a90721b031b32415a735ee1d4f82e2df33cd45b0dd71f extends Twig_Template
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
        $__internal_e1b5c0f22caf75522069c80d2e11ab00b2783b66cfbe3bc76653d048a7e44cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b5c0f22caf75522069c80d2e11ab00b2783b66cfbe3bc76653d048a7e44cf6->enter($__internal_e1b5c0f22caf75522069c80d2e11ab00b2783b66cfbe3bc76653d048a7e44cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWProgresSies/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_e1b5c0f22caf75522069c80d2e11ab00b2783b66cfbe3bc76653d048a7e44cf6->leave($__internal_e1b5c0f22caf75522069c80d2e11ab00b2783b66cfbe3bc76653d048a7e44cf6_prof);

    }

    public function getTemplateName()
    {
        return "@PWProgresSies/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@PWProgresSies/Default/index.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
