<?php
$id = $_GET['id'];
?>
<!doctype html>
<html>
<head>

</head>
<body>
<p>
<?php
require_once 'db_connection.php';

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');

$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

if($result){
    while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
        var_dump($row);
        echo "<br>";
    }
}

mysqli_close($link);
?>
</p>
<ul>
    <li><a href="index.php?id=sign_in">Вход</a></li>
    <li><a href="index.php?id=add">Добавить пользователя</a></li>
    <li><a href="index.php?id=users">Отобразить всех пользователей</a></li>
    <li><a href="index.php?id=">Редактировать профиль</a></li>
</ul>
<p>
    <?php
        require_once 'inc/routing.php';
    ?>
</p>

</body>
</html>
