

<?php
include("../private/config/db_connection/db_connect.php");


if(isset($_REQUEST['submit'])){

    $title = $_REQUEST['blog_title'];
    $imgs = $_REQUEST['blog_img'];
    $author = $_REQUEST['blog_author'];
    $detail = $_REQUEST['blog_detail']


    $query = "INSERT INTO blogs(blog_title, blog_img, blog_detail, blog_author) 
    VALUES('$title', '$imgs', '$detail', '$author')";
    $result = mysqli_query($connection, $query);



}


?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="">blog_title</label>
    <input name="blog_title" type="text">
    <br>

    <label for="">blog image</label>
    <input name="blog_img" type="text">
    <br>
    <label for="">blog author</label>
    <input name="blog_author" type="text">

    <br>
    <label for="">blog detail</label>
    <textarea name="blog_detail" id="" cols="30" rows="10"></textarea>
    <br>


    <input type="sumbmit" name="submit" value="submit">


</body>
</html>