<?php
//connect.php
$server = '127.0.0.1';
$username   = 'root';
$password   = '123456';
$database   = 'php';
 
$con = mysqli_connect($server, $username, $password, $database);
if(!mysqli_connect($server, $username,  $password))
{
    exit('Error: could not establish database connection');
}
if(!mysqli_select_db($con, $database))
{
    exit('Error: could not select the database');
}

?>