<?php
include("admin_header.php");
?>
<div class = "container text-capitalize mt-3 mb-5">
    <h1 class="text-center mt-3">Add Category</h1>
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
                    <input type="text" name="cat_name" placeholder="Enter category" required="" class="form-control">
                </div>
            </div>
            <div class="row  my-3">
                <div class="col-md d-flex justify-content-center">
                    <input type="file" name="image" placeholder="Choose file" required="" class="form-control">
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
$catname=$_POST["cat_name"];
$image=$_FILES["image"];
$prename=$image["name"];
$path=$image["tmp_name"];
$new_name=rand().$prename;
move_uploaded_file($path,"cate_image/".$new_name);
include("config.php");
$query="INSERT into `category`(`name`,`image`)VALUES('$catname','$new_name')";
$result=mysqli_query($connect,$query);
if($result>0){
    echo "<script>window.location.assign('add_category.php?msg=Added successfully')</script>";
}
else
{
    echo "<script>window.location.assign('add_category.php?msg=Error while added')</script>";
}
}

?>


<?php
include("footer.php");
?>