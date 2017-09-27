<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_51e7066910a40dcc2b78efee78c032b848fe0ad0f3d3b51e6b6a637a85cd353b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_a0d5644bc4c36d3b9e647f1773e29520f8cabcdb73bc64953b12fdb651c55deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d5644bc4c36d3b9e647f1773e29520f8cabcdb73bc64953b12fdb651c55deb->enter($__internal_a0d5644bc4c36d3b9e647f1773e29520f8cabcdb73bc64953b12fdb651c55deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_1df23649be0dce79dd6f30267b5107c26c70ced81f56857d3ad4669bf434f8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df23649be0dce79dd6f30267b5107c26c70ced81f56857d3ad4669bf434f8fb->enter($__internal_1df23649be0dce79dd6f30267b5107c26c70ced81f56857d3ad4669bf434f8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d5644bc4c36d3b9e647f1773e29520f8cabcdb73bc64953b12fdb651c55deb->leave($__internal_a0d5644bc4c36d3b9e647f1773e29520f8cabcdb73bc64953b12fdb651c55deb_prof);

        
        $__internal_1df23649be0dce79dd6f30267b5107c26c70ced81f56857d3ad4669bf434f8fb->leave($__internal_1df23649be0dce79dd6f30267b5107c26c70ced81f56857d3ad4669bf434f8fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d77c9ce8310ccfaa1c48082808b6f79cbf13465f273bbf612c3cde46b478a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d77c9ce8310ccfaa1c48082808b6f79cbf13465f273bbf612c3cde46b478a4f->enter($__internal_5d77c9ce8310ccfaa1c48082808b6f79cbf13465f273bbf612c3cde46b478a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b14edc2317bdf35c046bdae7a61d046310faebbb2f1e58efe0ce5c5c39a7882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b14edc2317bdf35c046bdae7a61d046310faebbb2f1e58efe0ce5c5c39a7882->enter($__internal_3b14edc2317bdf35c046bdae7a61d046310faebbb2f1e58efe0ce5c5c39a7882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3b14edc2317bdf35c046bdae7a61d046310faebbb2f1e58efe0ce5c5c39a7882->leave($__internal_3b14edc2317bdf35c046bdae7a61d046310faebbb2f1e58efe0ce5c5c39a7882_prof);

        
        $__internal_5d77c9ce8310ccfaa1c48082808b6f79cbf13465f273bbf612c3cde46b478a4f->leave($__internal_5d77c9ce8310ccfaa1c48082808b6f79cbf13465f273bbf612c3cde46b478a4f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/music-q-webapp/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
