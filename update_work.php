<?php
$id=$_GET['id'];
include("config.php");
$query="SELECT * from `work` where `id`='$id' ";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_array($result);
?>
<?php
include("user_header.php");
?>
<div class = "container text-capitalize mt-3 mb-5">
    <h1 class="text-center mt-3">Update Work</h1>
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
                    <input type="text" name="title" placeholder="Enter Tilte" required="" class="form-control" value="<?php echo $data['title']?>">
                </div>
            </div>
            <div class="row  my-3">
                <div class="col-md d-flex justify-content-center">
                    <input type="file" name="image" placeholder="Choose file" class="form-control">
                    <input type="hidden" name="hidden_img" value="<?php echo $data['work_file']?>">
                </div>
            </div>
            <div class="row  my-3">
                <div class="col-md d-flex justify-content-center">
                    <textarea name="description" placeholder="Enter Description" required="" class="form-control"><?php echo $data['description']?></textarea>
                </div>
            </div>
            <div class="row  my-3">
                <div class="col-md-4 "></div>
                <div class="col-md-4"><button class="btn btn-danger form-control" name="submit_in">UPDATE</button>
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
    if($_FILES["image"]["name"]){
        $image=$_FILES["image"];
        $prename=$image["name"];
        $path=$image["tmp_name"];
        $new_name=rand().$prename;
        move_uploaded_file($path,"cate_image/".$new_name);
    }
    else{
        $new_name=$_POST["hidden_img"];
    }
    include("config.php");
    $query="UPDATE `work` set `title`='$title', `work_file`='$new_name',`description`='$description' where `id`='$id'";
    $result=mysqli_query($connect,$query);
    if($result>0){
        echo "<script>window.location.assign('view_work.php?msg=Updated successfully')</script>";
    }
    else
    {
        echo "<script>window.location.assign('view_work.php?msg=Error while updating')</script>";
    }
}

?>


<?php
include("footer.php");
?>