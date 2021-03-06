<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_7c14997be6be93428b510617c3675d9215d64605450cb55b54bf44563468ac27 extends Twig_Template
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
        $__internal_b1e36409ef75572bad8394cd1a9477bf553ae9d45ade7f06beee254cde575655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e36409ef75572bad8394cd1a9477bf553ae9d45ade7f06beee254cde575655->enter($__internal_b1e36409ef75572bad8394cd1a9477bf553ae9d45ade7f06beee254cde575655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        
        $__internal_b1e36409ef75572bad8394cd1a9477bf553ae9d45ade7f06beee254cde575655->leave($__internal_b1e36409ef75572bad8394cd1a9477bf553ae9d45ade7f06beee254cde575655_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 54,  86 => 45,  80 => 41,  69 => 25,  58 => 17,  53 => 15,  46 => 10,  40 => 8,  38 => 7,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
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

<div class=\"well\" style=\"margin-left:280px\">

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

{#
<div class=\"row\">
    <div class=\"form-group\" style=\"padding-left:15px\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
    </div>
</div>
#}

<div class=\"row\">
    <div class=\"form-group\" style=\"padding-left:230px\">
        <div class=\"col-sm-2\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"form-group\" style=\"padding-left:160px\">
        <div class=\"col-sm-10\">
            </br>
            <a href=\"{{ path('fos_user_registration_register') }}\">
            <p>Pas d'identifiant ? Inscrivez vous ! <p>
            </a>
        </div>
    </div>
</div>
</form>", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\Bla-master\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
