<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_72b5c0496cef93f83e4457239af06c8c3cea5c1c85bab53f652334986c2f437c extends Twig_Template
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
        $__internal_b2e825015440f5ad9c054dfc5bbf17fbc813bfec2f86fcc526108332095a842a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e825015440f5ad9c054dfc5bbf17fbc813bfec2f86fcc526108332095a842a->enter($__internal_b2e825015440f5ad9c054dfc5bbf17fbc813bfec2f86fcc526108332095a842a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_c003afcdcf79fbcbab238d919391f741d3a00c919a3d1df7734c12a57fe4e586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c003afcdcf79fbcbab238d919391f741d3a00c919a3d1df7734c12a57fe4e586->enter($__internal_c003afcdcf79fbcbab238d919391f741d3a00c919a3d1df7734c12a57fe4e586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        echo "

<form class=\"form-login\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <h2 class=\"form-login-heading\">sign in now</h2>
    <div class=\"login-wrap\">
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"User ID\" autofocus required=\"required\">
        <br>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\" required=\"required\">
        <label class=\"checkbox\">
            <span class=\"pull-left\">
                <label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    Remember Me
                </label>
            </span>
            <span class=\"pull-right\">
                <a data-toggle=\"modal\" href=\"login.html#myModal\"> Forgot Password?</a>
            </span>
        </label>
        <button class=\"btn btn-theme btn-block\" id=\"_submit\" name=\"_submit\" type=\"submit\"><i class=\"fa fa-lock\"></i> SIGN IN</button>
        <hr>

        <div class=\"login-social-link centered\">
            <p>or you can sign in via your social network</p>
            <button class=\"btn btn-facebook\" type=\"submit\"><i class=\"fa fa-facebook\"></i> Facebook</button>
            <button class=\"btn btn-twitter\" type=\"submit\"><i class=\"fa fa-twitter\"></i> Twitter</button>
        </div>
        <div class=\"registration\">
            Don't have an account yet?<br/>
            <a class=\"\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">
                Create an account
            </a>
        </div>

    </div>

    <!-- Modal -->
    <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Forgot Password ?</h4>
                </div>
                <div class=\"modal-body\">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <input type=\"text\" name=\"email\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">

                </div>
                <div class=\"modal-footer\">
                    <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                    <button id=\"_submit\" name=\"_submit\" class=\"btn btn-theme\" type=\"button\">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

</form>";
        
        $__internal_b2e825015440f5ad9c054dfc5bbf17fbc813bfec2f86fcc526108332095a842a->leave($__internal_b2e825015440f5ad9c054dfc5bbf17fbc813bfec2f86fcc526108332095a842a_prof);

        
        $__internal_c003afcdcf79fbcbab238d919391f741d3a00c919a3d1df7734c12a57fe4e586->leave($__internal_c003afcdcf79fbcbab238d919391f741d3a00c919a3d1df7734c12a57fe4e586_prof);

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
        return array (  70 => 35,  40 => 8,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
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


<form class=\"form-login\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    <h2 class=\"form-login-heading\">sign in now</h2>
    <div class=\"login-wrap\">
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"User ID\" autofocus required=\"required\">
        <br>
        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\" required=\"required\">
        <label class=\"checkbox\">
            <span class=\"pull-left\">
                <label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    Remember Me
                </label>
            </span>
            <span class=\"pull-right\">
                <a data-toggle=\"modal\" href=\"login.html#myModal\"> Forgot Password?</a>
            </span>
        </label>
        <button class=\"btn btn-theme btn-block\" id=\"_submit\" name=\"_submit\" type=\"submit\"><i class=\"fa fa-lock\"></i> SIGN IN</button>
        <hr>

        <div class=\"login-social-link centered\">
            <p>or you can sign in via your social network</p>
            <button class=\"btn btn-facebook\" type=\"submit\"><i class=\"fa fa-facebook\"></i> Facebook</button>
            <button class=\"btn btn-twitter\" type=\"submit\"><i class=\"fa fa-twitter\"></i> Twitter</button>
        </div>
        <div class=\"registration\">
            Don't have an account yet?<br/>
            <a class=\"\" href=\"{{ path('fos_user_registration_register') }}\">
                Create an account
            </a>
        </div>

    </div>

    <!-- Modal -->
    <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Forgot Password ?</h4>
                </div>
                <div class=\"modal-body\">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <input type=\"text\" name=\"email\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">

                </div>
                <div class=\"modal-footer\">
                    <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                    <button id=\"_submit\" name=\"_submit\" class=\"btn btn-theme\" type=\"button\">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

</form>", "@FOSUser/Security/login_content.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
