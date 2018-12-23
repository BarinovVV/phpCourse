<?php
require_once 'base_classes.php';

class Monitor extends Goods implements IMonitor {

    const TYPE_MONITOR = 'Мониторы';
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
        // TODO: Implement getDiagonalInch() method.
    }

    public function getDiagonalCent()
    {
        // TODO: Implement getDiagonalCent() method.
    }

    public function getTypeMatrix()
    {
        // TODO: Implement getTypeMatrix() method.
    }

}

class Headset extends Goods implements IHeadset {

    const TYPE_HEADSET = 'Наушники';

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
        // TODO: Implement getMaxVolume() method.
    }

    public function getTypeHeadset()
    {
        // TODO: Implement getTypeHeadset() method.
    }


}