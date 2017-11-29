<?php






function db_connect ()

{
	$servername = 'localhost';
    $username ='root';
    $password = '';
    $dbname = 'ts_bakery';
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn)
	{
		die("could not connect");
	}

	$conn->set_charset("utf8mb4");
	return $conn;
}

function db_query (string $query)
{
	$conn = db_connect();

	$result =$conn->query($query);

	$conn -> close();

	return $result; 
}



// $query = "SELECT `id`,`name` FROM `bakery_products` ORDER BY `name` ASC";

// $result = db_query($query);
// foreach ($result as $key => $value) 
// {
// 	//print_r($value);
// }

function db_insertQuery(string $tableName, array $data)
{
     $keys = $values = '';
       foreach ($data as $key => $value) 
       {
       	$keys .= "`$key`, ";
       	$values .= "'$value',"; 
       }


       $keys = rtrim($keys, ", ");
       $values = rtrim($values, ", ");

     $query = "INSERT INTO `$tableName` ($keys) VALUES ($values)";
     //print_r($query);

     
     die ($query);
 }
//                    `date`, 
//                    `initial`,
//                    `produced`, 
//                    `sold`,  
//                    `damaged`, 
//                    `closed`, 
//                    `product_id`) VALUES (" .
//                    $new_data['date'] . "," .
//                    $new_data['initial'] . "," .
//                    $new_data['produced'] . "," .
//                    $new_data['sold'] . "," .
//                    $new_data['damaged'] . "," .
//                    $new_data['closed'] . "," .
//                    $new_data['product_id'] . ")";

//                    die ($query);

//                     $query = "INSERT INTO `bakery_products_history` (
//                    `date`, 
//                    `initial`,
//                    `produced`, 
//                    `sold`,  
//                    `damaged`, 
//                    `closed`, 
//                    `product_id`) VALUES (" .
//                    $new_data['date'] . "," .
//                    $new_data['initial'] . "," .
//                    $new_data['produced'] . "," .
//                    $new_data['sold'] . "," .
//                    $new_data['damaged'] . "," .
//                    $new_data['closed'] . "," .
//                    $new_data['product_id'] . ")";

//                    die ($query);
// }


// //print_r(db_query($query));

// // $conn = mysqli_connect($servername, $username, $password, $dbname);

// // if (!$conn)
// // {
// // 	die(" could not connected");
// // }


// // $result = $conn -> query('SHOW TABLES');

// // // print_r($conn);

// // foreach ($result as $key => $value) 
// // {
// // 	print_r($value);
// // }



