<?php

namespace app;
use wfm\interfaces\I3D;
use wfm\Product;

class BookProduct extends Product implements I3D
{
    public $numPages;

//    const TEST = 20;

    public $action1;
    public $action2;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(5);
//        var_dump(self::class);
    }

    public function test()
    {
        // TODO: Implement test() method.
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Цена без скидки: {$this->price}<br>";
        $out .= "Количество страниц: {$this->numPages}<br>";
        $out .= "Скидка: {$this->getDiscount()}%<br>";
        return $out;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function addProduct($name, $price)
    {

    }

    public  function doAction1()
    {
        echo $this->action1 = '<p>Выполни 1</p>';
        return $this;
    }

    public  function doAction2()
    {
        echo $this->action2 = '<p>Выполни 2</p>';
        return $this;
    }
}