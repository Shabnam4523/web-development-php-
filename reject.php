<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
   include('config.php');
   $query="UPDATE `booking` SET `status`='Rejected' WHERE `id`=$id";
   $res=mysqli_query($connect,$query);
   if($res>0){
       echo "<script>window.location.assign('view_booking.php?msg=Rejected Successfully')</script>";
   }
   else{
       echo "<script>window.location.assign('view_booking.php?msg=Error!!Try Again')</script>";
   }
}

?>