
<?php
   include("header.php");?>
    <h1 class="text-center mt-3">User Registration</h1>
<div class = "container text-capitalize mt-3 mb-5">

     <div class=" row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <form enctype="multipart/form-data" method="post">
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
                <input type="email" name="email" placeholder="Enter email" class="form-control" required="">
            </div>
            <div class="col-md-6 my-2">
                <input type="password" name=" password" placeholder=" Enter password" max="8" min="6" class="form-control" required="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 my-2">
                <input type="text" name="city" placeholder="Enter city" required="" class="form-control">
            </div>
            <div class="col-md-6 my-2">
                <input type="file" name="image" placeholder="Enter Your Image" required="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 my-2">
                <input type="number" min="18" max="100" name="age" placeholder="Enter Age" required="" class="form-control">
            </div>
            <div class="col-md-6 my-2">
                <input type="number" min="50" max="300" name="height" placeholder="Enter height in inches" required="" class="form-control">
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6 ">
                <div class="border pb-1 pt-2 ps-3 rounded-2 my-2"  style="box-sizing: border-box;width:99%;">
                    <label class="pe-3">Gender</label>
                    <input type="radio" value="male" name="gender"required="" class="form-check-input"><span class="ps-2">Male</span>
                    <input type="radio" value="female"  name="gender"required="" class="form-check-input"><span class="ps-2">Female</span>
                    <input type="radio" value="others"  name="gender"required="" class="form-check-input"><span class="ps-2">Others</span>
                </div>
            </div>
            <div class="col-md-6 my-2">
                <select class="form-control" name="category" required>
                    <option value="" disabled selected>Choose Category</option>
                    <?php
                    include("config.php");
                    $query1= "SELECT * from `category`";
                    $result1=mysqli_query($connect,$query1);
                    while($data1=mysqli_fetch_array($result1)){
                        ?>
                    <option><?php echo $data1['name']?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row ">
            <!-- <div class="col-md-6 ">
                <select name="social_media" class="form-control multi-select" multiple>
                    <option value="" disabled selected>Choose social media you are active at</option>
                    <option>Instagram</option>
                    <option>Facebook</option>
                    <option>LinkedIn</option>
                    <option>YouTube</option>
                    <option>Snapchat</option>
                    <option>Threads</option>
                    <option>Others</option>
                </select>
            </div> -->
            <div class="col-md-6 my-2">
                <input type="text"name="social_link" placeholder="Enter social media link" required="" class="form-control">
            </div>
            <div class="col-md-6 my-2">
                <textarea type="text"name="description" placeholder="Write about yourself" required="" class="form-control" rows="1"></textarea>
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
      if(isset($_POST["submit_btn"])){
            $username=$_POST["username"];
            $contact=$_POST["contact"];
            $email=$_POST["email"];
            $category=$_POST["category"];
            $password=md5($_POST["password"]);
            $city=$_POST["city"];
            $height=$_POST["height"];
            $age=$_POST["age"];
            $social_link=$_POST["social_link"];
            $description=$_POST["description"];
            $gender=$_POST["gender"];
            $image=$_FILES["image"];
            $prename=$image["name"];
            $path=$image["tmp_name"];
            $new_name=rand().$prename;
            move_uploaded_file($path,"cate_image/".$new_name);
            include("config.php");
            $query="INSERT INTO `models`(`model_name`, `email`, `password`, `contact`, `image`, `description`, `gender`,`city`, `category`, `height`, `age`, `social_link`) VALUES ('$username','$email','$password','$contact','$new_name','$description','$gender','$city','$category','$height','$age','$social_link')";
            $result=mysqli_query($connect,$query);
            if($result>0){
                echo "<script>window.location.assign('user_login.php?msg=Registered successfully')</script>";
            }
            else
            {
                echo "<script>window.location.assign('user_register.php?msg=Error while Registering')</script>";
            }
      }
      ?>
      <?php
      include("footer.php");
      ?>  
