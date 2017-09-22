<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8e0013d2a4051ad83f3d147841a24787daeca6c7fd47c8dc9023eb077fec0bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78c4d5e9eaa62e32026683415bd8b0f288333f74816bca0faa26ad4dc7a453cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c4d5e9eaa62e32026683415bd8b0f288333f74816bca0faa26ad4dc7a453cd->enter($__internal_78c4d5e9eaa62e32026683415bd8b0f288333f74816bca0faa26ad4dc7a453cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_ba6323e6bc78bef14a760a6b80211faeebcd85a69311d74becc0f6f29fe459fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6323e6bc78bef14a760a6b80211faeebcd85a69311d74becc0f6f29fe459fc->enter($__internal_ba6323e6bc78bef14a760a6b80211faeebcd85a69311d74becc0f6f29fe459fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "



<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 18
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 20
        echo "        </div>

        ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 24
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 25
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 26
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        <div>
            ";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 35
        echo "        </div>
    </body>
</html>
";
        
        $__internal_78c4d5e9eaa62e32026683415bd8b0f288333f74816bca0faa26ad4dc7a453cd->leave($__internal_78c4d5e9eaa62e32026683415bd8b0f288333f74816bca0faa26ad4dc7a453cd_prof);

        
        $__internal_ba6323e6bc78bef14a760a6b80211faeebcd85a69311d74becc0f6f29fe459fc->leave($__internal_ba6323e6bc78bef14a760a6b80211faeebcd85a69311d74becc0f6f29fe459fc_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c7e9651c310009762642c24c840b438cbb5ab152aa86a1a87a44575418a1503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7e9651c310009762642c24c840b438cbb5ab152aa86a1a87a44575418a1503->enter($__internal_4c7e9651c310009762642c24c840b438cbb5ab152aa86a1a87a44575418a1503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6317abe791e7d1870cb30eda2cfd7f6f0746990794c7f1cf19673883ad0781a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6317abe791e7d1870cb30eda2cfd7f6f0746990794c7f1cf19673883ad0781a7->enter($__internal_6317abe791e7d1870cb30eda2cfd7f6f0746990794c7f1cf19673883ad0781a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "            ";
        
        $__internal_6317abe791e7d1870cb30eda2cfd7f6f0746990794c7f1cf19673883ad0781a7->leave($__internal_6317abe791e7d1870cb30eda2cfd7f6f0746990794c7f1cf19673883ad0781a7_prof);

        
        $__internal_4c7e9651c310009762642c24c840b438cbb5ab152aa86a1a87a44575418a1503->leave($__internal_4c7e9651c310009762642c24c840b438cbb5ab152aa86a1a87a44575418a1503_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 34,  122 => 33,  109 => 35,  107 => 33,  103 => 31,  100 => 30,  94 => 29,  85 => 26,  80 => 25,  75 => 24,  70 => 23,  68 => 22,  64 => 20,  56 => 18,  50 => 15,  46 => 14,  41 => 13,  39 => 12,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("



<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
