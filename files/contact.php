<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php 
 include('head.php');
    ?>
</head>

<body>
     <?php 
 include('header.php');
    ?>


  
        <!--Page Header Start-->
        <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            <div class="page-header-shape-1"></div>
            <div class="page-header-shape-2"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>.</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                   
                    <h2 class="section-title__title">Write us a message</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="insert.php"  method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Phone number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write Message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn faqs-contact__btn"><span>Send a
                                                message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Contact Page Google Map Start-->
        <section class="contact-page-google-map">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227822.55035627162!2d80.8024271802209!3d26.84862299412667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1646093837773!5m2!1sen!2sin" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page Google Map End-->

        <!--Get in Touch Start-->
        <section class="get-in-touch">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-in-touch__img wow fadeInLeft" data-wow-duration="1500ms">
                            <img src="assets/images/resources/get-in-touch-img.jpg" alt="">
                            <div class="get-in-touch__img-shapes">
                                <div class="get-in-touch__img-shape-1"></div>
                                <div class="get-in-touch__img-shape-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="get-in-touch__right">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">Get in touch with the Codelok Technology</h2>
                            </div>
                            <div class="get-in-touch__locations">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="get-in-touch__locations-left">
                                            <p class="get-in-touch__locations-text"> If you have any query related to services you can fill the form we will contact you as soon as possible or  visite our office.
                                            </p>
                                            <h3 class="odometer get-in-touch__locatins-count" data-count="100">00</h3>
                                            <h4 class="get-in-touch__locatins-count-text">Projects has been completed
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="get-in-touch__locations-right">
                                            <div class="get-in-touch__locations-carousel owl-theme owl-carousel">
                                                <div class="get-in-touch__locations-single">
                                                    <div class="get-in-touch__locations-top">
                                                        <div class="get-in-touch__locations-icon">
                                                            <i class="icon-placeholder"></i>
                                                        </div>
                                                        <div class="get-in-touch__locations-title">
                                                            <h4>Lucknow</h4>
                                                        </div>
                                                    </div>
                                                    <div class="get-in-touch__locations-bottom">
                                                        <p class="get-in-touch__locations-bottom-tagline"> 12 Prime Plaza Lucknow</p>
                                                        <h3>
                                                            <a href="mailto:needhelp@moniz.com"
                                                                class="get-in-touch__locations-mail">info@codelok.com</a>
                                                            <a href="tel:92-666-888-000"
                                                                class="get-in-touch__locations-phone">7317657500</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="get-in-touch__locations-single">
                                                    <div class="get-in-touch__locations-top">
                                                        <div class="get-in-touch__locations-icon">
                                                            <i class="icon-placeholder"></i>
                                                        </div>
                                                        <div class="get-in-touch__locations-title">
                                                            <h4>Shahjahanpur</h4>
                                                        </div>
                                                    </div>
                                                    <div class="get-in-touch__locations-bottom">
                                                        <p class="get-in-touch__locations-bottom-tagline">Saheed Park Shahjahanpur</p>
                                                        <h3>
                                                            <a href="mailto:needhelp@moniz.com"
                                                                class="get-in-touch__locations-mail">info@codelok.com</a>
                                                            <a href="tel:92-666-888-000"
                                                                class="get-in-touch__locations-phone">7983659469</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <?php 
 include('footer.php');
    ?>
          <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/twentytwenty/twentytwenty.js"></script>
    <script src="assets/vendors/twentytwenty/jquery.event.move.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
    <!-- template js -->
    <script src="assets/js/moniz.js"></script>

</body>

</html>