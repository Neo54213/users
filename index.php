<?php
require_once 'db_connection.php';

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');

$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

if($result){
    while(true){
        $row = mysqli_fetch_array($result, MYSQLI_NUM);

        if(!$row){
            return;
        }

        var_dump($row);
        echo "<br>";
    }
}

mysqli_close($link);