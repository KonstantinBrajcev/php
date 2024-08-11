<?php
//function power($val, $pow)
//{
//    // Базовый случай: любое число в степени 0 равно 1
//    if ($pow == 0) {
//        return 1;
//    }
//    // Если степень отрицательная, используем обратное число
//    if ($pow < 0) {
//        return 1 / power($val, -$pow);
//    }
//    // Рекурсивный случай
//    return $val * power($val, $pow - 1);
//}
//
//// Пример использования
//$number = 2;
//$exponent = 3;
//$result = power($number, $exponent);
//echo "$number в степени $exponent равно $result"; // Вывод: 2 в степени 3 равно 8

//------------------------------------------------------------------

//function power($val, $pow)
//{   // Базовый случай: любое число в степени 0 равно 1
//    if ($pow == 0) {return 1;}
//    // Если степень отрицательная, используем обратное число
//    if ($pow < 0) {return 1 / power($val, -$pow);}
//    // Рекурсивный случай
//    return $val * power($val, $pow - 1);
//}
//$number = 4; // число
//$exponent = 8; // степень числа
//$result = power($number, $exponent);
//echo "$number в $exponent-й степени = $result"; // Вывод: 2 в степени 3 равно 8

//--------------------------------------------------------------------------

//function getCurrentTimeWithDeclension() {
//    $timezone = new DateTimeZone('Europe/Minsk'); // Замените на ваш часовой пояс
//    $currentTime = new DateTime('now', $timezone);// Получаем текущее время
//    $hours = $currentTime->format('H');
//    $minutes = $currentTime->format('i');
//    $hourDeclension = getHourDeclension($hours);// Определяем склонения для часов
//    $minuteDeclension = getMinuteDeclension($minutes);// Определяем склонения для минут
//    // Формируем строку с текущим временем
//    return "{$hours} {$hourDeclension} {$minutes} {$minuteDeclension}";
//}
//function getHourDeclension($hours) {
//    if ($hours % 10 == 1 && $hours % 100 != 11) {
//        return 'час';
//    } elseif ($hours % 10 >= 2 && $hours % 10 <= 4 && ($hours % 100 < 10 || $hours % 100 >= 20)) {
//        return 'часа';
//    } else {return 'часов';}
//}
//function getMinuteDeclension($minutes) {
//    if ($minutes % 10 == 1 && $minutes % 100 != 11) {
//        return 'минута';
//    } elseif ($minutes % 10 >= 2 && $minutes % 10 <= 4 && ($minutes % 100 < 10 || $minutes % 100 >= 20)) {
//        return 'минуты';
//    } else {return 'минут';}
//}
//echo getCurrentTimeWithDeclension();
?>