<?php

use classes\BookProduct;
use classes\NotebookProduct;
use classes\Product;
use classes\interfaces\I3D;
use classes\interfaces\IGadget;

error_reporting(-1);
/*require_once 'app/Product.php';
require_once 'app/I3D.php';
require_once 'app/IGadget.php';
require_once 'app/NotebookProduct.php';
require_once 'app/BookProduct.php';*/

function autoloader1($class)
{
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . "/{$class}.php";
    if(file_exists($file)){
        require_once $file;
    }

}

/*function autoloader2($class)
{
    $file = __DIR__ . "/app/interfaces/{$class}.php";
    if(file_exists($file)){
        require_once $file;
    }

}*/

spl_autoload_register('autoloader1');
//spl_autoload_register('autoloader2', true, true);

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(IGadget $product)
{
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкетёра', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

//var_dump($notebook instanceof IGadget);

offerCase($notebook);
//offerCase($book);

debug($book);

echo $book->getProduct();

class A{};
class B extends A{};
class C{};

$a = new A;
$b = new B;
$c = new C;

var_dump($b instanceof A);