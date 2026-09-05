 <?php include "log_check.php";
   if(isset($_SESSION['iemail']))
	{
		header('Location: institute.php');
	}
    if(isset($_SESSION['email']))
	{
		header('Location: owner.php');
	}

 ?>