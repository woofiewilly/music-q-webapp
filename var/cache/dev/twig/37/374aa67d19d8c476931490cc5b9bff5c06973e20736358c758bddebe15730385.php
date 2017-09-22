<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_fc5e67c15d538fc0dce15c7ac58b527eb11a94358873a11aad7dae1fb0e08fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5e67c15d538fc0dce15c7ac58b527eb11a94358873a11aad7dae1fb0e08fca->enter($__internal_fc5e67c15d538fc0dce15c7ac58b527eb11a94358873a11aad7dae1fb0e08fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c4010415663a592225789ea7c76d25fc830e5bfafe1ae07ed7c9186ff39e4708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4010415663a592225789ea7c76d25fc830e5bfafe1ae07ed7c9186ff39e4708->enter($__internal_c4010415663a592225789ea7c76d25fc830e5bfafe1ae07ed7c9186ff39e4708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc5e67c15d538fc0dce15c7ac58b527eb11a94358873a11aad7dae1fb0e08fca->leave($__internal_fc5e67c15d538fc0dce15c7ac58b527eb11a94358873a11aad7dae1fb0e08fca_prof);

        
        $__internal_c4010415663a592225789ea7c76d25fc830e5bfafe1ae07ed7c9186ff39e4708->leave($__internal_c4010415663a592225789ea7c76d25fc830e5bfafe1ae07ed7c9186ff39e4708_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d876d2cf25a11953a9a5fcf75f19e8264f592a0c0de2bf595aafc42955ef0322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d876d2cf25a11953a9a5fcf75f19e8264f592a0c0de2bf595aafc42955ef0322->enter($__internal_d876d2cf25a11953a9a5fcf75f19e8264f592a0c0de2bf595aafc42955ef0322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3795856459b2738e2b06dfa5afb6acdcc59cfdf2648aef93e43cf45457d787ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3795856459b2738e2b06dfa5afb6acdcc59cfdf2648aef93e43cf45457d787ed->enter($__internal_3795856459b2738e2b06dfa5afb6acdcc59cfdf2648aef93e43cf45457d787ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3795856459b2738e2b06dfa5afb6acdcc59cfdf2648aef93e43cf45457d787ed->leave($__internal_3795856459b2738e2b06dfa5afb6acdcc59cfdf2648aef93e43cf45457d787ed_prof);

        
        $__internal_d876d2cf25a11953a9a5fcf75f19e8264f592a0c0de2bf595aafc42955ef0322->leave($__internal_d876d2cf25a11953a9a5fcf75f19e8264f592a0c0de2bf595aafc42955ef0322_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84dc1ad64cc010e7dd02fc9c0b98a01ebe35aea5e1a10694f0cee75bc28121ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84dc1ad64cc010e7dd02fc9c0b98a01ebe35aea5e1a10694f0cee75bc28121ec->enter($__internal_84dc1ad64cc010e7dd02fc9c0b98a01ebe35aea5e1a10694f0cee75bc28121ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c462df081ab69b391245130615f1b9ae90cf21a79dafa1a730bdeb8e7025aa0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c462df081ab69b391245130615f1b9ae90cf21a79dafa1a730bdeb8e7025aa0e->enter($__internal_c462df081ab69b391245130615f1b9ae90cf21a79dafa1a730bdeb8e7025aa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c462df081ab69b391245130615f1b9ae90cf21a79dafa1a730bdeb8e7025aa0e->leave($__internal_c462df081ab69b391245130615f1b9ae90cf21a79dafa1a730bdeb8e7025aa0e_prof);

        
        $__internal_84dc1ad64cc010e7dd02fc9c0b98a01ebe35aea5e1a10694f0cee75bc28121ec->leave($__internal_84dc1ad64cc010e7dd02fc9c0b98a01ebe35aea5e1a10694f0cee75bc28121ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2c6e96c51106aa9ce864eefd4298be3592e724f5bf348ecf34991dd96aa6bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c6e96c51106aa9ce864eefd4298be3592e724f5bf348ecf34991dd96aa6bd3->enter($__internal_d2c6e96c51106aa9ce864eefd4298be3592e724f5bf348ecf34991dd96aa6bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_92ca85ea4386eccb958d4c2f05877d180b7b9696bb2d749ffb0fa76432635dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ca85ea4386eccb958d4c2f05877d180b7b9696bb2d749ffb0fa76432635dd7->enter($__internal_92ca85ea4386eccb958d4c2f05877d180b7b9696bb2d749ffb0fa76432635dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_92ca85ea4386eccb958d4c2f05877d180b7b9696bb2d749ffb0fa76432635dd7->leave($__internal_92ca85ea4386eccb958d4c2f05877d180b7b9696bb2d749ffb0fa76432635dd7_prof);

        
        $__internal_d2c6e96c51106aa9ce864eefd4298be3592e724f5bf348ecf34991dd96aa6bd3->leave($__internal_d2c6e96c51106aa9ce864eefd4298be3592e724f5bf348ecf34991dd96aa6bd3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
