<script src="js/script.js"></script>
<?php
if($result){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $user = $row;
    }
}
?>
<h2>Список пользователей</h2>
<table class="table" id="usersTable">
    <thead>
        <th>Логин</th><th>ФИО</th><th>Электронная почта</th><th>Права</th>
    </thead>
    <tbody>

    </tbody>
</table>
<button id="plusUser">+</button>