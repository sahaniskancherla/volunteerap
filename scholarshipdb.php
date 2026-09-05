<?php
include "connect.php";
if(isset($_POST["title"]))
{
$title = $_POST["title"];
$message = $_POST["message"];
$href = $_POST["link"];
if($href=="")
	$href="#";
$query = "INSERT INTO `scholarship`(`title`, `href`, `message`) VALUES ('$title','$href','$message')";
$table = mysqli_query($conn,$query);
}
header('Location: addscholarship.php?set=1');
?>