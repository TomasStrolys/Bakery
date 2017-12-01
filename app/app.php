<?php



@include_once('database.php');

$query = '';
$query ='SELECT * FROM `bakery_products_history` ORDER BY `date`';
$product_history = db_query($query);


$query = 'SELECT * FROM `bakery_products`';
$products= db_query($query);

//$data = json_decode(file_get_contents('data/Bakery_data.json'), true);

//var_dump($data);

@include_once('View/data-table.php');

