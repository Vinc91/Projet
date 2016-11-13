<?php

/* @CoreSphereConsole/Console/console.html.twig */
class __TwigTemplate_05fdf3da769f2729355e6ead092833c94ea682b03a273077f9dbe83bfd5a297a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "@CoreSphereConsole/Console/console.html.twig", 1);
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
        $__internal_53ae6d10166b9febd87809ead9880090b31c95bc76cd5af039fcecc1c62ae6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ae6d10166b9febd87809ead9880090b31c95bc76cd5af039fcecc1c62ae6e3->enter($__internal_53ae6d10166b9febd87809ead9880090b31c95bc76cd5af039fcecc1c62ae6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ae6d10166b9febd87809ead9880090b31c95bc76cd5af039fcecc1c62ae6e3->leave($__internal_53ae6d10166b9febd87809ead9880090b31c95bc76cd5af039fcecc1c62ae6e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d851395c3ee94168b2418cf97688e81e4b8a62ce77de0712c599f49cfe89f41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d851395c3ee94168b2418cf97688e81e4b8a62ce77de0712c599f49cfe89f41a->enter($__internal_d851395c3ee94168b2418cf97688e81e4b8a62ce77de0712c599f49cfe89f41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@CoreSphereConsole/Console/console.html.twig"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_d851395c3ee94168b2418cf97688e81e4b8a62ce77de0712c599f49cfe89f41a->leave($__internal_d851395c3ee94168b2418cf97688e81e4b8a62ce77de0712c599f49cfe89f41a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e3680ff5c584d21cb8f3691887fd1f30137d429af11be9e2bf785ba26dadc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3680ff5c584d21cb8f3691887fd1f30137d429af11be9e2bf785ba26dadc66->enter($__internal_3e3680ff5c584d21cb8f3691887fd1f30137d429af11be9e2bf785ba26dadc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@CoreSphereConsole/Console/console.html.twig"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_3e3680ff5c584d21cb8f3691887fd1f30137d429af11be9e2bf785ba26dadc66->leave($__internal_3e3680ff5c584d21cb8f3691887fd1f30137d429af11be9e2bf785ba26dadc66_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae1c1244ed3c2ba78167b4ef1789de2c7171123d52e856ccdd0794953e4e248d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1c1244ed3c2ba78167b4ef1789de2c7171123d52e856ccdd0794953e4e248d->enter($__internal_ae1c1244ed3c2ba78167b4ef1789de2c7171123d52e856ccdd0794953e4e248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@CoreSphereConsole/Console/console.html.twig"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "@CoreSphereConsole/Console/console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "@CoreSphereConsole/Console/console.html.twig", 12)->display($context);
        
        $__internal_ae1c1244ed3c2ba78167b4ef1789de2c7171123d52e856ccdd0794953e4e248d->leave($__internal_ae1c1244ed3c2ba78167b4ef1789de2c7171123d52e856ccdd0794953e4e248d_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8392abc2af8a00e890b988de8d2c55d8d6d22b214101d4b171639478e7f08658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8392abc2af8a00e890b988de8d2c55d8d6d22b214101d4b171639478e7f08658->enter($__internal_8392abc2af8a00e890b988de8d2c55d8d6d22b214101d4b171639478e7f08658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@CoreSphereConsole/Console/console.html.twig"));

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
        
        $__internal_8392abc2af8a00e890b988de8d2c55d8d6d22b214101d4b171639478e7f08658->leave($__internal_8392abc2af8a00e890b988de8d2c55d8d6d22b214101d4b171639478e7f08658_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Console/console.html.twig";
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
", "@CoreSphereConsole/Console/console.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\coresphere\\console-bundle\\Resources\\views\\Console\\console.html.twig");
    }
}
