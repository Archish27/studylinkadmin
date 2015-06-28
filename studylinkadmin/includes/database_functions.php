<?php

function selectTable($branch, $sem)
{
	if ($sem=="1")
	{
		$table="sem1";
	}
	else if($sem == "2" && ($branch=="CO" || $branch=="CM" || $branch == "IF"))
	{
		$table="sem2comps";
	}
	else if($sem == "2" && ($branch=="EJ" || $branch=="EX" || $branch == "EV" || $branch=="IE"))
	{
		$table="sem2elec";
	}
	else if($sem == "3" && ($branch=="CO" || $branch=="CM" || $branch == "IF"))
	{
		$table="sem3comps";
	}
	else if($sem == "3" && ($branch=="EJ" || $branch=="EX" || $branch == "EV" || $branch=="IE"))
	{
		$table="sem3elec";
	}
	else if($sem == "4" && ($branch=="CO" || $branch=="CM"))
	{
		$table="sem4comps";
	}
	else if($sem == "4" && $branch == "IF")
	{
		$table="sem4it";
	}
	else if($sem == "4" && ($branch=="EJ" || $branch=="EX" || $branch == "EV" || $branch=="IE"))
	{
		$table="sem4elec";
	}
	else if($sem == "5" && $branch=="CO")
	{
		$table="sem5co";
	}
	else if($sem == "5" && $branch=="CM")
	{
		$table="sem5cm";
	}
	else if($sem == "5" && $branch == "IF")
	{
		$table="sem5it";
	}
	else if($sem == "5" && ($branch=="EJ" || $branch=="EX" || $branch == "EV" || $branch=="IE"))
	{
		$table="sem5elec";
	}
	else if($sem == "6" && $branch=="CO")
	{
		$table="sem6co";
	}
	else if($sem == "6" && $branch == "IF")
	{
		$table="sem6it";
	}
	else if($sem == "6" && $branch == "CM")
	{
		$table="sem6cm";
	}
	else if($sem == "6" && ($branch=="EJ" || $branch=="EX" || $branch == "EV" || $branch=="IE"))
	{
		$table="sem6elec";
	}
	return($table);
}

?>