<?php 

$email=$_POST["loginemail"];
$pass=$_POST["password"];

$servername="localhost";
$username="root";
$password="";
$dbname="interior";

$con=mysqli_connect($servername,$username,$password,$dbname);

if (!$con) {
echo "connetion error" . mysqli_connect_error();
}

$sql="SELECT * FROM `admin` WHERE `username`= '$username' AND `password`='$password'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
   
        header("Location:adminpage.html");
      
}
else{
    header("Location:Error.html");
}
mysqli_close($conn);
?>