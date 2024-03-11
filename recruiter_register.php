
<?php
   include("header.php");?>
    <h1 class="text-center mt-3">Recruiter Sign In</h1>
<div class = "container text-capitalize mt-3 mb-5">

     <div class=" row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <form method="post">
        <div class="row">
            <div class="col-md-6 my-2">
                <input type="name" name="username" placeholder="Enter your name" class="form-control" required="">
            </div>
            <div class="col-md-6 my-2">
                <input type="input" pattern="[7-9]{1}[0-9]{9}" name="contact" placeholder="Enter contact no." class="form-control" required="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 my-2">
                <input type="email"  pattern="[a-z0-9._]+@+[a-z]+.com" name="email" placeholder="Enter email" class="form-control" required="">
            </div>
            <div class="col-md-6 my-2">
                <input type="password" name=" password" placeholder=" Enter password"  class="form-control" max="8" min="6" required="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 my-2">
                <input type="text" name="address" placeholder="Enter address" required="" class="form-control">
            </div>
            <div class="col-md-6 my-2">
                <input type="text" name="company_name" placeholder="Enter Your Company Name" required="" class="form-control">
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 my-2">
                <textarea type="text"name="company_details" placeholder="Write about your company" required="" class="form-control"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-2">
                <button class="form-control btn btn-danger" name="submit_btn">Submit</button>
            </div>
        </div>
    </div>
</form>

     <div class="col-md-4"></div>
</div>

     </div>
     
     <?php
      include("footer.php");
      ?>    
      <?php
      if(isset($_POST["submit_btn"])){
            $username=$_POST["username"];
            $contact=$_POST["contact"];
            $email=$_POST["email"];
            $password=md5($_POST["password"]);
            $address=$_POST["address"];
            $company_details=$_POST["company_details"];
            $company_name=$_POST["company_name"];
            include("config.php");
            $query="INSERT INTO `recruiter`( `name`, `email`, `password`, `contact`, `address`, `company_name`, `company_details`) VALUES ('$username','$email','$password','$contact','$address','$company_name','$company_details')";
            $result=mysqli_query($connect,$query);
          
            if($result>0){
                echo "<script>window.location.assign('recruiter_login.php?msg=Registered successfully')</script>";
            }
            else
            {
                echo "<script>window.location.assign('recruiter_register.php?msg=Error while Registering')</script>";
            }
      }
      ?>
