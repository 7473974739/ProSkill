<?php
require "includes/db.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/login.css">
  <title>Вход | ProSkill</title>
</head>

<body>

<div class="wrapper">

  <header class="container">
    <a href="index.php" class="logo">
      <img src="assets/images/logo.png" alt="ProSkill">
    </a>
  </header>

  <section class="auth container">

    <div class="auth-card">

      <h1>Вход</h1>
      <p>Войдите в свой аккаунт ProSkill</p>

      <?php if (isset($_GET['error'])): ?>
        <p style="color:red;">Неверный email или пароль</p>
      <?php endif; ?>

      <form method="post" action="auth.php">

        <input type="text" name="email" placeholder="Логин">

        <input type="password" name="password" placeholder="Пароль" required>

        <button type="submit" class="btn auth-btn">
          Войти
        </button>

      </form>

      <div class="auth-links">
        Нет аккаунта?
        <a href="pages/register.php">Регистрация</a>
      </div>

    </div>

  </section>

</div>

</body>
</html>