<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Включаем обработку ошибок
set_error_handler('customErrorHandler');
set_exception_handler('customExceptionHandler');
// Функция для обработки ошибок
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    include('error404.php'); exit();}
// Функция для обработки исключений
function customExceptionHandler($exception) {
    include('error404.php'); exit();}

// Пример маршрутизации
$requestUri = trim($_SERVER['REQUEST_URI']); // Удаляем лишние пробелы
if ($requestUri === '/' || $requestUri === '/index.php') {
    {echo "<h1>Добро пожаловать на главную страницу!</h1>";}
    } else {include('error404.php'); exit();}
?>

<?php include 'header.php'; ?>

<div class="center">
    <?php include "Sidebar.php"; ?>
    <div class="text">
        <?php include "Text.php"; ?>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
