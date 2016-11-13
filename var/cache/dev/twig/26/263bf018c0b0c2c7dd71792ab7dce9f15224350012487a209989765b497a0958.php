<?php

/* PWProgresSiesBundle:ProgresSies:add.html.twig */
class __TwigTemplate_5a3b7acac10d7ca921a5341c39d9df4062ea879699b9a7101ba0b35bc2b02221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "PWProgresSiesBundle:ProgresSies:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWProgresSiesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fe9208e4257c9e60db5e7c57bf20b4c9abb58c02de952e4785c7746978f46d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe9208e4257c9e60db5e7c57bf20b4c9abb58c02de952e4785c7746978f46d7->enter($__internal_9fe9208e4257c9e60db5e7c57bf20b4c9abb58c02de952e4785c7746978f46d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWProgresSiesBundle:ProgresSies:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fe9208e4257c9e60db5e7c57bf20b4c9abb58c02de952e4785c7746978f46d7->leave($__internal_9fe9208e4257c9e60db5e7c57bf20b4c9abb58c02de952e4785c7746978f46d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6792a8b06ae231b71cbdf999a237ce96616ca841b06a91f65d5bcf75e8cca7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6792a8b06ae231b71cbdf999a237ce96616ca841b06a91f65d5bcf75e8cca7c4->enter($__internal_6792a8b06ae231b71cbdf999a237ce96616ca841b06a91f65d5bcf75e8cca7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWProgresSiesBundle:ProgresSies:add.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout d'une série";
        
        $__internal_6792a8b06ae231b71cbdf999a237ce96616ca841b06a91f65d5bcf75e8cca7c4->leave($__internal_6792a8b06ae231b71cbdf999a237ce96616ca841b06a91f65d5bcf75e8cca7c4_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_503636564e48a23310c5a9a6a7cb69cb3db8bae8882ee3787f1ed77ae5e43b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503636564e48a23310c5a9a6a7cb69cb3db8bae8882ee3787f1ed77ae5e43b91->enter($__internal_503636564e48a23310c5a9a6a7cb69cb3db8bae8882ee3787f1ed77ae5e43b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWProgresSiesBundle:ProgresSies:add.html.twig"));

        // line 6
        echo "      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
";
        
        $__internal_503636564e48a23310c5a9a6a7cb69cb3db8bae8882ee3787f1ed77ae5e43b91->leave($__internal_503636564e48a23310c5a9a6a7cb69cb3db8bae8882ee3787f1ed77ae5e43b91_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_454dcf42a7357d2e41a8935ea99596d4eeba8bd58266936be982e215a8c9766d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454dcf42a7357d2e41a8935ea99596d4eeba8bd58266936be982e215a8c9766d->enter($__internal_454dcf42a7357d2e41a8935ea99596d4eeba8bd58266936be982e215a8c9766d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWProgresSiesBundle:ProgresSies:add.html.twig"));

        // line 12
        echo "\t
\t<h3> Ajout d'une nouvelle série </h3>
\t";
        // line 14
        echo twig_include($this->env, $context, "PWProgresSiesBundle:ProgresSies:form.html.twig");
        echo "
";
        
        $__internal_454dcf42a7357d2e41a8935ea99596d4eeba8bd58266936be982e215a8c9766d->leave($__internal_454dcf42a7357d2e41a8935ea99596d4eeba8bd58266936be982e215a8c9766d_prof);

    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle:ProgresSies:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  71 => 12,  65 => 11,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PWProgresSiesBundle::layout.html.twig\" %}

{% block title %}{{ parent() }} - Ajout d'une série{% endblock %}

{% block header %}
      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
{% endblock %}

{% block body %}
\t
\t<h3> Ajout d'une nouvelle série </h3>
\t{{ include(\"PWProgresSiesBundle:ProgresSies:form.html.twig\") }}
{% endblock %}", "PWProgresSiesBundle:ProgresSies:add.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/ProgresSies/add.html.twig");
    }
}
