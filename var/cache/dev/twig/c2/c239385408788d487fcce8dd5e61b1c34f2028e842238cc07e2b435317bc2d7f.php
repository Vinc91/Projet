<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_8fac633bf42a7b19b12565efe6c885aefd0dc9de0ce91beb11188eb717dd02b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b49bd331aabfdc045dc381936c1315db9d58fbb37296315b68e93f48f8432fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49bd331aabfdc045dc381936c1315db9d58fbb37296315b68e93f48f8432fa1->enter($__internal_b49bd331aabfdc045dc381936c1315db9d58fbb37296315b68e93f48f8432fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b49bd331aabfdc045dc381936c1315db9d58fbb37296315b68e93f48f8432fa1->leave($__internal_b49bd331aabfdc045dc381936c1315db9d58fbb37296315b68e93f48f8432fa1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca33c8ad2085d6ec4e34321c0f82db2272f3fcd7410ad9d7527a8631d2246c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca33c8ad2085d6ec4e34321c0f82db2272f3fcd7410ad9d7527a8631d2246c36->enter($__internal_ca33c8ad2085d6ec4e34321c0f82db2272f3fcd7410ad9d7527a8631d2246c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreSphereConsoleBundle:Console:console.html.twig"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_ca33c8ad2085d6ec4e34321c0f82db2272f3fcd7410ad9d7527a8631d2246c36->leave($__internal_ca33c8ad2085d6ec4e34321c0f82db2272f3fcd7410ad9d7527a8631d2246c36_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae64656889ed94f3b375ab12065da9cb33e30f1c4f31e93ab8394fcbf11eb12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae64656889ed94f3b375ab12065da9cb33e30f1c4f31e93ab8394fcbf11eb12b->enter($__internal_ae64656889ed94f3b375ab12065da9cb33e30f1c4f31e93ab8394fcbf11eb12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreSphereConsoleBundle:Console:console.html.twig"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_ae64656889ed94f3b375ab12065da9cb33e30f1c4f31e93ab8394fcbf11eb12b->leave($__internal_ae64656889ed94f3b375ab12065da9cb33e30f1c4f31e93ab8394fcbf11eb12b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e466869d9cdad2692473f56a4ed7f973ccbde68fab9ff23aeb0a5bbfd447281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e466869d9cdad2692473f56a4ed7f973ccbde68fab9ff23aeb0a5bbfd447281->enter($__internal_9e466869d9cdad2692473f56a4ed7f973ccbde68fab9ff23aeb0a5bbfd447281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreSphereConsoleBundle:Console:console.html.twig"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_9e466869d9cdad2692473f56a4ed7f973ccbde68fab9ff23aeb0a5bbfd447281->leave($__internal_9e466869d9cdad2692473f56a4ed7f973ccbde68fab9ff23aeb0a5bbfd447281_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dfeda35e0c0feb9a86a8e419df58c8f660c98a56151014ea0c0fd2eefa925a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfeda35e0c0feb9a86a8e419df58c8f660c98a56151014ea0c0fd2eefa925a88->enter($__internal_dfeda35e0c0feb9a86a8e419df58c8f660c98a56151014ea0c0fd2eefa925a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreSphereConsoleBundle:Console:console.html.twig"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo twig_jsonencode_filter(twig_get_array_keys_filter((isset($context["commands"]) ? $context["commands"] : $this->getContext($context, "commands"))));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_dfeda35e0c0feb9a86a8e419df58c8f660c98a56151014ea0c0fd2eefa925a88->leave($__internal_dfeda35e0c0feb9a86a8e419df58c8f660c98a56151014ea0c0fd2eefa925a88_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 45,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  115 => 25,  111 => 24,  107 => 23,  103 => 21,  97 => 17,  92 => 16,  86 => 15,  78 => 12,  75 => 11,  69 => 10,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreSphereConsoleBundle::base.html.twig'  %}

{% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/console.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}
    {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/coresphereconsole/js/console.js') }}\"></script>
    <script>
        jQuery(function () {
            {% autoescape 'js' %}
            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : {{ commands|keys|json_encode|raw }}.sort(),
                \"post_path\" : \"{{ path('console_exec') }}\",
                \"environment\" : \"{{ environment }}\",
                \"lang\" : {
                    \"loading\" : \"{{ 'coresphere_console.loading'|trans }}\",
                    \"suggestion_head\" : \"{{ 'coresphere_console.suggestion_head'|trans }}\",
                    \"environment\" : \"{{ 'coresphere_console.environment'|trans }}\",
                    \"empty_response\" : \"{{ 'coresphere_console.empty_response'|trans }}\",
                    \"welcome_message\" : \"{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\\\"console_command\\\">list</code>'}) }}\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            {% endautoescape %}
        });
    </script>
{% endblock %}
", "CoreSphereConsoleBundle:Console:console.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\coresphere\\console-bundle/Resources/views/Console/console.html.twig");
    }
}
