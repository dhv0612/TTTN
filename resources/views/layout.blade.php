<!DOCTYPE html>
<?php
    // $userid = Session::get('userid');
    //     $username = Session::get('username');
    //     if(!isset($userid)){
    //         setcookie('userid', "", time() - 3600);
    //         setcookie('username', "", time() - 3600);
    //     }
    // else{
    

    // setcookie('userid', $userid, time() + (86400 * 30 *12 *100), "/");
    //     setcookie('username', $username, time() + (86400 * 30 *12 *100), "/");
    // }
?>
<html lang="en">

<head>

    <title>PHPJabbers.com | Free Job Agency Website Template</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.theme.default.min.css') }}">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
    <style>
        .owl-carousel,
        .owl-theme,
        .home-slider,
        .item {
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .custom-navbar .navbar-brand {
            height: 70px;
            width: 160px;
            margin: 0;
            padding: 0;
            background: url("{{ asset('public/frontend/images/logo.png') }}");
            background-size: cover;
            background-position: center;
        }

    </style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>


    <!-- MENU -->
    {{-- <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="#" class="navbar-brand">Jobs Agency</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="job-listing.html">Jobs</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="blog-posts.html">Blog</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">More <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="team.html">Team</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="terms.html">Terms</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="contact.html">Recruit</a></li>
                    <li><a href="contact.html">User</a></li>
                </ul>
            </div>

        </div>
    </section> --}}

    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="#" class="navbar-brand logo"></a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Our Services <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="team.html">Team</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="terms.html">Terms</a></li>
                        </ul>
                    </li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="contact.html">Job Seeker's Site</a></li>
                </ul>
                {{-- <ul class="nav navbar-nav" style="float: right;">
                    <li><a href="{{ URL::to('/login-user') }}">Sign In</a></li>
                </ul> --}}

                <?php

                $userid = Session::get('userid');
                    // $userid = Session::get('userid');
                $username = Session::get('username');
                    // if (!isset($_COOKIE['userid'])){
                    if (!isset($userid)){
                    ?>
                        <ul class="nav navbar-nav signin">
                            <li><a href="{{ URL::to('/login-user') }}">Login</a></li>
                        </ul>
                    <?php } 
                    else { 
                    ?>

                
                    <ul class="nav navbar-nav signin">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false"><i class="fa fa-user-circle fa-2x"></i></a>
    
                            <ul class="dropdown-menu users">
                                <li>
                                    <a> 
                                        <?php
                                           
                                            // echo  $_COOKIE['username'];
                                            echo $username;
                                        ?>
                                    </a>
                                </li>
                                <li><a>Setting</a></li>
                                <li><a href="{{URL::to('/logout-user')}}">Logout 
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <?php }
                ?>
            </div>

        </div>
    </section>

    @yield('content')

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2>Headquarter</h2>
                        </div>
                        <address>
                            <p>212 Barrington Court <br>New York, ABC 10001</p>
                        </address>

                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>

                        <div class="copyright-text">
                            <p>Copyright &copy; 2020 Company Name</p>
                            <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2>Contact Info</h2>
                        </div>
                        <address>
                            <p>+1 333 4040 5566</p>
                            <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                        </address>

                        <div class="footer_menu">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="terms.html">Terms & Conditions</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="footer-info newsletter-form">
                        <div class="section-title">
                            <h2>Newsletter Signup</h2>
                        </div>
                        <div>
                            <div class="form-group">
                                <form action="#" method="get">
                                    <input type="email" class="form-control" placeholder="Enter your email" name="email"
                                        id="email" required>
                                    <input type="submit" class="form-control" name="submit" id="form-submit"
                                        value="Send me">
                                </form>
                                <span><sup>*</sup> Please note - we do not spam your email.</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('public/frontend/js/custom.js') }}"></script>

</body>

</html>
