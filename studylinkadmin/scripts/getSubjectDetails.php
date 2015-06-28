<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
include_once '../includes/database_functions.php';

sec_session_start();

$sem = strval($_GET['sem']);
$branch = strval($_GET['branch']);
$table = selectTable($branch, $sem);
$sql="SELECT * FROM ".$table;
$result = mysqli_query($mysqli, $sql);


while($row = mysqli_fetch_array($result))
  {
		
		echo"<label>";
		echo"<input type=\"checkbox\" name=\"subject[]\" id=\"subject[]\" value=\"" .$row['Subject_Name'] ."\" data-title=\"".$row['Subject_Name'] ."\" onclick=\"getfees()\"/>" .$row['Subject_Name'];
		echo"</label>";
		echo "<input type=\"text\" class=\"form-control\" value=\"".$row['Subject_Fees']."\" disabled name=\"fees\">";
  }
  echo"</div>";
echo"<div id=form_payment_error></div>";
echo"</div>";
?>