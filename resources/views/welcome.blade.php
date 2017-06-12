
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/one-page-wonder.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav id="navMain" class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">WebApp</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                   <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
      <!-- Full Width Image Header -->
        <header class="header-image">
            <div class="headline">
                <div class="container">
                    <h1 class="fadeIn wait-1s">Hi There, We are DC</h1>
                    <h2 class="fadeIn wait-2s">A Passonate Web Design Company</h2>
                </div>
            </div>
        </header>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">

            <!-- First Featurette -->
            <div class="featurette">
                <img class="featurette-image img-circle img-responsive pull-right" src="images/web-design.jpg">
                <h2 class="featurette-heading">Design
                    <span class="text-muted">&nbsp;</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>

            <hr class="featurette-divider">

            <!-- Second Featurette -->
            <div class="featurette">
                <img class="featurette-image img-circle img-responsive pull-left" src="images/pexels-photo-160107.jpeg">
                <h2 class="featurette-heading">Develop
                    <span class="text-muted">&nbsp;</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>

            <hr class="featurette-divider">

            <!-- Third Featurette -->
            <div class="featurette">
                <img class="featurette-image img-circle img-responsive pull-right" src="images/telecom.jpg">
                <h2 class="featurette-heading">Deploy
                    <span class="text-muted">&nbsp;</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>


  
     <!-- Page Content -->
    <div class="container">


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Digitalcum 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script type="text/javascript">
        $(function(){ 
             var navMain = $(".navbar-collapse"); // avoid dependency on #id
             // "a:not([data-toggle])" - to avoid issues caused
             // when you have dropdown inside navbar
             navMain.on("click", "a:not([data-toggle])", null, function () {
                 navMain.collapse('hide');
             });
         });
    </script>

</body>

</html>
