<?php
include ("connect.php");
$h = $_GET['id'];
mysqli_query($connect, "DELETE FROM `users` WHERE `id` = $h");
exit("<meta http-equiv='refresh' content='0; url= admin.php'>");
?>