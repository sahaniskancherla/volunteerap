<?php

    if(!isset($_SESSION)) 
    { 
        session_start();
    } 
	
	if((isset($_POST['email'])) && (isset($_POST['password'])))
	{
		include 'connect.php';
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$table = mysqli_query($conn,"SELECT * from logins where email='$email' and password='$password'");
		$rows = mysqli_num_rows($table);
		
		if($rows==0){
			
			
		$email = $_POST['email'];
		
		$password = md5($_POST["password"]);
		$table = mysqli_query($conn,"SELECT * from signup where email='$email' and password='$password'");
		$rows = mysqli_num_rows($table);
		
			if($rows==0){
				session_destroy();
				header('Location:index.php?id=-1');
			}
			else
			{	$res=mysqli_fetch_array($table);
				$_SESSION['uemail']=$email;
				header('Location:user.php');
			}
		}
		else
		{	$res=mysqli_fetch_array($table);
			$k=$res['checkbit'];
			
			$_SESSION['bit']=$k;
			if($k==1){
			header('Location:owner.php');
			$_SESSION['email']=$email;
			}
			else{
				header('Location:institute.php');
				$_SESSION['iemail']=$email;
			}
		}
	}
	else if(!isset($_SESSION['email']) && !isset($_SESSION['uemail']) && !isset($_SESSION['iemail']))
	{
		header('Location: index.php?id=-2');
	}
?>