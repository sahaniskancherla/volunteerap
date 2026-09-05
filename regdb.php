<?php
include "connect.php";
$first_name = $_POST["first_name1"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$profession = $_POST["profession"];
$toteach = $_POST["toteach"];
$toteach2 = $_POST["toteach"];
$institute = $_POST["institute"];
$topic = $_POST["topic"];
$checkin = $_POST["ddate"];
$checkout = $_POST["ddate1"];
$checktime = $_POST["ttime"];
$email1 = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$description = $_POST["description"];

$query = "INSERT INTO `registration`(`firstname`, `lastname`, `gender`, `profession`, `toteach`, `institute`, `topic`, `checkin`, `checkout`,`email`, `phonenumber`, `description`, `checktime`) VALUES ('$first_name','$last_name','$gender','$profession','$toteach','$institute','$topic','$checkin','$checkout','$email1','$phonenumber','$description','$checktime')";
mysqli_query($conn,$query);
$query = "SELECT `name` FROM `institutetype` WHERE type='$toteach'";
	$table = mysqli_query($conn,$query);
	$toteach = mysqli_fetch_row($table);
	$toteach = $toteach[0];
if($gender == 0)
	$gender = "Male";
else
	$gender = "Female";
include "send_email.php";
header('Location: final.php');
?>