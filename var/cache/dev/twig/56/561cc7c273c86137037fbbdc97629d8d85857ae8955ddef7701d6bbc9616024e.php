<?php

/* @CoreSphereConsole/base.html.twig */
class __TwigTemplate_4224df53c30555299bdc97fb43127f0121a5c11a523c4a55aa5d4d1b80c834f4 extends Twig_Template
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
        $__internal_6a2bde0c4696199149ce70834f23b7503f5f53c9dd51753209803ed9f30e49e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2bde0c4696199149ce70834f23b7503f5f53c9dd51753209803ed9f30e49e5->enter($__internal_6a2bde0c4696199149ce70834f23b7503f5f53c9dd51753209803ed9f30e49e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/base.html.twig"));

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
        
        $__internal_6a2bde0c4696199149ce70834f23b7503f5f53c9dd51753209803ed9f30e49e5->leave($__internal_6a2bde0c4696199149ce70834f23b7503f5f53c9dd51753209803ed9f30e49e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_755f2ea7319b4a2dedcbc07449e77fbb850803bce476be0a5472aeca17e5d375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755f2ea7319b4a2dedcbc07449e77fbb850803bce476be0a5472aeca17e5d375->enter($__internal_755f2ea7319b4a2dedcbc07449e77fbb850803bce476be0a5472aeca17e5d375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@CoreSphereConsole/base.html.twig"));

        echo "CoreSphere Console";
        
        $__internal_755f2ea7319b4a2dedcbc07449e77fbb850803bce476be0a5472aeca17e5d375->leave($__internal_755f2ea7319b4a2dedcbc07449e77fbb850803bce476be0a5472aeca17e5d375_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_439c1dd0b5b42cc7ac299056a425862c21bf2ef446e7a658361066b2945b5331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439c1dd0b5b42cc7ac299056a425862c21bf2ef446e7a658361066b2945b5331->enter($__internal_439c1dd0b5b42cc7ac299056a425862c21bf2ef446e7a658361066b2945b5331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@CoreSphereConsole/base.html.twig"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_439c1dd0b5b42cc7ac299056a425862c21bf2ef446e7a658361066b2945b5331->leave($__internal_439c1dd0b5b42cc7ac299056a425862c21bf2ef446e7a658361066b2945b5331_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_da7dc22a45b7c5915eae07bade728461c705a1a7ca2a51924997594a8371a9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7dc22a45b7c5915eae07bade728461c705a1a7ca2a51924997594a8371a9b0->enter($__internal_da7dc22a45b7c5915eae07bade728461c705a1a7ca2a51924997594a8371a9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@CoreSphereConsole/base.html.twig"));

        echo "";
        
        $__internal_da7dc22a45b7c5915eae07bade728461c705a1a7ca2a51924997594a8371a9b0->leave($__internal_da7dc22a45b7c5915eae07bade728461c705a1a7ca2a51924997594a8371a9b0_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c34f307710ebabfcaf2c0a002e2d5c7f560f6840c455adfec0f19194e5d07771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34f307710ebabfcaf2c0a002e2d5c7f560f6840c455adfec0f19194e5d07771->enter($__internal_c34f307710ebabfcaf2c0a002e2d5c7f560f6840c455adfec0f19194e5d07771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@CoreSphereConsole/base.html.twig"));

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
        
        $__internal_c34f307710ebabfcaf2c0a002e2d5c7f560f6840c455adfec0f19194e5d07771->leave($__internal_c34f307710ebabfcaf2c0a002e2d5c7f560f6840c455adfec0f19194e5d07771_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/base.html.twig";
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
", "@CoreSphereConsole/base.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\coresphere\\console-bundle\\Resources\\views\\base.html.twig");
    }
}
