<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Контакты</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <?php include ("menu.inc.php");?>
        <br>
        <h2> Прогноз погоды в городе Москва </h2>
        <br>
        <hr>

        <?php
            // кодировка страницы
            header('Content-Type: text/html;charset=UTF-8');

            $api_key = "d503470b87684554b841524b0764b771";
            $city = "524901"; // город. Можно и по-русски написать, например: Брянск
            $mode = "json"; // в каком виде мы получим данные
            $units = "metric"; // Единицы измерения. metric или imperial
            $lang = "ru"; // язык
            $countDay = 1; // количество дней. Максимум 14 дней

            // формируем урл для запроса
            $url = "https://api.openweathermap.org/data/2.5/forecast?id=$city&appid=$api_key&units=$units&lang=$lang";
            // делаем запрос к апи
            $data = @file_get_contents($url);
            // если получили данные
            if($data){
                // декодируем полученные данные
                $dataJson = json_decode($data);
                // получаем только нужные данные
                $arrayDays = $dataJson->list;
                // выводим данные
                foreach($arrayDays as $oneDay){
                    echo "Прогноз на: " . $oneDay->dt_txt . "<br/>";
                    echo "Температура: " . $oneDay->main->temp_min . " - " . $oneDay->main->temp_max . "<br/>" ;
                    echo "Ощущается как: " . $oneDay->main->feels_like . "<br/>";
                    echo "Влажность: " . $oneDay->main->humidity . "<br/>";
                    echo "Скорость ветра: " . $oneDay->wind->speed . "<br/>";
                    echo "Погода: " . $oneDay->weather[0]->description . "<br/>";
                    echo "Давление: " . $oneDay->main->pressure . "<br/>";
                    echo "<hr/>";
                }
            }else{
                echo "Информация о погоде не доступна!";
            } ?>
        <footer>
            <?php include ("footer.inc.php")?>
        </footer>
    </body>
</html>


