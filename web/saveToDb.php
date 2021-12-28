<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
define('SECRET','towerdefenseluka');
$conn = mysqli_connect('localhost','root','imrenator','tower_defense');
$secret = mysqli_real_escape_string($conn,$_POST['secret']);
$name = mysqli_real_escape_string($conn,$_POST['name']);
$level = mysqli_real_escape_string($conn,$_POST['level']);
$wave = mysqli_real_escape_string($conn,$_POST['wave']);
if($secret !== SECRET) {
    http_response_code(400);
    echo json_encode(['error' => 'Bad Request']);
    return;
}

$sql = "INSERT INTO user(name,level,wave) VALUES('$name',{$level[strlen($level)-1]},$wave)";
$query = mysqli_query($conn,$sql);
if(!$query) {
    http_response_code(500);
    echo json_encode(['error' => 'Oops Something went wrong!']);
    return;
}
echo json_encode(['success' => 1]);