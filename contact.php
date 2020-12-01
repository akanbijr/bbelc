<?php $thisPage ="contact"; 
include "include/head.php" ?>
<link rel="stylesheet" type="text/css" href="css/abiodun.css">
<head>
<meta name="description" content="Visit us at C14 Sanctuary Court, Zilley Aggrey Crescent, Karmo, Abuja.">
</head>
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Contact</h1>
                <!-- <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul> -->
            </div>
        </div>
    </section>
    <!-- contact-info-section -->
    <section class="contact-info-section sec-pad centred">
        <div class="container">
            <div class="sec-title">
                <h5>Contact Us</h5>
                <h1>Get In Touch</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-address"></i></div>
                            <h3>Our Location</h3>
                            <div class="text">C14, Sanctuary Court Estate,<br/>Zilley Aggrey Crescent, Karmo, Abuja.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-vintage-hand-phone"></i></div>
                            <h3>Call Us On</h3>
                            <div class="text">
                                <a href="tel:08168791980">08168791980</a><br>
                                <a href="tel:09020003810">09020003810</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-mail"></i></div>
                            <h3>Email Us At</h3>
                            <div class="text">
                                <a href="mailto:info@bbelcabj.com">info@bbelcabj.com</a><br />
                                <a href="mailto:brightbeginningschool1@gmail.com">brightbeginningschool1@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->


    <!-- contact-form-section -->
    <section class="contact-form-section sec-pad">
        <div class="container">
            <div class="sec-title centred">
                <h5>Inquiries?</h5>
                <h1>Leave Us a Message</h1>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 form-column">
                    <div class="contact-form">
                        <form method="post" action="email.php" id="contact-form" class="default-form"> 
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Your Name*" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email*" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone number" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Write here message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                    <button type="submit" class="theme-btn" name="submit-form">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="google-map-section">
        <div class="map-column">
            <div class="abiodun-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126089.98770180142!2d7.343110706466544!3d9.03526671232095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e745c5c8d2f8f%3A0xe26ced609790cf3c!2sSanctuary%20Court%2C%20Hortigraph%20Estate!5e0!3m2!1sen!2sng!4v1606036662799!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
 <?php 
include "include/footer.php" ?>
