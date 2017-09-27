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
        $__internal_5cac4763d4a36631a10c7432e01e55c99fd1a42e2d48d60a901295225d7ccaf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cac4763d4a36631a10c7432e01e55c99fd1a42e2d48d60a901295225d7ccaf9->enter($__internal_5cac4763d4a36631a10c7432e01e55c99fd1a42e2d48d60a901295225d7ccaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:home.html.twig"));

        $__internal_c9d215301e468feab033c915c69163e8652918d574729485ccba486ab40943c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d215301e468feab033c915c69163e8652918d574729485ccba486ab40943c2->enter($__internal_c9d215301e468feab033c915c69163e8652918d574729485ccba486ab40943c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cac4763d4a36631a10c7432e01e55c99fd1a42e2d48d60a901295225d7ccaf9->leave($__internal_5cac4763d4a36631a10c7432e01e55c99fd1a42e2d48d60a901295225d7ccaf9_prof);

        
        $__internal_c9d215301e468feab033c915c69163e8652918d574729485ccba486ab40943c2->leave($__internal_c9d215301e468feab033c915c69163e8652918d574729485ccba486ab40943c2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e656b3458964283846f82c2d81cf8a56acb2b68ea3dadabeebcefc261bdb65b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e656b3458964283846f82c2d81cf8a56acb2b68ea3dadabeebcefc261bdb65b->enter($__internal_7e656b3458964283846f82c2d81cf8a56acb2b68ea3dadabeebcefc261bdb65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b76e5527ab6dadc1c001ed7fb0054891f76e41f756a9bd5221ffb5e36538e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b76e5527ab6dadc1c001ed7fb0054891f76e41f756a9bd5221ffb5e36538e36->enter($__internal_5b76e5527ab6dadc1c001ed7fb0054891f76e41f756a9bd5221ffb5e36538e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_5b76e5527ab6dadc1c001ed7fb0054891f76e41f756a9bd5221ffb5e36538e36->leave($__internal_5b76e5527ab6dadc1c001ed7fb0054891f76e41f756a9bd5221ffb5e36538e36_prof);

        
        $__internal_7e656b3458964283846f82c2d81cf8a56acb2b68ea3dadabeebcefc261bdb65b->leave($__internal_7e656b3458964283846f82c2d81cf8a56acb2b68ea3dadabeebcefc261bdb65b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea24b2adf20aa1e6d882e35075c78497a4b751723c1e1ae68d70959d3f91d196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea24b2adf20aa1e6d882e35075c78497a4b751723c1e1ae68d70959d3f91d196->enter($__internal_ea24b2adf20aa1e6d882e35075c78497a4b751723c1e1ae68d70959d3f91d196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_25e7549da5ad3858518992a3d8cca4130c1c3ad2feda191a6d66944341934551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e7549da5ad3858518992a3d8cca4130c1c3ad2feda191a6d66944341934551->enter($__internal_25e7549da5ad3858518992a3d8cca4130c1c3ad2feda191a6d66944341934551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_25e7549da5ad3858518992a3d8cca4130c1c3ad2feda191a6d66944341934551->leave($__internal_25e7549da5ad3858518992a3d8cca4130c1c3ad2feda191a6d66944341934551_prof);

        
        $__internal_ea24b2adf20aa1e6d882e35075c78497a4b751723c1e1ae68d70959d3f91d196->leave($__internal_ea24b2adf20aa1e6d882e35075c78497a4b751723c1e1ae68d70959d3f91d196_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca4c73bce9549911f3ebf430eea4357dba1fd82d4a8acb2600112e515e9b5c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4c73bce9549911f3ebf430eea4357dba1fd82d4a8acb2600112e515e9b5c82->enter($__internal_ca4c73bce9549911f3ebf430eea4357dba1fd82d4a8acb2600112e515e9b5c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6aaf66757f2e57180026d524916bf378ee2aedf1117e771868d88f69cd3ad683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aaf66757f2e57180026d524916bf378ee2aedf1117e771868d88f69cd3ad683->enter($__internal_6aaf66757f2e57180026d524916bf378ee2aedf1117e771868d88f69cd3ad683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6aaf66757f2e57180026d524916bf378ee2aedf1117e771868d88f69cd3ad683->leave($__internal_6aaf66757f2e57180026d524916bf378ee2aedf1117e771868d88f69cd3ad683_prof);

        
        $__internal_ca4c73bce9549911f3ebf430eea4357dba1fd82d4a8acb2600112e515e9b5c82->leave($__internal_ca4c73bce9549911f3ebf430eea4357dba1fd82d4a8acb2600112e515e9b5c82_prof);

    }

    // line 332
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2064ee3952371cdee15881136fc70b4e4fa587c055ede58de98945efefc09752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2064ee3952371cdee15881136fc70b4e4fa587c055ede58de98945efefc09752->enter($__internal_2064ee3952371cdee15881136fc70b4e4fa587c055ede58de98945efefc09752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_02ca0aeedb448197e11cc1795523d3d3cdc348989a8c808e5deb119e0b8db19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ca0aeedb448197e11cc1795523d3d3cdc348989a8c808e5deb119e0b8db19f->enter($__internal_02ca0aeedb448197e11cc1795523d3d3cdc348989a8c808e5deb119e0b8db19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_02ca0aeedb448197e11cc1795523d3d3cdc348989a8c808e5deb119e0b8db19f->leave($__internal_02ca0aeedb448197e11cc1795523d3d3cdc348989a8c808e5deb119e0b8db19f_prof);

        
        $__internal_2064ee3952371cdee15881136fc70b4e4fa587c055ede58de98945efefc09752->leave($__internal_2064ee3952371cdee15881136fc70b4e4fa587c055ede58de98945efefc09752_prof);

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


{% block javascripts %}{% endblock %}", ":home:home.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/music-q-webapp/app/Resources/views/home/home.html.twig");
    }
}
