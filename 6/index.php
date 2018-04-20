<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}
echo Car::$countCar;
echo '<br>';
$car1 = new Car('чёрный', 4, 180, 'volvo');
echo Car::$countCar;
echo '<br>';
$car2 = new Car('белый', 4, 180,'bmw');

echo Car::getCount();

echo $car1->getCarInfo();
echo $car2->getCarInfo();

echo $car1->get_PrototypeInfo();

echo Car::TEST_CAR_SPEED;

echo Car::class;

//echo $car1::Test();