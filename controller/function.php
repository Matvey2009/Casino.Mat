<?php
    //Генерируем рандомное число
    $sector = "Сделайте свой ход";
    if (array_key_exists('bet', $_POST)){
        $sector = rand(0, 36);
        $connect = new PDO("sqlite:$db");
        $sql = "UPDATE `Roulette` SET stat = stat+1 WHERE sector = $sector";
        $connect -> exec($sql);
        $connect = null;
    }

    //Обнуление статистики
    if (array_key_exists('reset', $_POST)){
        $connect = new PDO("sqlite:$db");
        $sql = "UPDATE `Roulette` SET stat = 0";
        $connect -> exec($sql);
        $connect = null;
    }

    //Вывод статистики
    function statistic($db) {
        $connect = new PDO("sqlite:$db");
        $sql = " SELECT sector, stat FROM `Roulette`";
        $result = $connect -> query($sql);
        $arr = [];
        foreach ($result as $row)
            $arr[$row['sector']] = $row['stat'];
        ksort($arr);
        echo '<div class="row">';
        foreach ($arr as $key => $element) {
            echo '<div class="col">';
                echo "<div>$key</div>";
                echo "<div>$element</div>";
            echo "</div>";
        }
        echo "</div>";
        $connect = null;
    }