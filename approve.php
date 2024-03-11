<?php
$id=$_GET['id'];
?>
<?php
include("user_header.php");
?>
<div class = "container text-capitalize mt-3 mb-5">
    <h1 class="text-center mt-3">Add Price</h1>
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
                    <input type="text" name="price" placeholder="Enter price" required="" class="form-control">
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
    $price=$_REQUEST["price"];
    include('config.php');
    $query="UPDATE `booking` SET `status`='Accepted',`price`='$price' WHERE `id`=$id";
    $res=mysqli_query($connect,$query);
    if($res>0){
        echo "<script>window.location.assign('view_booking.php?msg=Accepted Successfully')</script>";
    }
    else{
        echo "<script>window.location.assign('view_booking.php?msg=Error!!Try Again')</script>";
    }
}

?>

