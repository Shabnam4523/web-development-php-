<?php
include("admin_header.php");
?>
<div class="container table-responsive my-5">
<h1 class="my-3 text-center">View Recruiters</h1>
<?php
    if(isset($_GET["msg"])){
        echo "<div class='alert alert-info'>",$_GET["msg"],"</div>";
    }
    ?>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Sno</th>
            <th>Recruiter name</th>
            <th>Company Name</th>
            <th>Company Details</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        include("config.php");
        $query= "SELECT * from `recruiter`";
        //echo $query;
        $result=mysqli_query($connect,$query);
        //print_r($result);
        $sno=1;
        while($data=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $sno ?></td>
                <td><?php echo $data['name']?></td>
                <td><?php echo $data['company_name']?></td>
                <td><?php echo $data['company_details']?></td>
                <td><?php echo $data['contact']?></td>
                <td><?php echo $data['email']?></td>
                <td><?php echo $data['address']?></td>
                <td class="text-capitalize"><?php echo $data['status']?></td>
                <td>
                    <?php
                    if($data['status']=="In-active"){
                        ?>
                        <a href="update_status_recruiter.php?id=<?php echo $data['id']?>&status=active" class="btn btn-success">Change to Active</a>
                        <?php
                    }else{
                        ?>
                         <a href="update_status_recruiter.php?id=<?php echo $data['id']?>&status=In-active" class="btn btn-danger">Change to In-Active</a>
                        <?php
                    }
                    ?>
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
