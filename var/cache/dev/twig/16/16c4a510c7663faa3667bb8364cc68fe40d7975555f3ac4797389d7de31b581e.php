<?php

/* @PWProgresSies/ProgresSies/add.html.twig */
class __TwigTemplate_1c399e2dd523e1e179e8dcf8c8fc61b45890fcdd5fb787750c24a955df3cc8c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "@PWProgresSies/ProgresSies/add.html.twig", 1);
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
        $__internal_44634d168322d022eb3360e395ce4d869069f951b20c04e50a939b1e9e5177b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44634d168322d022eb3360e395ce4d869069f951b20c04e50a939b1e9e5177b3->enter($__internal_44634d168322d022eb3360e395ce4d869069f951b20c04e50a939b1e9e5177b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWProgresSies/ProgresSies/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44634d168322d022eb3360e395ce4d869069f951b20c04e50a939b1e9e5177b3->leave($__internal_44634d168322d022eb3360e395ce4d869069f951b20c04e50a939b1e9e5177b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c98f1bc95159aa84da574fa9cf906fc16c2d1d461b127cb7d0b995a97e0347e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98f1bc95159aa84da574fa9cf906fc16c2d1d461b127cb7d0b995a97e0347e7->enter($__internal_c98f1bc95159aa84da574fa9cf906fc16c2d1d461b127cb7d0b995a97e0347e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/add.html.twig"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout d'une série";
        
        $__internal_c98f1bc95159aa84da574fa9cf906fc16c2d1d461b127cb7d0b995a97e0347e7->leave($__internal_c98f1bc95159aa84da574fa9cf906fc16c2d1d461b127cb7d0b995a97e0347e7_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_febdb359056b72b644697c69b1e2b74248147da9a0dcb45e5983ca2ee247ddb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febdb359056b72b644697c69b1e2b74248147da9a0dcb45e5983ca2ee247ddb7->enter($__internal_febdb359056b72b644697c69b1e2b74248147da9a0dcb45e5983ca2ee247ddb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/add.html.twig"));

        // line 6
        echo "      <div id=\"header\" class=\"starter-template\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:50px\">ProgresSies</h1>
      </div>
";
        
        $__internal_febdb359056b72b644697c69b1e2b74248147da9a0dcb45e5983ca2ee247ddb7->leave($__internal_febdb359056b72b644697c69b1e2b74248147da9a0dcb45e5983ca2ee247ddb7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_78ec825a6ebbefee5a01a4157c9773aa20bb6c0e511e840bd3755a412cb85504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ec825a6ebbefee5a01a4157c9773aa20bb6c0e511e840bd3755a412cb85504->enter($__internal_78ec825a6ebbefee5a01a4157c9773aa20bb6c0e511e840bd3755a412cb85504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/ProgresSies/add.html.twig"));

        // line 12
        echo "\t
\t<h3> Ajout d'une nouvelle série </h3>
\t";
        // line 14
        echo twig_include($this->env, $context, "PWProgresSiesBundle:ProgresSies:form.html.twig");
        echo "
";
        
        $__internal_78ec825a6ebbefee5a01a4157c9773aa20bb6c0e511e840bd3755a412cb85504->leave($__internal_78ec825a6ebbefee5a01a4157c9773aa20bb6c0e511e840bd3755a412cb85504_prof);

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
{% endblock %}", "@PWProgresSies/ProgresSies/add.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\ProgresSies\\add.html.twig");
    }
}
