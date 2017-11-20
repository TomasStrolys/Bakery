<?php

$data = json_decode(file_get_contents('data/Bakery_data.json'), true);

//var_dump($data);

@include_once('View/data-table.php');

