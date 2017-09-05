<?php
$id = $_GET['id'];
?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Пользователи</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php?id=sign_in">Вход</a></li>
        <li><a href="index.php?id=add">Добавить пользователя</a></li>
    </ul>
</nav>
<section>
<?php
require_once 'db_connection.php';

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');

$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

if($result){
    for ($i = 0; $row = mysqli_fetch_array($result, MYSQLI_ASSOC); $i++) {
        echo "$row";
        echo "<br>";
    }
}

mysqli_close($link);
?>
</section>
<p>
    <?php
        require_once 'inc/routing.php';
    ?>
</p>

</body>
</html>
