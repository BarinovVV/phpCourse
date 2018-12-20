<?
    require_once './classes.php';

    $invent = new Invent('Колесо');
    $invent2 = new Invent('Колесо');
    $contract = new Contract('Аренда');
    $contract2 = new Contract('Аренда');

    $scientist = new Scientist('Валерий', 'Баринов', 175, 78, [$invent, $invent2]);
    $layer = new Layer('Иван', 'Иванов', 177,77, [$contract, $contract2]);
//    $human3 = new Human('Петр', 'Петров', 150, 90);
//    $human4 = new Human('Вася', 'Васечкин', 190, 95);

    $contract = $layer->makeContract();
    $technology = $scientist->inventTechnology();

    echo $layer->getFullName().PHP_EOL;
    echo $scientist->getFullName().PHP_EOL;

    $nation = new Nation();
    $nation -> add($scientist);
    $nation -> add($layer);
//    $nation -> add($human3);
//    $nation -> add($human4);


    echo $nation -> getFullInfoAboutAllPopulation();
//    $nation->remove($human2);
//    //$nation->remove($human4);
//    echo $nation -> getFullInfoAboutAllPopulation();


//    echo "<h3>Дополнительное задание</h3><hr>";


