<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Kidko/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 11:28:43 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>BBELC - <?php if ($thisPage =="home")  echo " HOME"; elseif ($thisPage =="classes")  echo " CLASSES";  elseif ($thisPage =="contact")  echo " CONTACT";  elseif ($thisPage =="about")  echo " ABOUT"; elseif ($thisPage =="testimonial")  echo " TESTIMONIAL"; elseif ($thisPage =="teachers")  echo " TEACHERS"; elseif ($thisPage =="faq")  echo " FAQ"; ?> </title>

<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link href="css/my.css" rel="stylesheet">
<link href="css/abiodun.css" rel="stylesheet">
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- search-box-layout -->
    <div class="wraper_flyout_search">
        <div class="table">
            <div class="table-cell">
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-close">
                    <span class="flyout-search-close-line"></span>
                    <span class="flyout-search-close-line"></span>
                </div>
                <div class="flyout_search">
                    <div class="flyout-search-title">
                        <h4>Search</h4>
                    </div>
                    <div class="flyout-search-bar">
                        <form role="search" method="get" action="#">
                            <div class="form-row">
                                <input type="search" placeholder="Type to search..." value="" name="s" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-box-layout end -->


    <!-- Main Header -->
    <header class="main-header style-two">

        <div class="header-top">
            <div class="container">
                <div class="inner-container clearfix">
                    <div class="header-info pull-left">
                        <ul class="info-list">
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:+234 81234567890">081234567890</a> 
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:brightbeginnings1@gmail.com">brightbeginnings1@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="outer-content pull-right">
                        <div class="login-box">
                            <i class="fas fa-user"></i>
                            <a href="#">Log in or Register</a>
                        </div>
                        <ul class="clearfix">
                            <li class="header-flyout-searchbar">
                                <i class="fa fa-search"></i>
                            </li>
                            <li><a href="shop.html"><i class="fas fa-shopping-cart"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="inner-container">
                    <!-- <div class="logo-box pull-left">
                        <figure class="logo"><a href="index-2.html"><img src="images/logo.png" alt=""></a></figure>
                    </div> -->
                    <div class="nav-outer">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                    
                            
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li <?php if ($thisPage =="home")  echo " class=\"current\""; ?> ><a href="index.php">Home</a>
                                          
                                        </li>
                                        <li <?php if ($thisPage =="about")  echo " class=\"current dropdown\"";  elseif ($thisPage =="testimonial")  echo " class=\"current dropdown\""; if ($thisPage =="teachers")  echo " class=\"current dropdown\""; elseif ($thisPage =="faq")  echo " class=\"current dropdown\""; ?> class="dropdown" ><a href="#">About</a>
                                            <ul>
                                                <li><a href="about.php">About BBELC</a></li>
                                                <li><a href="testimonial.php">Testimonials</a></li>
                                                <li><a href="teachers.php">Our Teachers</a></li>
                                                
                                                <li><a href="faq.php">Frequently Asked Questions </a></li>
                                                <!-- <li><a href="error.html">Error Page</a></li> -->
                                            </ul>
                                        </li> 
                                        <li <?php if ($thisPage =="classes")  echo " class=\"current\""; ?> ><a href="classes.php">Classes</a>
                                            
                                        </li> 
                                        <li class="logo-box">
                                            <figure class="logo"><a href="index-2.html"><img src="images/logo.png" alt=""></a></figure>
                                        </li>
                                            <li <?php if ($thisPage =="gallery")  echo " class=\"current\""; ?> ><a href="gallery.php">Gallery</a>
                                            
                                            </li> 
                                        <!-- <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="gallery.html">Our Gallery</a></li>
                                                <li><a href="teachers.html">Our Teachers</a></li>
                                                <li><a href="pricing.html">Pricing Table</a></li>
                                                <li><a href="event.html">Our Events</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Page</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>                               -->
                                        <li <?php if ($thisPage =="contact")  echo " class=\"current\""; ?> ><a href="contact.php">Contact</a>
                                            
                                            </li> 
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index-2.html"><img src="images/small-logo.png" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li <?php if ($thisPage =="home")  echo " class=\"current\""; ?> ><a href="index.php">Home</a>
                                          
                                </li>
                                <li <?php if ($thisPage =="about")  echo " class=\"current dropdown\""; elseif ($thisPage =="testimonial")  echo " class=\"current dropdown\""; elseif ($thisPage =="teachers")  echo " class=\"current dropdown\""; elseif ($thisPage =="faq")  echo " class=\"current dropdown\"";?> class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="about.php">About BBELC</a></li>
                                        <li><a href="testimonial.php">Testimonials</a></li>
                                        <li><a href="teachers.php">Our Teachers</a></li>
                                        
                                        <li><a href="faq.php">Frequently Asked Questions </a></li>
                                        <!-- <li><a href="error.html">Error Page</a></li> -->
                                    </ul>
                                </li> 
                                <li <?php if ($thisPage =="classes")  echo " class=\"current\""; ?> ><a href="classes.php">Classes</a>
                                            
                                </li> 
                                <li <?php if ($thisPage =="gallery")  echo " class=\"current\""; ?> ><a href="gallery.php">Gallery</a>
                                            
                                </li> 
                                <!-- <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="gallery.html">Our Gallery</a></li>
                                        <li><a href="teachers.html">Our Teachers</a></li>
                                        <li><a href="pricing.html">Pricing Table</a></li>
                                        <li><a href="event.html">Our Events</a></li>
                                        <li><a href="event-details.html">Event Details</a></li>
                                        <li><a href="shop.html">Shop Page</a></li>
                                        <li><a href="shop-details.html">Shop Details</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Page</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>                               -->
                                <li <?php if ($thisPage =="contact")  echo " class=\"current\""; ?> ><a href="contact.php">Contact</a>
                                            
                                </li> 
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->
<!-- 098587 -->