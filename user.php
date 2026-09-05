<!DOCTYPE html>
<html lang="en">
  <?php include "head_section.php"; ?>
  <?php  include "connect.php";?>
   <?php include "user_session.php";
 ?>
  <style>
    select:required:invalid {
    color: #999;
    }
    option[value=””][disabled] {
    display: none;
    }
    option {
    color: #000;
    }
		button{

	   cursor: pointer;
    width: 40%;
    height: 42px;
    margin-top: 30px;
    padding: 0px;
    background: #eb4141;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: 0;
    -moz-box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    -webkit-box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    box-shadow: 0 15px 30px 0 rgba(255,255,255,.1) inset;
    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
    font-size: 32px;
    font-weight: 400;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0,0,0,.1);
    -o-transition: all .2s;
    -moz-transition: all .2s;
    -webkit-transition: all .2s;
    -ms-transition: all .2s;
	
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 50px;
    text-align:center;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>
  
  <body>
<?php include "usernav.php"; ?>
 <?php
	include "connect.php";
	$email = $_SESSION['uemail'];
	$query = "SELECT * FROM `signup` WHERE `email`='$email'";
	$table = mysqli_query($conn,$query);
	$row = mysqli_fetch_row($table);
	$firstname = strtoupper($row[0]);
	$lastname = strtoupper($row[1]);
	if($row[2]==0)
		$gender = "MALE";
	else
		$gender = "FEMALE";
	$profession = strtoupper($row[3]);
	$phonenumber = $row[6];
	$about = ucwords($row[7]);
?>

<div class="container" align="center">
        <div class="row" >
            <div class="box" >
                <div class="col-md-15" >
				<hr>
				<!-- Here replcae user with username from session-->
  			    <div class='hd'>USER PROFILE</div>
				<hr>
				<br>
				
				 <div class="row" align="center">
				 <table>
				 <tr>
				 <td><font size="4%">FIRST NAME:</font></td><td><font size="4%"><b><?php echo $firstname;?></b></font></td>
				 </tr>
				 <tr>
				 <td><font size="4%">LAST NAME:</font></td><td><font size="4%"><b><?php echo $lastname;?></b></font></td>
				 </tr>
				 <tr>
				 <td><font size="4%">GENDER:</font></td><td><font size="4%"><b><?php echo $gender;?></b></font></td>
				 </tr>
				 <tr>
				 <td><font size="4%">PROFESSION:</font></td><td><font size="4%"><b><?php echo $profession;?></b></font></td>
				 </tr>
				 <tr>
				 <td><font size="4%">EMAIL:</font></td><td><font size="4%"><b><?php echo $email;?></b></font></td>
				 </tr>
				 <tr>
				 <td><font size="4%">PHONE NUMBER:</font></td><td><font size="4%"><b><?php echo $phonenumber;?></b></font></td>
				 </tr>
				 <tr>
				 <td><font size="4%">ABOUT:</font></td><td><font size="4%"><b><?php echo $about;?></b></font></td>
				 </tr>
				 </table>
				</div>
				</div>
			</div>
		</div>			
</div>
<?php include "footer.php"; ?>
	
</body>

</html>
