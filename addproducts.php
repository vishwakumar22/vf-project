<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'interior';

$name=$_POST["name"];
$img=$_FILES['img']['name'];
$desc=$_POST["description"];

$target_directory = "img/";
$tflie = $target_directory.basename($_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'],$tflie);

$conn = mysqli_connect($servername,$username,$password,$dbname);



$sql = "INSERT INTO `projects`(`id`, `project_name`, `project_images`, `project_desc`) VALUES (NULL,'$name','$img','$desc')";




if (mysqli_query($conn,$sql)) {

    header("Location:adminpage.php");

    # code...

} else {

    # code...

    echo "not inserted";

}

?>