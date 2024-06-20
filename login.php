<?php 
session_start();

$email=$_POST["loginemail"];
$pass=$_POST["loginpass"];




include_once('config.php');

$sql="SELECT * FROM `users` WHERE `email` ='$email' AND `confirmpass`='$pass'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
   
   
    header("Location:index.html");
    $_SESSION["loginemail"]=$email;
    $_SESSION["loginpass"]=$pass;
    
    
      
}
else{
    header("Location:Error.html");
}
mysqli_close($conn);
?>