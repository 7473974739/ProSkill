<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header class="container">

    <!-- ЛОГОТИП -->
    <a href="/index.php" class="logo">
        <img src="/assets/images/logo.png" alt="ProSkill">
    </a>

    <!-- МЕНЮ -->
    <nav>
        <ul>

            <li>
                <a href="/index.php">Главная</a>
            </li>

            <li>
                <a href="/pages/programs.php">Программы</a>
            </li>

            <li>
                <a href="/pages/reviews.php">Отзывы</a>
            </li>

            <?php if (isset($_SESSION["user_id"])): ?>

                <li>
                    <a href="/pages/cart.php">
                        Корзина
                    </a>
                </li>

                <li>
                    <a class="nav-btn" href="/pages/profile.php">
                        Личный кабинет
                    </a>
                </li>

                <li>
                    <a class="nav-btn" href="/actions/logout.php">
                        Выйти
                    </a>
                </li>

            <?php else: ?>

                <li>
                    <a class="nav-btn" href="/pages/login.php">
                        Войти
                    </a>
                </li>

            <?php endif; ?>

        </ul>
    </nav>

</header>