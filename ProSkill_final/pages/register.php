<?php
require "includes/db.php";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = trim($_POST["login"]);
    $password = $_POST["password"];

    // 1. Проверка пустых полей
    if (empty($login) || empty($password)) {
        $error = "Заполните все поля";
    } else {

        // 2. Проверка: существует ли пользователь
        $check = $pdo->prepare("SELECT id FROM users WHERE login = ?");
        $check->execute([$login]);

        if ($check->rowCount() > 0) {
            $error = "Пользователь уже существует";
        } else {

            // 3. ШИФРОВАНИЕ пароля
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // 4. Добавление в БД
            $stmt = $pdo->prepare("
                INSERT INTO users (login, password)
                VALUES (?, ?)
            ");

            $stmt->execute([$login, $hashedPassword]);

            $success = "Регистрация успешна! Перенаправление...";

            header("refresh:2;url=pages/login.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>

    <link rel="stylesheet" href="assets/css/register.css">
</head>

<body>

<div class="logo">
    <img src="assets/images/logo.png" alt="Logo">
</div>

<div class="auth-box">

    <h1>Регистрация</h1>

    <?php if ($error): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div class="success"><?= $success ?></div>
    <?php endif; ?>

<form method="POST" class="register-form">

    <div class="input-group">

        <label>Логин</label>

        <input
            type="text"
            name="login"
            placeholder="Введите логин"
            required
        >

    </div>

    <div class="input-group">

        <label>Пароль</label>

        <input
            type="password"
            name="password"
            placeholder="Введите пароль"
            required
        >

    </div>

    <!-- ЧЕКБОКС -->

    <label class="checkbox-wrapper">

        <input
            type="checkbox"
            required
        >

        <span class="checkmark"></span>

        <span class="checkbox-text">
            Я соглашаюсь на обработку
            персональных данных
        </span>

    </label>

    <button
        type="submit"
        class="auth-btn"
    >
        Создать аккаунт
    </button>

<div class="auth-bottom">
    Уже есть аккаунт?
    <a href="pages/login.php">Войти</a>
</div>

</body>
</html>