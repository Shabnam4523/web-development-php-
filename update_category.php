<?php
$id=$_GET['id'];
include("config.php");
$query="SELECT * from `category` where `id`='$id' ";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_array($result);
?>
<?php
include("header.php");
?>
<div class = "container text-capitalize mt-3 mb-5">
<h1 class="text-center mt-3">Update Category</h1>
    <div class=" row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php
            if(isset($_GET["msg"])){
                echo "<div class='alert alert-info'>",$_GET['msg'],"</div>";}

            ?> 

            <form   method="post" enctype="multipart/form-data">
                <div class="row  my-3">
                    <div class="col-md  d-flex justify-content-center">
                        <input type="text" name="cat_name" required="" class="form-control" value="<?php echo $data['name']?>" >
                    </div>
                </div>

                <div class="row  my-3">
                    <div class="col-md">
                        <input type="file"  name="image"  class="form-control">
                        <input type="hidden" value="<?php echo $data['image']?>" name="hidden_img">
                    </div>
                </div>
                <div class="row  my-3">
                    <div class="col-md-4 "></div>
                    <div class="col-md-4"><button class="btn btn-danger form-control" name="submit_in">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['submit_in'])){
$catname=$_POST["cat_name"];
if($_FILES["image"]["name"]){
$image=$_FILES["image"];
$prename=$image["name"];
$path=$image["tmp_name"];
$new_name=rand().$prename;
move_uploaded_file($path,"cate_image/".$new_name);

}
else{
    // echo "New image not selected!!";
    $new_name=$_POST["hidden_img"];
}
// echo $new_name;
include("config.php");
$query1="UPDATE `category` set `name`='$catname',`image`='$new_name' where `id`='$id'";
$result1=mysqli_query($connect,$query1);
if($result1>0){
    echo "<script>window.location.assign('view_category.php?msg=Updated Successfully')</script>";
}
else{
    echo "<script>window.location.assign('view_category.php?msg=Error while updating!! ')</script>";
}
}

?>
<?php
include("footer.php");
?>
