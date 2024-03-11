if($result>0){
echo "<script>window.location.assign(classes.php')</script>";

}
else{
   echo "<script>window.location.assign('userregister.php')</script>";
} ?>


if($result>0){
    echo "<script>window.location.assign('add_category.php?msg=added successfully')</script>";
}
else
{
    echo "<script>window.location.assign('add_category.php?msg=error while added')</script>";
}