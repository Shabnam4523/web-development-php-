<?php
include("header.php");
?>
<div class="container my-5">
    <select name="category" class="form-control">
        <option>choose option</option>
        <?php
        $connect=mysqli_connect("localhost","root","","artistmuse");
        $query="SELECT * from `category`";
        $result=mysqli_query($connect,$query);
        while($data=mysqli_fetch_array($result)){
            ?>
        <option><?php echo $data["name"]?></option>
        <?php
        }
        ?>
    </select>
</div>
<div class="container my-5">
    <div class="row">
        <?php
        $connect=mysqli_connect("localhost","root","","artistmuse");
        $query="SELECT * from `category`";
        $result=mysqli_query($connect,$query);
        while($data=mysqli_fetch_array($result)){
        ?>
        <div class="col-md-4">
        <div class="card" >
            <img src="cate_image/<?php echo $data['image']?>" class="card-img-top" alt="..." style="height:200px; width:100%;">
            <div class="card-body">
                <h2 class="card-title">
                    <?php echo $data['name']?>
                </h2>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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
