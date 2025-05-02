<?php 

	include 'include/conn.php';

	$id=$_GET['id'];

	$del=mysqli_query($conn,"DELETE FROM add_emp WHERE emp_id=$id");

		if ($del)
		{
			echo "Deleted";
			header('location:emp_list.php');
		}
		else
		{
			echo "Failed";
		}

?>