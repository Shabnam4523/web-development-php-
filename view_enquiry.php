<?php
include("admin_header.php");
?>
<div class="container table-responsive my-5">
    <h1 class="my-3 text-center">View Enquiry</h1>
<?php
    if(isset($_GET["msg"])){
        echo "<div class='alert alert-info'>",$_GET["msg"],"</div>";
    }
    ?>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            
        </tr>
        <?php
        include("config.php");
        $query= "SELECT * from `enquiry` order by `id` desc";
        //echo $query;
        $result=mysqli_query($connect,$query);
        //print_r($result);
        $sno=1;
        while($data=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $sno ?></td>
                <td><?php echo $data['name']?></td>
                <td><?php echo $data['email']?></td>
                <td><?php echo $data['subject']?></td>
                <td><?php echo $data['message']?></td>
              
              
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
