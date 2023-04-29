<?php
require_once '../connect.php';
$sql = mysqli_query($connect, 'SELECT * FROM `tours`');
while ($row = $sql->fetch_assoc()) {
    $myArray[] = $row;
}
echo json_encode($myArray);

?>