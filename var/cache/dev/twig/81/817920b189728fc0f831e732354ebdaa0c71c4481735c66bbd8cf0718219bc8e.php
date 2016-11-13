<?php

/* base.html.twig */
class __TwigTemplate_31a41e7e48beaf8163a43724007ebf38e576d4645857a22c3377ece5c81a8348 extends Twig_Template
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
        $__internal_e3430f56a2746654646794fa416294283dd33cf50ed4dbc105d68db809ee63b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3430f56a2746654646794fa416294283dd33cf50ed4dbc105d68db809ee63b7->enter($__internal_e3430f56a2746654646794fa416294283dd33cf50ed4dbc105d68db809ee63b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e3430f56a2746654646794fa416294283dd33cf50ed4dbc105d68db809ee63b7->leave($__internal_e3430f56a2746654646794fa416294283dd33cf50ed4dbc105d68db809ee63b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e34418df4163b8698e10a087afa28a04ec2e3452b832a8f984efb2284643ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e34418df4163b8698e10a087afa28a04ec2e3452b832a8f984efb2284643ccd->enter($__internal_2e34418df4163b8698e10a087afa28a04ec2e3452b832a8f984efb2284643ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_2e34418df4163b8698e10a087afa28a04ec2e3452b832a8f984efb2284643ccd->leave($__internal_2e34418df4163b8698e10a087afa28a04ec2e3452b832a8f984efb2284643ccd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8c09231f3af29b18f78b11c182d7a8eac0ec85a594fe9e88357b96851d99fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c09231f3af29b18f78b11c182d7a8eac0ec85a594fe9e88357b96851d99fde->enter($__internal_f8c09231f3af29b18f78b11c182d7a8eac0ec85a594fe9e88357b96851d99fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f8c09231f3af29b18f78b11c182d7a8eac0ec85a594fe9e88357b96851d99fde->leave($__internal_f8c09231f3af29b18f78b11c182d7a8eac0ec85a594fe9e88357b96851d99fde_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0700a490b7b098924083e8ddb010d5f8ac77e4eed03efac97ae7b4481c10a09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0700a490b7b098924083e8ddb010d5f8ac77e4eed03efac97ae7b4481c10a09d->enter($__internal_0700a490b7b098924083e8ddb010d5f8ac77e4eed03efac97ae7b4481c10a09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0700a490b7b098924083e8ddb010d5f8ac77e4eed03efac97ae7b4481c10a09d->leave($__internal_0700a490b7b098924083e8ddb010d5f8ac77e4eed03efac97ae7b4481c10a09d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e34c1f98a0feb6d35639c028ea8a101e6bdff6726e3cb5a807cfe4dbf9260185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34c1f98a0feb6d35639c028ea8a101e6bdff6726e3cb5a807cfe4dbf9260185->enter($__internal_e34c1f98a0feb6d35639c028ea8a101e6bdff6726e3cb5a807cfe4dbf9260185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e34c1f98a0feb6d35639c028ea8a101e6bdff6726e3cb5a807cfe4dbf9260185->leave($__internal_e34c1f98a0feb6d35639c028ea8a101e6bdff6726e3cb5a807cfe4dbf9260185_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Bla-master\\app\\Resources\\views\\base.html.twig");
    }
}
