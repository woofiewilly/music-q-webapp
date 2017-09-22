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
        $__internal_1306442dc0010cad2ade708e37cceed2d52a2921ad608d297d25b588bd4f93bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1306442dc0010cad2ade708e37cceed2d52a2921ad608d297d25b588bd4f93bd->enter($__internal_1306442dc0010cad2ade708e37cceed2d52a2921ad608d297d25b588bd4f93bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_73aebe2a4c9bb29448ca67b1a814a0ca6c950c0ecd8ae49a04eb2b0b26c7e372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73aebe2a4c9bb29448ca67b1a814a0ca6c950c0ecd8ae49a04eb2b0b26c7e372->enter($__internal_73aebe2a4c9bb29448ca67b1a814a0ca6c950c0ecd8ae49a04eb2b0b26c7e372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1306442dc0010cad2ade708e37cceed2d52a2921ad608d297d25b588bd4f93bd->leave($__internal_1306442dc0010cad2ade708e37cceed2d52a2921ad608d297d25b588bd4f93bd_prof);

        
        $__internal_73aebe2a4c9bb29448ca67b1a814a0ca6c950c0ecd8ae49a04eb2b0b26c7e372->leave($__internal_73aebe2a4c9bb29448ca67b1a814a0ca6c950c0ecd8ae49a04eb2b0b26c7e372_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe4bc4396af866fe1d6da0989a56a5536aefc8e9d5fc2402169f7ec5830595a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4bc4396af866fe1d6da0989a56a5536aefc8e9d5fc2402169f7ec5830595a8->enter($__internal_fe4bc4396af866fe1d6da0989a56a5536aefc8e9d5fc2402169f7ec5830595a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e018069d370f2325d2ea0ff6867f9d7ab171dc5df03cd07332ca3b2bbfa68e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e018069d370f2325d2ea0ff6867f9d7ab171dc5df03cd07332ca3b2bbfa68e6->enter($__internal_1e018069d370f2325d2ea0ff6867f9d7ab171dc5df03cd07332ca3b2bbfa68e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1e018069d370f2325d2ea0ff6867f9d7ab171dc5df03cd07332ca3b2bbfa68e6->leave($__internal_1e018069d370f2325d2ea0ff6867f9d7ab171dc5df03cd07332ca3b2bbfa68e6_prof);

        
        $__internal_fe4bc4396af866fe1d6da0989a56a5536aefc8e9d5fc2402169f7ec5830595a8->leave($__internal_fe4bc4396af866fe1d6da0989a56a5536aefc8e9d5fc2402169f7ec5830595a8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6797b34ebbf34d6ec4269610ed4d665b651bc73a384bc44ceb8483b8343a8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6797b34ebbf34d6ec4269610ed4d665b651bc73a384bc44ceb8483b8343a8de->enter($__internal_d6797b34ebbf34d6ec4269610ed4d665b651bc73a384bc44ceb8483b8343a8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b39a3677eaea5f007a79770b97b1afe3c0c9f337d946138f46e9b153da243466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39a3677eaea5f007a79770b97b1afe3c0c9f337d946138f46e9b153da243466->enter($__internal_b39a3677eaea5f007a79770b97b1afe3c0c9f337d946138f46e9b153da243466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b39a3677eaea5f007a79770b97b1afe3c0c9f337d946138f46e9b153da243466->leave($__internal_b39a3677eaea5f007a79770b97b1afe3c0c9f337d946138f46e9b153da243466_prof);

        
        $__internal_d6797b34ebbf34d6ec4269610ed4d665b651bc73a384bc44ceb8483b8343a8de->leave($__internal_d6797b34ebbf34d6ec4269610ed4d665b651bc73a384bc44ceb8483b8343a8de_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e816c00f29018b605746d49f19c1c2f950e1a99a2b089e555f88a9ab6cc614da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e816c00f29018b605746d49f19c1c2f950e1a99a2b089e555f88a9ab6cc614da->enter($__internal_e816c00f29018b605746d49f19c1c2f950e1a99a2b089e555f88a9ab6cc614da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2924b981c31ab9183f926cd728b97f883ca30bdf626a4213400fbd89927a1da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2924b981c31ab9183f926cd728b97f883ca30bdf626a4213400fbd89927a1da0->enter($__internal_2924b981c31ab9183f926cd728b97f883ca30bdf626a4213400fbd89927a1da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2924b981c31ab9183f926cd728b97f883ca30bdf626a4213400fbd89927a1da0->leave($__internal_2924b981c31ab9183f926cd728b97f883ca30bdf626a4213400fbd89927a1da0_prof);

        
        $__internal_e816c00f29018b605746d49f19c1c2f950e1a99a2b089e555f88a9ab6cc614da->leave($__internal_e816c00f29018b605746d49f19c1c2f950e1a99a2b089e555f88a9ab6cc614da_prof);

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
", "@Twig/layout.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
