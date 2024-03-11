<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artist Muse</title>
    <!-- Google fonts -->
    <link href=//fonts.googleapis.com/css2?family=Londrina+Outline&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- top header -->
    <section class="w3l-top-header">
        <div class="container">
            <div class="top-content-w3ls d-flex align-items-center justify-content-between">
                <div class="top-headers">
                    <ul>
                        <li>
                            <p class="d-md-block d-none">Have any question ?</p>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:+1(21) 234 4567">9815461646</a>
                        </li>
                        <li class="me-0">
                            <i class="fa fa-envelope"></i><a href="mailto:mail@example.com">artistmuse@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="top-headers top-headers-2">
                    <ul>
                        <li>
                            <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                        </li>
                        <li>
                            <a href="#twitter"><span class="fab fa-twitter"></span></a>
                        </li>
                        <li>
                            <a href="#instagram"><span class="fab fa-instagram""></span></a>
                        </li>
                        <li class=" me-0">
                                    <a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //top header -->
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                    <i class="fas  me-1"></i>Artistmuse
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                       
                       <?php
                       if(isset($_SESSION["email"])){
                           if($_SESSION["user_type"]=="user"){
                       ?>
                        <li class="nav-item">
                           <a class="nav-link" aria-current="page" href="index.php">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="about.php">About Us</a>
                       </li>
                       <div class="dropdown">
                           <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Work
                           </a>
                           <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="add_work.php">Add</a></li>
                               <li><a class="dropdown-item" href="view_work.php">Manage</a></li>
                           </ul>
                       </div>
                       <li class="nav-item">
                           <a class="nav-link" href="view_all_work.php">Feed</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="view_all_user.php">Profiles</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="view_recruiters.php">Recruiters</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="view_booking.php">Booking</a>
                       </li>
               
                       <li class="nav-item">
                           <a class="nav-link" href="logout.php">Logout</a>
                       </li>
                       <?php
                       }else if($_SESSION["user_type"]=="admin"){
                           ?>
                           <li class="nav-item">
                           <a class="nav-link" aria-current="page" href="admin_index.php">Home</a>
                       </li>
                       <div class="dropdown">
                           <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Category
                           </a>
                           <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="add_category.php">Add</a></li>
                               <li><a class="dropdown-item" href="view_category.php">Manage</a></li>
                           </ul>
                       </div>
                       <li class="nav-item">
                           <a class="nav-link" href="admin_view_models.php">Models</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="admin_view_recruiters.php">Recruiters</a>
                       </li>
               
                       <li class="nav-item">
                           <a class="nav-link" href="view_enquiry.php">Enquiry</a>
                       </li>
               
                       <li class="nav-item">
                           <a class="nav-link" href="logout.php">Logout</a>
                       </li>
                       <?php
                       }
                       else{
                           ?>
                           <li class="nav-item">
                           <a class="nav-link" aria-current="page" href="index.php">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="recruiter_all_work.php">Feed</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="recruiter_all_user.php">Profiles</a>
                       </li>
                       <!-- <li class="nav-item">
                           <a class="nav-link" href="view_recruiters.php">Recruiters</a>
                       </li> -->
                       <li class="nav-item">
                           <a class="nav-link" href="recruiter_view_booking.php">Booking</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="logout.php">Logout</a>
                       </li>
                           <?php
                       }
                       }else{
                           ?>
                            <li class="nav-item">
                           <a class="nav-link" aria-current="page" href="index.php">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="about.php">About Us</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="view_recruiters.php">Recruiter</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link " href="contact.php">Contact</a>
                       </li>
                       <div class="dropdown nav-item">
                           <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Register
                           </a>
                           <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="user_register.php">User</a></li>
                               <li><a class="dropdown-item" href="recruiter_register.php">Recruiter</a></li>
                           </ul>
                       </div>
                       <div class="dropdown nav-item">
                           <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Login
                           </a>
                           <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="user_login.php">User</a></li>
                               <li><a class="dropdown-item" href="recruiter_login.php">Recruiter</a></li>
                           <?php
                       }
                       ?>
                   </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- banner section -->
    <div class="slider">
        <div class="slide current">
            <div class="bg-layer">
                <div class="content">
                    
                    <h3>DANCER</h3>
                    <a href="about.php" class="btn btn-style mt-4">Learn More</a>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="bg-layer">
                <div class="content">
                    
                    <h3>MODEL</h3>
                    <a href="about.php" class="btn btn-style mt-4">Learn More</a>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="bg-layer">
                <div class="content">
                    
                    <h3>SINGER</h3>
                    <a href="about.php" class="btn btn-style mt-4">Learn More</a>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="bg-layer">
                <div class="content">
                    
                    <h3>SOCIAL MEDIA INFLUENCER</h3>
                    <a href="about.php" class="btn btn-style mt-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <button id="prev"><i class="fas fa-arrow-left"></i></button>
        <button id="next"><i class="fas fa-arrow-right"></i></button>
    </div>
    <!-- //banner section -->

    <!-- about section -->
    <section class="w3l-about py-5" id="about">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 section-width pe-xl-5 pt-lg-4">
                    <h3 class="title-style">artistmuse</span></h3>
                    <p class="mt-4">"welcome to our innovative platform thats  provide a dynamic space for aspiring models,singers,dancers and artists to shine 
                        with an intuitive interace , users can easily upload their portfolios,showcasing their talent through pictures and detailed
                    resumes.</p>
                    <p class="mt-4 pb-dm-3">this unique fashion of design and functionality aims to empower individual in the entertainment industry,
                        fostering connection and opening doors to exciting opportunities. join us as we redefine the way talent is discovered and celebrated."</p>
                    <a href="about.php" class="btn btn-style mt-5"> Know more about us</a>
                </div>
                <div class="col-lg-6 history-info mt-lg-0 mt-5 pt-md-4 pt-2">
                    <div class="position-relative img-border">
                        <img src="assets/images/modelm5.jpg" class="img-fluid radius-image" alt="video-popup">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    
    <!-- homeblock1 section -->
    <section class="w3l-homeblock1 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h3 class="title-style">Register to <span>artistmuse</span> Try yourself</h3>
                    <h6 class="sub-title mt-md-4 mt-md-5 mt-4">The worlds is yours <br>Let the magic Begins.</h6>
                    <a href="about.php" class="btn btn-style mt-lg-5 mt-4">View Classes</a>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-5 ps-lg-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="column-w3-img position-relative">
                                <a href="#image"><img src="assets/images/socialmedia4.jpg" alt=""
                                        class="radius-image img-fluid"></a>
                            </div>
                            <div class="column-w3-img position-relative mt-4">
                                <a href="#image"><img src="assets/images/model3.jpg" alt=""
                                        class="radius-image img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="column-w3-img position-relative">
                                <a href="#image"><img src="assets/images/kathak1.jpg" alt=""
                                        class="radius-image img-fluid"></a>
                            </div>
                            <div class="column-w3-img position-relative mt-4">
                                <a href="#image"><img src="assets/images/modelm1.jpg" alt=""
                                        class="radius-image img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //homeblock1 section -->

    <!-- video section 
    <section class="w3l-video-sec" id="video">
        <div class="container">
            <div class="row w3l-video">
                <div class="col-12">
                    <div class="videow3-right">
                        <div class="w3l-index5 py-5">
                            <div class="history-info align-self text-center py-5">
                                <div class="position-relative py-5">
                                    <a href="#small-dialog1"
                                        class="popup-with-zoom-anim play-view text-center position-absolute">
                                        <span class="video-play-icon">
                                            <span class="fa fa-play"></span>
                                        </span>
                                    </a>
                                     dialog itself, mfp-hide class is required to make dialog hidden 
                                    <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                                        <iframe src="https://player.vimeo.com/video/12881072?h=9f0439706"
                                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    video section -->

    <!-- join section 
    <section class="w3l-whyblock py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="assets/images/about4.jpg" alt="" class="img-fluid radius-image">
                </div>
                <div class="col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">
                    <h3 class="title-style mb-4">Artistmuse</span></h3>
                    <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                    <div class="two-grids mt-5">
                        <div class="grids_info">
                            <i class="fas fa-volume-up"></i>
                            <div class="detail">
                                <h4>Exclusive Releases</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit.</p>
                            </div>
                        </div>
                        <div class="grids_info mt-xl-5 mt-4">
                            <i class="fas fa-icons"></i>
                            <div class="detail">
                                <h4>Full DJ Sets & Podcasts</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     //join section -->

    <!-- subscribe form section -->
    <section class="w3l-forms-9 pt-5 pb-lg-4" id="newsletter">
        <div class="container">
            <div class="main-midd text-center mx-auto" style="max-width:700px;">
                <h3 class="title-style mb-2">Subscribe to our daily <span>updates!</span></h3>
                <p class="">Enter your email address to register to our newsletter</p>

                <div class="main-midd-2 mt-md-5 mt-4 mx-auto" style="max-width:600px;">
                    <form action="#url" method="GET" class="d-sm-flex rightside-form">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                        <button class="btn btn-style" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //subscribe form section -->

    <!-- button with content section -->
    <section class="w3l-button-sec py-5">
        <div class="container py-5">
            <div class="w3-midhny-sec p-5">
                <div class="row align-items-center p-md-4">
                    <div class="col-xl-8 col-lg-9">
                        <div class="title-content-two pe-lg-5">
                            <h3 class="title-w3l mb-md-1 mb-4 d-md-flex align-items-center">Contact Us Now!
                                <a class="mt-md-0 mt-2" href="tel:+ 12 123 456 789">9815461646</a> </h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 mt-lg-0 mt-sm-5 mt-4 text-lg-end">
                        <a href="contact.php" class="btn btn-style ">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //button with content section -->

    <!-- footer -->
    <footer class="w3l-footer9">
        <div class="footer-inner-main py-5">
            <div class="container pt-lg-5 pt-md-4 pt-2 pb-2">
                <div class="row">
                    <div class="col-lg-4 sub-one-left pe-lg-5">
                        <h6>About </h6>
                        <p class="footer-phny">Join us on this exciting journey as we reshape the way talent is discovered and celebrated in the digital age.<br>
            Let your creativity soar , your dreams take flights, and your talent shine brightly on Artistmuse!"</p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                </li>
                                <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                                </li>
                                <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                </li>
                                <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 "></div>
                    <div class="col-lg-2 col-6 sub-two-right mt-lg-0 mt-5">
                        <h6>Links</h6>
                        <ul>
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="about.php">About Us</a> </li>
                            <li><a href="classes.php">Classes</a> </li>
                            <li><a href="#blog">Blog Posts</a> </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 "></div>
                    <div class="col-lg-2 col-6 sub-two-right mt-lg-0 mt-5">
                        <h6>Explore</h6>
                        <ul>
                            <li><a href="#support">Support</a></li>
                            <li><a href="#privacypolicy">Privacy policy</a></li>
                            <li><a href="#offers">Offers</a></li>
                            <li><a href="#support">Support</a></li>
                            <li><a href="#career">Careers</a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="copyright-footer mt-lg-5 mt-sm-4 mt-2 text-center">
                    <p class="copy-text">&copy; 2023 artistmuse <a
                            href="https://w3layouts.com/" target="_blank"> artistmuse</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- banner slider -->
    <script>
        const slides = document.querySelectorAll(".slide");
        const nextButton = document.getElementById("next");
        const prevButton = document.getElementById("prev");
        const auto = true;
        const intervalTime = 5000;
        let slideInterval;

        const nextSlide = () => {
            const current = document.querySelector(".current");
            current.classList.remove("current");
            if (current.nextElementSibling) {
                current.nextElementSibling.classList.add("current");
            } else {
                slides[0].classList.add("current");
            }
        };

        const prevSlide = () => {
            const current = document.querySelector(".current");
            current.classList.remove("current");
            if (current.previousElementSibling) {
                current.previousElementSibling.classList.add("current");
            } else {
                slides[slides.length - 1].classList.add("current");
            }
        };

        nextButton.addEventListener("click", () => {
            nextSlide();
            if (auto) {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, intervalTime);
            }
        });
        prevButton.addEventListener("click", () => {
            prevSlide();
            if (auto) {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, intervalTime);
            }
        });

        if (auto) {
            slideInterval = setInterval(nextSlide, intervalTime);
        }
    </script>
    <!-- //banner slider -->

    <!-- video popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //video popup -->
    
    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>