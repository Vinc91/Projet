<?php

/* PWProgresSiesBundle::error.html.twig */
class __TwigTemplate_0764c5c13da63a2362a52b3e86ddc1a8bf8eff20e76f26e9f2b1419569a72469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b91b1bb52527a8b52f14f07a92db13dcfa192554ed3f988389926f9c4a88279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b91b1bb52527a8b52f14f07a92db13dcfa192554ed3f988389926f9c4a88279->enter($__internal_7b91b1bb52527a8b52f14f07a92db13dcfa192554ed3f988389926f9c4a88279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWProgresSiesBundle::error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_7b91b1bb52527a8b52f14f07a92db13dcfa192554ed3f988389926f9c4a88279->leave($__internal_7b91b1bb52527a8b52f14f07a92db13dcfa192554ed3f988389926f9c4a88279_prof);

    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle::error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "PWProgresSiesBundle::error.html.twig", "C:\\wamp64\\www\\Bla-master\\app/Resources/PWProgresSiesBundle/views/error.html.twig");
    }
}
