<!DOCTYPE html>
<html lang="en">

<head>
    <title>Recetas comida</title>
    <!-- GOOGLE FONTS -->
    <link
        href='http://fonts.googleapis.com/css?family=Yellowtail%7cCabin:400,500,600,700,400italic,700italic%7cLibre+Baskerville:400italic%7cGreat+Vibes%7cOswald:400,300,700%7cOpen+Sans:600italic,700'
        rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700'
        rel='stylesheet' type='text/css'>

    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />

    <!-- CSS STYLESHEETS -->

    <link rel="stylesheet" href="{{url ('static/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('static/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{url('static/css/elixir.css')}}" />
    <link href="{{url('static/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{url('static/js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{url('static/js/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{url('static/css/YTPlayer.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('static/css/swipebox.css')}}">


    <!--[if lt IE 9]>
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <script src="./js/html5shiv.js"></script>
        <script src="./js/respond.js"></script>
    <![endif]-->

    <style>
        section.menu {
            background: none;
        }

        #header {
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 1001;
            width: 100%;
            height: 90px;
            background-color: #fff !important;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.11);
            padding-top: 20px;
        }

        #header .menu-item a {
            color: #080808;
        }

        #header.overflow {
            top: -100px;
            left: 0px;
            background-color: #fff !important;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.11);
            -webkit-transition: all 0.3s ease-in;
            -o-transition: all 0.3s ease-in;
            transition: all 0.3s ease-in;
            -webkit-font-smoothing: antialiased;
        }
    </style>

</head>





<body>

    <div id="mask">
        <div class="loader">
            <img src="svg-loaders/tail-spin.svg" alt='loading'>
        </div>
    </div>



    <!-- BEGIN HEADER -->
    <header id="header" role="banner">
        <div class="jt_row container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand  " href="#home">
                    <h1 class="titulo1">Recetas <div class="titulo2">comida</div> </h1>
                </a>
            </div>

            <!-- BEGIN NAVIGATION MENU-->
            <nav class="collapse navbar-collapse navbar-right navbar-main-collapse" role="navigation">
                <ul id="nav" class="nav navbar-nav navigation">
                    <li class="page-scroll menu-item"><a href="{{url('/')}}">Inicio</a></li>
                    <li class="page-scroll menu-item"><a href="{{url('/About')}}">Acerca nosotros</a></li>
                    <li class="page-scroll menu-item"><a href="{{url('/login')}}">Login</a></li>
                    <li class="page-scroll menu-item"><a href="{{url('/register')}}">Registrarse</a></li>
                    <li class="page-scroll menu-item current"><a href="{{url('/Gallery')}}">Galleria</a></>
                  
                </ul>
            </nav>
            <!-- EN NAVIGATION MENU -->
        </div>
    </header>
    <!-- END HEADER -->







    <!-- BEGIN GALLERY SECTION -->
    <section id="gallery" class="section gallery dark">
        <div class="jt_row jt_row-fluid row">
            <div class="col-md-12 jt_col column_container">
                <div class="voffset100"></div>
                <h2 class="section-title">Gallery</h2>
                <div class="col-md-6 col-md-offset-3 jt_col column_container">
                    <div class="section-subtitle">
                        Ofrecer un servicio y una calidad de producto 
                        que nos caracterice por la excelencia y nos diferencie de la competencia.
                    </div>
                </div>

            </div>

            <div class="col-md-12 jt_col column_container">

                <nav class="primary">
                    <ul>
                        <li><a href="#" data-filter="*" class="selected"><span>Fotografias</span></a></li>
                        <li><a href="#" data-filter=".pizza"><span>Pizzas</span></a></li>
                        <li><a href="#" data-filter=".pasta"><span>Pasta</span></a></li>
                        <li><a href="#" data-filter=".dessert"><span>Mexicano</span></a></li>
                    </ul>
                </nav>

                <div class="portfolio">

                    <article class="entry pizza">
                        <a class="swipebox" href="{{url('status/images/about01.jpg')}}">
                            <img src="{{url('static/images/about01.jpg')}}" class="img-responsive" alt="" />
                            <span class="magnifier"></span>
                        </a>
                    </article>

                    <article class="entry dessert">
                        <a class="swipebox" href="{{url('static/images/about02.jpg')}}">
                            <img src="{{url('static/images/about02.jpg')}}" class="img-responsive" alt="" />
                            <span class="magnifier"></span>
                        </a>
                    </article>

                    <article class="entry pizza">
                        <a class="swipebox" href="{{url('static/images/about04.jpg')}}">
                            <img src="{{url('static/images/about04.jpg')}}" class="img-responsive" alt="" />
                            <span class="magnifier"></span>
                        </a>
                    </article>

                    <article class="entry pasta">
                        <a class="swipebox" href="{{url('static/images/about05.jpg')}}">
                            <img src="{{url('static/images/about05.jpg')}}" class="img-responsive" alt="" />
                            <span class="magnifier"></span>
                        </a>
                    </article>

                    <article class="entry pasta">
                        <a class="swipebox" href="{{url('static/images/about03.jpg')}}">
                            <img src="{{url('static/images/about03.jpg')}}" class="img-responsive" alt="" />
                            <span class="magnifier"></span>
                        </a>
                    </article>

                    <article class="entry pizza">
                        <a class="swipebox" href="{{url('static/images/about06.jpg')}}">
                            <img src="{{url('static/images/about06.jpg')}}" class="img-responsive" alt="" />
                            <span class="magnifier"></span>
                        </a>
                    </article>


                </div>
            </div> <!-- End .jt_col -->
        </div> <!-- End .jt_row -->
        <div class="voffset200"></div>
    </section>
    <!-- END GALLERY SECTION -->


    <!-- BEGIN CONTACT SECTION -->
    <section id="contact" class="section contact dark">
        <div class="container">
            <div class="jt_row jt_row-fluid row">

                <div class="col-md-12 jt_col column_container">
                    <h2 class="section-title">Contact0</h2>
                </div>
                <div class="col-md-6 col-md-offset-3 jt_col column_container">
                    <div class="section-subtitle">
                        Universidad Tecnologica de Cancun
                    </div>
                </div>
                <form action="mail.php" method="post" id="contactform" class="contact-form">
                    <div class="col-md-6 jt_col column_container">
                        <input type="text" id="name" name="name" class="text name required" placeholder="Nombre">
                        <input type="email" id="email" name="email" class="tex email required" placeholder="Email">
                        <input type="text" id="subject" name="subject" placeholder="Asunto">
                    </div>

                    <div class="col-md-6 jt_col column_container">
                        <textarea id="message" name="message" class="text area required" placeholder="Mensaje"
                            rows="10"></textarea>
                    </div>

                    <div class="col-md-4 col-md-offset-4 jt_col column_container">
                        <div class="formSent"><strong>Tu mensaje se ha enviado!</strong> Gracias por contactarnos.
                        </div>
                        <input type="submit" class="button contact center" value="Submit">
                    </div>

                </form>
                <div class="voffset100"></div>
            </div>
            <div class="voffset50"></div>
        </div>

    </section>
    <!-- END CONTACT SECTION -->

    <!-- BEGIN FOOTER -->
    <footer id="footer" class="section" role="contentinfo">
        <div class="container">
            <ul class="social">
                <li><a href="#" class="icon tw"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icon fb"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icon go"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </footer>
    <!-- END FOOTER -->
    <a href="#0" class="cd-top">Top</a>
    <!-- BEGIN Scripts-->

    
    <script src="{{url('static/js/modernizr.custom.js')}}"></script>
    <script src="{{url('static/js/jquery.js')}}"></script>
    <script src="{{url('static/js/classie.js')}}"></script>
    <script src="{{url('static/js/pathLoader.js')}}"></script>
    <script src="{{url('static/js/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('static/js/jquery.inview.js')}}"></script>
    <script src="{{url('static/js/jquery.nav.js')}}"></script>
    <script src="{{url('static/js/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{url('static/js/jquery.form.js')}}"></script>
    <script src="{{url('static/js/jquery.validate.js')}}"></script>
    <script src="{{url('static/js/bootstrap.min.js')}}"></script>
    <script src="{{url('static/js/default.js')}}"></script>
    <script src="{{url('static/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{url('static/js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{url('static/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{url('static/js/jquery.swipebox.js')}}"></script>

    <script type="text/javascript">
        ; (function ($) {

            $('.swipebox').swipebox();

        })(jQuery);
    </script>



    <!-- END Scripts -->
</body>

</html>