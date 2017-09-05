<?php
$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<h2>Данные пользователя <?=$user['login']?></h2>
<ul>
    <li>ФИО: <?=$user['fullname']?></li>
    <li>Права: <?=$user['role']?></li>
    <li>E-mail: <?=$user['e-mail']?></li>
</ul>