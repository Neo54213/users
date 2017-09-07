<?php
require_once '../db_connection.php';

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');

$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$data = [];

mysqli_close($link);

if($result){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] = $row;
    }
}

echo json_encode($data);