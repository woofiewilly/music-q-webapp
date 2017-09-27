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
        $__internal_aefb5e2cd6a9dfd1e664993bde3393e885facef6ed159d8252bf21693015c2f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefb5e2cd6a9dfd1e664993bde3393e885facef6ed159d8252bf21693015c2f7->enter($__internal_aefb5e2cd6a9dfd1e664993bde3393e885facef6ed159d8252bf21693015c2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Auth:auth_base.html.twig"));

        $__internal_3a08df3a35c0a7ff794e246939e32770a4a18c38b8491687af3fef09c66b89c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a08df3a35c0a7ff794e246939e32770a4a18c38b8491687af3fef09c66b89c5->enter($__internal_3a08df3a35c0a7ff794e246939e32770a4a18c38b8491687af3fef09c66b89c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Auth:auth_base.html.twig"));

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
        
        $__internal_aefb5e2cd6a9dfd1e664993bde3393e885facef6ed159d8252bf21693015c2f7->leave($__internal_aefb5e2cd6a9dfd1e664993bde3393e885facef6ed159d8252bf21693015c2f7_prof);

        
        $__internal_3a08df3a35c0a7ff794e246939e32770a4a18c38b8491687af3fef09c66b89c5->leave($__internal_3a08df3a35c0a7ff794e246939e32770a4a18c38b8491687af3fef09c66b89c5_prof);

    }

    // line 35
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9043e8b3d807d4beb49984e5be6af7903aa11f6a228a9d3a5bac7b5069411709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9043e8b3d807d4beb49984e5be6af7903aa11f6a228a9d3a5bac7b5069411709->enter($__internal_9043e8b3d807d4beb49984e5be6af7903aa11f6a228a9d3a5bac7b5069411709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_801b5a1b1d107c016db338477d1cb7560973e82222b43ec398ababb134378b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801b5a1b1d107c016db338477d1cb7560973e82222b43ec398ababb134378b99->enter($__internal_801b5a1b1d107c016db338477d1cb7560973e82222b43ec398ababb134378b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 36
        echo "        ";
        
        $__internal_801b5a1b1d107c016db338477d1cb7560973e82222b43ec398ababb134378b99->leave($__internal_801b5a1b1d107c016db338477d1cb7560973e82222b43ec398ababb134378b99_prof);

        
        $__internal_9043e8b3d807d4beb49984e5be6af7903aa11f6a228a9d3a5bac7b5069411709->leave($__internal_9043e8b3d807d4beb49984e5be6af7903aa11f6a228a9d3a5bac7b5069411709_prof);

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
", ":Auth:auth_base.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/music-q-webapp/app/Resources/views/Auth/auth_base.html.twig");
    }
}
