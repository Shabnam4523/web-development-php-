<?php
include("admin_header.php");
?>
<div class="container table-responsive my-5">
<h1 class="my-3 text-center">View Category</h1>
<?php
    if(isset($_GET["msg"])){
        echo "<div class='alert alert-info'>",$_GET["msg"],"</div>";
    }
    ?>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Sno</th>
            <th>Category name</th>
            <th>Category image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        include("config.php");
        $query= "SELECT * from `category`";
        //echo $query;
        $result=mysqli_query($connect,$query);
        //print_r($result);
        $sno=1;
        while($data=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $sno ?></td>
                <td><?php echo $data['name']?></td>
                <td><img src="cate_image/<?php echo $data['image']?>" style="height :200px; width :200px;"></td>
                <td><a href="update_category.php?id=<?php echo $data['id']?>" class="btn btn-success">
                    <i class=" bi bi-pencil-square"></i></a>
                </td>         
                <td><a href="delete_category.php?id=<?php echo $data['id'] ?>" class ="btn btn-danger">  
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
