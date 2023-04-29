<?php
session_start();
if ($_SESSION['admin'] != 'admin') {
	header('Location: index.php');
}
include ("../../connect.php");
$h = $_GET['id'];
echo $h;
mysqli_query($connect, "DELETE FROM `tours` WHERE `id` = $h");
?>