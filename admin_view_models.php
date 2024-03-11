<?php
include("admin_header.php");
?>
<div class="container table-responsive my-5">
<h1 class="my-3 text-center">View Models</h1>
<?php
    if(isset($_GET["msg"])){
        echo "<div class='alert alert-info'>",$_GET["msg"],"</div>";
    }
    ?>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Sno</th>
            <th>Image</th>
            <th>Model name</th>
            <th>Social Link</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
        <?php
        include("config.php");
        $query= "SELECT * from `models`";
        //echo $query;
        $result=mysqli_query($connect,$query);
        //print_r($result);
        $sno=1;
        while($data=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $sno ?></td>
                <td>
                    <img src="cate_image/<?php echo $data['image']?>" style="height:200px;">
                </td>
                <td><?php echo $data['model_name']?></td>
                <td><a href="<?php echo $data['social_link']?>">View </td>
                <td><?php echo $data['contact']?></td>
                <td><?php echo $data['email']?></td>
                <td><?php echo $data['description']?></td>
                <td class="text-capitalize"><?php echo $data['status']?></td>
                
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
