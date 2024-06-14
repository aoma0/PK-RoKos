<?php
// Получение ID пользователя из сессии
$user_id = $_SESSION['user_id'];

// Запрос на извлечение данных из таблицы applications для текущего пользователя
$sql = "SELECT applName, text, status FROM applications WHERE user_id = '$user_id'";
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
    echo "<tr><th>Название заявки</th><th>Текст заявки</th><th>Статус</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["applName"]. "</td>";
        echo "<td>". $row["text"]. "</td>";
        echo "<td>". $row["status"]. "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

// Закрытие подключения
mysqli_close($conn);
?>
