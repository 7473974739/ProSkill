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

        <!-- HERO SECTION -->

        <section class="hero container">

            <!-- Левая часть -->
            <div class="hero-info">

                <h2>Профессиональная обучающая платформа</h2>

                <h1>ProSkill</h1>

                <p>
                    Развивай востребованные навыки,
                    изучай современные IT-направления
                    и создавай своё успешное будущее вместе с нами!
                </p>

                <a href="pages/login.php" class="hero-btn">
                    Начать обучение
                </a>

            </div>

            <!-- Правая часть -->
            <div class="hero-image">

                <img src="assets/images/coloss.png" alt="Обучение">

            </div>

        </section>

    </div>

    <!-- COURSES -->

    <section class="courses">

        <div class="container">
<section class="programs container">

  <div class="section-title">
    <h2>Популярные направления</h2>
    <p>Выберите сферу обучения и начните развиваться в нужном направлении</p>
  </div>

<div class="programs-grid">

  <div class="program-card">
    <img src="assets/images/backend.jpg">
    <h3>Backend</h3>
    <p>PHP, Node.js, API</p>

    <a href="actions/add_to_cart.php?id=1" class="btn">
      Добавить в корзину
    </a>
  </div>

  <div class="program-card">
    <img src="assets/images/frontend.jpg">
    <h3>Frontend</h3>
    <p>Интерфейсы и UX/UI</p>

    <a href="actions/add_to_cart.php?id=2" class="btn">
      Добавить в корзину
    </a>
  </div>

  <div class="program-card">
    <img src="assets/images/backend.jpg">
    <h3>Backend Pro</h3>
    <p>PHP, Laravel, SQL</p>

    <a href="actions/add_to_cart.php?id=3" class="btn">
      Добавить в корзину
    </a>
  </div>

  <div class="program-card">
    <img src="assets/images/Data Science.jpg">
    <h3>Data Science</h3>
    <p>Анализ данных</p>

    <a href="actions/add_to_cart.php?id=4" class="btn">
      Добавить в корзину
    </a>
  </div>

  <div class="program-card">
    <img src="assets/images/security.webp">
    <h3>Cyber Security</h3>
    <p>Защита систем</p>

    <a href="actions/add_to_cart.php?id=5" class="btn">
      Добавить в корзину
    </a>
  </div>

  <div class="program-card">
    <img src="assets/images/uiux.jpg">
    <h3>UX/UI Дизайн</h3>
    <p>Дизайн интерфейсов</p>

    <a href="actions/add_to_cart.php?id=6" class="btn">
      Добавить в корзину
    </a>
  </div>

  <div class="program-card">
    <img src="assets/images/python.jpg">
    <h3>Python</h3>
    <p>Программирование с нуля</p>

    <a href="actions/add_to_cart.php?id=7" class="btn">
      Добавить в корзину
    </a>
  </div>

  <div class="program-card">
    <img src="assets/images/mobile.jpg">
    <h3>Mobile Dev</h3>
    <p>Разработка приложений</p>

    <a href="actions/add_to_cart.php?id=8" class="btn">
      Добавить в корзину
    </a>
  </div>

  <div class="program-card">
    <img src="assets/images/php.jpg">
    <h3>PHP</h3>
    <p>Изучение PHP</p>

    <a href="actions/add_to_cart.php?id=9" class="btn">
      Добавить в корзину
    </a>
  </div>

</div>

</section>

    <!-- FOOTER -->

    <?php require __DIR__ . "includes/footer.php"; ?>

</body>

</html>

