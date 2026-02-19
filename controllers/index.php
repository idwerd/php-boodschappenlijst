<?php

require 'Database.php';
$config = require('config.php');
$db = new Database($config['database']);
$products = $db->query("select * from groceries")->fetchAll();

function subTotal($price, $quantity) {
    $subtotal = $price * $quantity;
    return $subtotal;
}

function total($total, $product) {
    $total += subTotal($product['price'], $product['quantity']);
    return $total;
}

require './views/index.view.php';