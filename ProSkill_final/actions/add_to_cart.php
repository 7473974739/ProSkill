<?php
require "includes/db.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$course_id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
$user_id = $_SESSION["user_id"];

if ($course_id > 0) {

    // проверка, есть ли уже в корзине
    $check = $pdo->prepare("SELECT id FROM cart WHERE user_id = ? AND course_id = ?");
    $check->execute([$user_id, $course_id]);

    if ($check->rowCount() == 0) {

        $stmt = $pdo->prepare("INSERT INTO cart (user_id, course_id) VALUES (?, ?)");
        $stmt->execute([$user_id, $course_id]);
    }
}

header("Location: cart.php");
exit;