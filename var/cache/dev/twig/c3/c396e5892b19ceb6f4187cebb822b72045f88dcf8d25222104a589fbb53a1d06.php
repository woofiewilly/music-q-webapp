<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_85e5fe3d467a7c0fdae1dc7b73e5196250215ca51ff8a6e23f582836bc44929b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a322a02a64d073f9d5e984905deb6fb7f7a4a9a73edcd21e74dda91e90650a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a322a02a64d073f9d5e984905deb6fb7f7a4a9a73edcd21e74dda91e90650a9->enter($__internal_3a322a02a64d073f9d5e984905deb6fb7f7a4a9a73edcd21e74dda91e90650a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_54f4c1c48853e4adb7c78df54835969d9bbc48c4b9349975a88041e3c9f7eff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f4c1c48853e4adb7c78df54835969d9bbc48c4b9349975a88041e3c9f7eff6->enter($__internal_54f4c1c48853e4adb7c78df54835969d9bbc48c4b9349975a88041e3c9f7eff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a322a02a64d073f9d5e984905deb6fb7f7a4a9a73edcd21e74dda91e90650a9->leave($__internal_3a322a02a64d073f9d5e984905deb6fb7f7a4a9a73edcd21e74dda91e90650a9_prof);

        
        $__internal_54f4c1c48853e4adb7c78df54835969d9bbc48c4b9349975a88041e3c9f7eff6->leave($__internal_54f4c1c48853e4adb7c78df54835969d9bbc48c4b9349975a88041e3c9f7eff6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cd6b9b961853afe07f283dff857eb5f524b070a6219eb34f02e9cbda6a49bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd6b9b961853afe07f283dff857eb5f524b070a6219eb34f02e9cbda6a49bcc->enter($__internal_3cd6b9b961853afe07f283dff857eb5f524b070a6219eb34f02e9cbda6a49bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97b082d7ea0e142008bb2ad1fedb06d73bd211245aa361eb0bd5f9a3e1976739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b082d7ea0e142008bb2ad1fedb06d73bd211245aa361eb0bd5f9a3e1976739->enter($__internal_97b082d7ea0e142008bb2ad1fedb06d73bd211245aa361eb0bd5f9a3e1976739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_97b082d7ea0e142008bb2ad1fedb06d73bd211245aa361eb0bd5f9a3e1976739->leave($__internal_97b082d7ea0e142008bb2ad1fedb06d73bd211245aa361eb0bd5f9a3e1976739_prof);

        
        $__internal_3cd6b9b961853afe07f283dff857eb5f524b070a6219eb34f02e9cbda6a49bcc->leave($__internal_3cd6b9b961853afe07f283dff857eb5f524b070a6219eb34f02e9cbda6a49bcc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/music-q-webapp/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
