<?php $thisPage ="faq"; 
include "include/head.php" ?>


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>FAQ’S</h1>
                <!-- <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>About</li>
                </ul> -->
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- faq-page-section -->
    <section class="faq-page-section">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-y"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>Faq’s</h5>
                            <h1>Frequntly Ask Questions</h1>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 faq-column">
                    <div class="faq-content">
                        <ul class="accordion-box active-block">
                            <li class="accordion block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Is There a Sleep or Rtest Time?</h4>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Children in Need Armistice Day?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Is Outdoor Play Supervised?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. How are Tuition and Fees Determined?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Is Outdoor Play Supervised?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-page-section end -->


    <!-- contact-style-two -->
    <section class="contact-style-two centred sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 inner-column">
                    <div class="inner-box">
                        <div class="sec-title">
                            <h5>Contact</h5>
                            <h1>Ask A Question</h1>
                        </div>
                        <div class="form-area">
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
        </div>
    </section>
    <!-- contact-style-two -->

    <?php 
include "include/cta.php" ?>


    <?php 
include "include/footer.php" ?>