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
    <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>Система управления пользователями</h1>
<nav>
    <h2>Главное меню</h2>
    <ul id="main-menu-list">
        <li><a href="index.php">Главная</a></li>
        <li><a href="index.php?id=sign_in">Вход</a></li>
        <li><a href="index.php?id=profile">Профиль</a></li>
    </ul>
</nav>
<section>
    <?php require_once 'inc/routing.php'; ?>
</section>

</body>
</html>
