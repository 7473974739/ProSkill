<?php
require "includes/db.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// защита страницы
if (!isset($_SESSION["user_id"])) {
    header("Location: pages/login.php");
    exit;
}

// получаем пользователя
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION["user_id"]]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<?php

$cart = $pdo->prepare("
SELECT courses.*
FROM cart
JOIN courses ON cart.course_id = courses.id
WHERE cart.user_id = ?
");

$cart->execute([$_SESSION["user_id"]]);

$cartItems = $cart->fetchAll(PDO::FETCH_ASSOC);

$total = 0;
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет | ProSkill</title>

    <link rel="stylesheet" href="assets/css/profile.css">
</head>

<body>

<div class="wrapper">

    <!-- HEADER -->

<?php require __DIR__ . "/../includes/header.php"; ?>

    <!-- PROFILE -->

    <section class="container">

        <div class="profile-hero">

            <div class="profile-top">

                <div class="profile-user">

                    <img src="assets/images/avatar.jpg" class="avatar">

                    <div>

                        <h1>
                            <?= htmlspecialchars($user["login"]) ?>
                        </h1>

                        <p class="role">
                            Участник образовательной платформы ProSkill
                        </p>

                    </div>

                </div>

                <div class="mini-stats">

                    <div class="mini-card">
                        <span>12</span>
                        <p>Курсов изучено</p>
                    </div>

                    <div class="mini-card">
                        <span>75%</span>
                        <p>Общий прогресс</p>
                    </div>

                    <div class="mini-card">
                        <span>ID <?= $user["id"] ?></span>
                        <p>Номер профиля</p>
                    </div>

                </div>

            </div>

        </div>

        <!-- COURSES -->

        <h2 class="section-title">
            Ваши программы
        </h2>

        <div class="cards">

            <div class="card">

                <h3>Веб-разработка</h3>

                <p>Прогресс обучения</p>

                <div class="progress">
                    <div class="progress-bar" style="width: 60%;"></div>
                </div>

                <button>
                    Продолжить обучение
                </button>

            </div>

            <div class="card">

                <h3>UX/UI Дизайн</h3>

                <p>Прогресс обучения</p>

                <div class="progress">
                    <div class="progress-bar" style="width: 85%;"></div>
                </div>

                <button>
                    Продолжить обучение
                </button>

            </div>

            <div class="card">

                <h3>Анализ данных</h3>

                <p>Прогресс обучения</p>

                <div class="progress">
                    <div class="progress-bar" style="width: 35%;"></div>
                </div>

                <button>
                    Продолжить обучение
                </button>

            </div>

        </div>

        <!-- PROGRESS -->

        <h2 class="section-title">
            Ваш прогресс
        </h2>

        <div class="profile-hero progress-wrapper">

            <div class="circle">
                <span>75%</span>
            </div>

            <div class="progress-text">

                <h3>
                    Отличный результат
                </h3>

                <p>
                    Вы активно проходите обучение и уже завершили большую часть образовательной программы.
                    Продолжайте в том же темпе для получения сертификата ProSkill.
                </p>

            </div>

        </div>

    </section>




    <!-- FOOTER -->

    <?php require __DIR__ . "includes/footer.php"; ?>

</div>

</body>
</html>