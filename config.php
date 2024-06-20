<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="interior";


$con=mysqli_connect($servername,$username,$password,$dbname);

if (!$con) {
    echo "database not connected". mysqli_connect_error();
}

?>