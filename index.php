<?php
require_once 'db_connection.php';

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');

$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result){
    $row = mysqli_fetch_array($result, MYSQLI_NUM);
    var_dump($row);
}

mysqli_close($link);