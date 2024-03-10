<?php

$mysqli = new mysqli("localhost", "root", "root", "register-bg");

$id = $_POST['id'];
$title = $_POST['title'];
$preview = $_POST['preview'];
$text = $_POST['text'];
$img = $_POST['img'];
$date = $_POST['date'];

$stmt = $mysqli->prepare("UPDATE news SET title = ?, preview = ?, text = ?, img = ?, date = ? WHERE id = ?");
$stmt->bind_param("sssssi", $title, $preview, $text, $img, $date, $id);
$stmt->execute();
$result = $stmt->get_result();
header('Location: ../index.php');

?>