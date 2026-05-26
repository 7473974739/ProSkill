<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: pages/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Оплата заказа | ProSkill</title>

    <link rel="stylesheet" href="assets/css/checkout.css">
</head>

<body>

<div class="checkout-page">

    <div class="checkout-box">

        <h1>Выберите способ оплаты</h1>

        <p>
            После оплаты курсы автоматически появятся
            в вашем личном кабинете.
        </p>

        <div class="payments">

            <!-- CARD -->

            <div class="pay-card active">

                <img src="assets/images/bc.png" alt="sbp">

                <h3>Банковская карта</h3>

                <span>Visa / Mastercard / МИР</span>

            </div>

            <!-- SBP -->

            <div class="pay-card">

                <img src="assets/images/sbp.png" alt="sbp">

                <h3>СБП</h3>

                <span>Быстрая оплата через банк</span>

            </div>

            <!-- PAYPAL -->

            <div class="pay-card">

                <img src="assets/images/paypal.png" alt="paypal">

                <h3>PayPal</h3>

                <span>Международная оплата</span>

            </div>

        </div>

        <form action="pages/success.php" method="POST">

            <button class="pay-btn">
                Оплатить заказ
            </button>

        </form>

    </div>

</div>

</body>
</html>