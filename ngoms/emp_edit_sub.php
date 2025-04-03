<?php 

	include 'include/conn.php';

	if (isset($_POST['save']))
	{
		$emp_id=$_POST['emp_id'];
		$full_name=$_POST['full_name'];
		$emp_addr=$_POST['emp_addr'];
		$emp_mob=$_POST['emp_mob'];
		$emp_email=$_POST['emp_email'];
		$emp_dob=$_POST['emp_dob'];
		$emp_desi=$_POST['emp_desi'];
		$emp_sal=$_POST['emp_sal'];
		$emp_doj=$_POST['emp_doj'];

		$update=mysql_query("UPDATE add_emp SET full_name='$full_name',emp_addr='$emp_addr',emp_mob='$emp_mob',emp_email='$emp_email',emp_dob='$emp_dob',emp_desi='$emp_desi',emp_sal='$emp_sal',emp_doj='$emp_doj' WHERE emp_id='$emp_id'");

		if ($update)
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