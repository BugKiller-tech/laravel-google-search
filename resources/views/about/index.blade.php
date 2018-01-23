<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Custom search site</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('about_page/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{asset('about_page/css/freelancer.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Welcome</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/">SearchPage</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">SiteRule</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="{{asset('images/about_page/profile.png')}}" alt="">
                    <div class="intro-text">
                        <h1 class="name">We don’t store your personal information. Ever.</h1>
                        <hr>
                        <span class="skills">
                           Our privacy policy is simple: we don’t collect or share any of your personal information. 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>We don’t follow you around with ads.</h2>
                    <hr>
                </div>
            </div>
            <div class="row" style="font-size: 20px;">
                <div class="col-sm-4 portfolio-item">
                    We don’t store your search history. We therefore have nothing to sell to advertisers that track you across the internet.
                </div>
                <div class="col-sm-4 portfolio-item">
                    We don’t store your search history. We therefore have nothing to sell to advertisers that track you across the internet.
                </div>
                <div class="col-sm-4 portfolio-item">
                    We don’t store your search history. We therefore have nothing to sell to advertisers that track you across the internet.
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>We don’t track you in or out of private browsing mode.</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Other search engines track your searches even when you’re
in private browsing mode. We don’t track you — period.</p>
                </div>
                <div class="col-lg-4">
                    <p>No tracking, no ad targeting, just searching.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Address</h3>
                        <p>Aaaaaaaaaaa
                            <br>You can see me in upwork</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <ul class="list-inline">
                        <h3>About oursite</h3>
                        <p>This website created by XXXX company. Click <a href="">here</a> for visit our company site.</p>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Goto sites</h3>
                        <p>Google <a href="http://google.com">click here</a>.</p>
                        <p>Yahoo <a href="http://yahoo.com">click here</a>.</p>
                        <p>DuckDuckgo <a href="https://duckduckgo.com/">click here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Custom search engine 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="{{asset('about_page/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('aboute_page/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('about_page/js/freelancer.min.js')}}"></script>

</body>

</html>
