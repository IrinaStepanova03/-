<?php
$uploads_dir = $_SERVER['DOCUMENT_ROOT'].'/img/';
$name = $_FILES['img']['name'];
include ("../../connect.php");
if (is_uploaded_file($_FILES['img']['tmp_name']))
{
     if(move_uploaded_file($_FILES['img']['tmp_name'], $uploads_dir.$name)){
         $title = (string)$_POST['title'];
         $description = (string)$_POST['description'];
         $price = $_POST['price'];
         $image = $uploads_dir.$name;
         $query = "INSERT INTO `tours` (`title`, `description`, `image`, `price`) VALUES ('$title', '$description', '$image', $price)";
         $sql = mysqli_query($connect, $query);
         echo json_encode($sql);
         echo json_encode($title);
     };
     exit;
}



exit;