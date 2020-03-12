<?php
$nav_link=["home"=>"index.php","test"=>"test.php", "blog"=>"block.php"];
foreach($nav_link as $name=> $url){}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h1><?php 
    //echo "i like " .$a;



    ?>
    </h1>    
    <div class="body__header">
    <ul>
   <?php
foreach ($nav_link as $nav=>$url){
    echo "<li><a href='".$url."'>".$nav."</a></li>";
}
   ?>
   </ul>
   </div>
    