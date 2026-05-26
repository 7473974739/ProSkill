<?php
require "includes/db.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$login = $_POST['email']; 
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE login = ?");
$stmt->execute([$login]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user_id'] = $user['id'];

    header("Location: profile.php");
    exit();

} else {
    header("Location: login.php?error=1");
    exit();
}