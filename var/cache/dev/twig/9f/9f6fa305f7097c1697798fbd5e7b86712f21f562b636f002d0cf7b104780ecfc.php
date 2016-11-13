<?php

/* PWUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e5f7e6c2a30b46435bc9b41930278f7eae5d2d839ce48d3cba9dbbf4a121c4f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_89e9b318cf8f4169d621d2076a8f71692d40c6c0c607cca53d9d96b57d32f5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e9b318cf8f4169d621d2076a8f71692d40c6c0c607cca53d9d96b57d32f5c4->enter($__internal_89e9b318cf8f4169d621d2076a8f71692d40c6c0c607cca53d9d96b57d32f5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e9b318cf8f4169d621d2076a8f71692d40c6c0c607cca53d9d96b57d32f5c4->leave($__internal_89e9b318cf8f4169d621d2076a8f71692d40c6c0c607cca53d9d96b57d32f5c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc66cf1dc6b89e3b778ca3365857199d5c4402b5f422520a78c7d0bc30f208cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc66cf1dc6b89e3b778ca3365857199d5c4402b5f422520a78c7d0bc30f208cc->enter($__internal_cc66cf1dc6b89e3b778ca3365857199d5c4402b5f422520a78c7d0bc30f208cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "PWUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cc66cf1dc6b89e3b778ca3365857199d5c4402b5f422520a78c7d0bc30f208cc->leave($__internal_cc66cf1dc6b89e3b778ca3365857199d5c4402b5f422520a78c7d0bc30f208cc_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "PWUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
