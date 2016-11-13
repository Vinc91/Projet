<?php

/* @PWProgresSies/layout.html.twig */
class __TwigTemplate_03b968052550567497cd887e4791fdf3326b63ca99a341bb6c00e353914fa5af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'add' => array($this, 'block_add'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96ce7f7dfc6f6eaebac0e6fc0de7ca89b4da439aa9da9992494807622ce7a3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ce7f7dfc6f6eaebac0e6fc0de7ca89b4da439aa9da9992494807622ce7a3d7->enter($__internal_96ce7f7dfc6f6eaebac0e6fc0de7ca89b4da439aa9da9992494807622ce7a3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PWProgresSies/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 9
        echo "<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

</head>

<body>

<div class=\"navbar navbar-inverse navbar-fixed-top\"  >
      <div class=\"container\">
        <div class=\"navbar-header\" >
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\";\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_home");
        echo "\">ProgresSies</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\" >
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_add");
        echo "\">Ajouter une série</a></li>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pw_progres_sies_viewall");
        echo "\">Mes Séries</a></li>

            <li role=\"presentation\" class=\"dropdown\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Mon compte <span class=\"caret\"></span>
              </a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a></li>
                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span></a></li>


          </ul>
        </div>
      </div>
    </div>

<div class=\"container\" style=\"padding-top:60px; \">
";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "
  <div class=\"row\">
    ";
        // line 59
        $this->displayBlock('menu', $context, $blocks);
        // line 61
        echo "
    <div id=\"content\" class=\"col-md-9\">
          ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 67
        $this->displayBlock('add', $context, $blocks);
        // line 69
        echo "    </div>
  </div>

</div>
<footer>
      <h5 style=\"text-align: center\">ProgresSies © ";
        // line 74
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Projet Programmation Web.</h5>
</footer>

<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>


</body>
</html>";
        
        $__internal_96ce7f7dfc6f6eaebac0e6fc0de7ca89b4da439aa9da9992494807622ce7a3d7->leave($__internal_96ce7f7dfc6f6eaebac0e6fc0de7ca89b4da439aa9da9992494807622ce7a3d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8d50ae3b4159aab7d273e82974d2957ae81632caa2ea97c764a6dc830676b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d50ae3b4159aab7d273e82974d2957ae81632caa2ea97c764a6dc830676b8d->enter($__internal_a8d50ae3b4159aab7d273e82974d2957ae81632caa2ea97c764a6dc830676b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/layout.html.twig"));

        echo "ProgresSies";
        
        $__internal_a8d50ae3b4159aab7d273e82974d2957ae81632caa2ea97c764a6dc830676b8d->leave($__internal_a8d50ae3b4159aab7d273e82974d2957ae81632caa2ea97c764a6dc830676b8d_prof);

    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        $__internal_a1147ce10050d7d1ac42bcb1947820ea3d2f6ceef2fa4cfce033c4075c2d14b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1147ce10050d7d1ac42bcb1947820ea3d2f6ceef2fa4cfce033c4075c2d14b9->enter($__internal_a1147ce10050d7d1ac42bcb1947820ea3d2f6ceef2fa4cfce033c4075c2d14b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/layout.html.twig"));

        // line 52
        echo "      <div id=\"header\" class=\"jumbotron col-sm-12\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center\">ProgresSies</h1>
        <p class=\"lead\" style=\"text-align:center\">Le site qui vous permet de savoir où vous en êtes dans vos séries.</p>
      </div>
";
        
        $__internal_a1147ce10050d7d1ac42bcb1947820ea3d2f6ceef2fa4cfce033c4075c2d14b9->leave($__internal_a1147ce10050d7d1ac42bcb1947820ea3d2f6ceef2fa4cfce033c4075c2d14b9_prof);

    }

    // line 59
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3fb4b62c11ea45e5a299ae30a008675b7803a4aebaf30c11da4a170d3c26328e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb4b62c11ea45e5a299ae30a008675b7803a4aebaf30c11da4a170d3c26328e->enter($__internal_3fb4b62c11ea45e5a299ae30a008675b7803a4aebaf30c11da4a170d3c26328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/layout.html.twig"));

        // line 60
        echo "    ";
        
        $__internal_3fb4b62c11ea45e5a299ae30a008675b7803a4aebaf30c11da4a170d3c26328e->leave($__internal_3fb4b62c11ea45e5a299ae30a008675b7803a4aebaf30c11da4a170d3c26328e_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_112647b52ce2adc11fe4a05195b409955d1f7085699d6b10f572d991edaa40ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112647b52ce2adc11fe4a05195b409955d1f7085699d6b10f572d991edaa40ef->enter($__internal_112647b52ce2adc11fe4a05195b409955d1f7085699d6b10f572d991edaa40ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/layout.html.twig"));

        // line 64
        echo "          ";
        
        $__internal_112647b52ce2adc11fe4a05195b409955d1f7085699d6b10f572d991edaa40ef->leave($__internal_112647b52ce2adc11fe4a05195b409955d1f7085699d6b10f572d991edaa40ef_prof);

    }

    // line 67
    public function block_add($context, array $blocks = array())
    {
        $__internal_80aaba152ae0fb5657e2cb6637c594e4a9f815d7964323025250e25b93e9d14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80aaba152ae0fb5657e2cb6637c594e4a9f815d7964323025250e25b93e9d14e->enter($__internal_80aaba152ae0fb5657e2cb6637c594e4a9f815d7964323025250e25b93e9d14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@PWProgresSies/layout.html.twig"));

        // line 68
        echo "        ";
        
        $__internal_80aaba152ae0fb5657e2cb6637c594e4a9f815d7964323025250e25b93e9d14e->leave($__internal_80aaba152ae0fb5657e2cb6637c594e4a9f815d7964323025250e25b93e9d14e_prof);

    }

    public function getTemplateName()
    {
        return "@PWProgresSies/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 68,  203 => 67,  196 => 64,  190 => 63,  183 => 60,  177 => 59,  166 => 52,  160 => 51,  148 => 7,  131 => 74,  124 => 69,  122 => 67,  118 => 65,  116 => 63,  112 => 61,  110 => 59,  106 => 57,  104 => 51,  92 => 42,  86 => 39,  82 => 38,  72 => 31,  68 => 30,  64 => 29,  57 => 25,  39 => 9,  35 => 7,  27 => 1,);
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
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}ProgresSies{% endblock %}</title>
  {# BOOTSTRAP #}
<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

</head>

<body>

<div class=\"navbar navbar-inverse navbar-fixed-top\"  >
      <div class=\"container\">
        <div class=\"navbar-header\" >
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\";\" href=\"{{ path('pw_progres_sies_home') }}\">ProgresSies</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\" >
            <li><a href=\"{{ path('pw_progres_sies_home') }}\">Home</a></li>
            <li><a href=\"{{ path('pw_progres_sies_add') }}\">Ajouter une série</a></li>
            <li><a href=\"{{ path('pw_progres_sies_viewall') }}\">Mes Séries</a></li>

            <li role=\"presentation\" class=\"dropdown\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Mon compte <span class=\"caret\"></span>
              </a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"{{ path('fos_user_profile_show') }}\">Mes informations</a></li>
                <li><a href=\"{{ path('fos_user_change_password') }}\">Changer mon mot de passe</a></li>
              </ul>
            </li>
            <li><a href=\"{{ path('fos_user_security_logout')}}\"><span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span></a></li>


          </ul>
        </div>
      </div>
    </div>

<div class=\"container\" style=\"padding-top:60px; \">
{% block header %}
      <div id=\"header\" class=\"jumbotron col-sm-12\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center\">ProgresSies</h1>
        <p class=\"lead\" style=\"text-align:center\">Le site qui vous permet de savoir où vous en êtes dans vos séries.</p>
      </div>
{% endblock %}

  <div class=\"row\">
    {% block menu %}
    {% endblock %}

    <div id=\"content\" class=\"col-md-9\">
          {% block body %}
          {% endblock %}
    </div>
    <div class=\"col-md-3\">
        {% block add %}
        {% endblock %}
    </div>
  </div>

</div>
<footer>
      <h5 style=\"text-align: center\">ProgresSies © {{ 'now'|date('Y') }} Projet Programmation Web.</h5>
</footer>

<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>


</body>
</html>", "@PWProgresSies/layout.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle\\Resources\\views\\layout.html.twig");
    }
}
