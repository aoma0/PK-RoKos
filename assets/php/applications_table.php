<?php

$user_id = $_SESSION['user_id'];

// Получение статуса администратора из таблицы users
$sql_admin = "SELECT admin FROM users WHERE id = '$user_id'";
$result_admin = mysqli_query($conn, $sql_admin);
$row_admin = mysqli_fetch_assoc($result_admin);
$isAdmin = $row_admin['admin'];

// Если пользователь является админом, отображать все заявки
if ($isAdmin) {
    $sql = "SELECT id, applName, text, status FROM applications";
} else {
    $sql = "SELECT id, applName, text, status FROM applications WHERE user_id = '$user_id'";
}

$result = mysqli_query($conn, $sql);

// Проверка результата
if (!$result) {
    die("Ошибка запроса: " . mysqli_error($conn));
}

// Проверка, есть ли данные в таблице
if (mysqli_num_rows($result) == 0) {
    echo "<p>На данный момент у вас нет каких-либо заявок.</p>";
} else {
    // Вывод таблицы
    echo "<table>";
    echo "<tr><th>Название заявки</th><th>Текст заявки</th><th>Статус</th><th> </th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["applName"]. "</td>";
        echo "<td class=\"textRow\">". $row["text"]. "</td>";
        echo "<td>". $row["status"]. "</td>";
        echo "<td class=\"buttonRow\"> 
        <button class=\"btnTable\" onclick = \"openModal(" . $row["id"] . ")\">Открыть</button> 
        </td>";
        echo "</tr>";
    }

    echo "</table>";
    
}

// Закрытие подключения
mysqli_close($conn);
?>