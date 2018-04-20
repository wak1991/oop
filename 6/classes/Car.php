<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 200;
    public $brand;

    const TEST_CAR = 'Прототип';
    const TEST_CAR_SPEED = 300;

    public static $countCar = 0;

    public function __construct($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        self::$countCar++;
    }

    public static function getCount()
    {
        return self::$countCar;
    }

    public function Test()
    {
        echo 'Hello World!';
    }

    public function getCarInfo(){
        return "<h3>О моём авто</h3>
        Марка: {$this->brand}<br>
        Цвет: {$this->color}<br>
        Кол-во колёс: {$this->wheels}<br>
        Скорость: {$this->speed}<br>";
    }

    public function get_PrototypeInfo()
    {
        return "<h3>Данные тестового авто</h3>
        Наименование: " . self::TEST_CAR ."<br>
        Скорость: " . self::TEST_CAR_SPEED ."<br>";
    }

}