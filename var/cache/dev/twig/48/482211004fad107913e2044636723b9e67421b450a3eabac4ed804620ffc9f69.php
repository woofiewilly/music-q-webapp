<?php

/* ::base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_480698eaf141ae0cb609100e0ecc4636445f4d38d7920eb900e4efd1798dcb40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480698eaf141ae0cb609100e0ecc4636445f4d38d7920eb900e4efd1798dcb40->enter($__internal_480698eaf141ae0cb609100e0ecc4636445f4d38d7920eb900e4efd1798dcb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_28628d068f64c7573571ddaf9cdc9a87047ab16b3822ea75585119c6b2d77ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28628d068f64c7573571ddaf9cdc9a87047ab16b3822ea75585119c6b2d77ac5->enter($__internal_28628d068f64c7573571ddaf9cdc9a87047ab16b3822ea75585119c6b2d77ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">

    <title>MelodyMunk | ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">    <!--external css-->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/zabuto_calendar.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lineicons/style.css"), "html", null, true);
        echo "\"/>

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
</head>

<body>

<section id=\"container\" >
<!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
<!--header start-->
<header class=\"header black-bg\">
    <div class=\"sidebar-toggle-box\">
        <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
    </div>
    <!--logo start-->
    <a href=\"index.html\" class=\"logo\"><b>DASHGUM FREE</b></a>
    <!--logo end-->
    <div class=\"nav notify-row\" id=\"top_menu\">
        <!--  notification start -->
        <ul class=\"nav top-menu\">
            <!-- settings start -->
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                    <i class=\"fa fa-tasks\"></i>
                    <span class=\"badge bg-theme\">4</span>
                </a>
                <ul class=\"dropdown-menu extended tasks-bar\">
                    <div class=\"notify-arrow notify-arrow-green\"></div>
                    <li>
                        <p class=\"green\">You have 4 pending tasks</p>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">DashGum Admin Panel</div>
                                <div class=\"percent\">40%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                    <span class=\"sr-only\">40% Complete (success)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Database Update</div>
                                <div class=\"percent\">60%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                    <span class=\"sr-only\">60% Complete (warning)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Product Development</div>
                                <div class=\"percent\">80%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                    <span class=\"sr-only\">80% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Payments Sent</div>
                                <div class=\"percent\">70%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
                                    <span class=\"sr-only\">70% Complete (Important)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"external\">
                        <a href=\"#\">See All Tasks</a>
                    </li>
                </ul>
            </li>
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id=\"header_inbox_bar\" class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-theme\">5</span>
                </a>
                <ul class=\"dropdown-menu extended inbox\">
                    <div class=\"notify-arrow notify-arrow-green\"></div>
                    <li>
                        <p class=\"green\">You have 5 new messages</p>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
        echo "\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Zac Snider</span>
                                    <span class=\"time\">Just now</span>
                                    </span>
                                    <span class=\"message\">
                                        Hi mate, how is everything?
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
        echo "\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Divya Manian</span>
                                    <span class=\"time\">40 mins.</span>
                                    </span>
                                    <span class=\"message\">
                                     Hi, I need your help with this.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
        echo "\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Dan Rogers</span>
                                    <span class=\"time\">2 hrs.</span>
                                    </span>
                                    <span class=\"message\">
                                        Love your new Dashboard.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ui-zac.jpg"), "html", null, true);
        echo "\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Dj Sherman</span>
                                    <span class=\"time\">4 hrs.</span>
                                    </span>
                                    <span class=\"message\">
                                        Please, answer asap.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">See all messages</a>
                    </li>
                </ul>
            </li>
            <!-- inbox dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <div class=\"top-menu\">
        <ul class=\"nav pull-right top-menu\">
            <li><a class=\"logout\" href=\"login.html\">Logout</a></li>
        </ul>
    </div>
</header>
<!--header end-->

<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id=\"sidebar\"  class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">

            <p class=\"centered\"><a href=\"profile.html\"><img src=\"assets/img/ui-sam.jpg\" class=\"img-circle\" width=\"60\"></a></p>
            <h5 class=\"centered\">Marcel Newman</h5>

            <li class=\"mt\">
                <a class=\"active\" href=\"index.html\">
                    <i class=\"fa fa-dashboard\"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\"fa fa-desktop\"></i>
                    <span>UI Elements</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"general.html\">General</a></li>
                    <li><a  href=\"buttons.html\">Buttons</a></li>
                    <li><a  href=\"panels.html\">Panels</a></li>
                </ul>
            </li>

            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\"fa fa-cogs\"></i>
                    <span>Components</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"calendar.html\">Calendar</a></li>
                    <li><a  href=\"gallery.html\">Gallery</a></li>
                    <li><a  href=\"todo_list.html\">Todo List</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\"fa fa-book\"></i>
                    <span>Extra Pages</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"blank.html\">Blank Page</a></li>
                    <li><a  href=\"login.html\">Login</a></li>
                    <li><a  href=\"lock_screen.html\">Lock Screen</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\"fa fa-tasks\"></i>
                    <span>Forms</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"form_component.html\">Form Components</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\"fa fa-th\"></i>
                    <span>Data Tables</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"basic_table.html\">Basic Table</a></li>
                    <li><a  href=\"responsive_table.html\">Responsive Table</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\" fa fa-bar-chart-o\"></i>
                    <span>Charts</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"morris.html\">Morris</a></li>
                    <li><a  href=\"chartjs.html\">Chartjs</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id=\"main-content\">
    <section class=\"wrapper\">

        ";
        // line 292
        $this->displayBlock('body', $context, $blocks);
        // line 293
        echo "
    </section>
</section>

<!--main content end-->
<!--footer start-->
<footer class=\"site-footer\">
    <div class=\"text-center\">
        2014 - Alvarez.is
        <a href=\"index.html#\" class=\"go-top\">
            <i class=\"fa fa-angle-up\"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>


<!--common script for all pages-->
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/common-scripts.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gritter/js/jquery.gritter.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gritter-conf.js"), "html", null, true);
        echo "\"></script>

<!--script for this page-->
<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>




";
        // line 332
        $this->displayBlock('javascripts', $context, $blocks);
        // line 333
        echo "

</body>
</html>

";
        
        $__internal_480698eaf141ae0cb609100e0ecc4636445f4d38d7920eb900e4efd1798dcb40->leave($__internal_480698eaf141ae0cb609100e0ecc4636445f4d38d7920eb900e4efd1798dcb40_prof);

        
        $__internal_28628d068f64c7573571ddaf9cdc9a87047ab16b3822ea75585119c6b2d77ac5->leave($__internal_28628d068f64c7573571ddaf9cdc9a87047ab16b3822ea75585119c6b2d77ac5_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_46618eece0b38c2afdec83a1d45ba3a7102c1eabbcbe4a083d10eb9ca88eeae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46618eece0b38c2afdec83a1d45ba3a7102c1eabbcbe4a083d10eb9ca88eeae2->enter($__internal_46618eece0b38c2afdec83a1d45ba3a7102c1eabbcbe4a083d10eb9ca88eeae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43d2779f409b702bb7d5d56917c1d2cd0d52f486680f576afe2d295be92ff8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d2779f409b702bb7d5d56917c1d2cd0d52f486680f576afe2d295be92ff8ff->enter($__internal_43d2779f409b702bb7d5d56917c1d2cd0d52f486680f576afe2d295be92ff8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_43d2779f409b702bb7d5d56917c1d2cd0d52f486680f576afe2d295be92ff8ff->leave($__internal_43d2779f409b702bb7d5d56917c1d2cd0d52f486680f576afe2d295be92ff8ff_prof);

        
        $__internal_46618eece0b38c2afdec83a1d45ba3a7102c1eabbcbe4a083d10eb9ca88eeae2->leave($__internal_46618eece0b38c2afdec83a1d45ba3a7102c1eabbcbe4a083d10eb9ca88eeae2_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3823fd1a33e10a9d00923978b684c640e82ec5bdef452dc07ea54b39596fab7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3823fd1a33e10a9d00923978b684c640e82ec5bdef452dc07ea54b39596fab7e->enter($__internal_3823fd1a33e10a9d00923978b684c640e82ec5bdef452dc07ea54b39596fab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7a8ec70141eb9ded692d30da1b5f8aadd31c76e98951b12a416b8c0276ea87c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8ec70141eb9ded692d30da1b5f8aadd31c76e98951b12a416b8c0276ea87c8->enter($__internal_7a8ec70141eb9ded692d30da1b5f8aadd31c76e98951b12a416b8c0276ea87c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7a8ec70141eb9ded692d30da1b5f8aadd31c76e98951b12a416b8c0276ea87c8->leave($__internal_7a8ec70141eb9ded692d30da1b5f8aadd31c76e98951b12a416b8c0276ea87c8_prof);

        
        $__internal_3823fd1a33e10a9d00923978b684c640e82ec5bdef452dc07ea54b39596fab7e->leave($__internal_3823fd1a33e10a9d00923978b684c640e82ec5bdef452dc07ea54b39596fab7e_prof);

    }

    // line 292
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a4b3ae0714b0806348545bda0cc409b40a708fc69990b0b7960ed224fbbdd95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4b3ae0714b0806348545bda0cc409b40a708fc69990b0b7960ed224fbbdd95->enter($__internal_0a4b3ae0714b0806348545bda0cc409b40a708fc69990b0b7960ed224fbbdd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_717227f3f6f9e5b689aa046c8c99754392b2811267b4ad040290295612300464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717227f3f6f9e5b689aa046c8c99754392b2811267b4ad040290295612300464->enter($__internal_717227f3f6f9e5b689aa046c8c99754392b2811267b4ad040290295612300464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_717227f3f6f9e5b689aa046c8c99754392b2811267b4ad040290295612300464->leave($__internal_717227f3f6f9e5b689aa046c8c99754392b2811267b4ad040290295612300464_prof);

        
        $__internal_0a4b3ae0714b0806348545bda0cc409b40a708fc69990b0b7960ed224fbbdd95->leave($__internal_0a4b3ae0714b0806348545bda0cc409b40a708fc69990b0b7960ed224fbbdd95_prof);

    }

    // line 332
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3632fb88b7d921b71f32b12f9653476ffc6018b4ed154bd7b1a7369793b191d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3632fb88b7d921b71f32b12f9653476ffc6018b4ed154bd7b1a7369793b191d6->enter($__internal_3632fb88b7d921b71f32b12f9653476ffc6018b4ed154bd7b1a7369793b191d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9debe34abe1bdff691e80813a95d88cc052bb1b5545683108e8e6a5434df19fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9debe34abe1bdff691e80813a95d88cc052bb1b5545683108e8e6a5434df19fc->enter($__internal_9debe34abe1bdff691e80813a95d88cc052bb1b5545683108e8e6a5434df19fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9debe34abe1bdff691e80813a95d88cc052bb1b5545683108e8e6a5434df19fc->leave($__internal_9debe34abe1bdff691e80813a95d88cc052bb1b5545683108e8e6a5434df19fc_prof);

        
        $__internal_3632fb88b7d921b71f32b12f9653476ffc6018b4ed154bd7b1a7369793b191d6->leave($__internal_3632fb88b7d921b71f32b12f9653476ffc6018b4ed154bd7b1a7369793b191d6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 332,  477 => 292,  460 => 30,  442 => 10,  427 => 333,  425 => 332,  417 => 327,  411 => 324,  407 => 323,  402 => 321,  395 => 317,  391 => 316,  387 => 315,  383 => 314,  360 => 293,  358 => 292,  232 => 169,  217 => 157,  202 => 145,  187 => 133,  83 => 31,  81 => 30,  70 => 22,  65 => 20,  61 => 19,  55 => 16,  51 => 15,  47 => 14,  40 => 10,  29 => 1,);
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

    <title>MelodyMunk | {% block title %}Home{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">    <!--external css-->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/zabuto_calendar.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('js/gritter/css/jquery.gritter.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('lineicons/style.css') }}\"/>

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style-responsive.css') }}\" rel=\"stylesheet\">

    <script src=\"{{ asset('js/chart-master/Chart.js') }}\"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    {% block stylesheets %}{% endblock %}

</head>

<body>

<section id=\"container\" >
<!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
<!--header start-->
<header class=\"header black-bg\">
    <div class=\"sidebar-toggle-box\">
        <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
    </div>
    <!--logo start-->
    <a href=\"index.html\" class=\"logo\"><b>DASHGUM FREE</b></a>
    <!--logo end-->
    <div class=\"nav notify-row\" id=\"top_menu\">
        <!--  notification start -->
        <ul class=\"nav top-menu\">
            <!-- settings start -->
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                    <i class=\"fa fa-tasks\"></i>
                    <span class=\"badge bg-theme\">4</span>
                </a>
                <ul class=\"dropdown-menu extended tasks-bar\">
                    <div class=\"notify-arrow notify-arrow-green\"></div>
                    <li>
                        <p class=\"green\">You have 4 pending tasks</p>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">DashGum Admin Panel</div>
                                <div class=\"percent\">40%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                    <span class=\"sr-only\">40% Complete (success)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Database Update</div>
                                <div class=\"percent\">60%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                    <span class=\"sr-only\">60% Complete (warning)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Product Development</div>
                                <div class=\"percent\">80%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                    <span class=\"sr-only\">80% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Payments Sent</div>
                                <div class=\"percent\">70%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
                                    <span class=\"sr-only\">70% Complete (Important)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"external\">
                        <a href=\"#\">See All Tasks</a>
                    </li>
                </ul>
            </li>
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id=\"header_inbox_bar\" class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-theme\">5</span>
                </a>
                <ul class=\"dropdown-menu extended inbox\">
                    <div class=\"notify-arrow notify-arrow-green\"></div>
                    <li>
                        <p class=\"green\">You have 5 new messages</p>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"{{ asset('img/ui-zac.jpg') }}\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Zac Snider</span>
                                    <span class=\"time\">Just now</span>
                                    </span>
                                    <span class=\"message\">
                                        Hi mate, how is everything?
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"{{ asset('img/ui-zac.jpg') }}\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Divya Manian</span>
                                    <span class=\"time\">40 mins.</span>
                                    </span>
                                    <span class=\"message\">
                                     Hi, I need your help with this.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"{{ asset('img/ui-zac.jpg') }}\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Dan Rogers</span>
                                    <span class=\"time\">2 hrs.</span>
                                    </span>
                                    <span class=\"message\">
                                        Love your new Dashboard.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"{{ asset('img/ui-zac.jpg') }}\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Dj Sherman</span>
                                    <span class=\"time\">4 hrs.</span>
                                    </span>
                                    <span class=\"message\">
                                        Please, answer asap.
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">See all messages</a>
                    </li>
                </ul>
            </li>
            <!-- inbox dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <div class=\"top-menu\">
        <ul class=\"nav pull-right top-menu\">
            <li><a class=\"logout\" href=\"login.html\">Logout</a></li>
        </ul>
    </div>
</header>
<!--header end-->

<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id=\"sidebar\"  class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">

            <p class=\"centered\"><a href=\"profile.html\"><img src=\"assets/img/ui-sam.jpg\" class=\"img-circle\" width=\"60\"></a></p>
            <h5 class=\"centered\">Marcel Newman</h5>

            <li class=\"mt\">
                <a class=\"active\" href=\"index.html\">
                    <i class=\"fa fa-dashboard\"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\"fa fa-desktop\"></i>
                    <span>UI Elements</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"general.html\">General</a></li>
                    <li><a  href=\"buttons.html\">Buttons</a></li>
                    <li><a  href=\"panels.html\">Panels</a></li>
                </ul>
            </li>

            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\"fa fa-cogs\"></i>
                    <span>Components</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"calendar.html\">Calendar</a></li>
                    <li><a  href=\"gallery.html\">Gallery</a></li>
                    <li><a  href=\"todo_list.html\">Todo List</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\"fa fa-book\"></i>
                    <span>Extra Pages</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"blank.html\">Blank Page</a></li>
                    <li><a  href=\"login.html\">Login</a></li>
                    <li><a  href=\"lock_screen.html\">Lock Screen</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\"fa fa-tasks\"></i>
                    <span>Forms</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"form_component.html\">Form Components</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\"fa fa-th\"></i>
                    <span>Data Tables</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"basic_table.html\">Basic Table</a></li>
                    <li><a  href=\"responsive_table.html\">Responsive Table</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a href=\"javascript:;\" >
                    <i class=\" fa fa-bar-chart-o\"></i>
                    <span>Charts</span>
                </a>
                <ul class=\"sub\">
                    <li><a  href=\"morris.html\">Morris</a></li>
                    <li><a  href=\"chartjs.html\">Chartjs</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id=\"main-content\">
    <section class=\"wrapper\">

        {% block body %} {% endblock %}

    </section>
</section>

<!--main content end-->
<!--footer start-->
<footer class=\"site-footer\">
    <div class=\"text-center\">
        2014 - Alvarez.is
        <a href=\"index.html#\" class=\"go-top\">
            <i class=\"fa fa-angle-up\"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"{{ asset('js/jquery.dcjqaccordion.2.7.js') }}\"></script>
<script src=\"{{ asset('js/jquery.scrollTo.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.nicescroll.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('js/jquery.sparkline.js') }}\"></script>


<!--common script for all pages-->
<script src=\"{{ asset('js/common-scripts.js') }}\"></script>

<script type=\"text/javascript\" src=\"{{ asset('js/gritter/js/jquery.gritter.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/gritter-conf.js') }}\"></script>

<!--script for this page-->
<script src=\"{{ asset('js/sparkline-chart.js') }}\"></script>




{% block javascripts %}{% endblock %}


</body>
</html>

", "::base.html.twig", "/Users/mttwardowski/Desktop/MelodyMunk.com/music-q-webapp/app/Resources/views/base.html.twig");
    }
}
