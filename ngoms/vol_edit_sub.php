<?php

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
		$vol_id=$_POST['vol_id'];
		$vol_name=$_POST['vol_name'];
		$vol_add=$_POST['vol_add'];
		$vol_contact=$_POST['vol_contact'];
		$vol_occu=$_POST['vol_occu'];
		$vol_intr_wrk=$_POST['vol_intr_wrk'];
		$doj_day=$_POST['doj_day'];
		$doj_month=$_POST['doj_month'];
		$doj_yr=$_POST['doj_yr'];
		$dob_day=$_POST['dob_day'];
		$dob_month=$_POST['dob_month'];
		$dob_yr=$_POST['dob_yr'];

		$update=mysql_query("UPDATE add_vol SET vol_name='$vol_name',vol_add='$vol_add',vol_contact='$vol_contact',vol_occu='$vol_occu',vol_intr_wrk='$vol_intr_wrk',doj_day='$doj_day',doj_month='$doj_month',doj_yr='$doj_yr',dob_day='$dob_day',dob_month='$dob_month',dob_yr='$dob_yr' WHERE vol_id='$vol_id'");

		if ($update)
		{
			header('location:vol_list.php');
		}
		else
		{
			echo "Failed to update";
		}
	}
	else
	{
		echo "Not Clicked";
	}

?>