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
                <a class="navbar-brand page-scroll" href="#page-top"><span class="logo-text-illusion">Digitalcum</span></a>
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
                        <a class="page-scroll" href="#pricing">Pricing</a>
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
                <p class="lead">With our expertise in pixel perfect design we help create eye catching visual brands for clients. From creating Logos, to full fledged websites we deliver amazing designs to match brands, whether new or existing.</p>
            </div>

            <hr class="featurette-divider">

            <!-- Second Featurette -->
            <div class="featurette">
                <img class="featurette-image img-circle img-responsive pull-left" src="images/pexels-photo-160107.jpeg">
                <h2 class="featurette-heading">Develop
                    <span class="text-muted">&nbsp;</span>
                </h2>
                <p class="lead">We develop web and mobile applications with our vast knowledge of programming skills. We pay attention to your applications security and keep a tight lid on each project. Even when we're gone maintenance is a breeze.</p>
            </div>

            <hr class="featurette-divider">

            <!-- Third Featurette -->
            <div class="featurette">
                <img class="featurette-image img-circle img-responsive pull-right" src="images/telecom.jpg">
                <h2 class="featurette-heading">Deploy
                    <span class="text-muted">&nbsp;</span>
                </h2>
                <p class="lead">Design and Development would mean nothing if we can't deploy what we've worked for. With our optimized infrastructure we can deploy your site in a heartbeat. Yes, we'll take care of everything from registration to hosting.</p>
            </div>
        </div>
    </section>

    <hr>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Pricing</h1>
                    <br/></br>
                    <div class="columns">
                      <ul class="price">
                        <li class="header">Basic</li>
                        <li class="grey">&#8377; 5,000 / website</li>
                        <li>Single Website</li>
                        <li>Website Hostnig Support</li>
                        <li>Limited Page</li>
                        <li>Limited Technical Support</li>
                        <li class="grey"><a href="#" class="button">Sign Up</a></li>
                      </ul>
                    </div>

                    <div class="columns">
                      <ul class="price">
                        <li class="header" style="background-color:#3097D1">Pro</li>
                        <li class="grey">&#8377; 15,000 / website</li>
                        <li>Single Website</li>
                        <li>Website Hostnig Support</li>
                        <li>Limited Page &amp; Little Customization</li>
                        <li>Technical Support</li>
                        <li class="grey"><a href="#" class="button">Sign Up</a></li>
                      </ul>
                    </div>

                    <div class="columns">
                      <ul class="price">
                        <li class="header">Premium</li>
                        <li class="grey">&#8377; 30,000 / website</li>
                        <li>Signgle Website</li>
                        <li>Website Hosting Support</li>
                        <li>Fully Customized</li>
                        <li>Full Technical and others Support</li>
                        <li class="grey"><a href="#" class="button">Sign Up</a></li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
  <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Want to start a project or just say hi...</h3>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr>
  
  <!-- Footer -->
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2017 Digitalcum. All rights reserved.</p>
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
