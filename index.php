<?php
require_once 'db_connection.php';

$link = mysqli_connect($host, $user, $password, $database) or die("������ " . mysqli_error($link));

mysqli_close($link);