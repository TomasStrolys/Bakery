<?php


namespace app\model;


class CoreModel
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'ts_bakery';
    private $conn;

    private function connect()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, 3307);

        if (!$this->conn) {
            die("could not connect");
        }

        $this->conn->set_charset("utf8mb4");

    }

    protected function query(string $query)
    {
        $this->connect();

        $result = $this->conn->query($query);


        if ($result) {
            $this->conn->close();
            return $result;

        }
        print_r($this->conn);
        $this->conn->close();
        die();
    }



// $query = "SELECT `id`,`name` FROM `bakery_products` ORDER BY `name` ASC";

// $result = db_query($query);
// foreach ($result as $key => $value)
// {
// 	//print_r($value);
// }

    protected function generateQuery(string $tableName, array $data, bool $uuid = false): string
    {
        if ($uuid)
            $data['id'] = uniqid();


        $keys = $values = '';
        foreach ($data as $key => $value) {
            $keys .= "`$key`, ";
            $values .= "'$value',";
        }


        $keys = rtrim($keys, ", ");
        $values = rtrim($values, ", ");

        $query = "INSERT INTO `$tableName` ($keys) VALUES ($values)";
        //print_r($query);


        return $query;
    }
}