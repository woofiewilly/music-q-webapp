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
        $__internal_15b1cfb30eeaf21d6765dcaeb254931db642edbfe426d4eaa6243b1bc0476618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b1cfb30eeaf21d6765dcaeb254931db642edbfe426d4eaa6243b1bc0476618->enter($__internal_15b1cfb30eeaf21d6765dcaeb254931db642edbfe426d4eaa6243b1bc0476618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e3a9bdb1e1db828ea31c76e662a623193ecdec9fbdeddb6c74d65b589e5a255b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a9bdb1e1db828ea31c76e662a623193ecdec9fbdeddb6c74d65b589e5a255b->enter($__internal_e3a9bdb1e1db828ea31c76e662a623193ecdec9fbdeddb6c74d65b589e5a255b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b1cfb30eeaf21d6765dcaeb254931db642edbfe426d4eaa6243b1bc0476618->leave($__internal_15b1cfb30eeaf21d6765dcaeb254931db642edbfe426d4eaa6243b1bc0476618_prof);

        
        $__internal_e3a9bdb1e1db828ea31c76e662a623193ecdec9fbdeddb6c74d65b589e5a255b->leave($__internal_e3a9bdb1e1db828ea31c76e662a623193ecdec9fbdeddb6c74d65b589e5a255b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a68032b46c05edd2c56588cf276e746ef98debf74f10ddfefe9a3c5c2432e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a68032b46c05edd2c56588cf276e746ef98debf74f10ddfefe9a3c5c2432e6f->enter($__internal_4a68032b46c05edd2c56588cf276e746ef98debf74f10ddfefe9a3c5c2432e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26256f8fad767679f2e31809acd25266a769f2d52957554630a4f6f0c6e18142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26256f8fad767679f2e31809acd25266a769f2d52957554630a4f6f0c6e18142->enter($__internal_26256f8fad767679f2e31809acd25266a769f2d52957554630a4f6f0c6e18142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_26256f8fad767679f2e31809acd25266a769f2d52957554630a4f6f0c6e18142->leave($__internal_26256f8fad767679f2e31809acd25266a769f2d52957554630a4f6f0c6e18142_prof);

        
        $__internal_4a68032b46c05edd2c56588cf276e746ef98debf74f10ddfefe9a3c5c2432e6f->leave($__internal_4a68032b46c05edd2c56588cf276e746ef98debf74f10ddfefe9a3c5c2432e6f_prof);

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
", "@FOSUser/Security/login.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
