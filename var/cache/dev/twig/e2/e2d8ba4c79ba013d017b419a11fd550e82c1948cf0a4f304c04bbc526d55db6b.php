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
        $__internal_2940a21ee89d6b2fcda33bcbf10d423b9aba883d7de97eb487e3868b03e4a5ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2940a21ee89d6b2fcda33bcbf10d423b9aba883d7de97eb487e3868b03e4a5ed->enter($__internal_2940a21ee89d6b2fcda33bcbf10d423b9aba883d7de97eb487e3868b03e4a5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ab257ffbd82bdd26d223dfc953e9c34329f8d2cac050005c515665986f8f264b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab257ffbd82bdd26d223dfc953e9c34329f8d2cac050005c515665986f8f264b->enter($__internal_ab257ffbd82bdd26d223dfc953e9c34329f8d2cac050005c515665986f8f264b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2940a21ee89d6b2fcda33bcbf10d423b9aba883d7de97eb487e3868b03e4a5ed->leave($__internal_2940a21ee89d6b2fcda33bcbf10d423b9aba883d7de97eb487e3868b03e4a5ed_prof);

        
        $__internal_ab257ffbd82bdd26d223dfc953e9c34329f8d2cac050005c515665986f8f264b->leave($__internal_ab257ffbd82bdd26d223dfc953e9c34329f8d2cac050005c515665986f8f264b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cb8e2d0873f97bd1b5c012db76715992b4d56ae8abe75bb55fda09ec4deaf53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb8e2d0873f97bd1b5c012db76715992b4d56ae8abe75bb55fda09ec4deaf53->enter($__internal_7cb8e2d0873f97bd1b5c012db76715992b4d56ae8abe75bb55fda09ec4deaf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5bcf8f6adc98d3ca30ad57be57fb0f1ee9295dc47da65d7315d9eb5980ab6d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcf8f6adc98d3ca30ad57be57fb0f1ee9295dc47da65d7315d9eb5980ab6d8d->enter($__internal_5bcf8f6adc98d3ca30ad57be57fb0f1ee9295dc47da65d7315d9eb5980ab6d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5bcf8f6adc98d3ca30ad57be57fb0f1ee9295dc47da65d7315d9eb5980ab6d8d->leave($__internal_5bcf8f6adc98d3ca30ad57be57fb0f1ee9295dc47da65d7315d9eb5980ab6d8d_prof);

        
        $__internal_7cb8e2d0873f97bd1b5c012db76715992b4d56ae8abe75bb55fda09ec4deaf53->leave($__internal_7cb8e2d0873f97bd1b5c012db76715992b4d56ae8abe75bb55fda09ec4deaf53_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d638dfd5e05c42cf4f4b5f5d460719ddf5220f8a0e500ffdc02d0bc85fa58440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d638dfd5e05c42cf4f4b5f5d460719ddf5220f8a0e500ffdc02d0bc85fa58440->enter($__internal_d638dfd5e05c42cf4f4b5f5d460719ddf5220f8a0e500ffdc02d0bc85fa58440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c5fb96c5d9eb7812769f958aee429e4ac47f6bdc5dcc60b5b86a07a834c9334e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fb96c5d9eb7812769f958aee429e4ac47f6bdc5dcc60b5b86a07a834c9334e->enter($__internal_c5fb96c5d9eb7812769f958aee429e4ac47f6bdc5dcc60b5b86a07a834c9334e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c5fb96c5d9eb7812769f958aee429e4ac47f6bdc5dcc60b5b86a07a834c9334e->leave($__internal_c5fb96c5d9eb7812769f958aee429e4ac47f6bdc5dcc60b5b86a07a834c9334e_prof);

        
        $__internal_d638dfd5e05c42cf4f4b5f5d460719ddf5220f8a0e500ffdc02d0bc85fa58440->leave($__internal_d638dfd5e05c42cf4f4b5f5d460719ddf5220f8a0e500ffdc02d0bc85fa58440_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aeca03a53f6eb801c183459b76dd57dfd26fd614a3b21401b31f0138df635b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aeca03a53f6eb801c183459b76dd57dfd26fd614a3b21401b31f0138df635b9->enter($__internal_8aeca03a53f6eb801c183459b76dd57dfd26fd614a3b21401b31f0138df635b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e391183c805fc810887055b8a6f2b3f7c0e1ad0beafe961340a553546a69b92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e391183c805fc810887055b8a6f2b3f7c0e1ad0beafe961340a553546a69b92a->enter($__internal_e391183c805fc810887055b8a6f2b3f7c0e1ad0beafe961340a553546a69b92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e391183c805fc810887055b8a6f2b3f7c0e1ad0beafe961340a553546a69b92a->leave($__internal_e391183c805fc810887055b8a6f2b3f7c0e1ad0beafe961340a553546a69b92a_prof);

        
        $__internal_8aeca03a53f6eb801c183459b76dd57dfd26fd614a3b21401b31f0138df635b9->leave($__internal_8aeca03a53f6eb801c183459b76dd57dfd26fd614a3b21401b31f0138df635b9_prof);

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
