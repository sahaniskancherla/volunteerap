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
				  <?php
						include "connect.php";
						$email=$_SESSION['uemail'];
						$query = "SELECT * FROM `registration` WHERE `email`='$email' order by `time` DESC";
						$table = mysqli_query($conn,$query);
						while($row = mysqli_fetch_row($table))
						{
							echo '<tr>
									<td><font size="4%">'.$row[5].'</font></td><td><font size="4%">'.$row[6].'</font></td><td><font size="4%">'.$row[8].'</font></td>
								  </tr>';
						}
					?>
				 </table>
				</div>
				</div>
			</div>
		</div>			
</div>		
<?php include "footer.php"; ?>
	
</body>

</html>
