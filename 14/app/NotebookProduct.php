<?php

namespace app;

use wfm\interfaces\IGadget;
use wfm\Product;
use wfm\traits\TColor;

class NotebookProduct extends Product implements IGadget
{
    use TColor;
    public $cpu;
    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getCase()
    {
        // TODO: Implement getCase() method.
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function addProduct($name, $price)
    {

    }
}