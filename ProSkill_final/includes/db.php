<?php

$host = "sqlXXX.infinityfree.com";   // MySQL Host
$db   = "epiz_12345678";            // Database Name
$user = "epiz_12345678";            // Username
$pass = "твой_пароль";              // Password

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Ошибка подключения к БД: " . $e->getMessage());
}
?>