<?php
session_start();
$type=$_SESSION["user_type"];
session_unset();
if($type=="admin"){
    echo "<script>window.location.assign('admin_login.php?msg=Logout Successfully!!')</script>";
}
else if($type=="recruiter"){
    echo "<script>window.location.assign('recruiter_login.php?msg=Logout Successfully!!')</script>";
}
else{
    echo "<script>window.location.assign('user_login.php?msg=Logout Successfully!!')</script>";
}
?>