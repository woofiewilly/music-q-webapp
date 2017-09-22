<?php

/* :playlists:playlist.html.twig */
class __TwigTemplate_afa324d02aa8edaf3f8b39aaccbd9217937e5c68a0bbb463ea10dd6f787911fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":playlists:playlist.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79e7b08efe2a82558f07aa2e016f742bf07333de710bdf3ff04e505b9790612d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e7b08efe2a82558f07aa2e016f742bf07333de710bdf3ff04e505b9790612d->enter($__internal_79e7b08efe2a82558f07aa2e016f742bf07333de710bdf3ff04e505b9790612d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":playlists:playlist.html.twig"));

        $__internal_ad50c70a167ce8af34ced68583a8036ec519ce4432dbb887a5e9e7f9c2d50caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad50c70a167ce8af34ced68583a8036ec519ce4432dbb887a5e9e7f9c2d50caf->enter($__internal_ad50c70a167ce8af34ced68583a8036ec519ce4432dbb887a5e9e7f9c2d50caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":playlists:playlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e7b08efe2a82558f07aa2e016f742bf07333de710bdf3ff04e505b9790612d->leave($__internal_79e7b08efe2a82558f07aa2e016f742bf07333de710bdf3ff04e505b9790612d_prof);

        
        $__internal_ad50c70a167ce8af34ced68583a8036ec519ce4432dbb887a5e9e7f9c2d50caf->leave($__internal_ad50c70a167ce8af34ced68583a8036ec519ce4432dbb887a5e9e7f9c2d50caf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc7db022321fc835d40455333bcd5aa7d0393b03e7bcceb1ff168057ead85ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7db022321fc835d40455333bcd5aa7d0393b03e7bcceb1ff168057ead85ae0->enter($__internal_dc7db022321fc835d40455333bcd5aa7d0393b03e7bcceb1ff168057ead85ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41e59eedaca2dbbfbf27f8205230041bbeeabfeac38f4b94163298a7515f931a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e59eedaca2dbbfbf27f8205230041bbeeabfeac38f4b94163298a7515f931a->enter($__internal_41e59eedaca2dbbfbf27f8205230041bbeeabfeac38f4b94163298a7515f931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Playlist Page";
        
        $__internal_41e59eedaca2dbbfbf27f8205230041bbeeabfeac38f4b94163298a7515f931a->leave($__internal_41e59eedaca2dbbfbf27f8205230041bbeeabfeac38f4b94163298a7515f931a_prof);

        
        $__internal_dc7db022321fc835d40455333bcd5aa7d0393b03e7bcceb1ff168057ead85ae0->leave($__internal_dc7db022321fc835d40455333bcd5aa7d0393b03e7bcceb1ff168057ead85ae0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b05e322a1cf5ef0aad5265827be409ec80b52ebce482f63cf49ba34ddcbd0dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05e322a1cf5ef0aad5265827be409ec80b52ebce482f63cf49ba34ddcbd0dd8->enter($__internal_b05e322a1cf5ef0aad5265827be409ec80b52ebce482f63cf49ba34ddcbd0dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce315087a1bc3d6a4d09b3a12ebc75ee70c50f73249da194e2a8a60967b903cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce315087a1bc3d6a4d09b3a12ebc75ee70c50f73249da194e2a8a60967b903cd->enter($__internal_ce315087a1bc3d6a4d09b3a12ebc75ee70c50f73249da194e2a8a60967b903cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <p>THEYFHDJKLHFLDJHLKJFD</p>

    <p>The variable is: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["testingVar"]) ? $context["testingVar"] : $this->getContext($context, "testingVar")), "html", null, true);
        echo "</p>

";
        
        $__internal_ce315087a1bc3d6a4d09b3a12ebc75ee70c50f73249da194e2a8a60967b903cd->leave($__internal_ce315087a1bc3d6a4d09b3a12ebc75ee70c50f73249da194e2a8a60967b903cd_prof);

        
        $__internal_b05e322a1cf5ef0aad5265827be409ec80b52ebce482f63cf49ba34ddcbd0dd8->leave($__internal_b05e322a1cf5ef0aad5265827be409ec80b52ebce482f63cf49ba34ddcbd0dd8_prof);

    }

    public function getTemplateName()
    {
        return ":playlists:playlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block title %}Playlist Page{% endblock %}

{% block body %}

    <p>THEYFHDJKLHFLDJHLKJFD</p>

    <p>The variable is: {{ testingVar }}</p>

{% endblock %}", ":playlists:playlist.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/app/Resources/views/playlists/playlist.html.twig");
    }
}
