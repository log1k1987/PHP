<?php
function task1 () {
    $xml = simplexml_load_file('data.xml');

    echo "<b>Курьерский лист №: </b> {$xml["PurchaseOrderNumber"]} ";
    echo "<b>Дата составления: </b> {$xml["OrderDate"]} <br>";
    echo "<br>";

    echo "<b>Откуда: </b><br>";
    echo "<b>Имя: </b> {$xml->Address[0]->Name} <br>";
    echo "<b>Страна: </b> {$xml->Address[0]->Country} <br>";
    echo "<b>Штат: </b> {$xml->Address[0]->State} <br>";
    echo "<b>Город: </b> {$xml->Address[0]->City} <br>";
    echo "<b>Улица: </b> {$xml->Address[0]->Street} <br>";
    echo "<b>Индекс: </b> {$xml->Address[0]->Zip} <br><br>";

    echo "<b>Куда: </b> " . "<br>";
    echo "<b>Имя: </b> {$xml->Address[1]->Name}<br>";
    echo "<b>Страна: </b> {$xml->Address[1]->Country} <br>";
    echo "<b>Штат: </b> {$xml->Address[1]->State} <br>";
    echo "<b>Город: </b> {$xml->Address[1]->City} <br>";
    echo "<b>Улица: </b> {$xml->Address[1]->Street} <br>";
    echo "<b>Индекс: </b> {$xml->Address[1]->Zip} <br>";

    echo "<br>";
    echo "<b>Примечание: </b> {$xml->DeliveryNotes} <br><br>";
    echo "<b>Заказанные товары:</b>";

    $count = 1;

    echo "<table style=text-align:center border=1>";
    echo "<tr>";
    echo "<td>№</td>";
    echo "<td>Партийный номер</td>";
    echo "<td>Наименование</td>";
    echo "<td>Количество</td>";
    echo "<td>Цена в $</td>";
    echo "<td>Непонятно чего :)</td>";
    echo "</tr>";

    foreach ($xml->Items->children() as $items) {
        echo "<tr>";
        echo "<td>$count</td>";
        echo "<td>{$items->attributes()}</td>";
        echo "<td>{$items->ProductName}</td>";
        echo "<td>{$items->Quantity}</td>";
        echo "<td>{$items->USPrice}</td>";

        $count++;

        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";

    $array_prices = $xml->xpath('//USPrice');

    $sum = 0;
    foreach($array_prices as $price) {
        $sum += (float)$price;
    }

    echo "<b>К оплате:</b> $ {$sum}";
}