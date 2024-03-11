<?php
include("recruiter_header.php");
if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('recruiter_login.php?msg=Please Login to access Page.')</script>";
}
if($_REQUEST["email"]){
    $model_email=$_REQUEST["email"];
}
?>
<div class = "container text-capitalize mt-3 mb-5">
    <h1 class="text-center mt-3">Book Model</h1>
    <div class=" row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <?php
        if(isset($_GET["msg"])){
            echo "<div class='alert alert-info'>",$_GET['msg'],"</div>";}

        ?> 
        <form method="post" enctype="multipart/form-data">
            <div class="row  my-3">
                <div class="col-md  d-flex justify-content-center">
                    <input type="text" name="message" placeholder="Enter Message" required="" class="form-control">
                </div>
            </div>
            <div class="row  my-3">
                <div class="col-md d-flex justify-content-center">
                    <input type="date" name="date" placeholder="Choose Date" required="" class="form-control">
                </div>
            </div>
            <div class="row  my-3">
                <div class="col-md d-flex justify-content-center">
                    <textarea name="details" placeholder="Enter details" required="" class="form-control"></textarea>
                </div>
            </div>
            <div class="row  my-3">
                <div class="col-md-4 "></div>
                <div class="col-md-4"><button class="btn btn-danger form-control" name="submit_in">Book</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['submit_in'])){
$message=$_POST["message"];
$details=$_POST["details"];
$date=$_POST["date"];
$email=$_SESSION["email"];
include("config.php");
$query="INSERT into `booking`(`model_email`,`recruiter_email`,`date_of_booking`,`details`,`message`)VALUES('$model_email','$email','$date','$details','$message')";
$result=mysqli_query($connect,$query);
if($result>0){
    echo "<script>window.location.assign('recruiter_view_booking.php?msg=Added successfully')</script>";
}
else
{
    echo "<script>window.location.assign('book_model.php?msg=Error while adding&error=$model_email')</script>";
}
}

?>


<?php
include("footer.php");
?>