<?php
require "includes/db.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: pages/login.php");
    exit;
}

$stmt = $pdo->prepare("
SELECT cart.id as cart_id, courses.*
FROM cart
JOIN courses ON cart.course_id = courses.id
WHERE cart.user_id = ?
");

$stmt->execute([$_SESSION["user_id"]]);
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

$total = 0;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Корзина ProSkill</title>

<link rel="stylesheet" href="assets/css/cart.css">
</head>

<body>

<div class="page">

    <h1 class="title">Корзина</h1>

    <div class="layout">

        <!-- Список -->
        <div class="list">

            <?php if ($items): ?>

                <?php foreach ($items as $item): ?>
                    <?php $total += $item["price"]; ?>

                    <div class="card">

                        <img src="<?= $item["images"] ?>" class="img">

                        <div class="info">
                            <h3><?= $item["title"] ?></h3>
                            <p><?= $item["description"] ?></p>
                        </div>

                        <div class="right">
                            <div class="price"><?= $item["price"] ?> ₽</div>

                            <a href="actions/remove_from_cart.php?id=<?= $item["cart_id"] ?>" class="remove">
                                удалить
                            </a>
                        </div>

                    </div>

                <?php endforeach; ?>

            <?php else: ?>

                <div class="empty">Корзина пуста</div>

            <?php endif; ?>

        </div>

        <!-- Итог -->
        <div class="summary">

            <h2>Итого</h2>

            <div class="line">
                <span>Курсы:</span>
                <span><?= count($items) ?></span>
            </div>

            <div class="line total">
                <span>Сумма:</span>
                <span><?= $total ?> ₽</span>
            </div>

            <a href="pages/checkout.php" class="btn">Оформить заказ</a>

        </div>

    </div>

</div>

</body>
</html>