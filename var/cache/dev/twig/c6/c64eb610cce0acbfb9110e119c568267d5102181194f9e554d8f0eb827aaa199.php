<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_901bfd2f9d897c1dd53c3868b3bb0fce95066cf318359c48a3b845fb864cb9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901bfd2f9d897c1dd53c3868b3bb0fce95066cf318359c48a3b845fb864cb9e9->enter($__internal_901bfd2f9d897c1dd53c3868b3bb0fce95066cf318359c48a3b845fb864cb9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cbad7e0421c5ea0523de1dd5e21af629bee8e534f5378607193e669ceedbf7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbad7e0421c5ea0523de1dd5e21af629bee8e534f5378607193e669ceedbf7ef->enter($__internal_cbad7e0421c5ea0523de1dd5e21af629bee8e534f5378607193e669ceedbf7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_901bfd2f9d897c1dd53c3868b3bb0fce95066cf318359c48a3b845fb864cb9e9->leave($__internal_901bfd2f9d897c1dd53c3868b3bb0fce95066cf318359c48a3b845fb864cb9e9_prof);

        
        $__internal_cbad7e0421c5ea0523de1dd5e21af629bee8e534f5378607193e669ceedbf7ef->leave($__internal_cbad7e0421c5ea0523de1dd5e21af629bee8e534f5378607193e669ceedbf7ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03c8376cea6992d055c02a552f9435115ebc72483ca2b3bbb531fefd6a17b40d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c8376cea6992d055c02a552f9435115ebc72483ca2b3bbb531fefd6a17b40d->enter($__internal_03c8376cea6992d055c02a552f9435115ebc72483ca2b3bbb531fefd6a17b40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e3aafc7611e5ae9ac98e8df31dfb2fc3b45893b48896af16ea6853c8063af127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3aafc7611e5ae9ac98e8df31dfb2fc3b45893b48896af16ea6853c8063af127->enter($__internal_e3aafc7611e5ae9ac98e8df31dfb2fc3b45893b48896af16ea6853c8063af127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e3aafc7611e5ae9ac98e8df31dfb2fc3b45893b48896af16ea6853c8063af127->leave($__internal_e3aafc7611e5ae9ac98e8df31dfb2fc3b45893b48896af16ea6853c8063af127_prof);

        
        $__internal_03c8376cea6992d055c02a552f9435115ebc72483ca2b3bbb531fefd6a17b40d->leave($__internal_03c8376cea6992d055c02a552f9435115ebc72483ca2b3bbb531fefd6a17b40d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fd67f2db59171a90bbb79ad126603548c26a7e2791124e1095ea1ba667f26df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd67f2db59171a90bbb79ad126603548c26a7e2791124e1095ea1ba667f26df->enter($__internal_6fd67f2db59171a90bbb79ad126603548c26a7e2791124e1095ea1ba667f26df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_332118a0498130741f5d163b71bbeb22b66849a9fdbb04a3d5d4e2db7b413a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332118a0498130741f5d163b71bbeb22b66849a9fdbb04a3d5d4e2db7b413a87->enter($__internal_332118a0498130741f5d163b71bbeb22b66849a9fdbb04a3d5d4e2db7b413a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_332118a0498130741f5d163b71bbeb22b66849a9fdbb04a3d5d4e2db7b413a87->leave($__internal_332118a0498130741f5d163b71bbeb22b66849a9fdbb04a3d5d4e2db7b413a87_prof);

        
        $__internal_6fd67f2db59171a90bbb79ad126603548c26a7e2791124e1095ea1ba667f26df->leave($__internal_6fd67f2db59171a90bbb79ad126603548c26a7e2791124e1095ea1ba667f26df_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87a6878235d1dc3da95bdb1f7846713ed0150825ef16b4242c541017d834c2e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a6878235d1dc3da95bdb1f7846713ed0150825ef16b4242c541017d834c2e0->enter($__internal_87a6878235d1dc3da95bdb1f7846713ed0150825ef16b4242c541017d834c2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc44d7d85b8e46f3a8051293037481f68c7cb93ad181795f9716ea092d94ff30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc44d7d85b8e46f3a8051293037481f68c7cb93ad181795f9716ea092d94ff30->enter($__internal_fc44d7d85b8e46f3a8051293037481f68c7cb93ad181795f9716ea092d94ff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fc44d7d85b8e46f3a8051293037481f68c7cb93ad181795f9716ea092d94ff30->leave($__internal_fc44d7d85b8e46f3a8051293037481f68c7cb93ad181795f9716ea092d94ff30_prof);

        
        $__internal_87a6878235d1dc3da95bdb1f7846713ed0150825ef16b4242c541017d834c2e0->leave($__internal_87a6878235d1dc3da95bdb1f7846713ed0150825ef16b4242c541017d834c2e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
