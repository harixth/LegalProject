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
            <nav id="menu2" class="bar bar-2 bar--transparent bar--absolute pos-fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 text-left text-left-sm col-md-pull-1">
                            <div class="bar__module">
                                <a href="index.html">
                                    <img class="logo logo-dark" alt="logo" src="stack/img/logo-dark.png" />
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-md-5 col-md-push-5">
                            <div class="bar__module">
                                <ul class="menu-horizontal text-left">
                                    <li><span>Services</span></li>
                                    <li><span>News</span></li>
                                    <li><span>About Us</span></li>                                    
                                </ul>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-md-5 text-right text-left-xs text-left-sm">                           
                            @if (Route::has('login'))
                                <div class="bar__module">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a class="btn btn--sm type--uppercase" href="{{ route('login') }}">
                                            <span class="btn__text">
                                                Log In
                                            </span>
                                        </a>
                                        <a class="btn btn--sm btn--primary type--uppercase" href="{{ route('register') }}">
                                            <span class="btn__text">
                                                Register
                                            </span>
                                        </a>
                                    @endauth
                                </div>
                            @endif                           
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
            <section class="height-80 text-center" data-overlay="20">
                <div class="slider" data-arrows="true" style="margin-top:10px;">
                    <ul class="slides">
                        <li><img src="stack/img/inner-1.jpg" height="520px" /></li>
                        <li><img src="stack/img/inner-2.jpg" height="520px" /></li>
                        <li><img src="stack/img/inner-3.jpg" height="520px" /></li>
                    </ul>
                </div>
            </section>
            <section class="cover imagebg height-80 text-center parallax">
                <div class="background-image-holder">
                    <img alt="background" src="stack/img/tourism-1.jpg" />
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="h1 inline-block">We assist to</span>
                            <span class="h1 inline-block typed-text typed-text--cursor" data-typed-strings="find your best lawyer,ease your marriage process,provide wasiat services"></span>
                            <p class="lead">
                                Browse unique laws services from over 1,00 expert providers
                            </p>
                            <div class="boxed boxed--lg bg--white text-left">
                                <form class="form--horizontal">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="input-select">
                                                <select>
                                                    <option selected="" value="Default">Subject Matter</option>
                                                    <option value="design">Divorce</option>
                                                    <option value="Child Custody">Child Custody</option>
                                                    <option value="Poligamy">Poligamy</option>
                                                    <option value="Syariahco">Syariah Criminal Offence</option>
                                                    <option value="Nusyuz">Nusyuz</option>
                                                    <option value="Alimony">Alimony</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="input-select">
                                                <select>
                                                    <option selected="" value="Default">Service</option>
                                                    <option value="Small">Advice</option>
                                                    <option value="RTC">Representation to Court</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="input-select">
                                                <select>
                                                    <option selected="" value="Default">Location</option>
                                                    <option value="Gombak">Gombak</option>
                                                    <option value="HuluLangat">Hulu Langat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="input-select">
                                                <select>
                                                    <option selected="" value="Default">Budget Range</option>
                                                    <option value="1">1000-2000</option>
                                                    <option value="2">2000-3000</option>
                                                    <option value="3">3000-4000</option>
                                                    <option value="4">4000-5000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-2 col-md-offset-5">
                                            <button type="submit" class="btn btn--primary type--uppercase">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="cover imagebg height-60 text-center" data-overlay="7">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature feature-5 boxed boxed--lg boxed--border height-40">
                                <i class="icon icon-Address-Book"></i>
                                <div class="feature__body">
                                    <h5>Find Your Lawyer Easily</h5>
                                    <p>
                                        We connect our local lawyers to you. Search for your best lawyer based on your own preference of budget and reputation.
                                    </p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature feature-5 boxed boxed--lg boxed--border height-40">
                                <i class="icon icon-File-Edit"></i>
                                <div class="feature__body">
                                    <h5>Simplify your Marriage Process</h5>
                                    <p>
                                        We provide end to end digital marriage process that fully comply with syariah, rules and regulations.
                                    </p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>                       
                        <div class="col-md-4">
                            <div class="feature feature-5 boxed boxed--lg boxed--border height-40">
                                <i class="icon icon-Cursor"></i>
                                <div class="feature__body">
                                    <h5>Register Your Wills Here</h5>
                                    <p>
                                        Digital wills creator that enable you to protect the people you love. Declare and register your wills here and we will guide you with several simple steps.
                                    </p>
                                    <a href="#">Learn More</a>
                                </div>
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
                        <div class="col-md-12 text-center text-center-xs">
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
                        <div class="col-md-12 text-center text-center-xs">
                            <p class="type--fine-print">
                                Syariah2u is an online service that provides legal forms and legal information. 
                                <br>We are not a law firm and are not a substitute for an attorney's advice. 
                            </p>
                        </div>
                        <div class="col-md-12 text-center text-center-xs">
                            <span class="type--fine-print">&copy;
                                <span class="update-year"></span> Syariah2u </span>
                            <a class="type--fine-print" href="#">Privacy Policy</a>
                            <a class="type--fine-print" href="#">Tems of Service</a>
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
