<?php
require_once 'base_classes.php';

class Monitor extends Goods implements IMonitor {

    const GOOD_TYPE = 'Монитор';
    const INCH_CENT = 2.54;

    private $diagonal;
    private $typeMatrix;

    public function __construct(int $article,
                                string $name,
                                float $price,
                                float $weight,
                                float $diagonal,
                                string $typeMatrix
    )
    {
        $this->diagonal = $diagonal;
        $this->typeMatrix = $typeMatrix;

        parent::__construct($article, $name, $price, $weight);
    }

    public function getDiagonalInch()
    {
        return $this->diagonal;
    }

    public function getDiagonalCent()
    {
        return $this->diagonal * self::INCH_CENT;
    }

    public function getTypeMatrix()
    {
        return $this->typeMatrix;
    }

    public function getFullName()
    {
        return self::GOOD_TYPE . ' ' . $this->name;
    }

    public function getFullInfo() {
        $properties = [
            "Артикул" => $this->article,
            "Диагональ" => $this->diagonal,
            "Тип матрицы" => $this->typeMatrix,
            "Вес" => $this->weight,
            "Цена" => $this->price
        ];

        echo $this->getFullName () . PHP_EOL;

        foreach ($properties as $key => $property) {
            echo "{$key} :  {$property}" . PHP_EOL;
        }


    }

}

class Headset extends Goods implements IHeadset {

    const GOOD_TYPE = 'Наушники';

    private $maxVolume;
    private $typeHeadset;


    public function __construct(int $article,
                                string $name,
                                float $price,
                                float $weight,
                                int $maxVolume,
                                string $typeHeadset
    )
    {
        $this->maxVolume = $maxVolume;
        $this->typeHeadset = $typeHeadset;

        parent::__construct($article, $name, $price, $weight);
    }

    public function getMaxVolume()
    {
        return $this->maxVolume;
    }

    public function getTypeHeadset()
    {
       return $this->typeHeadset;
    }

    public function getFullName()
    {
        return self::GOOD_TYPE . ' ' . $this->name;
    }

    public function getFullInfo() {
        $properties = [
            "Артикул" => $this->article,
            "Максимальная громкость" => $this->maxVolume,
            "Тип наушников" => $this->typeHeadset,
            "Вес" => $this->weight,
            "Цена" => $this->price
        ];

        echo $this->getFullName () . PHP_EOL;

        foreach ($properties as $key => $property) {
            echo "{$key} :  {$property}" . PHP_EOL;
        }


    }


}