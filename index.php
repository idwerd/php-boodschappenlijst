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

$subtotals = array();
function subTotal($price, $amount) {
    $subtotal = $price * $amount;
    //array_push($subtotals, $subtotal);
    return $subtotal;
}

function total($subtotalsArr) {
    $total;
    array_reduce($subtotalsArr, );
}

require "index.view.php";