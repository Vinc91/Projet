<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_23ce08e696c892a16a0b40aad83758b8a0a8709bcfeb9d1c80573f0d3ecc5436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cf344818d77615c73b2db8abfa6ebcb19d1eb5c4ce9f60cab296cb439dd2127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf344818d77615c73b2db8abfa6ebcb19d1eb5c4ce9f60cab296cb439dd2127->enter($__internal_9cf344818d77615c73b2db8abfa6ebcb19d1eb5c4ce9f60cab296cb439dd2127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf344818d77615c73b2db8abfa6ebcb19d1eb5c4ce9f60cab296cb439dd2127->leave($__internal_9cf344818d77615c73b2db8abfa6ebcb19d1eb5c4ce9f60cab296cb439dd2127_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c3909ee14490d0db4ed2ebe7e7dd617aed027c9f3e38c77ca860b230eaabb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3909ee14490d0db4ed2ebe7e7dd617aed027c9f3e38c77ca860b230eaabb98->enter($__internal_9c3909ee14490d0db4ed2ebe7e7dd617aed027c9f3e38c77ca860b230eaabb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_9c3909ee14490d0db4ed2ebe7e7dd617aed027c9f3e38c77ca860b230eaabb98->leave($__internal_9c3909ee14490d0db4ed2ebe7e7dd617aed027c9f3e38c77ca860b230eaabb98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
