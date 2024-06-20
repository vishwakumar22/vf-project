<?php 

$id = $_GET["id"];

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "interior";

$conn = mysqli_connect($servername,$username,$password,$dbname);


$sql = "DELETE FROM projects WHERE id = $id";


if (mysqli_query($conn,$sql)) {
    header("Location:adminpage.php");
} else {
    echo "Something went wrong";
}



?>