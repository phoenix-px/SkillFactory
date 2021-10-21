<?php
$name = "Сергей";
$surname = "Безфамильный";
$age = 36;
$city = "Москва";

echo <<<EOD
Привет, меня зовут $name $surname
<br/>
Мне $age лет и я живу в городе $city
EOD;
