<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<!-- Mirrored from demo.zytheme.com/lalan/properties-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 22:09:23 GMT -->
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
        <header id="navbar-spy" class="header header-1 header-light header-fixed">
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
        <!-- map
============================================ -->
        <section id="map" class="hero-map pt-0 pb-0">
            <div class="container-fluid pr-0 pl-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div id="googleMap"></div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
            <div class="search-properties">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <form class="mb-0 ">
                                <div class="form-box ">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-location" id="select-location">
                                            <option>Any Location</option>
                                            <option>Alabama</option>
											<option>Alaska</option>
											<option>California</option>
											<option>Florida</option>
											<option>Mississippi</option>
											<option>Oregon</option>
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-type" id="select-type">
                                            <option>Any Type</option>
                                            <option>Apartment</option>
											<option>House</option>
											<option>Office</option>
											<option>Villa</option>
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-status" id="select-status">
                                           <option>Any Status</option>
                                            <option>For Rent</option>
                                        	<option>For Sale</option>
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="submit" value="Search" name="submit" class="btn btn--primary btn--block mb-30">
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-beds" id="select-beds">
                                            <option>Beds</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="select-baths" id="select-baths">
                                            <option>Baths</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-6 col-md-6 option-hide">
                                            <div class="filter mb-30">
                                                <p>
                                                    <label for="amount">Price Range: </label>
                                                    <input id="amount" type="text" class="amount" readonly>
                                                </p>
                                                <div class="slider-range"></div>
                                            </div>
                                        </div>
                                        <!-- .col-md-3 end -->
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <a href="#" class="less--options">Less options</a>
                                        </div>
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- .form-box end -->
                            </form>
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
        </section>
        <!-- #map end -->

        <!-- properties-grid
============================================= -->
        <section id="properties-grid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- widget property type
=============================-->
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Property Type</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Apartments <span>(13)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Houses <span>(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Offices <span>(3)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Villas <span>(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Land <span>(2)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- . widget property type end -->

                        <!-- widget property status
=============================-->
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Property Status</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">For Rent <span>(25)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">For Sale <span>(32)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- . widget property status end -->


                        <!-- widget property city
=============================-->
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Property By City</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">London <span>(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Sydney <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">New York <span>(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Paris <span>(7)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- . widget property city end -->


                        <!-- widget featured property
=============================-->
                        <div class="widget widget-featured-property">
                            <div class="widget--title">
                                <h5>Featured Properties</h5>
                            </div>
                            <div class="widget--content">
                                <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                                    <!-- .property-item #1 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <img src="{{ asset('images/properties/13.jpg')}}" alt="property image" class="img-responsive">
                                            <span class="property--status">For Rent</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">House in Chicago</a></h5>
                                                <p class="property--location">1445 N State Pkwy, Chicago, IL 60610</p>
                                                <p class="property--price">$1200<span class="time">month</span></p>
                                            </div>
                                            <!-- .property-info end -->
                                        </div>
                                    </div>
                                    <!-- .property item end -->
                                    <!-- .property-item #2 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <img src="{{ asset('images/properties/2.jpg')}}" alt="property image" class="img-responsive">
                                            <span class="property--status">For Rent</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">Villa in Oglesby Ave</a></h5>
                                                <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                                <p class="property--price">$130,000<span class="time">month</span></p>
                                            </div>
                                            <!-- .property-info end -->
                                        </div>
                                    </div>
                                    <!-- .property item end -->
                                    <!-- .property-item #3 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <img src="{{ asset('images/properties/3.jpg')}}" alt="property image" class="img-responsive">
                                            <span class="property--status">For Sale</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">Apartment in Long St.</a></h5>
                                                <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                                <p class="property--price">$70,000</p>
                                            </div>
                                            <!-- .property-info end -->
                                        </div>
                                    </div>
                                    <!-- .property item end -->
                                </div>
                                <!-- .carousel end -->
                            </div>
                        </div>
                        <!-- . widget featured property end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="properties-filter clearfix">
                                    <div class="select--box pull-left">
                                        <label>Sort by:</label>
                                        <i class="fa fa-angle-up"></i>
                                        <i class="fa fa-angle-down"></i>
                                        <select>
								<option selected="" value="Default">Default Sorting</option>
								<option value="Larger">Newest Items</option>
								<option value="Larger">oldest Items</option>
								<option value="Larger">Hot Items</option>
								<option value="Small">Highest Price</option>
								<option value="Medium">Lowest Price</option>
							</select>
                                    </div>
                                    <!-- .select-box -->
                                    <div class="view--type pull-right">
                                        <a id="switch-list" href="#" class=""><i class="fa fa-th-list"></i></a>
                                        <a id="switch-grid" href="#" class="active"><i class="fa fa-th-large"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="properties properties-grid">
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <!-- .property-item #1 -->
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="property-single-gallery.html">
                                                <img src="{{ asset('images/properties/1.jpg')}}" alt="property image" class="img-responsive">
                                            </a>
                                            <span class="property--status">For Sale</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">House in Kent Street</a></h5>
                                                <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                                <p class="property--price">$130,000</p>
                                            </div>
                                            <!-- .property-info end -->
                                            <div class="property--features">
                                                <ul class="list-unstyled mb-0">
                                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                                    <li><span class="feature">Area:</span><span class="feature-num">587 sq ft</span></li>
                                                </ul>
                                            </div>
                                            <!-- .property-features end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- .property item end -->

                                <!-- .property-item #2 -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="property-single-gallery.html">
                                                <img src="{{ asset('images/properties/6.jpg')}}" alt="property image" class="img-responsive">
								            </a>
                                            <span class="property--status">For Rent</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">Apartment For Rent</a></h5>
                                                <p class="property--location">1609 N Richmond St, Chicago, IL 60647</p>
                                                <p class="property--price">$900<span class="time">month</span></p>
                                            </div>
                                            <!-- .property-info end -->
                                            <div class="property--features">
                                                <ul class="list-unstyled mb-0">
                                                    <li><span class="feature">Beds:</span><span class="feature-num">1</span></li>
                                                    <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                                    <li><span class="feature">Area:</span><span class="feature-num">500 sq ft</span></li>
                                                </ul>
                                            </div>
                                            <!-- .property-features end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- .property item end -->

                                <!-- .property-item #3 -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="property-single-gallery.html">
                                                <img src="{{ asset('images/properties/5.jpg')}}" alt="property image" class="img-responsive">
								            </a>
                                            <span class="property--status">For Rent</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">2750 House in Urban St.</a></h5>
                                                <p class="property--location">2750 Urban Street Dr, Anderson, IN 46011</p>
                                                <p class="property--price">$1.550<span class="time">month</span></p>
                                            </div>
                                            <!-- .property-info end -->
                                            <div class="property--features">
                                                <ul class="list-unstyled mb-0">
                                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                                    <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                                    <li><span class="feature">Area:</span><span class="feature-num">1390 sq ft</span></li>
                                                </ul>
                                            </div>
                                            <!-- .property-features end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- .property item end -->

                                <!-- .property-item #4 -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="property-single-gallery.html">
                                                <img src="{{ asset('images/properties/12.jpg')}}" alt="property image" class="img-responsive">
								            </a>
                                            <span class="property--status">For Rent</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">Modern Office For Rent</a></h5>
                                                <p class="property--location">2003 Sheffield Ave, Anderson, IN 46011</p>
                                                <p class="property--price">$530<span class="time">month</span></p>
                                            </div>
                                            <!-- .property-info end -->
                                            <div class="property--features">
                                                <ul class="list-unstyled mb-0">
                                                    <li><span class="feature">Beds:</span><span class="feature-num">0</span></li>
                                                    <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                                    <li><span class="feature">Area:</span><span class="feature-num">150 sq ft</span></li>
                                                </ul>
                                            </div>
                                            <!-- .property-features end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- .property item end -->

                                <!-- .property-item #5 -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="property-single-gallery.html">
                                                <img src="{{ asset('images/properties/3.jpg')}}" alt="property image" class="img-responsive">
								            </a>
                                            <span class="property--status">For Sale</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title"><a href="property-single-gallery.html">Apartment in Long St.</a></h5>
                                                <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                                <p class="property--price">$70,000</p>
                                            </div>
                                            <!-- .property-info end -->
                                            <div class="property--features">
                                                <ul class="list-unstyled mb-0">
                                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                                    <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                                    <li><span class="feature">Area:</span><span class="feature-num">200 sq ft</span></li>
                                                </ul>
                                            </div>
                                            <!-- .property-features end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- .property item end -->

                                <!-- .property-item #6 -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="property-item">
                                        <div class="property--img">
                                            <a href="property-single-gallery.html">
                                                <img src="{{ asset('images/properties/7.jpg')}}" alt="property image" class="img-responsive">
								            </a>
                                            <span class="property--status">For Sale</span>
                                        </div>
                                        <div class="property--content">
                                            <div class="property--info">
                                                <h5 class="property--title">House in Miami Town</h5>
                                                <p class="property--location">415 E North Water, Miami 60611</p>
                                                <p class="property--price">$210,000</p>
                                            </div>
                                            <!-- .property-info end -->
                                            <div class="property--features">
                                                <ul class="list-unstyled mb-0">
                                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                                    <li><span class="feature">Area:</span><span class="feature-num">1370 sq ft</span></li>
                                                </ul>
                                            </div>
                                            <!-- .property-features end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- .property item end -->
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-50">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #properties-grid  end  -->

        <!-- cta #1
============================================= -->
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section">
                <img src="{{ asset('images/cta/bg-1.jpg')}}" alt="Background">
            </div>
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
    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script src="assets/js/plugins/jquery.gmap.min.js"></script>
    <script src="assets/js/map-addresses.js"></script>
    <script src="assets/js/map-custom.js"></script>
</body>


<!-- Mirrored from demo.zytheme.com/lalan/properties-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 22:09:25 GMT -->
</html>
