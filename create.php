<?php


$new_data = ($_POST);

//formatdata($new_data);

var_dump($new_data);

$existing_data = json_decode ( file_get_contents('data/Bakery_data.json'));

$existing_data = objecttoarray($existing_data);

var_dump($existing_data);



//function formatdata(array &$data)






	function objecttoarray(stdClass $obj) : array
	{
		$obj = (array) $obj; 

        foreach ($obj as $key => &$value) {

        	if( gettype ($value) =='object')
        	{
        	$value = objectToArray($value); 
            }
        }


        return $obj;
	}





?>