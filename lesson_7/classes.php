<?php
require_once './base_classes.php';

class Scientist extends Human implements IProfessional
{

    private $invents =[];

    const WORK_TYPE = 'Технология';
    const PROFESSION = 'Ученый';

    public function __construct($name, $lastName, $height, $weight, array $invents = [])
    {
        foreach ($invents as $invent) {
            if ($invent instanceof Invent) {
                $this->invents[] = $invent;
            }
        }
        parent::__construct($name, $lastName, $height, $weight);
    }

    public function listInvents()
    {
        echo parent::lineOutput($this->invents, self::WORK_TYPE);
    }

    public function inventTechnology () {
        //logic
    }

//    public function getFullName() {
//        $profession = self::PROFESSION;
//        return "{$profession} {$this -> name} {$this -> lastName}";
//    }

    public function getProfession()
    {
        $profession = self::PROFESSION;
        echo "{$profession} {$this->getFullName()}";

    }
}

class Layer extends Human implements IProfessional
{

    private $contracts =[];

    const WORK_TYPE = 'Контракт';
    const PROFESSION = 'Юрист';



    public function __construct($name, $lastName, $height, $weight, array $contracts = [])
    {
        foreach ($contracts as $contract) {
            if ($contract instanceof Contract) {
                $this->contracts[] = $contract;
            }
        }
        parent::__construct($name, $lastName, $height, $weight);
    }

    public function listContracts()
    {
        echo parent::lineOutput($this->contracts, self::WORK_TYPE);
    }

    public function makeContract () {
        //logic
    }

//    public function getFullName() {
//        $profession = self::PROFESSION;
//        return "{$profession} {$this -> name} {$this -> lastName}";
//    }

    public function getProfession()
    {
        $profession = self::PROFESSION;
        echo "{$profession} {$this->getFullName()}";

    }
}

class Invent {

    protected $title;

    public function __construct($title){
        $this->title = $title;
    }
}

class Contract {

    protected $title;

    public function __construct($title){
        $this->title = $title;
    }
}






