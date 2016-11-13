<?php

/* ::base.html.twig */
class __TwigTemplate_0c63c3de9932c6e1094949a596bba419c9cee78bf5427eadead897dbb12bfe70 extends Twig_Template
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
        $__internal_d1be0de118046fee604667b71e0bfcc7d629060b591ec638ad05a96d38b4931c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1be0de118046fee604667b71e0bfcc7d629060b591ec638ad05a96d38b4931c->enter($__internal_d1be0de118046fee604667b71e0bfcc7d629060b591ec638ad05a96d38b4931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d1be0de118046fee604667b71e0bfcc7d629060b591ec638ad05a96d38b4931c->leave($__internal_d1be0de118046fee604667b71e0bfcc7d629060b591ec638ad05a96d38b4931c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_023cdb1eae8cdd22b8ae9ed025af826de19cf4f37a36c987e5448becaf3f043a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023cdb1eae8cdd22b8ae9ed025af826de19cf4f37a36c987e5448becaf3f043a->enter($__internal_023cdb1eae8cdd22b8ae9ed025af826de19cf4f37a36c987e5448becaf3f043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_023cdb1eae8cdd22b8ae9ed025af826de19cf4f37a36c987e5448becaf3f043a->leave($__internal_023cdb1eae8cdd22b8ae9ed025af826de19cf4f37a36c987e5448becaf3f043a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7c71de8b4080cf5206e63bdc5fe13b1956e3acf184fbf6fe2c870234ede8937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c71de8b4080cf5206e63bdc5fe13b1956e3acf184fbf6fe2c870234ede8937->enter($__internal_a7c71de8b4080cf5206e63bdc5fe13b1956e3acf184fbf6fe2c870234ede8937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_a7c71de8b4080cf5206e63bdc5fe13b1956e3acf184fbf6fe2c870234ede8937->leave($__internal_a7c71de8b4080cf5206e63bdc5fe13b1956e3acf184fbf6fe2c870234ede8937_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c491962ae0fd3050186096a0176e44aa33073d5e3a015f791e2ee401b48a7738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c491962ae0fd3050186096a0176e44aa33073d5e3a015f791e2ee401b48a7738->enter($__internal_c491962ae0fd3050186096a0176e44aa33073d5e3a015f791e2ee401b48a7738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_c491962ae0fd3050186096a0176e44aa33073d5e3a015f791e2ee401b48a7738->leave($__internal_c491962ae0fd3050186096a0176e44aa33073d5e3a015f791e2ee401b48a7738_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd31814377db90be4554486cd77a76dabb4cd7905d6ae3177f2cfa10af361bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd31814377db90be4554486cd77a76dabb4cd7905d6ae3177f2cfa10af361bf5->enter($__internal_dd31814377db90be4554486cd77a76dabb4cd7905d6ae3177f2cfa10af361bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_dd31814377db90be4554486cd77a76dabb4cd7905d6ae3177f2cfa10af361bf5->leave($__internal_dd31814377db90be4554486cd77a76dabb4cd7905d6ae3177f2cfa10af361bf5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\Bla-master\\app/Resources\\views/base.html.twig");
    }
}
