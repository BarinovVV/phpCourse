<?php

interface IGood {
    public function getPrice();
    public function getPriceExclVAT();
    public function setDiscount($discount);
    public function getFullName();
    public function getFullInfo();
}

interface IMonitor {
    public function getDiagonalInch();
    public function getDiagonalCent();
    public function getTypeMatrix();
}

interface IHeadset {
    public function getMaxVolume();
    public function getTypeHeadset();
}