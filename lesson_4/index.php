<div>
    <h2>Домашнее задание к уроку № 4</h2>
    <hr>
    <?
    echo "<h3>Основное задание</h3><hr>";
    echo "<i>Пункт 1:</i> <br><br>";
    $var = 0;
    $var +=20;
    echo $var . '<br>';
    $var *=2;
    echo $var . '<br>';
    $var -=4;
    echo "$var <br>";
    $var /=9;
    echo "$var <br>";
    $var *=$var;
    echo "$var <br>";
    $var %=7;
    echo "$var <br><br>";
    echo "<i>Пункт 2:</i> <br><br>";

    $str = 'Я обожаю';
    $str .= ' изучать';
    $str .= ' PHP!';
    echo "<strong>$str</strong>";

    echo "<h3>Дополнительное задание</h3><hr>";

    $difference = [
        'Действия:' => 'GET - только получает, а POST отправляет',
        'Кеширование:' => 'GET - да, POST - нет',
        'Ограничение длины данных:' => 'GET - 255 символов, POST - до 2 M',
        'Видимость в адресной строке:' => 'GET - да, POST - нет',
        'Тип данных:' => 'GET - только символы, POST - любые в том числе файлы'
        ];

    echo "Основные отличия запросов GET и POST " . "<br>";
    echo "<pre>";
    print_r($difference);
    echo "</pre>" . "<br>";
    echo "Форма через метод GET <br>";
    ?>
    <form method="GET">
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="text" name="surname" placeholder="Ваша фамилия">
        <input type="text" name="age" placeholder="Ваш возраст">
        <button type="submit">ОК</button>
    </form>
    <?
    echo "Привет! Меня зовут " . $_GET['name'] . ' ' . $_GET['surname'] . '! И мне ' . $_GET['age'] . ' лет.';
    echo "<br><br>Форма через метод POST <br>";
    ?>
    <form method="POST">
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="text" name="surname" placeholder="Ваша фамилия">
        <input type="text" name="age" placeholder="Ваш возраст">
        <button type="submit">ОК</button>
    </form>
    <?
    echo "Привет! Меня зовут " . $_POST['name'] . ' ' . $_POST['surname'] . '! И мне ' . $_POST['age'] . ' лет.';
    ?>

</div>
