<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_42e298abc196147bb70c96c4c3e67217032eafa97dbc7697a64581e8f7f2d845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_974575f785e35ee8c37a94b764b3cc9489c6a747f69d2fda73aa23d6eff345ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974575f785e35ee8c37a94b764b3cc9489c6a747f69d2fda73aa23d6eff345ab->enter($__internal_974575f785e35ee8c37a94b764b3cc9489c6a747f69d2fda73aa23d6eff345ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_974575f785e35ee8c37a94b764b3cc9489c6a747f69d2fda73aa23d6eff345ab->leave($__internal_974575f785e35ee8c37a94b764b3cc9489c6a747f69d2fda73aa23d6eff345ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11ee5a4ccc0f6f9f62c5ab9d81cbb8662853bab36c8ef60e927c5e2950d6e255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ee5a4ccc0f6f9f62c5ab9d81cbb8662853bab36c8ef60e927c5e2950d6e255->enter($__internal_11ee5a4ccc0f6f9f62c5ab9d81cbb8662853bab36c8ef60e927c5e2950d6e255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreSphereConsoleBundle::base.html.twig"));

        echo "CoreSphere Console";
        
        $__internal_11ee5a4ccc0f6f9f62c5ab9d81cbb8662853bab36c8ef60e927c5e2950d6e255->leave($__internal_11ee5a4ccc0f6f9f62c5ab9d81cbb8662853bab36c8ef60e927c5e2950d6e255_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ef3bb00bb7f0824244c7a68f8b69c78756ab5098e43b47fef45983af4cd6f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef3bb00bb7f0824244c7a68f8b69c78756ab5098e43b47fef45983af4cd6f08->enter($__internal_1ef3bb00bb7f0824244c7a68f8b69c78756ab5098e43b47fef45983af4cd6f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreSphereConsoleBundle::base.html.twig"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_1ef3bb00bb7f0824244c7a68f8b69c78756ab5098e43b47fef45983af4cd6f08->leave($__internal_1ef3bb00bb7f0824244c7a68f8b69c78756ab5098e43b47fef45983af4cd6f08_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c5142b06b1da0277223ed04558faf7f834bfb36d3e405b088c7b0e22b70ab63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5142b06b1da0277223ed04558faf7f834bfb36d3e405b088c7b0e22b70ab63->enter($__internal_0c5142b06b1da0277223ed04558faf7f834bfb36d3e405b088c7b0e22b70ab63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreSphereConsoleBundle::base.html.twig"));

        echo "";
        
        $__internal_0c5142b06b1da0277223ed04558faf7f834bfb36d3e405b088c7b0e22b70ab63->leave($__internal_0c5142b06b1da0277223ed04558faf7f834bfb36d3e405b088c7b0e22b70ab63_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_174a66789e3eed6b832fc42f0902db721281591107e47eb5e12277a5ee1b4135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174a66789e3eed6b832fc42f0902db721281591107e47eb5e12277a5ee1b4135->enter($__internal_174a66789e3eed6b832fc42f0902db721281591107e47eb5e12277a5ee1b4135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreSphereConsoleBundle::base.html.twig"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_174a66789e3eed6b832fc42f0902db721281591107e47eb5e12277a5ee1b4135->leave($__internal_174a66789e3eed6b832fc42f0902db721281591107e47eb5e12277a5ee1b4135_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\coresphere\\console-bundle/Resources/views/base.html.twig");
    }
}
