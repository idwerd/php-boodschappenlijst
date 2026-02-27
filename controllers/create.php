<?php
require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    
    if(! Validator::string($_POST['name'], 1, 100)) {
        $errors['name'] = 'The name should be between 1 and 100 characters';
    }

    if(! Validator::integer($_POST['quantity'], 1)) {
        $errors['quantity'] = 'The quantity should be at least one';
    }

    if(! Validator::decimal($_POST['price'], 0.01, 1000)) {
        $errors['price'] = 'The price should be between 0,01 and 1000,00';
    }

    if(empty($errors)) {
        $db->query('INSERT INTO groceries(name, quantity, price) VALUES(:name, :quantity, :price)', [
            'name' => $_POST['name'],
            'quantity' => $_POST['quantity'],
            'price' => $_POST['price']
        ]);
        header('Location: /', true, 303);
        die();
    }
    
}

require './views/create.view.php';