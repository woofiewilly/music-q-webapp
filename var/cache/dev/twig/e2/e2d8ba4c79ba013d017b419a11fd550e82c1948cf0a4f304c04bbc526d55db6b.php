<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e96cd21533bb2446b28d1efa59b7a02b745a741835617c582caab9317609521f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96cd21533bb2446b28d1efa59b7a02b745a741835617c582caab9317609521f->enter($__internal_e96cd21533bb2446b28d1efa59b7a02b745a741835617c582caab9317609521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b770e10df8da574cfc21ea93dd7e4792c27018737e31bcc3b635caa7eed35111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b770e10df8da574cfc21ea93dd7e4792c27018737e31bcc3b635caa7eed35111->enter($__internal_b770e10df8da574cfc21ea93dd7e4792c27018737e31bcc3b635caa7eed35111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e96cd21533bb2446b28d1efa59b7a02b745a741835617c582caab9317609521f->leave($__internal_e96cd21533bb2446b28d1efa59b7a02b745a741835617c582caab9317609521f_prof);

        
        $__internal_b770e10df8da574cfc21ea93dd7e4792c27018737e31bcc3b635caa7eed35111->leave($__internal_b770e10df8da574cfc21ea93dd7e4792c27018737e31bcc3b635caa7eed35111_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_144c1bfdbef1754571eb3b556a45e98ca0dee87bd40b361b07b3265d4e303f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144c1bfdbef1754571eb3b556a45e98ca0dee87bd40b361b07b3265d4e303f68->enter($__internal_144c1bfdbef1754571eb3b556a45e98ca0dee87bd40b361b07b3265d4e303f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55813e5856197b5884b33bd7b84f9443fb5b6516386e22cb8dc480fce792d3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55813e5856197b5884b33bd7b84f9443fb5b6516386e22cb8dc480fce792d3dc->enter($__internal_55813e5856197b5884b33bd7b84f9443fb5b6516386e22cb8dc480fce792d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_55813e5856197b5884b33bd7b84f9443fb5b6516386e22cb8dc480fce792d3dc->leave($__internal_55813e5856197b5884b33bd7b84f9443fb5b6516386e22cb8dc480fce792d3dc_prof);

        
        $__internal_144c1bfdbef1754571eb3b556a45e98ca0dee87bd40b361b07b3265d4e303f68->leave($__internal_144c1bfdbef1754571eb3b556a45e98ca0dee87bd40b361b07b3265d4e303f68_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5159e0f9c68e94542de3db4aa18251c1367e17d17882be9b9d6ef58ce1b48dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5159e0f9c68e94542de3db4aa18251c1367e17d17882be9b9d6ef58ce1b48dd->enter($__internal_d5159e0f9c68e94542de3db4aa18251c1367e17d17882be9b9d6ef58ce1b48dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a59f630e9fb1bce1be9b24715fac17e53d92a36be914c3f1a529650315b9f804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59f630e9fb1bce1be9b24715fac17e53d92a36be914c3f1a529650315b9f804->enter($__internal_a59f630e9fb1bce1be9b24715fac17e53d92a36be914c3f1a529650315b9f804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a59f630e9fb1bce1be9b24715fac17e53d92a36be914c3f1a529650315b9f804->leave($__internal_a59f630e9fb1bce1be9b24715fac17e53d92a36be914c3f1a529650315b9f804_prof);

        
        $__internal_d5159e0f9c68e94542de3db4aa18251c1367e17d17882be9b9d6ef58ce1b48dd->leave($__internal_d5159e0f9c68e94542de3db4aa18251c1367e17d17882be9b9d6ef58ce1b48dd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5989b6c360a98a6fca61197e129283e0e72bc56c0b5ed3c9a49333f6470b0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5989b6c360a98a6fca61197e129283e0e72bc56c0b5ed3c9a49333f6470b0b8->enter($__internal_a5989b6c360a98a6fca61197e129283e0e72bc56c0b5ed3c9a49333f6470b0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02e0db61103f67361577e4b856f732776c9b4f74ab867930d67d215e55c6102c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e0db61103f67361577e4b856f732776c9b4f74ab867930d67d215e55c6102c->enter($__internal_02e0db61103f67361577e4b856f732776c9b4f74ab867930d67d215e55c6102c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_02e0db61103f67361577e4b856f732776c9b4f74ab867930d67d215e55c6102c->leave($__internal_02e0db61103f67361577e4b856f732776c9b4f74ab867930d67d215e55c6102c_prof);

        
        $__internal_a5989b6c360a98a6fca61197e129283e0e72bc56c0b5ed3c9a49333f6470b0b8->leave($__internal_a5989b6c360a98a6fca61197e129283e0e72bc56c0b5ed3c9a49333f6470b0b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/music-q-webapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
