<?php

require_once 'Warehouse.php';

$warehouse = new Warehouse();

$warehouse->name = "Main stock";

$warehouse->addCrate('Pandoras box');

var_dump($warehouse);

$warehouse->addCrate('Venus balls');

var_dump($warehouse);