<?php


$new_data = ($_POST);

// TODO:
// Check if all parameters are provided. 

//formatdata($new_data);

//var_dump($new_data);

$existing_data = json_decode ( file_get_contents('data/Bakery_data.json'));

//print_r($new_data);
$existing_data = objecttoarray($existing_data);

if ($new_data['Data'] == "" 
     or $new_data["Vl"] == ""  
     or $new_data["PG"] ==""  
     or $new_data["PR"] == '' 
     or $new_data["SG"] == '' 
     or $new_data["GL"] == '' 
     or $new_data["product"] == '' )
            
 {
     echo "<h3>Prašome užpildyti visus langelius</h3>";
 }
 if ($new_data["PG"] + $new_data[ "Vl"] < $new_data["GL"]
       or $new_data["PG"] + $new_data[ "Vl"] < $new_data["PR"]
       or $new_data["Vl"] + $new_data["PG"] - $new_data["PR"] - $new_data["SG"] != 
       $new_data["GL"])
 {
     echo "<h3>Klaidingai suvesti duomenys</h3>";
 }
 else
{
update_data($existing_data, $new_data);
}

//echo (json_encode($existing_data));

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
            echo "Created Product Record";
            $existing_data = createnewproduct($existing_data, $new_data);

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
    	echo "Created Data, Created Product Record";
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