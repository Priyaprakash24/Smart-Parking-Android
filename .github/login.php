<?php

include ("../config.php");
$response = array();
$param  = json_decode(file_get_contents("php://input"));
$username = $param->username;

$query1 = "SELECT * FROM `user_mst` WHERE username = '$username'" ;
$result1 = mysqli_query($conn,$query1);
$output = mysqli_fetch_assoc($result1);
echo $output['username'];

?>