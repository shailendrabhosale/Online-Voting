<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "pblvoting";

$conn = mysqli_connect($server , $username, $password, $database);
if (!$conn)
{

    die("Error". mysql_connect_error());
}
?>