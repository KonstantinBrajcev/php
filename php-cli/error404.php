<?php
http_response_code(404); // Устанавливаем код ответа 404
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ошибка 404</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        h1 { font-size: 50px; }
        p { font-size: 20px; }
    </style>
</head>
<body>
<h1>404 - Страница не найдена</h1>
<p>Извините, но запрашиваемая страница не существует.</p>
<a href="/">Вернуться на главную</a>
</body>
</html>
