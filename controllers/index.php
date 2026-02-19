<?php

$products = [
    [
        'name'=> 'Rice',
        'price' => 1.00,
        'amount' => 1,
    ],
    [
        'name'=> 'Broccoli',
        'price' => 0.99,
        'amount' => 2,
    ],
    [
        'name'=> 'Coockies',
        'price' => 1.20,
        'amount' => 4,
    ],
    [
        'name'=> 'Nuts',
        'price' => 2.99,
        'amount' => 0,
    ],
];

function subTotal($price, $amount) {
    $subtotal = $price * $amount;
    return $subtotal;
}

function total($total, $product) {
    $total += subTotal($product['price'], $product['amount']);
    return $total;
}

require './views/index.view.php';