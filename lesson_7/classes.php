<?php
require_once './base_classes.php';

class Scientist extends Human {

    private $invents =[];

    public function __construct($name, $lastName, $height, $weight, array $invents = [])
    {
        foreach ($invents as $invent) {
            if ($invent instanceof Invent) {
                $this->invents[] = $invent;
            }
        }
        parent::__construct($name, $lastName, $height, $weight);
    }

    public function inventTechnology () {
        //logic
    }

    public function getFullName() {
        return "Scientist {$this -> name} {$this -> lastName}";
    }
}

class Layer extends Human {

    private $contracts =[];

    public function __construct($name, $lastName, $height, $weight, array $contracts = [])
    {
        foreach ($contracts as $contract) {
            if ($contract instanceof Contract) {
                $this->contracts[] = $contract;
            }
        }
        parent::__construct($name, $lastName, $height, $weight);
    }

    public function makeContract () {
        //logic
    }

    public function getFullName() {
        return "Layer {$this -> name} {$this -> lastName}";
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






