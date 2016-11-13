<?php

/* @PWUser/Profile/edit.html.twig */
class __TwigTemplate_73b81cdd8724df7c4c1d0fa355cbdbc89f78615dedb7f92f9f26912ff767cc7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@PWUser/Profile/edit.html.twig", 1);
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
        $__internal_f20a372e7917841f308be3c2bc913556adb13d49c900332ea54347cfb7f49b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20a372e7917841f308be3c2bc913556adb13d49c900332ea54347cfb7f49b1f->enter($__internal_f20a372e7917841f308be3c2bc913556adb13d49c900332ea54347cfb7f49b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f20a372e7917841f308be3c2bc913556adb13d49c900332ea54347cfb7f49b1f->leave($__internal_f20a372e7917841f308be3c2bc913556adb13d49c900332ea54347cfb7f49b1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97478e7d9da5e9ec6436d0ecf15a7ec951d91d9e59f8a8d50d2f986dc12adfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97478e7d9da5e9ec6436d0ecf15a7ec951d91d9e59f8a8d50d2f986dc12adfc3->enter($__internal_97478e7d9da5e9ec6436d0ecf15a7ec951d91d9e59f8a8d50d2f986dc12adfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/Profile/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@PWUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_97478e7d9da5e9ec6436d0ecf15a7ec951d91d9e59f8a8d50d2f986dc12adfc3->leave($__internal_97478e7d9da5e9ec6436d0ecf15a7ec951d91d9e59f8a8d50d2f986dc12adfc3_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PWUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
