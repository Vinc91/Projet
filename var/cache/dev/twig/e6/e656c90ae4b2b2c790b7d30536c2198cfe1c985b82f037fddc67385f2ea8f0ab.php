<?php

/* @PWUser/layout.html.twig */
class __TwigTemplate_b361c6e79a879705847324cf2a452e7a29a538337fa128c9d8a3d85567a6a0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "@PWUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PWProgresSiesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_359c3aee1645b2b551be75988dedc85d9b708bd32db69f2c9a42e2f3316432ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359c3aee1645b2b551be75988dedc85d9b708bd32db69f2c9a42e2f3316432ad->enter($__internal_359c3aee1645b2b551be75988dedc85d9b708bd32db69f2c9a42e2f3316432ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_359c3aee1645b2b551be75988dedc85d9b708bd32db69f2c9a42e2f3316432ad->leave($__internal_359c3aee1645b2b551be75988dedc85d9b708bd32db69f2c9a42e2f3316432ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18d330b979a166df2938fedd2b5a0f94c32df94a8633acdd8fe417ab256f922b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d330b979a166df2938fedd2b5a0f94c32df94a8633acdd8fe417ab256f922b->enter($__internal_18d330b979a166df2938fedd2b5a0f94c32df94a8633acdd8fe417ab256f922b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/layout.html.twig"));

        // line 4
        echo "
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
        ";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
  ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_18d330b979a166df2938fedd2b5a0f94c32df94a8633acdd8fe417ab256f922b->leave($__internal_18d330b979a166df2938fedd2b5a0f94c32df94a8633acdd8fe417ab256f922b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_182df36e3ef416da8381026878659bf14204f21e1998a5ff0ede6dce2054753f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182df36e3ef416da8381026878659bf14204f21e1998a5ff0ede6dce2054753f->enter($__internal_182df36e3ef416da8381026878659bf14204f21e1998a5ff0ede6dce2054753f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWUser/layout.html.twig"));

        // line 14
        echo "  ";
        
        $__internal_182df36e3ef416da8381026878659bf14204f21e1998a5ff0ede6dce2054753f->leave($__internal_182df36e3ef416da8381026878659bf14204f21e1998a5ff0ede6dce2054753f_prof);

    }

    public function getTemplateName()
    {
        return "@PWUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

{% block body %}

\t{% for key, messages in app.session.flashbag.all() %}
    {% for message in messages %}
      <div class=\"alert alert-{{ key }}\">
        {{ message|trans({}, 'FOSUserBundle') }}
      </div>
    {% endfor %}
  {% endfor %}

  {% block fos_user_content %}
  {% endblock fos_user_content %}
{% endblock %}", "@PWUser/layout.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
