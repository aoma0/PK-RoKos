<?php
session_start();

require_once('db.php');

$status = "В ожидании";
$applName = "Заявка по форме";

if (!empty($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $text = $_POST['text'];
    $registered = 1;

    $stmt = $conn->prepare("INSERT INTO applications (user_id, applName, text, status, registered) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isssi", $user_id, $applName, $text, $status, $registered);
} else {
    $userName = $_POST['name'];
    $userPhone = $_POST['phone'];
    $userEmail = $_POST['email'];
    $text = $_POST['text'];
    $registered = 0;

    $stmt = $conn->prepare("INSERT INTO applications (applName, text, userPhone, userName, userEmail, status, registered) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $applName, $text, $userPhone, $userName, $userEmail, $status, $registered);
}

$stmt->execute();
header("Location: ../../index.php");
exit();
?>