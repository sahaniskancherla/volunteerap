<!DOCTYPE html>
<html lang="en">
<?php include "institute_session.php";?> 
<?php include "head_section.php"; 
 if(!isset($_SESSION)) 
    { 
        session_start();
    } 
	?>
<style>
table {
    border-collapse: collapse;
    width: 75%;
}

th, td{
    padding: 15px;
    text-align: left;
    border-bottom: 10px solid #ddd;
}

.button {
    background-color: #4CAF50; /* Green */
    border: 1px;
    color: white;
	margin-top: 10px;
	margin-right: 15px;
    padding: 7px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
<body>

<?php include "int_nav.php";?>
<?php include "connect.php"; ?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-md-15">
										<!--change this when you add session-->
					<?php
					$query = "SELECT `name` FROM `institutes` WHERE upper(`email`) = '".strtoupper($_SESSION['iemail'])."'";
					$table = mysqli_query($conn,$query);
					$institute_name = mysqli_fetch_row($table);
					$institute_name = $institute_name[0];
					?>
                    <h2 class="intro-text text-center"><strong><?php echo $institute_name;?> </strong></h2>
					<hr>					
			
				<table align="center" style="margin-left: 20%;">
				<?php
					$query = "SELECT * FROM  `registration` WHERE upper(`institute`) = '".strtoupper($institute_name)."'and `accepted` = 0 ORDER BY `time`";
					$table = mysqli_query($conn,$query);
					while($row = mysqli_fetch_row($table))
					{
						$firstname = strtoupper($row[0]);
						$lastname = strtoupper($row[1]);
						$profession = strtoupper($row[3]);
						
						$toteach = $row[4];
						$query1 = "SELECT `name` FROM `institutetype` WHERE type='$toteach'";
						$table1 = mysqli_query($conn,$query1);
						$toteach = mysqli_fetch_row($table1);
						$toteach = $toteach[0];
						
						$topic = strtoupper($row[6]);
						$checkin = $row[7];
						$checkout = $row[8];
						$email = $row[9];
						$phonenumber = $row[10];
						$description = (ucwords($row[11]));
						$description = wordwrap($description, 30, "<br>");
							if($row[2]==0)
								$gender = "MALE";
							else
								$gender = "FEMALE";
						$tableid = $row[13];
						echo '<tr id='.$tableid.'><td>
						
						<table>
						<tr>
						<td><b>FIRST NAME: </b></td><td><b>'.$firstname.'</b></td></tr>
						<tr>
						<td><b>LAST NAME: </b></td><td><b>'.$lastname.'</b></td></tr>
						<tr>
						<td><b>PROFESSION: </b></td><td><b>'.$profession.'</b></td></tr>
						<tr>
						<td><b>TO TEACH: </b></td><td><b>'.$toteach.'</b></td></tr>
						<tr>
						<td><b>TOPIC: </b></td><td><b>'.$topic.'</b></td></tr>
						<tr>
						<td><b>CEHCK IN: </b></td><td><b>'.$checkin.'</b></td></tr>
						<tr>
						<td><b>CHECK OUT: </b></td><td><b>'.$checkout.'</b></td></tr>
						<tr>
						<td><b>EMAIL: </b></td><td><b>'.$email.'</b></td></tr>
						<tr>
						<td><b>Ph. NUMBER: </b></td><td><b>'.$phonenumber.'</b></td></tr>
						<tr>
						<td><b>DESCRIPTION: </b></td><td><b>'.$description.'</b></td></tr>
						</table>
						<hr>
						</td><td><br><br><b><a href="requests.php?tableid='.$tableid.'&key=1&page=1"><font size="3px" color="#228B22">ACCEPT</a></font></b><br><br><b><a href="requests.php?tableid='.$tableid.'&key=-1&page=1"><font size="3px" color="	#8B0000">REJECT</a></font></b></td></tr>';
					}
				?>	
				</table>
				
				</div>

            </div>
        </div>


    </div>

    </div>
    <!-- /.container -->

<script>
function validate()
{
	var name = document.getElementById('school').value;
	if(name.length ==0)
	{
		return false;
	}
	else
	return true;
}
</script>
	
<?php include "footer.php"; ?>
	
</body>

</html>
				