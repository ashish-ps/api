<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
include 'db.php';
//print_r($_GET['id']); die;
 $sql = "SELECT * FROM user where id ='".$_GET["id"]."'"; 
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_row($result);
echo json_encode($row); die;

?>