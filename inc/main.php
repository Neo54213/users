<h2>Список пользователей</h2>
<table class="table">
    <thead>
        <th>Логин</th><th>ФИО</th><th>Электронная почта</th><th>Права</th>
    </thead>
<?php
if($result){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr>";
        foreach ($row as $key => $value) {
            if($key == 'password'){
                continue;
            }
            echo "<td>$value</td>";
        }
        echo "</tr>";
        $user = $row;
    }
}
?>
</table>
<button id="plusUser">+</button>