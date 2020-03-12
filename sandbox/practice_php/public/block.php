<?php



include("../private/config/db_connection/db_connect.php");
include("../private/config/queries/fetch.php");
include("../private/required/header.php");

?>


<div class="baody__container">
    <h2>blog</h2>

    <?php
while($row = mysqli_fetch_assoc($result)) {
    //var_dump($row);
?>
   <h1> <?php echo $row["blog_title"];?></h1>
   <img src="<?php echo $row["blog_img"];?>" alt="<?php echo $row["blog_title"];?>">
   <p> <?php echo $row["bolg_detail"];?></p>
   <hr>
    <?php
}
    ?>
</div>

<?php
include("../private/required/footer.php");

?>