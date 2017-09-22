<?php

/* :Auth:auth_base.html.twig */
class __TwigTemplate_da2593b2fca82375723714e8b3f85380be7d7bd24a911c6ffa6c61da6b1280a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f50f4057023d119187917bd886177d934e0084b4757e7ad84aa46ae9ecc64f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f50f4057023d119187917bd886177d934e0084b4757e7ad84aa46ae9ecc64f9->enter($__internal_1f50f4057023d119187917bd886177d934e0084b4757e7ad84aa46ae9ecc64f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Auth:auth_base.html.twig"));

        $__internal_6b00982cf7f8d444d222584f1ef64b2192d5e822506071853f3c13b116505570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b00982cf7f8d444d222584f1ef64b2192d5e822506071853f3c13b116505570->enter($__internal_6b00982cf7f8d444d222584f1ef64b2192d5e822506071853f3c13b116505570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Auth:auth_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">

    <title>MelodyMunk | Login</title>

    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">    <!--external css-->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/zabuto_calendar.css"), "html", null, true);
        echo "\"/>


    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id=\"login-page\">
    <div class=\"container\">

        ";
        // line 35
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 37
        echo "
    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$.backstretch(\"assets/img/login-bg.jpg\", {speed: 500});
</script>


</body>
</html>
";
        
        $__internal_1f50f4057023d119187917bd886177d934e0084b4757e7ad84aa46ae9ecc64f9->leave($__internal_1f50f4057023d119187917bd886177d934e0084b4757e7ad84aa46ae9ecc64f9_prof);

        
        $__internal_6b00982cf7f8d444d222584f1ef64b2192d5e822506071853f3c13b116505570->leave($__internal_6b00982cf7f8d444d222584f1ef64b2192d5e822506071853f3c13b116505570_prof);

    }

    // line 35
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_704332f7bf24fc57573457890262920f1cb11998e83f4f7ad5bfcce9e3163289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704332f7bf24fc57573457890262920f1cb11998e83f4f7ad5bfcce9e3163289->enter($__internal_704332f7bf24fc57573457890262920f1cb11998e83f4f7ad5bfcce9e3163289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_610fb3ed0e22af4dae1d4a5a2714fb2b60407d0d4625651a1fa6bf1a6539091b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610fb3ed0e22af4dae1d4a5a2714fb2b60407d0d4625651a1fa6bf1a6539091b->enter($__internal_610fb3ed0e22af4dae1d4a5a2714fb2b60407d0d4625651a1fa6bf1a6539091b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 36
        echo "        ";
        
        $__internal_610fb3ed0e22af4dae1d4a5a2714fb2b60407d0d4625651a1fa6bf1a6539091b->leave($__internal_610fb3ed0e22af4dae1d4a5a2714fb2b60407d0d4625651a1fa6bf1a6539091b_prof);

        
        $__internal_704332f7bf24fc57573457890262920f1cb11998e83f4f7ad5bfcce9e3163289->leave($__internal_704332f7bf24fc57573457890262920f1cb11998e83f4f7ad5bfcce9e3163289_prof);

    }

    public function getTemplateName()
    {
        return ":Auth:auth_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  105 => 35,  86 => 48,  73 => 37,  71 => 35,  50 => 17,  46 => 16,  40 => 13,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">

    <title>MelodyMunk | Login</title>

    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">    <!--external css-->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/zabuto_calendar.css') }}\"/>


    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style-responsive.css') }}\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id=\"login-page\">
    <div class=\"container\">

        {% block fos_user_content %}
        {% endblock fos_user_content %}

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.backstretch.min.js') }}\"></script>
<script>
    \$.backstretch(\"assets/img/login-bg.jpg\", {speed: 500});
</script>


</body>
</html>
", ":Auth:auth_base.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/app/Resources/views/Auth/auth_base.html.twig");
    }
}
