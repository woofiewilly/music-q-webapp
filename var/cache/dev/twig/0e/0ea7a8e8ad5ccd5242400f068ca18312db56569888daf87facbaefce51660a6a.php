<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f4864290bffa17ef5aa96d939e01b4dfa7d88bc9d4891ff9c087d70448096b15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Auth:auth_base.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Auth:auth_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43963c280727c55343101bfc6d8aeff005aac16ab1a7c54be35cc0e6432dc732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43963c280727c55343101bfc6d8aeff005aac16ab1a7c54be35cc0e6432dc732->enter($__internal_43963c280727c55343101bfc6d8aeff005aac16ab1a7c54be35cc0e6432dc732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_8d22d2454d0c8876e4a73da84e34bf0706a9b1f0e4e2c56f095bd2e833385682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d22d2454d0c8876e4a73da84e34bf0706a9b1f0e4e2c56f095bd2e833385682->enter($__internal_8d22d2454d0c8876e4a73da84e34bf0706a9b1f0e4e2c56f095bd2e833385682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43963c280727c55343101bfc6d8aeff005aac16ab1a7c54be35cc0e6432dc732->leave($__internal_43963c280727c55343101bfc6d8aeff005aac16ab1a7c54be35cc0e6432dc732_prof);

        
        $__internal_8d22d2454d0c8876e4a73da84e34bf0706a9b1f0e4e2c56f095bd2e833385682->leave($__internal_8d22d2454d0c8876e4a73da84e34bf0706a9b1f0e4e2c56f095bd2e833385682_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa64babf3855f8c6e19ef0904cdc359b1a191313c34c64b868851f88d8ad3279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa64babf3855f8c6e19ef0904cdc359b1a191313c34c64b868851f88d8ad3279->enter($__internal_fa64babf3855f8c6e19ef0904cdc359b1a191313c34c64b868851f88d8ad3279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b1aafe4ea615a514e0b6b736faf6a1b9249028f6d9ac437ea9bc038df46c770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1aafe4ea615a514e0b6b736faf6a1b9249028f6d9ac437ea9bc038df46c770->enter($__internal_9b1aafe4ea615a514e0b6b736faf6a1b9249028f6d9ac437ea9bc038df46c770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_9b1aafe4ea615a514e0b6b736faf6a1b9249028f6d9ac437ea9bc038df46c770->leave($__internal_9b1aafe4ea615a514e0b6b736faf6a1b9249028f6d9ac437ea9bc038df46c770_prof);

        
        $__internal_fa64babf3855f8c6e19ef0904cdc359b1a191313c34c64b868851f88d8ad3279->leave($__internal_fa64babf3855f8c6e19ef0904cdc359b1a191313c34c64b868851f88d8ad3279_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":Auth:auth_base.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/music-q-webapp/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
