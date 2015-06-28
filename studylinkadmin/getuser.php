
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
$q = strval($_GET['q']);
//$con = mysqli_connect('localhost','himanshu','natkhat','studylinkadmin');
/*if (!$con)
{
  die('Could not connect: ' . mysqli_error($con));
}*/
//mysqli_select_db($con,"study link");
$sql="SELECT * FROM ".$q;
$result = mysqli_query($mysqli, $sql);
while($row = mysqli_fetch_array($result))
  {
		
		echo"<label>";
		echo"<input type=\"checkbox\" name=\"subject[]\" id=\"subject\" value=\"" .$row['Subject_Name'] ."\" data-title=\"".$row['Subject_Name'] ."\" onclick=\"getfees()\"/>" .$row['Subject_Name'];
		echo"</label>";
		echo "<input type=\"text\" class=\"form-control\" value=\"".$row['Subject_Fees']."\" disabled name=\"fees\">";
  }
  echo"</div>";
echo"<div id=form_payment_error></div>";
echo"</div>";
mysqli_close($con);
?>