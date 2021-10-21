<!-- Основной файл main.php содержит в себе разметку HTML и включённые фрагменты кода PHP. Y -->
<!-- Подключить menu.inc.php Y-->
<!-- Подключить footer.inc.php Y -->
<!-- Меню сайта Y-->
<!DOCTYPE html>
<html lang="ru">
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Сайт-визитка</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <?php include ("menu.inc.php")?>
        <div style="text-align: center;">
            <h1>Добро пожаловать на сайт</h1>
            <?php include ("me.php")?>
            <br>
            <img src="img/img0.jpg">
        </div>

        <br><hr>
        <footer>
            <?php include ("footer.inc.php")?>
        </footer>

    </body>
</html>