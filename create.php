<?php


$new_data = ($_POST);

//formatdata($new_data);

//var_dump($new_data);

$existing_data = json_decode ( file_get_contents('data/Bakery_data.json'));

$existing_data = objecttoarray($existing_data);

update_data($existing_data, $new_data);

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

function update_data(&$existing_data, $new_data)
{
    if (isset($existing_data[ $new_data ['Data']]))
    {
        if (isset($existing_data[ $new_data ['product']]))
        {
            echo "error (date alredy exist";
        }
        else
        {
            echo "Create Product Record";
            //create product Record
        }
    }
    else
    {
    	echo "Create Data, Create Product Record";
        //create Data
        //create product Record

    }

}



?>