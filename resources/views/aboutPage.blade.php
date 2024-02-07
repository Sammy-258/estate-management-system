<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<!-- Mirrored from demo.zytheme.com/lalan/page-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 22:09:17 GMT -->
<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Real Estate html5 template">
    <link href="assets/images/favicon/favicon.png" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="{{ asset('css/external.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>LandPro | Real Estate Html5 Template</title>
</head>

<body>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
            <nav id="primary-menu" class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
				        </button>
                        <a class="logo" href="index-2.html">
                            <img class="logo-light" src="{{ asset('images/logo/logo-light.png')}}" alt="Land Logo">
                            <img class="logo-dark" src="{{ asset('images/logo/logo-dark.png')}}" alt="Land Logo">
				        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                        <ul class="nav navbar-nav nav-pos-center navbar-left">
                            <!-- Home Menu -->
                            <li><a href="/" >home</a></li>
                            
                            

                            <!-- Properties Menu-->
                            <li><a href="/properties" >Properties</a></li>
                            

                            <li><a href="/about">About us</a></li>

                            <li><a href="/contact">contact</a></li>
                        </ul>
                        <!-- Module Signup  -->
                        <div class="module module-login pull-left">
                            <a class="btn-popup" data-toggle="modal" data-target="#signupModule">Login</a>
                            <div class="modal register-login-modal fade" tabindex="-1" role="dialog" id="signupModule">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#login" data-toggle="tab">login</a>
                                                    </li>
                                                    <li><a href="#signup" data-toggle="tab">signup</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="login">
                                                        <div class="signup-form-container text-center">
                                                            <form class="mb-0">
                                                                <a href="#" class="btn btn--facebook btn--block"><i class="fa fa-facebook-square"></i>Login with Facebook</a>
                                                                <div class="or-text">
                                                                    <span>or</span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" name="login-email" id="login-email" placeholder="Email Address">
                                                                </div>
                                                                <!-- .form-group end -->
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control" name="login-password" id="login-password" placeholder="Password">
                                                                </div>
                                                                <!-- .form-group end -->
                                                                <div class="input-checkbox">
                                                                    <label class="label-checkbox">
                                                                        <span>Remember Me</span>
                                                                        <input type="checkbox">
                                                                        <span class="check-indicator"></span>
                                                                    </label>
                                                                </div>
                                                                <input type="submit" class="btn btn--primary btn--block" value="Sign In">
                                                                <a href="#" class="forget-password">Forget your password?</a>
                                                            </form>
                                                            <!-- form  end -->
                                                        </div>
                                                        <!-- .signup-form end -->
                                                    </div>
                                                    <div class="tab-pane" id="signup">
                                                        <form class="mb-0">
                                                            <a href="#" class="btn btn--facebook btn--block"><i class="fa fa-facebook-square"></i>Register with Facebook</a>
                                                            <div class="or-text">
                                                                <span>or</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="full-name" id="full-name" placeholder="Full Name">
                                                            </div>
                                                            <!-- .form-group end -->
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" name="register-email" id="register-email" placeholder="Email Address">
                                                            </div>
                                                            <!-- .form-group end -->
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" name="register-password" id="register-password" placeholder="Password">
                                                            </div>
                                                            <!-- .form-group end -->
                                                            <div class="input-checkbox">
                                                                <label class="label-checkbox">
                                                                    <span>I agree with all <a href="#">Terms & Conditions</a></span>
                                                                    <input type="checkbox">
                                                                    <span class="check-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <input type="submit" class="btn btn--primary btn--block" value="Register">
                                                        </form>
                                                        <!-- form  end -->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                        </div>
                        <!-- Module Consultation  -->
                        <div class="module module-property pull-left">
                            <a href="add-property.html" target="_blank" class="btn"><i class="fa fa-plus"></i> add property</a>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

        </header>

        <!-- Page Title #1
============================================ -->
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="{{ asset('images/page-titles/1.jpg')}}" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>About</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">About</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- about #1
============================================= -->
        <section id="about" class="about bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="about--img">
                            <img class="img-responsive" src="{{ asset('images/about/1.jpg')}}" alt="about img">
                        </div>
                    </div>
                    <!-- .col-md-5 -->
                    <div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
                        <div class="heading heading-3">
                            <h2 class="heading--title">We Provide Lovable Experiment in the Real Estate Field</h2>
                        </div>
                        <!-- .heading-title end -->
                        <div class="about--panel">
                            <h3>Our Vision</h3>
                            <p>Propin ipsum dolor sit amet, consectetur adipisicing elited eiusmod tempore incidid ut labor et dolore magna aliquaut enim ad minim veniam.</p>
                        </div>
                        <!-- .about-panel end -->
                        <div class="about--panel">
                            <h3>Our Goal</h3>
                            <p>Duis aute viele irure dolor in reprer volupta velite esse cilume dolore eu fugiat nulla pariatur. Excepteur sint occae cupidat non proident.</p>
                        </div>
                        <!-- .about-panel end -->
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #about end -->

        <!-- Feature
============================================= -->
        <section id="feature" class="feature feature-left pt-90 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">What We Provide?</h2>
                            <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- feature Panel #1 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="{{ asset('images/features/icons/1.png')}}" alt="icon img">
                            </div>
                            <div class="feature--content">
                                <h3>Presenting Your Property</h3>
                                <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat conquat.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-6 end -->
                    <!-- feature Panel #2 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="{{ asset('images/features/icons/2.png')}}" alt="icon img">
                            </div>
                            <div class="feature--content">
                                <h3>Renting or Selling</h3>
                                <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat conquat.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-6 end -->
                    <!-- feature Panel #3 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="{{ asset('images/features/icons/3.png')}}" alt="icon img">
                            </div>
                            <div class="feature--content">
                                <h3>Property Exchange</h3>
                                <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat conquat.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-6 end -->
                    <!-- feature Panel #4 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <img src="{{ asset('images/features/icons/4.png')}}" alt="icon img">
                            </div>
                            <div class="feature--content">
                                <h3>Buying a Property</h3>
                                <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat conquat.</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-6 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- .feature end -->

        <!-- agents
============================================= -->
        <section id="agents" class="agents bg-white pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Trusted Agents</h2>
                            <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                        </div>
                        <!-- .heading end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- agent #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="agent">
                            <div class="agent--img">
                                <img src="{{ asset('images/agents/grid/1.png')}}" alt="agent" />
                                <div class="agent--details">
                                    <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                                    <div class="agent--social-links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .agent-img end -->
                            <div class="agent--info">
                                <h5 class="agent--title">Steve Martin</h5>
                                <h6 class="agent--position">Buying Agent</h6>
                            </div>
                            <!-- .agent-info end -->
                        </div>
                        <!-- .agent end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- agent #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="agent">
                            <div class="agent--img">
                                <img src="{{ asset('images/agents/grid/2.png')}}" alt="agent" />
                                <div class="agent--details">
                                    <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                                    <div class="agent--social-links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .agent-img end -->
                            <div class="agent--info">
                                <h5 class="agent--title">Mark Smith</h5>
                                <h6 class="agent--position">Selling Agent</h6>
                            </div>
                            <!-- .agent-info end -->
                        </div>
                        <!-- .agent end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- agent #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="agent">
                            <div class="agent--img">
                                <img src="{{ asset('images/agents/grid/3.png')}}" alt="agent" />
                                <div class="agent--details">
                                    <p>Lorem ipsum dolor sit amet, consece adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                                    <div class="agent--social-links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .agent-img end -->
                            <div class="agent--info">
                                <h5 class="agent--title">Ryan Printz</h5>
                                <h6 class="agent--position">Real Estate Broker</h6>
                            </div>
                            <!-- .agent-info end -->
                        </div>
                        <!-- .agent end -->
                    </div>
                    <!-- .col-md-4 end -->

                </div>
            </div>
        </section>
        <!-- #agents end  -->

        <!-- cta #1
============================================= -->
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="{{ asset('images/cta/bg-1.jpg')}}" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Join our professional team & agents to start selling your house</h3>
                        <a href="#" class="btn btn--primary">Contact</a>
                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #cta1 end -->
        <!-- Footer #1
============================================= -->
        <footer id="footer" class="footer footer-1 bg-white">
            <!-- Widget Section
	============================================= -->
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 widget--about">
                            <div class="widget--content">
                                <div class="footer--logo">
                                    <img src="{{ asset('images/logo/logo-dark2.png')}}" alt="logo">
                                </div>
                                <p>86 Petersham town, New South Wales Wardll Street, Australia PA 6550</p>
                                <div class="footer--contact">
                                    <ul class="list-unstyled mb-0">
                                        <li>+61 525 240 310</li>
                                        <li><a href="mailto:contact@land.com">contact@land.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->
                        <div class="col-xs-12 col-sm-3 col-md-2 col-md-offset-1 widget--links">
                            <div class="widget--title">
                                <h5>Company</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Properties</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->
                        <div class="col-xs-12 col-sm-3 col-md-2 widget--links">
                            <div class="widget--title">
                                <h5>Learn More</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Account</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-md-2 end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget--newsletter">
                            <div class="widget--title">
                                <h5>newsletter</h5>
                            </div>
                            <div class="widget--content">
                                <form class="newsletter--form mb-40">
                                    <input type="email" class="form-control" id="newsletter-email" placeholder="Email Address">
                                    <button type="submit"><i class="fa fa-arrow-right"></i></button>
                                </form>
                                <h6>Get In Touch</h6>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- .col-md-4 end -->

                    </div>
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-widget end -->

            <!-- Copyrights
	============================================= -->
            <div class="footer--copyright text-center">
                <div class="container">
                    <div class="row footer--bar">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <span>© 2018 <a href="http://themeforest.net/user/zytheme">Zytheme</a>, All Rights Reserved.</span>
                        </div>

                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-copyright end -->
        </footer>
    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
============================================= -->
    <script src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>
    <script src="{{ asset('js/functions.js')}}"></script>
</body>


<!-- Mirrored from demo.zytheme.com/lalan/page-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 22:09:19 GMT -->
</html>
