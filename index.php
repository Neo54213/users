<?php
error_reporting(E_ALL & ~E_NOTICE);
$id = $_GET['id'];

require_once 'db_connection.php';

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');

$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

mysqli_close($link);
?>

<!doctype html>
<html>
<head>
    <title>Пользователи</title>
    <!--link rel="stylesheet" href="main.css"-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<h1>Система управления пользователями</h1>
<div class="row">
    <div class="col-md-2">
        <nav>
            <h2>Главное меню</h2>
            <ul id="mainMenuList">
                <li><a href="index.php">Главная</a></li>
                <li><a href="index.php?id=sign_in">Вход</a></li>
                <li><a href="index.php?id=profile">Профиль</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-4">
        <?php require_once 'inc/routing.php'; ?>
    </div>
</div>
</body>
</html>
