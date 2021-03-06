<?php
require_once 'intefaces.php';

abstract class Human implements IHuman
{
    private $height;
    private $weight;
    protected $name;
    protected $lastName;

    public function getWeight() {
        return $this->weight;
    }

    /**
     * @return mixed
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getFullName() {
        return "{$this -> name} {$this -> lastName}";
    }


    /**
     * @param $properties
     * @param $type
     * @return string
     */
    protected function lineOutput($properties, $type)
    {
        $str = '';
        foreach ($this -> $properties as $property) {
            $str .= "{$type}: $property" . PHP_EOL;
        }
        return $str;
    }
    
//    abstract public function getProfession();

    /**
     * Human constructor.
     * @param $name
     * @param $lastName
     * @param $height
     * @param $weight
     */
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

    /**
     * @var array
     */
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


    public function add(IProfessional $human) {
        $this -> population[spl_object_id($human)] = $human;
    }
    public function remove(IProfessional $human) {
//        $objectId = spl_object_id($human);

        if (array_key_exists(spl_object_id($human), $this -> population)) {
            unset ($this -> population[spl_object_id($human)]);
        }
    }
    public function getFullInfo (IProfessional $human) {
        return "Полное имя: {$human -> getFullName()} Вес: {$human -> getWeight()} Рост: {$human -> getHeight()}" .  '<br>' . PHP_EOL;
    }

    public function getFullInfoAboutAllPopulation() {

        echo "Количество членов популяции = " . count($this->population) . "<br>" . PHP_EOL;

        foreach ($this -> population as $human) {
            echo $this -> getFullInfo($human);
        }
    }

}
