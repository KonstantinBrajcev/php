<?php
require 'vendor/autoload.php'; // Подключение Twig

// Установка часового пояса
date_default_timezone_set('Europe/Minsk');

// Получение текущего времени
$current_time = date('d-m-Y H:i:s');

// Инициализация Twig
$loader = new \Twig\Loader\FilesystemLoader('vendor/twig/');
$twig = new \Twig\Environment($loader);

// Отображение шаблона
echo $twig->render('Template.twig', ['current_time' => $current_time]);
?>
