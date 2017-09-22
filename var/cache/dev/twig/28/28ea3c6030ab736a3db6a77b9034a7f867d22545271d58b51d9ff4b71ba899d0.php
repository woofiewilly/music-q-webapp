<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b2c423cb681f50696787f603d22e47d550c0816f30f04c27a3251a289c2f46f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8edf8852b09b9b460e313e661c570f6b6524e26be832aa9dfa5c2dd42c2acc59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edf8852b09b9b460e313e661c570f6b6524e26be832aa9dfa5c2dd42c2acc59->enter($__internal_8edf8852b09b9b460e313e661c570f6b6524e26be832aa9dfa5c2dd42c2acc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9308eba0307a8e1da81c52d2a054cd64339b4107a5572118ab544803eafe2e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9308eba0307a8e1da81c52d2a054cd64339b4107a5572118ab544803eafe2e4f->enter($__internal_9308eba0307a8e1da81c52d2a054cd64339b4107a5572118ab544803eafe2e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8edf8852b09b9b460e313e661c570f6b6524e26be832aa9dfa5c2dd42c2acc59->leave($__internal_8edf8852b09b9b460e313e661c570f6b6524e26be832aa9dfa5c2dd42c2acc59_prof);

        
        $__internal_9308eba0307a8e1da81c52d2a054cd64339b4107a5572118ab544803eafe2e4f->leave($__internal_9308eba0307a8e1da81c52d2a054cd64339b4107a5572118ab544803eafe2e4f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
