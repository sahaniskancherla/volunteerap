<?php
$q = intval($_GET['q']);
include "connect.php";
mysqli_select_db($conn,"volunteerap");
$sql="SELECT * FROM `institutes` WHERE type = '".$q."'";
$result = mysqli_query($conn,$sql);
echo '<select style="width:100%;" class="form-control" name="institute" id="institute" required>';
echo '<option value="" disabled selected>Select an option</option>';
while($row = mysqli_fetch_array($result)) {
	echo '<option value="'.$row[0].'">'.strtoupper($row[0]).'</option>';
}
echo '</select>';
mysqli_close($conn);
?>