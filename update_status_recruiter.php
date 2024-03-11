<?php
$id=$_REQUEST["id"];
$status=$_REQUEST["status"];
$query="UPDATE `recruiter` set `status`='$status' where `id`='$id'";
include("config.php");
$result=mysqli_query($connect,$query);
if($result>0){
    echo "<script>window.location.assign('admin_view_recruiters.php?msg=Status Updated Successfully!!')</script>";
}
else{
    echo "<script>window.location.assign('admin_view_recruiters.php?msg=Error while updating Status!!')</script>";
}
?>