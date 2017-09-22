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
        $__internal_437356355117a12c440fbd8467924729d0db80a26b317fbf019131cbca7c9abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437356355117a12c440fbd8467924729d0db80a26b317fbf019131cbca7c9abc->enter($__internal_437356355117a12c440fbd8467924729d0db80a26b317fbf019131cbca7c9abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_213824c5cacedce96f44dc741638d48d070cb4f16fb2c28abb09e798a3ac6e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213824c5cacedce96f44dc741638d48d070cb4f16fb2c28abb09e798a3ac6e00->enter($__internal_213824c5cacedce96f44dc741638d48d070cb4f16fb2c28abb09e798a3ac6e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437356355117a12c440fbd8467924729d0db80a26b317fbf019131cbca7c9abc->leave($__internal_437356355117a12c440fbd8467924729d0db80a26b317fbf019131cbca7c9abc_prof);

        
        $__internal_213824c5cacedce96f44dc741638d48d070cb4f16fb2c28abb09e798a3ac6e00->leave($__internal_213824c5cacedce96f44dc741638d48d070cb4f16fb2c28abb09e798a3ac6e00_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a22eda0e03637843aaf991ccad8891f73d534d1c4f5d6c0c5fb92386e8dd0ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a22eda0e03637843aaf991ccad8891f73d534d1c4f5d6c0c5fb92386e8dd0ea->enter($__internal_0a22eda0e03637843aaf991ccad8891f73d534d1c4f5d6c0c5fb92386e8dd0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9d1b0d0e6f6af4a82593b907c825d73b2ca8b321ac7a7f88723da865642a4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d1b0d0e6f6af4a82593b907c825d73b2ca8b321ac7a7f88723da865642a4d5->enter($__internal_b9d1b0d0e6f6af4a82593b907c825d73b2ca8b321ac7a7f88723da865642a4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b9d1b0d0e6f6af4a82593b907c825d73b2ca8b321ac7a7f88723da865642a4d5->leave($__internal_b9d1b0d0e6f6af4a82593b907c825d73b2ca8b321ac7a7f88723da865642a4d5_prof);

        
        $__internal_0a22eda0e03637843aaf991ccad8891f73d534d1c4f5d6c0c5fb92386e8dd0ea->leave($__internal_0a22eda0e03637843aaf991ccad8891f73d534d1c4f5d6c0c5fb92386e8dd0ea_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
