<?php

require 'functions.php';
require 'router.php';
require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);

$groceries = $db->query("select * from groceries")->fetchAll();

dd($groceries);

