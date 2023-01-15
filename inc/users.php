<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
include 'db.php';
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}
die("sksks");

die();
die("sjsjsj");
die("sss");
echo json_encode($data); die;


?>