<div>
    <h2>Домашнее задание к уроку №5</h2>
    <hr>
    <?
    echo "<h3>Основное задание</h3><hr>";
    echo '<br>' . 'Таблица умножения через while: ' . '<br><br>';
    $row = 1;
    echo '<table border="1">';
    while ($row <= 10) {
        echo '<tr>';
        $col = 1;
        while ($col <= 10) {
            // $result = $row * $col;
            echo "<td> $row * $col = ".$row * $col."</td>";
            $col++;
        }
        echo '</tr>';
        $row++;
    }
    echo '</table><br>';


    echo '<br>' . 'Таблица умножения через for: ' . '<br><br>';
    echo '<table border="1">';

    for ($row = 1; $row <= 10 ; $row++) {
        echo '<tr>';
        for ($col = 1; $col <= 10 ; $col++) {
            echo "<td> $row * $col = ".$row * $col."</td>";
        }
        echo '</tr>';
    }

    echo '</table><br>';

    echo "Выход из бесконечного цикл через goto: <br><br>";
    $i = 1;
    $res = 1;
    for (; ;) {
        $res = $i * $i;
        echo 'Число ' . $i . ' в квадрате =  ' . $res .'<br>';
        if ($res >= 100) goto end;
        $i++;
    }
    end:
    echo "<h4><i>Цикл завершен, Ваше величество!</i></h4>";


    echo "<h3>Дополнительное задание</h3><hr>";
    
    function isSimple($num) {
        if ($num < 2) return false;
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    };
    
    function simpleArr($n = 100) {
        $result = [];
        for ($i = 2; $i < $n; $i++) {
            if (isSimple($i)) $result[] = $i;
        }
        return $result;
    };

    $simpleArr = simpleArr();

    echo "<h4><i>А вот и массив простых чисел:</i></h4>";

    foreach ($simpleArr as $key => $value) {
        echo $value . ' - это простое число № ' . ($key+1) . '<br>';
    }

    ?>
</div>
