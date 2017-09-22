<?php

/* :home:home.html.twig */
class __TwigTemplate_fd5a2c134cf24f628b05f6a9281a45558e8bc47406daffc6ca1e0c88f99e8e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":home:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba0174e8c75cdee9844d638aef9999584b4f7059dd8e4dea62037e7e149802f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0174e8c75cdee9844d638aef9999584b4f7059dd8e4dea62037e7e149802f8->enter($__internal_ba0174e8c75cdee9844d638aef9999584b4f7059dd8e4dea62037e7e149802f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:home.html.twig"));

        $__internal_155e2410b4a8076637c437300387905c93e13ad8f932cf033bcd71a23d868bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155e2410b4a8076637c437300387905c93e13ad8f932cf033bcd71a23d868bfb->enter($__internal_155e2410b4a8076637c437300387905c93e13ad8f932cf033bcd71a23d868bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba0174e8c75cdee9844d638aef9999584b4f7059dd8e4dea62037e7e149802f8->leave($__internal_ba0174e8c75cdee9844d638aef9999584b4f7059dd8e4dea62037e7e149802f8_prof);

        
        $__internal_155e2410b4a8076637c437300387905c93e13ad8f932cf033bcd71a23d868bfb->leave($__internal_155e2410b4a8076637c437300387905c93e13ad8f932cf033bcd71a23d868bfb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3102f2a92b012377eba96796fed288aff0eb33a9e3aa76aaf99f53fec43d2cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3102f2a92b012377eba96796fed288aff0eb33a9e3aa76aaf99f53fec43d2cba->enter($__internal_3102f2a92b012377eba96796fed288aff0eb33a9e3aa76aaf99f53fec43d2cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00667d0b3cc62743120f142d047445f1740eab88e82062056e262fa81eeb4788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00667d0b3cc62743120f142d047445f1740eab88e82062056e262fa81eeb4788->enter($__internal_00667d0b3cc62743120f142d047445f1740eab88e82062056e262fa81eeb4788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_00667d0b3cc62743120f142d047445f1740eab88e82062056e262fa81eeb4788->leave($__internal_00667d0b3cc62743120f142d047445f1740eab88e82062056e262fa81eeb4788_prof);

        
        $__internal_3102f2a92b012377eba96796fed288aff0eb33a9e3aa76aaf99f53fec43d2cba->leave($__internal_3102f2a92b012377eba96796fed288aff0eb33a9e3aa76aaf99f53fec43d2cba_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be75a30bdc540517f774a9af0914f56826a3b611fa63e044b98d35d09ea3d63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be75a30bdc540517f774a9af0914f56826a3b611fa63e044b98d35d09ea3d63b->enter($__internal_be75a30bdc540517f774a9af0914f56826a3b611fa63e044b98d35d09ea3d63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_54a50f4fb806401e4fb366cb8f404442b4db5550458fefafd89a4ac5e28a4484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a50f4fb806401e4fb366cb8f404442b4db5550458fefafd89a4ac5e28a4484->enter($__internal_54a50f4fb806401e4fb366cb8f404442b4db5550458fefafd89a4ac5e28a4484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_54a50f4fb806401e4fb366cb8f404442b4db5550458fefafd89a4ac5e28a4484->leave($__internal_54a50f4fb806401e4fb366cb8f404442b4db5550458fefafd89a4ac5e28a4484_prof);

        
        $__internal_be75a30bdc540517f774a9af0914f56826a3b611fa63e044b98d35d09ea3d63b->leave($__internal_be75a30bdc540517f774a9af0914f56826a3b611fa63e044b98d35d09ea3d63b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bab49c470df2d8f749f9297e0d35b0cea745a7b84b43e305a61d139fc462a5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab49c470df2d8f749f9297e0d35b0cea745a7b84b43e305a61d139fc462a5f5->enter($__internal_bab49c470df2d8f749f9297e0d35b0cea745a7b84b43e305a61d139fc462a5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ba2f2bd34854fc1c2b5223b502550c32885f0efa9c574f09b8f171846340d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba2f2bd34854fc1c2b5223b502550c32885f0efa9c574f09b8f171846340d9f->enter($__internal_9ba2f2bd34854fc1c2b5223b502550c32885f0efa9c574f09b8f171846340d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"row\">
    <div class=\"col-lg-9 main-chart\">


        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control round-form\" placeholder=\"Search MelodyMunk...\" aria-describedby=\"melodymunk_search_bar\">
                    <span class=\"btn btn-info input-group-addon\" id=\"melodymunk_search_bar\"><i class=\"fa fa-search\"></i></span>
                </div>
            </div>
        </div>

        <br/>
        <!-- START Playlist Results -->
        <div class=\"row\">

            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->

            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->

            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->


            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->


            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->


            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->



            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->



            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->


            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->



        </div>
        <!-- END Playlist Results -->





    </div><!-- /col-lg-9 END SECTION MIDDLE -->


    <!-- **********************************************************************************************************************************************************
    RIGHT SIDEBAR CONTENT
    *********************************************************************************************************************************************************** -->

    <div class=\"col-lg-3 ds\">
        <!--COMPLETED ACTIONS DONUTS CHART-->
        <h3>NOTIFICATIONS</h3>

        <!-- First Action -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
            <div class=\"details\">
                <p><muted>2 Minutes Ago</muted><br/>
                    <a href=\"#\">James Brown</a> subscribed to your newsletter.<br/>
                </p>
            </div>
        </div>
        <!-- Second Action -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
            <div class=\"details\">
                <p><muted>3 Hours Ago</muted><br/>
                    <a href=\"#\">Diana Kennedy</a> purchased a year subscription.<br/>
                </p>
            </div>
        </div>
        <!-- Third Action -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
            <div class=\"details\">
                <p><muted>7 Hours Ago</muted><br/>
                    <a href=\"#\">Brandon Page</a> purchased a year subscription.<br/>
                </p>
            </div>
        </div>
        <!-- Fourth Action -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
            <div class=\"details\">
                <p><muted>11 Hours Ago</muted><br/>
                    <a href=\"#\">Mark Twain</a> commented your post.<br/>
                </p>
            </div>
        </div>
        <!-- Fifth Action -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
            <div class=\"details\">
                <p><muted>18 Hours Ago</muted><br/>
                    <a href=\"#\">Daniel Pratt</a> purchased a wallet in your store.<br/>
                </p>
            </div>
        </div>

        <!-- USERS ONLINE SECTION -->
        <h3>TEAM MEMBERS</h3>
        <!-- First Member -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <img class=\"img-circle\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
            </div>
            <div class=\"details\">
                <p><a href=\"#\">DIVYA MANIAN</a><br/>
                    <muted>Available</muted>
                </p>
            </div>
        </div>
        <!-- Second Member -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <img class=\"img-circle\" src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
            </div>
            <div class=\"details\">
                <p><a href=\"#\">DJ SHERMAN</a><br/>
                    <muted>I am Busy</muted>
                </p>
            </div>
        </div>
        <!-- Third Member -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <img class=\"img-circle\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
            </div>
            <div class=\"details\">
                <p><a href=\"#\">DAN ROGERS</a><br/>
                    <muted>Available</muted>
                </p>
            </div>
        </div>
        <!-- Fourth Member -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <img class=\"img-circle\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
            </div>
            <div class=\"details\">
                <p><a href=\"#\">Zac Sniders</a><br/>
                    <muted>Available</muted>
                </p>
            </div>
        </div>
        <!-- Fifth Member -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <img class=\"img-circle\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
        echo "\" width=\"35px\" height=\"35px\" align=\"\">
            </div>
            <div class=\"details\">
                <p><a href=\"#\">Marcel Newman</a><br/>
                    <muted>Available</muted>
                </p>
            </div>
        </div>


    </div><!-- /col-lg-3 -->
    </div><! --/row -->


";
        
        $__internal_9ba2f2bd34854fc1c2b5223b502550c32885f0efa9c574f09b8f171846340d9f->leave($__internal_9ba2f2bd34854fc1c2b5223b502550c32885f0efa9c574f09b8f171846340d9f_prof);

        
        $__internal_bab49c470df2d8f749f9297e0d35b0cea745a7b84b43e305a61d139fc462a5f5->leave($__internal_bab49c470df2d8f749f9297e0d35b0cea745a7b84b43e305a61d139fc462a5f5_prof);

    }

    // line 332
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d07b83256b828739255acbb0b07795697091ad30a45e47e8aaaa5be840f3fafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07b83256b828739255acbb0b07795697091ad30a45e47e8aaaa5be840f3fafb->enter($__internal_d07b83256b828739255acbb0b07795697091ad30a45e47e8aaaa5be840f3fafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_df213d9a27e19df4caf5caf2840d1626130ee03b21763437a22426cfed14e299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df213d9a27e19df4caf5caf2840d1626130ee03b21763437a22426cfed14e299->enter($__internal_df213d9a27e19df4caf5caf2840d1626130ee03b21763437a22426cfed14e299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_df213d9a27e19df4caf5caf2840d1626130ee03b21763437a22426cfed14e299->leave($__internal_df213d9a27e19df4caf5caf2840d1626130ee03b21763437a22426cfed14e299_prof);

        
        $__internal_d07b83256b828739255acbb0b07795697091ad30a45e47e8aaaa5be840f3fafb->leave($__internal_d07b83256b828739255acbb0b07795697091ad30a45e47e8aaaa5be840f3fafb_prof);

    }

    public function getTemplateName()
    {
        return ":home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 332,  406 => 315,  392 => 304,  378 => 293,  364 => 282,  350 => 271,  88 => 11,  79 => 10,  61 => 7,  43 => 4,  11 => 1,);
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


{% block title %}Home{% endblock %}


{% block stylesheets %} {% endblock %}


{% block body %}

    <div class=\"row\">
    <div class=\"col-lg-9 main-chart\">


        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control round-form\" placeholder=\"Search MelodyMunk...\" aria-describedby=\"melodymunk_search_bar\">
                    <span class=\"btn btn-info input-group-addon\" id=\"melodymunk_search_bar\"><i class=\"fa fa-search\"></i></span>
                </div>
            </div>
        </div>

        <br/>
        <!-- START Playlist Results -->
        <div class=\"row\">

            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->

            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->

            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->


            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->


            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->


            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->



            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->



            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->


            <!-- START Playlist Card -->
            <div class=\"col-md-4 col-sm-4 mb\">
                <div class=\"darkblue-panel pn\">
                    <div class=\"darkblue-header\">
                        <h5>MelodyMunk Party Title</h5>
                    </div>
                    <h1 class=\"mt\"><i class=\"fa fa-play fa-3x\"></i></h1>
                    <p>+ 1,789 NEW VISITS</p>
                    <footer>
                        <div class=\"centered\">
                            <h5><i class=\"fa fa-music\"></i> &nbsp;1,234 Songs Played</h5>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END Playlist Card -->



        </div>
        <!-- END Playlist Results -->





    </div><!-- /col-lg-9 END SECTION MIDDLE -->


    <!-- **********************************************************************************************************************************************************
    RIGHT SIDEBAR CONTENT
    *********************************************************************************************************************************************************** -->

    <div class=\"col-lg-3 ds\">
        <!--COMPLETED ACTIONS DONUTS CHART-->
        <h3>NOTIFICATIONS</h3>

        <!-- First Action -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
            <div class=\"details\">
                <p><muted>2 Minutes Ago</muted><br/>
                    <a href=\"#\">James Brown</a> subscribed to your newsletter.<br/>
                </p>
            </div>
        </div>
        <!-- Second Action -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
            <div class=\"details\">
                <p><muted>3 Hours Ago</muted><br/>
                    <a href=\"#\">Diana Kennedy</a> purchased a year subscription.<br/>
                </p>
            </div>
        </div>
        <!-- Third Action -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
            <div class=\"details\">
                <p><muted>7 Hours Ago</muted><br/>
                    <a href=\"#\">Brandon Page</a> purchased a year subscription.<br/>
                </p>
            </div>
        </div>
        <!-- Fourth Action -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
            <div class=\"details\">
                <p><muted>11 Hours Ago</muted><br/>
                    <a href=\"#\">Mark Twain</a> commented your post.<br/>
                </p>
            </div>
        </div>
        <!-- Fifth Action -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <span class=\"badge bg-theme\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
            <div class=\"details\">
                <p><muted>18 Hours Ago</muted><br/>
                    <a href=\"#\">Daniel Pratt</a> purchased a wallet in your store.<br/>
                </p>
            </div>
        </div>

        <!-- USERS ONLINE SECTION -->
        <h3>TEAM MEMBERS</h3>
        <!-- First Member -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <img class=\"img-circle\" src=\"{{ asset('img/ui-zac.jpg') }}\" width=\"35px\" height=\"35px\" align=\"\">
            </div>
            <div class=\"details\">
                <p><a href=\"#\">DIVYA MANIAN</a><br/>
                    <muted>Available</muted>
                </p>
            </div>
        </div>
        <!-- Second Member -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <img class=\"img-circle\" src=\"{{ asset('img/ui-zac.jpg') }}\" width=\"35px\" height=\"35px\" align=\"\">
            </div>
            <div class=\"details\">
                <p><a href=\"#\">DJ SHERMAN</a><br/>
                    <muted>I am Busy</muted>
                </p>
            </div>
        </div>
        <!-- Third Member -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <img class=\"img-circle\" src=\"{{ asset('img/ui-zac.jpg') }}\" width=\"35px\" height=\"35px\" align=\"\">
            </div>
            <div class=\"details\">
                <p><a href=\"#\">DAN ROGERS</a><br/>
                    <muted>Available</muted>
                </p>
            </div>
        </div>
        <!-- Fourth Member -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <img class=\"img-circle\" src=\"{{ asset('img/ui-zac.jpg') }}\" width=\"35px\" height=\"35px\" align=\"\">
            </div>
            <div class=\"details\">
                <p><a href=\"#\">Zac Sniders</a><br/>
                    <muted>Available</muted>
                </p>
            </div>
        </div>
        <!-- Fifth Member -->
        <div class=\"desc\">
            <div class=\"thumb\">
                <img class=\"img-circle\" src=\"{{ asset('img/ui-zac.jpg') }}\" width=\"35px\" height=\"35px\" align=\"\">
            </div>
            <div class=\"details\">
                <p><a href=\"#\">Marcel Newman</a><br/>
                    <muted>Available</muted>
                </p>
            </div>
        </div>


    </div><!-- /col-lg-3 -->
    </div><! --/row -->


{% endblock %}


{% block javascripts %}{% endblock %}", ":home:home.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/MelodyMunk/app/Resources/views/home/home.html.twig");
    }
}
