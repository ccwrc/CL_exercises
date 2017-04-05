<?php

require_once 'Car.php';
require_once 'Workshop.php';

$car1 = new Car();
$car1->go(110);
$car1->stop();

$car2 = new Car();
$car3 = new Car();

$workshop = new Workshop();
$workshop->addCar($car1);
$workshop->addCar($car2);
$workshop->addCar($car3);

echo "<br/><br/><br/>countable";
var_dump(count($workshop));

echo "array acces";
$workshop[5] = new Car();
var_dump($workshop[2]);

echo "v d wsp";
var_dump($workshop);

echo "json ser";
var_dump(serialize($workshop));
