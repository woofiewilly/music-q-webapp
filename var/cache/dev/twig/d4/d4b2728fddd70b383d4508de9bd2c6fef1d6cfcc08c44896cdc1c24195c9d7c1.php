<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_01f51919ce56e22c3d95ec38d6d0b067f66d7a28a249c0157031c603493cf748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8642ef98983934a6525104ce13deef28f7dd811507123bcadde0bd6cfb66246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8642ef98983934a6525104ce13deef28f7dd811507123bcadde0bd6cfb66246->enter($__internal_a8642ef98983934a6525104ce13deef28f7dd811507123bcadde0bd6cfb66246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ba93018ba6e11ba39732d1b685ed7a2ba8793efeedee9b13a1e17e5350df2037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba93018ba6e11ba39732d1b685ed7a2ba8793efeedee9b13a1e17e5350df2037->enter($__internal_ba93018ba6e11ba39732d1b685ed7a2ba8793efeedee9b13a1e17e5350df2037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8642ef98983934a6525104ce13deef28f7dd811507123bcadde0bd6cfb66246->leave($__internal_a8642ef98983934a6525104ce13deef28f7dd811507123bcadde0bd6cfb66246_prof);

        
        $__internal_ba93018ba6e11ba39732d1b685ed7a2ba8793efeedee9b13a1e17e5350df2037->leave($__internal_ba93018ba6e11ba39732d1b685ed7a2ba8793efeedee9b13a1e17e5350df2037_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ac1af3fa37367345904bfad6e793a4aeb00c9663dcb4a3ccac436684901cf32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac1af3fa37367345904bfad6e793a4aeb00c9663dcb4a3ccac436684901cf32->enter($__internal_1ac1af3fa37367345904bfad6e793a4aeb00c9663dcb4a3ccac436684901cf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_edc672b106295ae804f5828c4ce2b92b57b6b296e8d4ba96cccabfaf8bb38f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc672b106295ae804f5828c4ce2b92b57b6b296e8d4ba96cccabfaf8bb38f45->enter($__internal_edc672b106295ae804f5828c4ce2b92b57b6b296e8d4ba96cccabfaf8bb38f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_edc672b106295ae804f5828c4ce2b92b57b6b296e8d4ba96cccabfaf8bb38f45->leave($__internal_edc672b106295ae804f5828c4ce2b92b57b6b296e8d4ba96cccabfaf8bb38f45_prof);

        
        $__internal_1ac1af3fa37367345904bfad6e793a4aeb00c9663dcb4a3ccac436684901cf32->leave($__internal_1ac1af3fa37367345904bfad6e793a4aeb00c9663dcb4a3ccac436684901cf32_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
