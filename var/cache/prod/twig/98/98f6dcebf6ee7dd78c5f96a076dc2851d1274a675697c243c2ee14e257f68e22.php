<?php

/* PWProgresSiesBundle::layout.html.twig */
class __TwigTemplate_380df3156841c2b6784c881ba8f4e72f5e9a65c27176c7d1e6790a99143bb294 extends Twig_Template
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
        echo "\">Mes Series</a></li>

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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "ProgresSies";
    }

    // line 51
    public function block_header($context, array $blocks = array())
    {
        // line 52
        echo "      <div id=\"header\" class=\"jumbotron\" style=\"background-color:#FFFFFF; \">
        <h1 style=\"text-align: center; font-size:80px\">ProgresSies</h1>
        <p class=\"lead\" style=\"text-align:center\">Le site qui vous permet de savoir où vous en êtes dans vos series.</p>
      </div>
";
    }

    // line 59
    public function block_menu($context, array $blocks = array())
    {
        // line 60
        echo "    ";
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        // line 64
        echo "          ";
    }

    // line 67
    public function block_add($context, array $blocks = array())
    {
        // line 68
        echo "        ";
    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 68,  173 => 67,  169 => 64,  166 => 63,  162 => 60,  159 => 59,  151 => 52,  148 => 51,  142 => 7,  128 => 74,  121 => 69,  119 => 67,  115 => 65,  113 => 63,  109 => 61,  107 => 59,  103 => 57,  101 => 51,  89 => 42,  83 => 39,  79 => 38,  69 => 31,  65 => 30,  61 => 29,  54 => 25,  36 => 9,  32 => 7,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PWProgresSiesBundle::layout.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\ProgresSiesBundle/Resources/views/layout.html.twig");
    }
}
