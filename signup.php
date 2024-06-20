<?php 


$email=$_POST["signupemail"];
$pass=$_POST["signuppass1"];
$confirmpass=$_POST["signuppass2"];

$servername="localhost";
$username="root";
$password="";
$dbname="interior";


$con=mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    echo "database not connected". mysqli_connect_error();
}


$sql="INSERT INTO `users` (`id`, `email`, `pass`, `confirmpass`) VALUES (NULL, '$email', '$pass', '$confirmpass')";


if(mysqli_query($con,$sql)){
    header("Location:login.html");
}
else{
    header("Location:Error.html");
}


mysqli_close($conn);


?>