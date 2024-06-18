<?php
require_once(__DIR__. '/db.php');

// Получение ID заявки из запроса
$applId = $_GET['applId'];

// Получение данных о заявке из базы данных
$query = "SELECT applName, text, status FROM applications WHERE id = $applId";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Проверка, была ли найдена заявка
if ($row) {
    // Возврат JSON-ответа с данными о заявке
    echo json_encode($row, JSON_UNESCAPED_UNICODE);
} else {
    // Если заявка не найдена, возврат ошибки
    http_response_code(404);
    echo json_encode(array('message' => 'Заявка не найдена'), JSON_UNESCAPED_UNICODE);
}

// Закрытие подключения
mysqli_close($conn);
?>

