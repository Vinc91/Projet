<?php

/* PWUserBundle:Security:login_content.html.twig */
class __TwigTemplate_6a8c8a1184a73788de1143294c77ea4737102eadbeb77a713b7bdff709c07e37 extends Twig_Template
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
        $__internal_b969e2f2d259dd1f8a168b6c4467a1caff4484568ef685d128a361212e30684f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b969e2f2d259dd1f8a168b6c4467a1caff4484568ef685d128a361212e30684f->enter($__internal_b969e2f2d259dd1f8a168b6c4467a1caff4484568ef685d128a361212e30684f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PWUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 7
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 8
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 10
        echo "<div class=\"col-sm-4\"></div>
<div class=\"well col-sm-8\">

<div class=\"row\">
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-10\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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

<div class=\"row\">
    <div class=\"form-group\">
        <div class=\"col-sm-5\"></div>
        <div class=\"col-sm-2\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"form-group\">
        <div class=\"col-sm-3\"></div>
        <div class=\"col-sm-7\" style=\"padding-left:45px\">
            </br>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">
            <p>Pas d'identifiant ? Inscrivez vous ! <p>
            </a>
        </div>
    </div>
</div>
</div>
</form>";
        
        $__internal_b969e2f2d259dd1f8a168b6c4467a1caff4484568ef685d128a361212e30684f->leave($__internal_b969e2f2d259dd1f8a168b6c4467a1caff4484568ef685d128a361212e30684f_prof);

    }

    public function getTemplateName()
    {
        return "PWUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 47,  84 => 37,  69 => 25,  58 => 17,  53 => 15,  46 => 10,  40 => 8,  38 => 7,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
<div class=\"col-sm-4\"></div>
<div class=\"well col-sm-8\">

<div class=\"row\">
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"username\">{{ 'security.login.username'|trans }}</label>
        <div class=\"col-sm-10\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\"/>
            </br>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\" for=\"password\">{{ 'security.login.password'|trans }}</label>
        <div class=\"col-sm-10\">
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
            </br>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"form-group\">
        <div class=\"col-sm-5\"></div>
        <div class=\"col-sm-2\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"form-group\">
        <div class=\"col-sm-3\"></div>
        <div class=\"col-sm-7\" style=\"padding-left:45px\">
            </br>
            <a href=\"{{ path('fos_user_registration_register') }}\">
            <p>Pas d'identifiant ? Inscrivez vous ! <p>
            </a>
        </div>
    </div>
</div>
</div>
</form>", "PWUserBundle:Security:login_content.html.twig", "C:\\wamp64\\www\\Bla-master\\src\\PW\\UserBundle/Resources/views/Security/login_content.html.twig");
    }
}
