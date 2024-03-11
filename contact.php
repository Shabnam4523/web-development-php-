<?php
include("header.php");
?>

    <!-- contact block -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <h3 class="title-style text-center mb-5">Contact Us</h3>
            <div class="row contact-block">
                <div class="col-md-7 contact-right">
                <?php
                    if(isset($_GET["msg"])){
                        echo "<div class='alert alert-info'>",$_GET["msg"],"</div>";
                    }
                ?>
                    <form  method="post" class="signin-form">
                        <div class="input-grids">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="name" id="w3lName" placeholder="Your Name"
                                        class="contact-input" required="" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="email" id="w3lSender" placeholder="Your Email"
                                        class="contact-input" required="" />
                                </div>
                            </div>
                            <input type="text" name="subject" id="subject" placeholder="Subject"
                                class="contact-input" required="" />
                          
                        </div>
                        <div class="form-input">
                            <textarea name="message" id="w3lMessage" placeholder="Type your message here"
                                required=""></textarea>
                        </div>
                        <div class="text-start">
                            <button class="btn btn-style btn-style-3" name="submit_in">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 ps-lg-5 mt-md-0 mt-5">
                    <div class="contact-left">
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Company Address</h6>
                                    <p>artistmuse, 10001, CT group of institute</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+1(21) 234 4567">9815461646</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center me-3">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Customer Support</h6>
                                    <p><a href="mailto:info@support.com" class="mail">info@support.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    
    <!-- //contact block -->
    <?php
    if(isset($_POST["submit_in"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];
        include("config.php");
        $query="INSERT into `enquiry`(`name`,`email`,`subject`,`message`)VALUES('$name','$email','$subject','$message')";
        $res=mysqli_query($connect,$query);
        if($res>0){
            echo "<script>window.location.assign('contact.php?msg=Added Successfully')</script>";
        }
        else{
            echo "<script>window.location.assign('contact.php?msg=Error!!Try Again')</script>";
        }
    }
    ?>
<?php
include("footer.php");
?>
   
                   
              
   