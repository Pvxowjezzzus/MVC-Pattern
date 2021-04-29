<!doctype html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/public_html/css/admin-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"  crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
    <header class="admin-header">
        <h2>Панель Администратора</h2>
        <a class="back-btn" href="/">Вернуться на главную</a>
    </header>
    <div class="container">
        <?= $content ?>
    </div>
</body>

</html>