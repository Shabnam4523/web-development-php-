<?php
$name=$_POST["username"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$password=md5($_POST["password"]);
$city=$_POST["city"];

$connect=mysqli_connect("localhost","root","","artistmuse");
$query="INSERT into `users`(`name`,`email`,`contact`,`password`,`city`)VALUES('$name','$email','$contact','$password','$city')";
$result=mysqli_query($connect,$query);
if($result>0){
   echo "<script>window.location.assign('index.php')</script>";
   
   }
   else{
      echo "<script>window.location.assign('userregister.php')</script>";
   } ?>
 