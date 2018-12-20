<?php
class Human {
    private $height;
    private $weight;
    protected $name;
    protected $lastName;

    public function getWeight() {
        return $this->weight;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getFullName() {
        return "{$this -> name} {$this -> lastName}";
    }

    public function __construct($name, $lastName, $height, $weight) {
        if (!is_string($name)) die('Неверное имя!');
        $this -> name = $name;
        $this -> lastName = $lastName;
        $this -> height= $height;
        $this -> weight= $weight;
        Nation::increasePopulation();
    }
    public function __destruct() {
        Nation::decreasePopulation();
    }

}

class Nation {
    private $population = [];

    private static $allPopulation = 0;
    public static function increasePopulation() {
        self::$allPopulation += 1;
    }

    public static function decreasePopulation() {
        self::$allPopulation -= 1;
    }
    public static function getPopulation() {
        return self::$allPopulation;
    }


    public function add(Human $human) {
        $this -> population[spl_object_id($human)] = $human;
    }
    public function remove(Human $human) {
//        $objectId = spl_object_id($human);

        if (array_key_exists(spl_object_id($human), $this -> population)) {
            unset ($this -> population[spl_object_id($human)]);
        }
    }
    public function getFullInfo (Human $human) {
        return "Полное имя: {$human -> getFullName()} Вес: {$human -> getWeight()} Рост: {$human -> getHeight()}" .  '<br>' . PHP_EOL;
    }

    public function getFullInfoAboutAllPopulation() {

        echo "Количество членов популяции = " . count($this->population) . "<br>" . PHP_EOL;

        foreach ($this -> population as $human) {
            echo $this -> getFullInfo($human);
        }
    }

}
