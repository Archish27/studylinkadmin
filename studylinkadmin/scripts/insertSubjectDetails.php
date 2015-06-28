<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
 
sec_session_start();

//Accepting input from html and initializing variables
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$stud_name = $_POST['stud_name'];

$subject = $_POST['subject'];
$total_fees = $_POST['fees'];
$discount = $_POST['discount'];

$discount_description = $_POST['discount_description'];
$grand_total = $_POST['grand_total'];

$count = count($subject);
$date = date('Y-m-d');

/******************************************************************************************************************
*****************************************GETTING 'sid'*************************************************************
*******************************************************************************************************************/

$result = mysqli_query($mysqli, "SELECT sid FROM students where name='".$stud_name."' and branch='".$branch."'");
$row = mysqli_fetch_array($result);
$sid = $row['sid'];


/******************************************************************************************************************
*****************************************SETTING 'enroll_id'*******************************************************
*******************************************************************************************************************/

$result = mysqli_query($mysqli, "SELECT max(enroll_id) as e_id FROM semester");
$row = mysqli_fetch_array($result);
if(is_null($row['e_id']))
{
	$enroll_id=1;
}
else
{	
	$enroll_id = $row['e_id'] + 1;
}


/******************************************************************************************************************
*****************************************INSERTING DATA INTO ENROLLS TABLE****************************************
*******************************************************************************************************************/

if ($insert_stmt = $mysqli->prepare("INSERT INTO enrolls VALUES (?, ?)")) 
{
	for($i=0;$i<$count;$i++)
	{
		$insert_stmt->bind_param('ds', $enroll_id, $subject[$i]);
		if (! $insert_stmt->execute()) 
		{
			header('Location: ../error.php?err=Registration failure: enrolls');
		}
	}
}


/******************************************************************************************************************
*****************************************INSERTING DATA INTO SEMESTER TABLE****************************************
*******************************************************************************************************************/

if ($insert_stmt = $mysqli->prepare("INSERT INTO semester VALUES (?, ?, ?)")) 
{
	echo $sid;
	$insert_stmt->bind_param('ddd', $enroll_id, $sid, $sem);
	// Execute the prepared query.
	if (! $insert_stmt->execute()) 
	{
		//header('Location: ../error.php?err=Registration failure: SEMESTER');
	}
}

/******************************************************************************************************************
*****************************************INSERTING DATA INTO FEES TABLE********************************************
*******************************************************************************************************************/

if ($insert_stmt = $mysqli->prepare("INSERT INTO fees VALUES (?, ?, ?, ?, ?)")) 
{
	$insert_stmt->bind_param('dssss', $enroll_id, $total_fees, $date, $discount, $discount_description);
	// Execute the prepared query.
	if (! $insert_stmt->execute()) 
	{
		header('Location: ../error.php?err=Registration failure: Fees');
	}
}




