  <?php
   include "connect.php";
   $bool = 1;
   if(isset($_POST['name']))
   {
	   $name = $_POST['name'];
	   $email = $_POST['email'];
	   $instituetype = $_POST['instituetype'];
	   $phonenumber = $_POST["phonenumber"];
	   $location = $_POST['location'];
	   $query = "SELECT `type`, `email` FROM `institutes` WHERE `email`='$email' and `type`='$instituetype'";
	   $table = mysqli_query($conn,$query);
	   $rowcount = mysqli_num_rows($table);
	   if($rowcount==0)
	   {
		   $query = "INSERT INTO `institutes`(`name`, `type`, `email`, `location` ,`phonenumber`) VALUES ('$name','$instituetype','$email','$location','$phonenumber')";
		   mysqli_query($conn,$query);
		   $password = md5($_POST['password']);
		   $query = "INSERT INTO `logins`(`email`, `password`, `checkbit`) VALUES ('$email','$password','0')";
		   mysqli_query($conn,$query);
		   header("Location: owner.php?set=1");
		   exit();
	   }
	   else
	   {
		   header("Location: owner.php?set=0");
		   exit();
	   }
		header("Location: owner.php?set=1");
		exit();
   }
   ?>