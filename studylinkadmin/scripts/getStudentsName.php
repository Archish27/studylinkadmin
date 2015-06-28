<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
sec_session_start();

$sem = strval($_GET['sem']);
$branch = strval($_GET['branch']);

if($branch=="")
{
	$sql="select * from students";
	$result = mysqli_query($mysqli,$sql);
}
else if($branch<>"")
{
	$sql="select * from students as s where s.branch='".$branch."'";
	$result = mysqli_query($mysqli,$sql);
}
echo"<option value=\"\"></option>";
while($row = mysqli_fetch_array($result))
  {
		echo"<option value=\"".$row['name']."\">".$row['name']."</option>";
  }
  
mysqli_close($mysqli);
?>