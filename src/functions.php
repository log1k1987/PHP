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

    echo "<table style=text-align:center border=1>";
    echo "<tr>";
    echo "<td>№</td>";
    echo "<td>Партийный номер</td>";
    echo "<td>Наименование</td>";
    echo "<td>Количество</td>";
    echo "<td>Цена в $</td>";
    echo "<td>Примечание к товару</td>";
    echo "</tr>";

    $count = 1;

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
        file_put_contents("output2.json", json_encode($temp));
    } else {
        file_put_contents("output2.json", $data);
    }

    $arr1 = json_decode(file_get_contents('output.json'), true);
    $arr2 = json_decode(file_get_contents('output2.json'), true);
    $result = array_diff_assoc($arr2, $arr1);

    if (!empty($result)) {
        echo '<pre>';
        var_dump($result);
        echo '</pre><br>';
    } else {
        echo 'Данные в файлах идентичны<br>';
    }
}

function task3()
{
    $arr_rand = [];

    function even($num)
    {
        return (($num % 2) == 0);
    }

    for ($i = 0; $i < 60; $i++) {
        array_push($arr_rand, rand(1, 100));
    }

    $fp = fopen('file.csv', 'w+');
    fputcsv($fp, $arr_rand, ";");
    fclose($fp);

    $fp = fopen('file.csv', "r");
    $data = fgetcsv($fp, 0, ";");
    $arr_even = array_filter($data, "even");
    $summ = array_sum($arr_even);
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