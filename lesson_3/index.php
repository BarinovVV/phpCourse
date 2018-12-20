<div>
    <h2>Домашнее задание к уроку №3</h2>
    <hr>
    <?
    echo "<h3>Основное задание</h3><hr>";
    function myFunc ($a, $b, $c = 100) {

        $result[1] = $a + $b + $c;
        $result[2] = $a - $b;
        $result[3] = $result[1] / $result[2];
        $result[4] = $result[3] * $c;

        return $result;
    }
    echo "<pre>";
    print_r (myFunc(100, 50));
    echo "</pre>" . "<br>";

    echo "<h3>Дополнительное задание</h3><hr>";

    function checkYear($year) {
        return ($year%4 == 0 && $year%100 != 0 || $year%400 == 0);
    };
    //для проверки хитрый год
    $year = 1700;

    $msg = (checkYear($year)) ?  "високосный" :  "не високосный";
    echo "Введенный год $year - " . $msg;

    ?>
</div>
