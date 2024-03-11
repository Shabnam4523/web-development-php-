<?php
$id= $_GET['id'];
include("config.php");
$query="DELETE from `work` where `id`='$id'";
$result=mysqli_query($connect,$query);
if($result>0){
    echo "<script>window.location.assign('view_work.php?msg=Deleted Successfully!!')</script>";
}
else{
    echo "<script>window.location.assign('view_work.php?msg=Error while deleting, Try again later!!')</script>";
}
?>