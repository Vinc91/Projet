<?php

/* PWProgresSiesBundle::login_content.html.twig */
class __TwigTemplate_26331210a6c222b80fe65b0dcdb1967cc56d027db5f0af9f143036a82a1a4596 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 7
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : null)) {
            // line 8
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\" />
    ";
        }
        // line 10
        echo "
<div class=\"well\" style=\"margin-left:280px\">

<div class=\"row\">
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\"/>
            </br>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"password\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
            </br>
        </div>
    </div>
</div>

";
        // line 41
        echo "
<div class=\"row\">
    <div class=\"form-group\" style=\"padding-left:230px\">
        <div class=\"col-sm-2\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"form-group\" style=\"padding-left:160px\">
        <div class=\"col-sm-10\">
            </br>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">
            <p>Pas d'identifiant ? Inscrivez vous ! <p>
            </a>
        </div>
    </div>
</div>
</form>";
    }

    public function getTemplateName()
    {
        return "PWProgresSiesBundle::login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 54,  83 => 45,  77 => 41,  66 => 25,  55 => 17,  50 => 15,  43 => 10,  37 => 8,  35 => 7,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PWProgresSiesBundle::login_content.html.twig", "C:\\wamp64\\www\\Bla-master\\app/Resources/PWProgresSiesBundle/views/login_content.html.twig");
    }
}
