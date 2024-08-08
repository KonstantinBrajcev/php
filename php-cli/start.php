<?php
function getCurrentTimeWithDeclension() {
    $timezone = new DateTimeZone('Europe/Minsk'); // Замените на ваш часовой пояс
    $currentTime = new DateTime('now', $timezone);// Получаем текущее время
    $hours = $currentTime->format('H');
    $minutes = $currentTime->format('i');
    $hourDeclension = getHourDeclension($hours);// Определяем склонения для часов
    $minuteDeclension = getMinuteDeclension($minutes);// Определяем склонения для минут
    // Формируем строку с текущим временем
    return "{$hours} {$hourDeclension} {$minutes} {$minuteDeclension}";
}
function getHourDeclension($hours) {
    if ($hours % 10 == 1 && $hours % 100 != 11) {
        return 'час';
    } elseif ($hours % 10 >= 2 && $hours % 10 <= 4 && ($hours % 100 < 10 || $hours % 100 >= 20)) {
        return 'часа';
    } else {return 'часов';}
}
function getMinuteDeclension($minutes) {
    if ($minutes % 10 == 1 && $minutes % 100 != 11) {
        return 'минута';
    } elseif ($minutes % 10 >= 2 && $minutes % 10 <= 4 && ($minutes % 100 < 10 || $minutes % 100 >= 20)) {
        return 'минуты';
    } else {return 'минут';}
}
echo getCurrentTimeWithDeclension();
// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/start.php
?>