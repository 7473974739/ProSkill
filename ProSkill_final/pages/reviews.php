<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProSkill</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="wrapper">

<?php require __DIR__ . "includes/header.php"; ?>

<!-- HERO -->
<section class="container hero-contacts">

    <h1>Отзывы студентов ProSkill</h1>

    <p>
        Мы ценим мнение каждого студента и постоянно улучшаем наши программы обучения.
    </p>

</section>


<!-- FEEDBACK FORM -->
<section class="feedback-section">

    <div class="container">

        <div class="feedback-card">

            <h2>Оставьте отзыв</h2>
            <p>Ваш опыт поможет другим студентам</p>

            <form>

                <div class="form-row">

                    <input type="text" placeholder="Ваше имя">
                    <input type="text" placeholder="Ваша фамилия">

                </div>

                <input type="email" placeholder="Email" class="full">

                <textarea placeholder="Ваш отзыв..."></textarea>

                <button type="submit">Отправить отзыв</button>

            </form>

        </div>

    </div>

</section>


<!-- REVIEWS LIST -->
<section class="reviews">

    <div class="container">

        <h2>Что говорят студенты</h2>

        <div class="reviews-grid">

            <div class="review-card">
                <h3>Алексей</h3>
                <p>
                    Отличная платформа! Прошёл курс по веб-разработке и уже устроился на работу.
                </p>
            </div>

            <div class="review-card">
                <h3>Мария</h3>
                <p>
                    Очень удобный формат обучения, всё понятно и структурировано.
                </p>
            </div>

            <div class="review-card">
                <h3>Игорь</h3>
                <p>
                    Курс Python помог мне сменить профессию и начать работать в IT.
                </p>
            </div>

            <div class="review-card">
                <h3>Анна</h3>
                <p>
                    Преподаватели объясняют очень доступно, рекомендую!
                </p>
            </div>

        </div>

    </div>

</section>


    <!-- FOOTER -->
    <?php require __DIR__ . "includes/footer.php"; ?>

</div>

</body>
</html>
