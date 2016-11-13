<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_41b5dfd8b7d951af2498d383e1d3c7d7fb150c317f233673073f892ca4d10c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PWProgresSiesBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_3540264a79cb50a8889b9f35adc6b8d4148a14e5ee1a65627613829560a06f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3540264a79cb50a8889b9f35adc6b8d4148a14e5ee1a65627613829560a06f51->enter($__internal_3540264a79cb50a8889b9f35adc6b8d4148a14e5ee1a65627613829560a06f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3540264a79cb50a8889b9f35adc6b8d4148a14e5ee1a65627613829560a06f51->leave($__internal_3540264a79cb50a8889b9f35adc6b8d4148a14e5ee1a65627613829560a06f51_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_980791f394d5ae825703649e4bc5ac3daf7ca97e19a5c22d34a733af540ddf5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980791f394d5ae825703649e4bc5ac3daf7ca97e19a5c22d34a733af540ddf5b->enter($__internal_980791f394d5ae825703649e4bc5ac3daf7ca97e19a5c22d34a733af540ddf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_980791f394d5ae825703649e4bc5ac3daf7ca97e19a5c22d34a733af540ddf5b->leave($__internal_980791f394d5ae825703649e4bc5ac3daf7ca97e19a5c22d34a733af540ddf5b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75fa2c2be6806c208805869370b89b4886aadb98888d87d4b407c7a441f097da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fa2c2be6806c208805869370b89b4886aadb98888d87d4b407c7a441f097da->enter($__internal_75fa2c2be6806c208805869370b89b4886aadb98888d87d4b407c7a441f097da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 14
        echo "  ";
        
        $__internal_75fa2c2be6806c208805869370b89b4886aadb98888d87d4b407c7a441f097da->leave($__internal_75fa2c2be6806c208805869370b89b4886aadb98888d87d4b407c7a441f097da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/layout.html.twig");
    }
}
