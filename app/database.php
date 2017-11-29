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


	if ($result)
	{
	    $conn -> close(); 
	   return $result;
	  
	}
	print_r($conn);
    $conn -> close();
	die();
}



// $query = "SELECT `id`,`name` FROM `bakery_products` ORDER BY `name` ASC";

// $result = db_query($query);
// foreach ($result as $key => $value) 
// {
// 	//print_r($value);
// }

function db_insertQuery(string $tableName, array $data, bool $uuid = false ) : string
{
     if ($uuid)
     	$data['id']=uniqid();


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

     
     return $query;
 }



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



