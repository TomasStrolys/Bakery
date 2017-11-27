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
	return $conn;
}

function db_query (string $query)
{
	$conn = db_connect();

	$result =$conn->query($query);

	$conn -> close();

	return $result; 
}



$query = "SELECT * FROM `bakery_products`";

$result = db_query($query);
foreach ($result as $key => $value) 
{
	print_r($value);
}


//print_r(db_query($query));

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if (!$conn)
// {
// 	die(" could not connected");
// }


// $result = $conn -> query('SHOW TABLES');

// // print_r($conn);

// foreach ($result as $key => $value) 
// {
// 	print_r($value);
// }



