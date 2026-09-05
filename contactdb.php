<?php
if(isset($_POST["name"]))
{
$name = $_POST["name"];
$institute = $_POST["institute"];
$institutetype = $_POST["institutetype"];
$email1 = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$message = $_POST["message"];
$reason = $_POST["reason"];
if($reason==1)
	$reason = "Request for Postpond";
else
	if($reason==2)
		$reason = "Request for Residence";
	else
		if($reason==3)
			$reason = "Request for Transport";
			else
				$reason = "Others";
include "send_email1.php";
header('Location: final.php');
}
else
header('Location: contact.php');
?>