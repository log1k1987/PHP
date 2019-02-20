<?php
function task1()
{
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
    echo "<b>Примечание к заказу: </b> {$xml->DeliveryNotes} <br><br>";
    echo "<b>Заказанные товары:</b>";

    $count = 1;

    echo "<table style=text-align:center border=1>";
    echo "<tr>";
    echo "<td>№</td>";
    echo "<td>Партийный номер</td>";
    echo "<td>Наименование</td>";
    echo "<td>Количество</td>";
    echo "<td>Цена в $</td>";
    echo "<td>Примечание к товару</td>";
    echo "</tr>";

    foreach ($xml->Items->children() as $items) {
        echo "<tr>";
        echo "<td>$count</td>";
        echo "<td>{$items->attributes()}</td>";
        echo "<td>{$items->ProductName}</td>";
        echo "<td>{$items->Quantity}</td>";
        echo "<td>{$items->USPrice}</td>";
        echo "<td>{$items->children()[3]}</td>";
        $count++;

        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";

    $array_prices = $xml->xpath('//USPrice');
    $sum = 0;

    foreach ($array_prices as $price) {
        $sum += (float)$price;
    }

    echo "<b>К оплате:</b> $ {$sum}<br>";
}

function task2()
{
    $array = [[["one", "two", "three"]], ["four", "five"]];
    $json = json_encode($array);
    $json_after = null;

    file_put_contents("output.json", $json);
    $data = file_get_contents("output.json");

    $switcher = rand(1, 2);

    if ($switcher === 1) {
        $temp = json_decode($data);
        array_push($temp, ["six", "seven"]);
        $json_after = json_encode($temp);
        file_put_contents("output2.json", $json_after);
    } else {
        file_put_contents("output2.json", $data);
    }

    $arr1 = json_decode(file_get_contents('output.json'), true);
    $arr2 = json_decode(file_get_contents('output2.json'), true);

    echo '<pre>';
    var_dump(array_diff_assoc($arr2, $arr1));
    echo '</pre><br>';
}

function task3()
{
    $arr_rand = [];

    for ($i = 0; $i < 60; $i++) {
        array_push($arr_rand, rand(1, 100));
    }

    $fp = fopen('file.csv', 'r+');
    fputcsv($fp, $arr_rand, ";");
    fclose($fp);

    $fp = fopen('file.csv', "r");
    $data = fgetcsv($fp, 0, ";");
    $summ = array_sum($data);
    fclose($fp);

    echo "Сумма чисел в массиве равна: $summ<br>";
}

function task4()
{
    $url = "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json";
    $jsoncc = json_decode(file_get_contents($url), true);

    echo "{$jsoncc['query']['pages']['15580374']['pageid']} <br>";
    echo "{$jsoncc['query']['pages']['15580374']['title']} <br>";
}