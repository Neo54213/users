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
        <li><a href="index.php?id=profile">Профиль</a></li>
    </ul>
</nav>
<section>
<?php
require_once 'db_connection.php';

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');

$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
?>
<table>
<?php
if($result){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
}

mysqli_close($link);
?>
</table>
</section>
<p>
    <?php
        require_once 'inc/routing.php';
    ?>
</p>

</body>
</html>
