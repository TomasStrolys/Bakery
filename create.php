<?php


$new_data = ($_POST);

//formatdata($new_data);

//var_dump($new_data);

$existing_data = json_decode ( file_get_contents('data/Bakery_data.json'));

$existing_data = objecttoarray($existing_data);

update_data($existing_data, $new_data);

echo (json_encode($existing_data));

file_put_contents ('data/Bakery_data.json', json_encode($existing_data) );


//print_r($existing_data);

//var_dump($existing_data);



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
    //print_r($existing_data);
    //print_r($new_data);
    //print_r($new_data['product']);

    if (isset($existing_data[ $new_data ['Data']]))
    {
        if (isset($existing_data[ $new_data ['Data']][ $new_data['product']] ))
        {
            echo "error (data already exist)";
        }
        else
        {
            echo "Create Product Record";
            createnewproduct();

        //     $existing_data[$new_data['date']][$new_data['product']] = [
        //     $new_data["VL"],
        //     $new_data["PG"],
        //     $new_data["PR"],
        //     $new_data["SG"],
        //     $new_data["GL"]
        // ];

            //create product Record
        }
    }
    else
    {
    	echo "Create Data, Create Product Record";
        $existing_data[$new_data['Data']] = [];
        $existing_data = createnewproduct($existing_data, $new_data);
        // echo "create product";
        //   $existing_data[$new_data['date']][$new_data['product']] = [
        //     $new_data["VL"],
        //     $new_data["PG"],
        //     $new_data["PR"],
        //     $new_data["SG"],
        //     $new_data["GL"]
        // ];
       // print_r($existing_data);


    }

}

//print_r($existing_data);

function createnewproduct($existing_data, $new_data)
{
    //print_r($existing_data);
    //print_r($new_data);

    $existing_data[$new_data['Data']][$new_data['product']] = [
            (int) $new_data["Vl"],
            (int) $new_data["PG"],
            (int) $new_data["PR"],
            (int) $new_data["SG"],
            (int) $new_data["GL"]
        ]; 

    return $existing_data;
}
//$existing_data = createdate($existing_data, $new_data['date']);

//function createdate ($existing_data, $date)
//{
 //   return  $existing_data[$date] = [];
//}



?>