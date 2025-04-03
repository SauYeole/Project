<?php 

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
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

		$insert=mysql_query("INSERT INTO add_vol(vol_name,vol_add,vol_contact,vol_occu,vol_intr_wrk,doj_day,doj_month,doj_yr,dob_day,dob_month,dob_yr) VALUES('$vol_name','$vol_add','$vol_contact','$vol_occu','$vol_intr_wrk','$doj_day','$doj_month','$doj_yr','$dob_day','$dob_month','$dob_yr')");

		if ($insert)
		{
			header('location:vol_list.php');
		}
		else
		{
			echo "Failed";
		}
	}
	else
	{
		echo "not clicked";
	}
?>