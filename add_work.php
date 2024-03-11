<?php
include("user_header.php");
if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('user_login.php?msg=Please Login to access Page.')</script>";
}
?>
<div class = "container text-capitalize mt-3 mb-5">
    <h1 class="text-center mt-3">Add Your Work</h1>
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
                    <input type="text" name="title" placeholder="Enter Tilte" required="" class="form-control">
                </div>
            </div>
            <div class="row  my-3">
                <div class="col-md d-flex justify-content-center">
                    <input type="file" name="image" placeholder="Choose file" required="" class="form-control">
                </div>
            </div>
            <div class="row  my-3">
                <div class="col-md d-flex justify-content-center">
                    <textarea name="description" placeholder="Enter Description" required="" class="form-control"></textarea>
                </div>
            </div>
            <div class="row  my-3">
                <div class="col-md-4 "></div>
                <div class="col-md-4"><button class="btn btn-danger form-control" name="submit_in">Add</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['submit_in'])){
$title=$_POST["title"];
$description=$_POST["description"];
$email=$_SESSION["email"];
$image=$_FILES["image"];
$prename=$image["name"];
$path=$image["tmp_name"];
$new_name=rand().$prename;
move_uploaded_file($path,"cate_image/".$new_name);
include("config.php");
$query="INSERT into `work`(`model_email`,`title`,`description`,`work_file`)VALUES('$email','$title','$description','$new_name')";
$result=mysqli_query($connect,$query);
if($result>0){
    echo "<script>window.location.assign('add_work.php?msg=Added successfully')</script>";
}
else
{
    echo "<script>window.location.assign('add_work.php?msg=Error while added')</script>";
}
}

?>


<?php
include("footer.php");
?>