<?php
include "connect.php";
$first_name = $_POST["first_name1"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$profession = $_POST["profession"];
$email1 = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$description = $_POST["description"];
$password = md5($_POST["password1"]);
$query = "INSERT INTO `signup`(`firstname`, `lastname`, `gender`, `profession`, `email`, `password`, `phonenumber`, `description`) VALUES ('$first_name','$last_name','$gender','$profession','$email1','$password','$phonenumber','$description')";
mysqli_query($conn,$query);
header('Location: finalsignup.php');
?>