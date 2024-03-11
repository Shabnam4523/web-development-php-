<?php
include("user_header.php");
?>
<div class="container my-5">
<h1 class="my-3 text-center">Users</h1>
    <div class="row">
    <?php
        include("config.php");
        if(isset($_SESSION["email"])){
        $query= "SELECT * from `models` where not `email`='$_SESSION[email]'";
        }
        else{
            $query= "SELECT * from `models`";
        }
        //echo $query;
        $result=mysqli_query($connect,$query);
        //print_r($result);
        $sno=1;
        while($data=mysqli_fetch_array($result)){
            ?>
        <div class="col-md-4 p-3 text-capitalize">
            <div class="blog-card-single">
                <div class="grids5-info position-relative">
                    <img src="cate_image/<?php echo $data['image']?>" alt="" class="img-fluid" />
                </div>
                <div class="content-main-top">
                    <h4><?php echo $data['model_name']?></h4>
                    <p><?php echo $data['description']?></p>
                    <p>Type- <?php echo $data['category']?></p>
                    <div class="top-content-border d-flex align-items-center justify-content-center mt-5 pt-4">
                        <a class="btn btn-style" href="view-profile.php?email=<?php echo $data['email']?>&name=<?php echo $data['model_name']?>">View Profile</a>
                    </div>
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