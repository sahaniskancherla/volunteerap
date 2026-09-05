 <?php include "log_check.php";
    if(isset($_SESSION['uemail']))
	{
			header('Location: user.php');
	}
    if(isset($_SESSION['email']))
	{
		header('Location: owner.php');
	}
	


 ?>