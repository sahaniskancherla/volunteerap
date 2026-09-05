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
		padding: 10px;
		text-align: right;
		border-bottom: 1px solid #ddd;
	}
	</style>
	<body>

	<?php 
	if(isset($_SESSION['uemail']))
		include "usernav.php";
	else
		include "nav.php"; 
	?>

		<div class="container">
			<div class="row">
				<div class="box">
					<div class="col-md-15">
					
						<h3 class="intro-text text-center">Select An
							<strong>Institute Type </strong>
							Here
						</h3>
						<hr>		
				<table align="center">
				<tr><td><a href="schools.php"><h4>SCHOOLS & JUNIOR COLLEGES</h4></a></td><td><a href="colleges.php"><h4>UG & PG COLLEGES</h4></a></td></tr>
				</table>
				<hr>
                </div>

            </div>
        </div>


    </div>

    </div>
    <!-- /.container -->

<?php include "footer.php"; ?>
	
</body>

</html>
