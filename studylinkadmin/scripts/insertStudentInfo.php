<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
 
sec_session_start();

//Accepting input from html and initializing variables

$stud_name = $_POST['stud_name'];
$dob = $_POST['stud_dob'];

$stud_dob = new DateTime($dob);

$stud_address = $_POST['stud_address'];
$stud_email = $_POST['stud_email'];
$stud_number = $_POST['stud_number'];
$college_name = $_POST['college_name'];
$branch = $_POST['branch'];

$father_name = $_POST['father_name'];
$father_number = $_POST['father_number'];
$father_email = $_POST['father_email'];
$mother_name = $_POST['mother_name'];
$mother_number = $_POST['mother_number'];
$mother_email = $_POST['mother_email'];
echo "dob".$stud_dob->format('Y-m-d');

/******************************************************************************************************************
*****************************************SETTING 'sid'*************************************************************
*******************************************************************************************************************/

$result = mysqli_query($mysqli, "SELECT max(sid) as id FROM students");
$row = mysqli_fetch_array($result);
if(is_null($row['id']))
{
	$sid=1;
}
else
{	
	$sid=$row['id'] + 1;
}



/******************************************************************************************************************
*****************************************INSERTING DATA INTO STUDENTS TABLE****************************************
*******************************************************************************************************************/

if ($insert_stmt = $mysqli->prepare("INSERT INTO students VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) 
{
	$insert_stmt->bind_param('dsssssssssssss', $sid, $stud_name, $stud_dob->format('Y-m-d'), $stud_address, $stud_number, $stud_email, $father_name, $father_number, $father_email, $mother_name, $mother_number, $mother_email, $branch, $college_name);
	// Execute the prepared query.
	if (! $insert_stmt->execute()) 
	{
		header('Location: ../error.php?err=Registration failure: Students');
	}
}



/******************************************************************************************************************
********************************************UPLOAD STUDENT's PHOTO*************************************************
*******************************************************************************************************************/

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES['stud_pic']["name"]);
$extension = end($temp);
if ((($_FILES['stud_pic']["type"] == "image/gif")|| ($_FILES['stud_pic']["type"] == "image/jpeg")|| ($_FILES['stud_pic']["type"] == "image/jpg")|| ($_FILES['stud_pic']["type"] == "image/pjpeg")|| ($_FILES['stud_pic']["type"] == "image/x-png")|| ($_FILES['stud_pic']["type"] == "image/png")))
{
	$_FILES['stud_pic']["name"]=$sid.".".$extension;
	if ($_FILES["stud_pic"]["error"] > 0)
	{
		echo "Return Code: " . $_FILES["stud_pic"]["error"] . "<br>";
	}
	else
	{
		echo "Upload: " . $_FILES["stud_pic"]["name"] . "<br>";
		echo "Type: " . $_FILES["stud_pic"]["type"] . "<br>";
		echo "Size: " . ($_FILES["stud_pic"]["size"] / 1024) . " kB<br>";
		echo "Temp file: " . $_FILES["stud_pic"]["tmp_name"] . "<br>";
		
		if (file_exists("../upload/" . $_FILES["stud_pic"]["name"]))
		{
			echo $_FILES["stud_pic"]["name"] . " already exists. ";
		}
		else
		{
			move_uploaded_file($_FILES["stud_pic"]["tmp_name"],
			"../upload/" . $_FILES["stud_pic"]["name"]);
			echo "Stored in: " . "../upload/" . $_FILES["stud_pic"]["name"];
		}
	}
}
else
{
	define('DIRECTORY', '../upload');
	$content = file_get_contents("http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image");
	file_put_contents(DIRECTORY.'/'.$sid.'.jpg', $content);
}
header("Location: ../index.php?q=SuccessStudent");

?>