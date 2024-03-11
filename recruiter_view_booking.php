<?php
include("recruiter_header.php");
if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('recruiter_login.php?msg=Please Login to access Page.')</script>";
}
?>
<div class="container table-responsive my-5">
<h1 class="my-3 text-center">View Booking</h1>
<?php
    if(isset($_GET["msg"])){
        echo "<div class='alert alert-info'>",$_GET["msg"],"</div>";
    }
?>
    <table class="table text-capitalize table-bordered table-hover table-striped">
        <tr>
            <th>Sno</th>
            <th>Model Details</th>
            <th>Message</th>
            <th>Details</th>
            <th>Date</th>
            <th>Price</th>
            <th>Status</th>
        </tr>
        <?php
        include("config.php");
        $query= "SELECT * from `booking` where `recruiter_email`='$_SESSION[email]'";
        //echo $query;
        $result=mysqli_query($connect,$query);
        //print_r($result);
        $sno=1;
        while($data=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $sno ?></td>
                <td>
                <?php
                include("config.php");
                $query1="SELECT * from `models` where `email`='$data[model_email]'";
                $res=mysqli_query($connect,$query1);
                $data1=mysqli_fetch_array($res);
                ?>
                <?php echo $data1['model_name']?>,<br>
                <?php echo $data1['contact']?>,<br>
                <?php echo $data1['city']?>,<br>
                <?php echo $data['model_email']?>
                </td>
                <td><?php echo $data['message']?></td>
                <td><?php echo $data['details']?></td>
                <td><?php echo $data['date_of_booking']?></td>
                <td><?php 
                if($data["price"]==""){
                    echo "Not updated yet";
                }
                else{
                    echo $data['price'];
                }
                ?>
                </td>
                <td><span class="badge bg-info"><?php echo $data['status']?></span></td>
                
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
