<?php
require "includes/db.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Подключение CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>ProSkill</title>
</head>
<body>

 <?php require __DIR__ . "includes/header.php"; ?>

    <!-- HERO -->
    <section class="hero container">
      <div class="hero-info">
        <h2>Профессиональная обучающая платформа</h2>
        <h1>ProSkill</h1>
        <p>Платформа, где знания становятся инструментом успеха, навыки растут каждый день, а цели превращаются в реальность.</p>
        <!--  КНОПКА С PHP -->
        <?php if (isset($_SESSION["user_id"])): ?>
        <a href="pages/profile.php" class="btn">Перейти в кабинет</a>
        <?php else: ?>
        <a href="pages/login.php" class="btn">Начать обучение</a>
        <?php endif; ?>
      </div>
    </section>

    <!-- FEATURES -->
    <section class="features">
      <div class="container">
        <div class="slider">
  <h2>Популярные курсы</h2>

  <div class="slider-track">

    <!-- КАРТОЧКА 1 -->
    <div class="card">
      <img src="assets/images/web.jpg" alt="Веб-разработка">

      <div class="card-content">
        <h3>Веб-разработчик</h3>
        <p>Освой HTML, CSS и JavaScript с нуля.</p>

<a href="actions/add_to_cart.php?id=1" class="cart-btn">Добавить в корзину</a>
      </div>
    </div>

    <!-- КАРТОЧКА 2 -->
    <div class="card">
      <img src="assets/images/frontend.jpg" alt="Frontend">

      <div class="card-content">
        <h3>Frontend-разработчик</h3>
        <p>Создавай современные интерфейсы.</p>

<a href="actions/add_to_cart.php?id=2" class="cart-btn">Добавить в корзину</a>
      </div>
    </div>

    <!-- КАРТОЧКА 3 -->
    <div class="card">
      <img src="assets/images/python.jpg" alt="Python">

      <div class="card-content">
        <h3>Python для начинающих</h3>
        <p>Изучи популярный язык программирования.</p>

<a href="actions/add_to_cart.php?id=3" class="cart-btn">Добавить в корзину</a>
      </div>
    </div>

    <!-- КАРТОЧКА 4 -->
    <div class="card">
      <img src="assets/images/Data Science.jpg" alt="Data Science">

      <div class="card-content">
        <h3>Data Science</h3>
        <p>Анализируй данные и находи инсайты.</p>

 <a href="actions/add_to_cart.php?id=4" class="cart-btn">Добавить в корзину</a>
      </div>
    </div>

    <!-- КАРТОЧКА 5 -->
    <div class="card">
      <img src="assets/images/security.webp" alt="Cyber Security">

      <div class="card-content">
        <h3>Cyber Security</h3>
        <p>Защита данных и систем.</p>

<a href="actions/add_to_cart.php?id=5" class="cart-btn">Добавить в корзину</a>
      </div>
    </div>

    <!-- КАРТОЧКА 6 -->
    <div class="card">
      <img src="assets/images/uiux.jpg" alt="UX/UI Design">

      <div class="card-content">
        <h3>UX/UI Дизайн</h3>
        <p>Создавай удобные интерфейсы.</p>

<a href="actions/add_to_cart.php?id=6" class="cart-btn">Добавить в корзину</a>
      </div>
    </div>
  </div>
</div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php require __DIR__ . "includes/footer.php"; ?>
  </div>
</body>
</html>
