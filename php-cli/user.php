<?php
// Установка часового пояса
//date_default_timezone_set('Europe/Minsk');

// Проверка наличия параметров в запросе
if (isset($_GET['name']) && isset($_GET['birthday'])) {
    $name = htmlspecialchars($_GET['name']);
    $birthday = htmlspecialchars($_GET['birthday']);
    // Пример сохранения в текстовый файл
    $data = "Имя: $name, Дата рождения: $birthday\n";
    file_put_contents('users.txt', $data, FILE_APPEND);

    echo "Пользователь $name успешно сохранен в файл 'users.txt'";
} else {
    echo "Ошибка: указаны не все параметры. 'name' & 'birthday'";
}
?>
