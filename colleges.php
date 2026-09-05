<!DOCTYPE html>
<html lang="en">

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

th, td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
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

<?php 
	if(isset($_SESSION['uemail']))
		include "usernav.php";
	else
		include "nav.php"; 
	?>
<?php include "connect.php"; ?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-md-15">
  			    
                    <h2 class="intro-text text-center">SElect An
                        <strong>Institute </strong>
						Here
                    </h2>
					<hr>
					<form name="myform" action="register.php" onSubmit="return validate();" method="get">
					<label >SEARCH FOR INSTITUTE IN BHIMAVARAM</label>
                                <input type="text" list="college_names" id="college" name="college" style="width:100%;" class="form-control">
									<datalist id="college_names">
									<?php
									$query = "SELECT * FROM `institutes` where `type` not in (0,1) ORDER BY `name`";
									$table = mysqli_query($conn,$query);
									while($row = mysqli_fetch_row($table))
									{
										echo '<option value="'.strtoupper($row[0]).'">';
									}
									?>
									</datalist> 
				<button class="button" style="float: right;">Register</button>
				<br>
				<br>
				
				<table align="center">
				<?php
					$query = "SELECT * FROM `institutes` where `type` not in (0,1) ORDER BY `name`";
					$table = mysqli_query($conn,$query);
					while($row = mysqli_fetch_row($table))
					{
						echo '<tr><td ><a href="register.php?college='.$row[0].'">'.strtoupper($row[0]).'<hr></a></td> <td >'.$row[3].'<hr></td></tr>';
					}
				?>
				</table>
					
					</form>
					
				</div>
            </div>
        </div>


    </div>

    </div>
    <!-- /.container -->

<script>
function validate()
{
	var name = document.getElementById('college').value;
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
				