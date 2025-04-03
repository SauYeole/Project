<?php 

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
		$full_name=$_POST['full_name'];
		$emp_addr=$_POST['emp_addr'];
		$emp_mob=$_POST['emp_mob'];
		$emp_email=$_POST['emp_email'];
		$emp_dob=$_POST['emp_dob'];
		$emp_desi=$_POST['emp_desi'];
		$emp_sal=$_POST['emp_sal'];
		$emp_doj=$_POST['emp_doj'];

		$ins=mysql_query("INSERT INTO add_emp(full_name,emp_addr,emp_mob,emp_email,emp_dob,emp_desi,emp_sal,emp_doj) VALUES('$full_name','$emp_addr','$emp_mob','$emp_email','$emp_dob','$emp_desi','$emp_sal','$emp_doj')");

		if ($ins)
		{
			header('location:emp_list.php');
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