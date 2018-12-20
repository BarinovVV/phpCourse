<?
    require_once './classes.php';

    $scientist = new Scientist('Валерий', 'Баринов', 175, 78);
    $layer = new Layer('Иван', 'Иванов', 177,77);
//    $human3 = new Human('Петр', 'Петров', 150, 90);
//    $human4 = new Human('Вася', 'Васечкин', 190, 95);

    $contract = $layer->makeContract();
    $technology = $scientist->inventTechnology();

    echo $layer->getFullName();

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


