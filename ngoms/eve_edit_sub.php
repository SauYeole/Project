<?php

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
		$eve_id=$_POST['eve_id'];
		$event_name=$_POST['event_name'];
		$evnt_desc=$_POST['evnt_desc'];
		$event_coord=$_POST['event_coord'];
		$coord_mob=$_POST['coord_mob'];
		$evnt_addre=$_POST['evnt_addre'];
		$evnt_fund=$_POST['evnt_fund'];
		$evnt_day=$_POST['evnt_day'];
		$evnt_mnth=$_POST['evnt_mnth'];
		$evnt_yr=$_POST['evnt_yr'];

		$upd=mysql_query("UPDATE add_eve SET event_name='$event_name',evnt_desc='$evnt_desc',event_coord='$event_coord',coord_mob='$coord_mob',evnt_addre='$evnt_addre',evnt_fund='$evnt_fund',evnt_day='$evnt_day',evnt_mnth='$evnt_mnth',evnt_yr='$evnt_yr' WHERE eve_id='$eve_id'");

		if ($upd)
		{
			header('location:eve_list.php');
		}
		else
		{
			echo "Failed";
		}

	}
	else
	{
		echo "Failed";
	}

?>