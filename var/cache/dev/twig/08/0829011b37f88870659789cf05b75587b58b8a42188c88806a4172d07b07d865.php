<?php

/* PWProgresSiesBundle:Default:index.html.twig */
class __TwigTemplate_053b252ca224174f73f8df43e514811b907df961500e1781d363fa4add59a1ad extends Twig_Template
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
        $__internal_3be0acb2662482fe574b85260d134edb0a864b1509e1087b1747dfe6241886d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be0acb2662482fe574b85260d134edb0a864b1509e1087b1747dfe6241886d3->enter($__internal_3be0acb2662482fe574b85260d134edb0a864b1509e1087b1747dfe6241886d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWProgresSiesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3be0acb2662482fe574b85260d134edb0a864b1509e1087b1747dfe6241886d3->leave($__internal_3be0acb2662482fe574b85260d134edb0a864b1509e1087b1747dfe6241886d3_prof);

    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle:Default:index.html.twig";
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
", "PWProgresSiesBundle:Default:index.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/Default/index.html.twig");
    }
}
