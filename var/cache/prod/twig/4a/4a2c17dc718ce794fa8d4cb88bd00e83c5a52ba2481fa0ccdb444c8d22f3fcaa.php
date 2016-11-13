<?php

/* @PWProgresSies/ProgresSies/add.html.twig */
class __TwigTemplate_869eaf8ee9a8b22266552c27795fc09354d567fadf53dcdc0642cd22b5331878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig ", "@PWProgresSies/ProgresSies/add.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWProgresSiesBundle::layout.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t
\t<h3> Ajout d'une nouvelle série </h3>
\t";
        // line 12
        echo twig_include($this->env, $context, "PWProgresSiesBundle:ProgresSies:form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PWProgresSies/ProgresSies/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  42 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PWProgresSies/ProgresSies/add.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\ProgresSies\\add.html.twig");
    }
}
