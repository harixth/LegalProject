<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Site Description Here">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Stack -->
        
        <link href="stack/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="stack/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <a id="start"></a>
        <div class="position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="nav-container ">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3 col-sm-2">
                            <a href="index.html">
                                <img class="logo logo-dark" alt="logo" src="stack/img/logo-dark.png" />
                                <img class="logo logo-light" alt="logo" src="stack/img/logo-light.png" />
                            </a>
                        </div>
                        <div class="col-xs-9 col-sm-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm">
                                <i class="icon icon--sm stack-interface stack-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <!--end bar-->
            <nav id="menu2" class="bar bar-2 hidden-xs bar--transparent bar--absolute" data-scroll-class='90vh:pos-fixed'>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 text-center text-left-sm hidden-xs col-md-push-5">
                            <div class="bar__module">
                                <a href="index.html">
                                    <img class="logo logo-dark" alt="logo" src="stack/img/logo-dark.png" />
                                    <img class="logo logo-light" alt="logo" src="stack/img/logo-light.png" />
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-md-5 col-md-pull-2">
                            <div class="bar__module">
                                <ul class="menu-horizontal text-left">
                                    <li><span>Home</span></li>
                                    <li><span>About</span></li>
                                    <li><span>FAQ</span></li>
                                    <li><span>Contact Us</span></li>
                                </ul>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-md-5 text-right text-left-xs text-left-sm">
                            <div class="bar__module">
                                <a class="btn btn--sm type--uppercase" href="#">
                                    <span class="btn__text">
                                        Log In
                                    </span>
                                </a>
                                <a class="btn btn--sm btn--primary type--uppercase" href="#">
                                    <span class="btn__text">
                                        Register
                                    </span>
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>
            <!--end bar-->
        </div>
            <div class="main-container">
            <section class="cover height-90 imagebg text-center" data-overlay="2" id="home">
                <div class="background-image-holder">
                    <img alt="background" src="stack/img/landing-10.jpg" />
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-8">
                            <img alt="Image" class="unmarg--bottom" src="stack/img/headline-1.png" />
                            <h3>
                                Streamline your workflow with Stack.
                            </h3>
                            <a class="btn btn--primary type--uppercase" href="#">
                                <span class="btn__text">
                                    View The Demos
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="cover imagebg height-80 text-center" data-overlay="3">
                <div class="background-image-holder">
                    <img alt="background" src="stack/img/tourism-1.jpg" />
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="h1 inline-block">Travel deals on</span>
                            <span class="h1 inline-block typed-text typed-text--cursor" data-typed-strings="Melbourne laneways,luxe glamping,urban hideaways,foodie tours,outback retreats,river cruising,wildlife safaris"></span>
                            <p class="lead">
                                Browse unique travel experiences from over 1,000 expert providers
                            </p>
                            <div class="boxed boxed--lg bg--white text-left">
                                <form class="form--horizontal">
                                    <div class="col-sm-6 col-md-3">
                                        <input type="text" name="location" placeholder="Destination" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" name="location" placeholder="Location" />
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-select">
                                            <select>
                                                <option selected="" value="Default">Select a discipline</option>
                                                <option value="design">Design</option>
                                                <option value="development">Development</option>
                                                <option value="management">Management</option>
                                                <option value="marketing">Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn--primary type--uppercase">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            </div>
            <footer class="footer-3 text-center-xs space--xs bg-cc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img alt="Image" class="logo" src="stack/img/logo-dark.png" />
                            <ul class="list-inline list--hover">
                                <li>
                                    <a href="#">
                                        <span class="type--fine-print">Get Started</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="type--fine-print">help@stack.io</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            <ul class="social-list list-inline list--hover">
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-google icon" style="color:black"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-twitter icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-facebook icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-instagram icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="type--fine-print">
                                Supercharge your web workflow
                            </p>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            <span class="type--fine-print">&copy;
                                <span class="update-year"></span> Stack Inc.</span>
                            <a class="type--fine-print" href="#">Privacy Policy</a>
                            <a class="type--fine-print" href="#">Legal</a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </footer>           
        </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="stack/js/jquery-3.1.1.min.js"></script>
        <script src="stack/js/flickity.min.js"></script>
        <script src="stack/js/easypiechart.min.js"></script>
        <script src="stack/js/parallax.js"></script>
        <script src="stack/js/typed.min.js"></script>
        <script src="stack/js/datepicker.js"></script>
        <script src="stack/js/isotope.min.js"></script>
        <script src="stack/js/ytplayer.min.js"></script>
        <script src="stack/js/lightbox.min.js"></script>
        <script src="stack/js/granim.min.js"></script>
        <script src="stack/js/jquery.steps.min.js"></script>
        <script src="stack/js/countdown.min.js"></script>
        <script src="stack/js/twitterfetcher.min.js"></script>
        <script src="stack/js/spectragram.min.js"></script>
        <script src="stack/js/smooth-scroll.min.js"></script>
        <script src="stack/js/scripts.js"></script>
    </body>
</html>
