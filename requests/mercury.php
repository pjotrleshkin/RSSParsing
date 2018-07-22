<?php
// создание нового ресурса cURL
$ch = curl_init();
// установка URL и других необходимых параметров
curl_setopt($ch, CURLOPT_URL, "https://mercury.postlight.com/parser?url=".$link);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "x-api-key: AU5zjyEqyL0LgR8zkb4Iurhlenpn52bGtbiqJA4t",
));
// загрузка страницы и выдача её браузеру
$x = curl_exec($ch);
// завершение сеанса и освобождение ресурсов
curl_close($ch);
?>
