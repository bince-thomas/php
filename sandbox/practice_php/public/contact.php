<?php
include("../private/required/header.php");
include("../private/config/db_connection/db_connect.php");
$query="SELECT * FROM blogs ";
$result=mysqli_query($connection,$query);

?>

<?php
while($row = mysqli_fetch_assoc($result)) {
    //var_dump($row);
    ?>

    <h1>
    <?php 
    Echo $row["blog_title"];

?>
    </h1>

    <img src="<?php Echo $row["blog_img"];?>" alt="">

<?php

}
    
?>



 
    
    <div class="body__container">index</div>

<?php


//include("../private/required/footer.php");
?>