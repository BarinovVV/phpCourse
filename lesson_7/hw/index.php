<?php
require_once 'classes.php';

$monitor1 = new Monitor(100000, 'Samsung', 11800, 2.5, 25, 'TFT');
$monitor2 = new Monitor(100001, 'Philips', 10000, 3.5, 27, 'IPS');

$headset1 = new Headset(200000, 'Sony', 2000, 0.3, 300, 'проводные');

//echo var_dump($monitor1).PHP_EOL;
//echo var_dump($monitor2).PHP_EOL;
//echo $monitor1->setDiscount(10).PHP_EOL;
//echo $monitor1->getPrice().PHP_EOL;
//echo $monitor1->getPriceExclVAT().PHP_EOL;
//echo $monitor1->getFullName().PHP_EOL;

$monitor1->getFullInfo().PHP_EOL;
$headset1->getFullInfo().PHP_EOL;

