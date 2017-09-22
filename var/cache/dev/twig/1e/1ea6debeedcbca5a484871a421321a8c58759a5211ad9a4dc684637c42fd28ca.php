<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_339126da287ccec2e7e2691172203842a30b85eef50beda4de2d4fd63c1f1f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_cca94e9752a6884b7f32687c43c414888fe926a140699979ece6ac28fb6f7ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca94e9752a6884b7f32687c43c414888fe926a140699979ece6ac28fb6f7ffc->enter($__internal_cca94e9752a6884b7f32687c43c414888fe926a140699979ece6ac28fb6f7ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_8ea6ca1f8d1b11ec7e4f1ec1c951a8204974d88d33a95adb2de0775a3fecea2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea6ca1f8d1b11ec7e4f1ec1c951a8204974d88d33a95adb2de0775a3fecea2c->enter($__internal_8ea6ca1f8d1b11ec7e4f1ec1c951a8204974d88d33a95adb2de0775a3fecea2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cca94e9752a6884b7f32687c43c414888fe926a140699979ece6ac28fb6f7ffc->leave($__internal_cca94e9752a6884b7f32687c43c414888fe926a140699979ece6ac28fb6f7ffc_prof);

        
        $__internal_8ea6ca1f8d1b11ec7e4f1ec1c951a8204974d88d33a95adb2de0775a3fecea2c->leave($__internal_8ea6ca1f8d1b11ec7e4f1ec1c951a8204974d88d33a95adb2de0775a3fecea2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb74ccd6fd518df9ed76c54c3ebf6b2cf27219888717fb34bf2d1cfee6152fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb74ccd6fd518df9ed76c54c3ebf6b2cf27219888717fb34bf2d1cfee6152fe4->enter($__internal_fb74ccd6fd518df9ed76c54c3ebf6b2cf27219888717fb34bf2d1cfee6152fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b0bc60a1db90d19ec5d087701080d00660269d21346f8e5298f6da4da7749d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bc60a1db90d19ec5d087701080d00660269d21346f8e5298f6da4da7749d33->enter($__internal_b0bc60a1db90d19ec5d087701080d00660269d21346f8e5298f6da4da7749d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b0bc60a1db90d19ec5d087701080d00660269d21346f8e5298f6da4da7749d33->leave($__internal_b0bc60a1db90d19ec5d087701080d00660269d21346f8e5298f6da4da7749d33_prof);

        
        $__internal_fb74ccd6fd518df9ed76c54c3ebf6b2cf27219888717fb34bf2d1cfee6152fe4->leave($__internal_fb74ccd6fd518df9ed76c54c3ebf6b2cf27219888717fb34bf2d1cfee6152fe4_prof);

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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
