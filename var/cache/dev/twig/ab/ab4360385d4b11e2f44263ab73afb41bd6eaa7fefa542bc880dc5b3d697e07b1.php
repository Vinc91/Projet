<?php

/* PWUserBundle:Profile:show.html.twig */
class __TwigTemplate_541401ed2378eddb9291b1ea3d6b2012d03b5eec3239409b235142d44969c811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PWUserBundle:Profile:show.html.twig", 1);
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
        $__internal_e2f46ac853e68547faab645a0651fbf33ac63d926faad7b78e24a8ad3f9479ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f46ac853e68547faab645a0651fbf33ac63d926faad7b78e24a8ad3f9479ed->enter($__internal_e2f46ac853e68547faab645a0651fbf33ac63d926faad7b78e24a8ad3f9479ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f46ac853e68547faab645a0651fbf33ac63d926faad7b78e24a8ad3f9479ed->leave($__internal_e2f46ac853e68547faab645a0651fbf33ac63d926faad7b78e24a8ad3f9479ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3caaa13bcc6b81d9ad5db908fa200197d1d083b11cc4424d2a2dedcd6c56a949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3caaa13bcc6b81d9ad5db908fa200197d1d083b11cc4424d2a2dedcd6c56a949->enter($__internal_3caaa13bcc6b81d9ad5db908fa200197d1d083b11cc4424d2a2dedcd6c56a949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PWUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "PWUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3caaa13bcc6b81d9ad5db908fa200197d1d083b11cc4424d2a2dedcd6c56a949->leave($__internal_3caaa13bcc6b81d9ad5db908fa200197d1d083b11cc4424d2a2dedcd6c56a949_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "PWUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
