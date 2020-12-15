<?php $thisPage ="faq"; 
include "include/head.php" ?>


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>FAQ’S</h1>
            </div>
        </div>
    </section>
    <section class="faq-page-section">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-y"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>FAQ HUB</h5>
                            <h1>Frequntly Ask Questions</h1>
                        </div>
                        <div class="text">
                            <p>We've provided some of our child care and preschool frequently asked questions below. Please feel free to contact us via telephone or our feedback form if you need further information.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 faq-column">
                    <div class="faq-content">
                        <ul class="accordion-box active-block">
                            <li class="accordion block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. What ages of children do you accept?</h4>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Here at BBELC, We accept children from ages 6 months to 6 years.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. What are your hours of operation?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We operate from 8am to 6pm on weekdays.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Do you have daily drop offs</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Yes! We provide daily drop-offs.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Do you provide meals and snacks?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text"> No we do not, parents/guardians are expected to provide the meals of their wards</div>
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
                                        <div class="text">Yes it is. Outdoor play is supervised at all times.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-style-two centred sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 inner-column">
                    <div class="inner-box">
                        <div class="sec-title">
                            <h5>Contact</h5>
                            <h1>Ask Us A Question</h1>
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
    <?php 
include "include/cta.php" ?>
    <?php 
include "include/footer.php" ?>