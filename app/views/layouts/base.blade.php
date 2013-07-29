
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PACSA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="wilhelmpaulm@gmail.com">


        {{HTML::style('css/dataTables.css')}}
        {{HTML::style('css/bootstrap.min.css')}}    
        <!--{{HTML::style('css/cosmo-bootstrap.css')}}-->
        {{HTML::style('css/bootstrap-responsive.min.css')}}
        {{HTML::style('css/font-awesome.min.css')}}
        {{HTML::style('css/wilhelmpaulm.css')}}
        <!--{{HTML::style('css/parsley.css')}}-->
        <!--{{HTML::style('css/ladda.css')}}-->
        <!--{{HTML::style('css/select2.css')}}-->


        {{HTML::script('js/jquery.js')}}
        {{HTML::script('js/bootstrap.min.js')}}
        <!--{{HTML::script('js/parsley.min.js')}}-->
        {{HTML::script('js/dataTables.min.js')}}
        <!--{{HTML::script('js/notify.min.js')}}-->
        <!--{{HTML::script('js/pulsate.min.js')}}-->
        <!--{{HTML::script('js/timer.js')}}-->
        <!--    {{HTML::script('js/spin.min.js')}}-->
        <!--{{HTML::script('js/ladda.js')}}-->
        <!--{{HTML::script('js/select2.min.js')}}-->
        {{HTML::script('js/scrolly.js')}}


        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
                background: url('{{URL::asset("bg/triangles.png")}}');

            }
            .hero-unit {

                /*background: url('{{URL::asset("bg/paper_3.png")}}')*/
            }

            .balon{

            }

            .well{
            }
            .sidebar-nav {
                padding: 9px 0;
            }

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }
            }
        </style>


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">-->
        <!--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">-->
        <!--<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">-->
        <!--<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">-->
        <!--<link rel="shortcut icon" href="../assets/ico/favicon.png">-->
    </head>

    <body>
            <div class="navbar  navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<img src="{{URL::asset('pacsa/logo.png')}}" width="px">-->
                        <a class="brand" href="#">Philippine Association of Campus Student Advisers</a>
                        <div class="nav-collapse collapse">
                            <ul class="nav pull-right">
                                <!--<li class="active"><a href="#">Home</a></li>-->
                                <li><a href="#about">About</a></li>
                                <li><a href="#event">Event</a></li>
                                <li><a href="#program">Program</a></li>
                                <li><a href="#speakers">Speakers</a></li>
                                <li><a href="#register">Register</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li><a href="#faqs">FAQs</a></li>
                               
                            </ul>

                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>

        <div class="container">
            <div >

                @yield('main')


            </div>
        </div>






    </body>

    <!-- Mirrored from twitter.github.io/bootstrap/examples/fluid.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 23 May 2013 18:29:58 GMT -->
</html>
