
<?php
include("header.php");?>
<div class = "container text-capitalize mt-3 mb-5">
    <h1 class="text-center mt-3">Recruiter Login</h1>
    <div class=" row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <?php
        if(isset($_GET["msg"])){
        echo "<div class='alert alert-info my-3'>",$_GET["msg"],"</div>";
        }
        ?>
        <form  method="post">
        <div class="row">
            <div class="col-md-12 my-2">
                <input type="email" name="email" placeholder="Enter email" class="form-control" required="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-2">
                <input type="password" name=" password" placeholder=" Enter password"  class="form-control" required="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-2">
                <button class="form-control btn btn-danger" name="submit_btn"> Submit</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
<?php
if(isset($_POST["submit_btn"])){
    $email=$_POST["email"];
    $password=md5($_POST["password"]);
    // echo $email, $password;
    include("config.php");
    $query="SELECT * from `recruiter` where `email`='$email' and `password`='$password' and `status`='active'";
    $result=mysqli_query($connect,$query);
    // print_r($result);
    if(mysqli_num_rows($result)>0){
        $_SESSION["email"]=$email; //session created
        $_SESSION["user_type"]="recruiter";
        echo "<script>window.location.assign('index.php')</script>";
    }
    else{
        echo "<script>window.location.assign('recruiter_login.php?msg=Invalid credentials or contact administration')</script>";
    }
}
?>
     <?php
      include("footer.php");
      ?>    
