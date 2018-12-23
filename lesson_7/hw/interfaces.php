<?php

interface IGood {
    public function getPrice();
    public function getPriceExclVAT();
    public function setDiscount($discount);
    public function getFullName();
}

interface IMonitor {
    public function getDiagonalInch();
    public function getDiagonalCent();
    public function getTypeMatrix();
    public function getFullInfo();
}

interface IHeadset {
    public function getMaxVolume();
    public function getTypeHeadset();
    public function getFullInfo();

}