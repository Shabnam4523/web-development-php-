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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                            <i class="fa fa-envelope"></i><a href="mailto:mail@example.com">artistmuse@example.com</a>
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
                    <i class=""></i>Artistmuse
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
    
    
    <!-- inner banner -->
    <section class="inner-banner  my-5  py-5">
        <div class="w3l-breadcrumb py-lg-5">
        <div class="container  pt-5 pb-sm-4 pb-2">
                <h4 class="inner-text-title font-weight-bold pt-5"></h4>
                
            </div>
           
        </div>
    </section>
    <!-- //inner banner -->
