<?php
include("header.php");
?>
<div class="container my-5">
    <h1 class="text-center">Meet Our Recruiters</h1>
    <div class="row">
    <?php
        include("config.php");
        if(isset($_SESSION["email"])){
        $query= "SELECT * from `recruiter` where  not `email`='$_SESSION[email]'";
        }
        else{
            $query= "SELECT * from `recruiter` ";
        }
        //echo $query;
        $result=mysqli_query($connect,$query);
        //print_r($result);
        $sno=1;
        while($data=mysqli_fetch_array($result)){
            ?>
        <div class="col-md-4 p-3 text-capitalize">
            <div class="blog-card-single card p-5">
                <div class="content-main-top">
                    <h4><?php echo $data['company_name']?></h4>
                    <p><?php echo $data['company_details']?></p>
                    <p>Email - <?php echo $data['email']?></p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
include("footer.php");
?>                   
                   
