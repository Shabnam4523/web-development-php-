<?php
include("user_header.php");
if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('user_login.php?msg=Please Login to access Page.')</script>";
}
?>
<div class="container table-responsive my-5">
<h1 class="my-3 text-center">View Work</h1>
<?php
    if(isset($_GET["msg"])){
        echo "<div class='alert alert-info'>",$_GET["msg"],"</div>";
    }
?>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Sno</th>
            <th>Title</th>
            <th>Link</th>
            <th>Description</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        include("config.php");
        $query= "SELECT * from `work` where `model_email`='$_SESSION[email]'";
        //echo $query;
        $result=mysqli_query($connect,$query);
        //print_r($result);
        $sno=1;
        while($data=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $sno ?></td>
                <td><?php echo $data['title']?></td>
                <td><a href="cate_image/<?php echo $data['work_file']?>">Watch</a></td>
                <td><?php echo $data['description']?></td>
                <td><a href="update_work.php?id=<?php echo $data['id']?>" class="btn btn-success">
                    <i class=" bi bi-pencil-square"></i></a>
                </td>         
                <td><a href="delete_work.php?id=<?php echo $data['id'] ?>" class ="btn btn-danger">  
                <i class="bi bi-trash"></i></a>
                 </td> 
            </tr>
            <?php
            $sno++;
        }
        ?>
    </table>
</div>
<?php
include("footer.php");
?>
