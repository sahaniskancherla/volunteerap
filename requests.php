<?php
if(isset($_GET['tableid']))
{
	include "connect.php";
	$tableid = $_GET['tableid'];
	$key = $_GET['key'];
	$query = "UPDATE `registration` SET `accepted`=$key where `tableid` = $tableid";
	echo $query;
	mysqli_query($conn,$query);
	if($_GET['page']==1 && $key == 1)
	{
		$query = "SELECT * FROM  `registration` WHERE `tableid` = $tableid";
		$table = mysqli_query($conn,$query);
		$row = mysqli_fetch_row($table);
		$firstname = strtoupper($row[0]);
		$lastname = strtoupper($row[1]);
		$toteach = $row[4];
		$institute = $row[5];
		$topic = $row[6];
		$query1 = "SELECT `name` FROM `institutetype` WHERE type='$toteach'";
		$table1 = mysqli_query($conn,$query1);
		$toteach = mysqli_fetch_row($table1);
		$toteach = $toteach[0];
		$checkin = $row[7];
		$checkout = $row[8];
		$email = $row[9];
		$phonenumber = $row[10];
		$checktime = $row[15];
		include "send_email2.php";
	}
	mysqli_close($conn);
	if($_GET['page']==2)
		header('Location: confirm.php');
	else
		header('Location: institute.php');
}
?>