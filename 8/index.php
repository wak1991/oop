<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$book = new BookProduct('Три мушкетёра', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

debug($book);
debug($notebook);

echo $book->getProduct();
echo $notebook->getProduct();