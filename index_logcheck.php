<?php 
if(!isset($_SESSION)) 
    { 
        session_start();
    } 
	if(isset($_SESSION['uemail']))
	{
			header('Location: user.php');
	}
    if( isset($_SESSION['iemail']))
	{
			header('Location: institute.php');
	}
	if(isset($_SESSION['email']))
	{
		header('Location: owner.php');
	}

?>