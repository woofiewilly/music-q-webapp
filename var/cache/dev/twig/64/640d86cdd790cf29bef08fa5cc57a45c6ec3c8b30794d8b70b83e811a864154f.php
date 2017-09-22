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
        $__internal_2ecdf05d55d0d270905374c8faa1f78e9d4f398d5d30a65318cfb17246d24a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ecdf05d55d0d270905374c8faa1f78e9d4f398d5d30a65318cfb17246d24a7d->enter($__internal_2ecdf05d55d0d270905374c8faa1f78e9d4f398d5d30a65318cfb17246d24a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_11a107cb539c47cf0026549311036695f67836986edc7f2f9149a6579230e6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a107cb539c47cf0026549311036695f67836986edc7f2f9149a6579230e6b4->enter($__internal_11a107cb539c47cf0026549311036695f67836986edc7f2f9149a6579230e6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ecdf05d55d0d270905374c8faa1f78e9d4f398d5d30a65318cfb17246d24a7d->leave($__internal_2ecdf05d55d0d270905374c8faa1f78e9d4f398d5d30a65318cfb17246d24a7d_prof);

        
        $__internal_11a107cb539c47cf0026549311036695f67836986edc7f2f9149a6579230e6b4->leave($__internal_11a107cb539c47cf0026549311036695f67836986edc7f2f9149a6579230e6b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1cd0b4e5754b857c2fa2d01f84eab3973dcd2e0616d7c63fddc649716671add6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd0b4e5754b857c2fa2d01f84eab3973dcd2e0616d7c63fddc649716671add6->enter($__internal_1cd0b4e5754b857c2fa2d01f84eab3973dcd2e0616d7c63fddc649716671add6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_12a09256138398a6fbc5770c52e5f2aeb291632dd6d6ee146ba5734f9eb351b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a09256138398a6fbc5770c52e5f2aeb291632dd6d6ee146ba5734f9eb351b5->enter($__internal_12a09256138398a6fbc5770c52e5f2aeb291632dd6d6ee146ba5734f9eb351b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_12a09256138398a6fbc5770c52e5f2aeb291632dd6d6ee146ba5734f9eb351b5->leave($__internal_12a09256138398a6fbc5770c52e5f2aeb291632dd6d6ee146ba5734f9eb351b5_prof);

        
        $__internal_1cd0b4e5754b857c2fa2d01f84eab3973dcd2e0616d7c63fddc649716671add6->leave($__internal_1cd0b4e5754b857c2fa2d01f84eab3973dcd2e0616d7c63fddc649716671add6_prof);

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
", "@FOSUser/Registration/register.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
