<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");

$conn = mysqli_connect('172.104.238.113','vardump_luka','punopetica98','vardump_tower');

$sql = "SELECT * FROM `user` ORDER BY level DESC, wave DESC LIMIT 5";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);
echo json_encode($result);