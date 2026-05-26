<?php
require "includes/db.php";

// удаляем все данные сессии
session_unset();
session_destroy();

// редирект на главную
header("Location: index.php");
exit;

?>