<?php

$host="localhost";
$user="root";
$pass= "";
$db="deneme_database";


$conn=mysqli_connect($host,$user,$pass,$db);
if ($conn->connect_error) {
    echo"Failed to connect DB". $conn->connect_error;
}

?>